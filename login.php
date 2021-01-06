<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class = "container">
    <div class="row">
    
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        <div class="login_form">
        <form>
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username or Email</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-labe l">Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<p style ="font-size: 12px; text-align: center; margin-top: 10px;"><a href="forgot-password.php" style="color: #00376b;"> forgot Password?</a></p>
<br>
<p>Don't have an account? <a href="signup.php"> Sign up</a> </p> 
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