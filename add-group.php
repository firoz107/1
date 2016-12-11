<?php
if(!isset($_SESSION))
{
	session_start();
}
$userId=$_SESSION['userId'];
if(!isset($userId))
{
	header('Location: index.php');
}
?>
<?php include 'header.php'; ?>
<?php 
require_once 'class/UserService.php';
$userService = new UserService();
$viewUsers=$userService->getUsers($userId);

?>
<?php include 'header.php'; ?>
<div class="wrapper-page">
<form action="ajax/add-group.php"  method="post">
Name: <input type="text" name="groupName" ><br>
Subject: <input type="text" name="subject"> <br>
Users: <br>
<?php foreach ($viewUsers as $user){ ?>
<input type="checkbox" name="user[]" value="<?php echo $user['id'];?>" ><?php echo $user['name']; ?> <br>
<?php } ?> <br>
<input type="submit" value="Submit" >

</form>
</div>
<?php include 'footer.php'; ?>