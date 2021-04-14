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
           <div class="col-md-6 login-right">
               <h1>Login Here</h1>
                    <form action="../functions.php" method="post">
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" name="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Id_number">Id_number</label>
                            <input type="text" name="Id_number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="Password" name="Password" class="form-control">
                        </div>
                        <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" name="LogIn" value="LogIn">
                        </div>
                    </form>
                    <p>Dont have an account? <a href="index.php">create account here</a></p>
            </div>
            <div class="col-md-6 login-left">
                <img src="../images/ages.jpg" width="620" height="400" alt="loading">
            </div>
           </div>
       </div>       
    </div>
</body>
</html>