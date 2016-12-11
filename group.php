

<html>
<head>
<?php
session_start();
include './header.php';
$userid = $_SESSION['NAME'];
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Platform</title>
</head>
 
<body>
<div class="page-header" >
        <h1>Welcome <?php echo $userid; ?>!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">logout</a> </h1>
      </div>
	  

<h3>&nbsp;&nbsp; Group Created successfully..! start conversation.</h3>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="well contact-form-container">
        <form class="form-horizontal contactform" action="" name="f" method="post">
          
		  <fieldset>
		  
			<div>
			<textarea rows="12" cols="71" readonly>
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
			</textarea>
			</div>	
			
            <div class="form-group">
              <label class="col-lg-12 control-label" for="messege">Messege:
                <input type="text" placeholder="Type your messege" id="messege" class="form-control" name="messege"><br>
				<button class="btn btn-primary" type="submit" name="send">Send</button> 
              </label>
            </div>
			
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>



</body>
<?php
include './footer.php';
?>
</html>