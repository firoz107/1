<?php include 'header.php'; ?>
<html>
<body>

<center><img src="img/logo.png" style="width:125px;height:125px;">
	<h2>Company Name</h2></center>
	
	
	<div class="container">
  <div class="row">
    <div class="col-lg-16">
      <div class="well contact-form-container">
        <center><form class="form-horizontal contactform" action="ajax/authenticate-user.php" method="post" name="loginform" onsubmit="return validateForm();">
		
          <fieldset>
            
            <div class="form-group">
              <label class="col-lg-12 control-label" for="uname">User Name:
                <input type="text" placeholder="Enter User Name" id="uname" class="form-control" name="email" required>
              </label>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Password:
                <input type="password" placeholder="Enter your Password" id="pass1" class="form-control" name="password" required>
              </label>
            </div>

            <div style="height: 10px;clear: both"></div>

            <div class="form-group">
              <div class="col-lg-10">
                <button class="btn btn-primary" type="submit" name="sub">Login</button>
				<button class="btn btn-primary" onclick="window.location.href='https://localhost/vectorx/signup.php'">Register</button>
              </div>
            </div>

          </fieldset>
        </form></center>
      </div>
    </div>
  </div>
</div>








</body>
</html>
<?php include 'footer.php';?>