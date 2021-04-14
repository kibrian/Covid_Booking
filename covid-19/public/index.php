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
