<?php
require_once 'TempleService.php';

$templeService = new TempleService();
$views=$templeService->getUsers(); ?>
<form action="add-group.php" method="post">
Name: <input type="text" required name="name"> <br>
Subject: <input type="text" required name="subject"><br>
 <?php foreach($views as $view){ 
	echo  $view['name']; ?>
	<br>
	<input type="checkbox" name="member[] value="<?php echo $view['id']; ?>" > <?php echo $view['name']; ?>
 <?php } ?>
 <br>
 <input type="Submit" value="Submit">
 </form>
