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
$addedGroups=$userService->viewAddedGroups($userId);
$joinedGroups=$userService->viewGroups();
$groupId=$_GET['groupId'];
$editGroup=$userService->viewGroupById($groupId);
?>
<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Platform</title>
</head>
 
<body>
<div class="page-header" >
        <h1>Welcome ..!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">logout</a> </h1>
      </div>
	  
<p align="center" class="style1">Login successfully </p>
<h2>&nbsp;&nbsp; Create group to start conversation.</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="well contact-form-container">
        <form class="form-horizontal contactform" action="ajax/edit-group.php?groupId=<?php echo $groupId; ?>" name="f" method="post" ">
          <fieldset>
            <div class="form-group">
              <label class="col-lg-12 control-label" for="gname">Group Name:
                <input type="text" value="<?php echo $editGroup['groupname']; ?>" placeholder="Enter Group Name" id="gname" class="form-control" name="groupName" required>
              </label>
            </div>
			
			<div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Group Subject
                <input type="Text" value="<?php echo $editGroup['subject']; ?>" placeholder="Enter Group Subject" id="groupsub" class="form-control" name="subject" required>
              </label>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" for="users">Add Users:<br>
<br>

<?php 
$userId=explode(',',$editGroup['member_id']);

foreach ($viewUsers as $user){ ?>
<input type="checkbox" name="user[]" <?php if(in_array($user['id'],$userId)) { ?> checked="checked" <?php } ?> value="<?php echo $user['id'];?>" ><?php echo $user['name']; ?> <br>
<?php }?> <br>
               
              </label>
            </div>

            <div style="height: 10px;clear: both"></div>

            <div class="form-group">
              <div class="col-lg-10">
                <button class="btn btn-primary" type="submit" name="sub">Create</button> 
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
 
    
  </div>
</div>



</body>
<?php
include 'footer.php';
?>
</html>