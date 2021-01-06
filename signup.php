<!DOCTYPE html>
<html>
<head>
    <title> Sign </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class = "container">
    <div class="row">
    <?php
    if(isset($_POST['signup']))
    {
        extract($_POST);
        if(strlen($fname)<3 )  //minimum
        {
            $error[]= 'Please enter first name using 3 characters atleast';
        }
        if(strlen($fname)>20 )  //maximum
        {
            $error[]= 'Maximum 20 character';
            if(!preg_match("/^[A-Za-z _]*[A-Za-z]+[A-Za-z _]*$/", $fname)){
                $error[] = 'Invalid Entry First Name . Please Enter letters without any Digit or special symbols like(1,2,3,#,$,%,&,*,!,~, )';
            }
        }

        if(strlen($lname)<3 ) //minimum
        {
            $error[]= 'Please enter Last name using 3 characters atleast';
        }
        if(strlen($lname)>20 )  // maximum
        {
            $error[]= 'Maximum 20 character';
            if(!preg_match("/^[A-Za-z _]*[A-Za-z]+[A-Za-z _]*$/", $lname)){
                $error[] = 'Invalid Entry First Name . Please Enter letters without any Digit or special symbols like(1,2,3,#,$,%,&,*,!,~, )';
            }
        }

        if(strlen($username)<3 ) //minimum
        {
            $error[]= 'Please enter Last name using 3 characters atleast';
        }
        if(strlen($username)>50 )  // maximum
        {
            $error[]= 'Maximum 50 character';
            if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)){
                $error[] = 'Invalid Entry for Username. Enter Lowercase letters without any space and no number at the start Eg - myusername, myuseername123';
            }
        }
    }
    ?>
        <div class="col-sm-4">
        <?php
        if(isset($error))
        {
            foreach($error as $error)
            {
                echo '<p class="errmsg">&#x26A0;'.$error.'</p>';
            }
        }
        ?>
        </div>
        <div class="col-sm-4">
        <div class="login_form">
        <form action ="" method="POST">
        <div class="form-group">
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" class="form-control" name="username" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="mb-3">
    <label class="form-labe l">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" required>
  </div>
  <button type="button" class="btn btn-primary" name="signup">SignUp</button>
</form>
<p style ="font-size: 12px; text-align: center; margin-top: 10px;"><a href="forgot-password.php" style="color: #00376b;"> forgot Password?</a></p>
<br>
<p>Have an account? <a href="login.php"> Login </a> </p> 
</div>
        
        </div>
        <div class="col-sm-4">
        </div>
    </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" >
</script>
</html>