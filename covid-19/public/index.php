<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
<style>
  /* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">BOOKING APP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <!-- <a class="nav-link" href="dashboard.php">Home</a> -->
      </li>
       <!-- <li class="nav-item">
        <a class="nav-link" href="#">Appointments</a> -->
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="dashboard.php">Add-appointment</a> -->
      </li>  
    </ul>
  </div>  
</nav>
<br>
<?php include  '../functions.php' ?>;
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
            <h2>Register Here</h2>
                <p><strong>Fill In Your Details</strong></p>
                <form action="../functions.php" method="post">
                 <!-- role selection -->
              <div class="form-group">
                <label for="role" style="padding: 5px;">Select User Role</label>
                <select  type="text" name="role" id="role" class="form-control">
                    <option></option>
                     <option value="Admin">Admin</option>
                     <option value="user">user</option>
                </select>
              </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="Username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Id_Number">Id_number</label>
                        <input type="text" name="Id_Number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="PhoneNo">PhoneNo</label>
                        <input type="text" name="PhoneNo" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <select class="custom-select custom-select-sm" name="Location">
                      <option selected>Location</option>
                      <option value="Ngong">Ngon`ng</option>
                      <option value="Rongai">Rongai</option>
                      <option value="Kitengela">Kitengela</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="Password" class="form-control" required>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="Register" value="Register">

        
                </form>
                   <p>Already have an account? <a href="login.php">Login here</a></p>  
                </div>
                <div class="col-md-6 login-right">
                    <img src="../images/10130.jpg" alt="loading" height="560" width="620">
                </div>
            </div>
       </div>
    </div>
</body>
</html>
