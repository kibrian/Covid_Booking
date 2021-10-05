<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
</head>
<style>
  /* For mobile phones: */
[class*="col-"] {
  width: 100%;
}
</style>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><img src="../images/img.jpg" height="40" width="40" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <!-- <a class="nav-link" href="index.php">Sign Up</a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard-1.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">LogOut</a>
      </li>    
    </ul>
  </div>  
</nav>


  <div class="jumbotron">
      <h1 style="text-align:center;"><?php session_start(); echo ($_SESSION['Username']) ?>!! <br> Welcome to Online Medical Services</h1>
      <p style="text-align:center;">where we will help you book for an appointment <br>with doctors from the nearest Hospital Locations <br>for <strong> COVID-19 test and vaccination</strong></p>
      <!-- <img src="" alt="loading" style="justfy-content:center;"> -->
    
  </div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="../images/000.png" height="400" width="500" alt="loading">
        </div>
        <div class="col-sm-6">
            <h5><i>COVID-19 is a serious disease that can cause severe illness and 
            even death. National authorities everywhere must do all they can to protect people
             and save lives and WHO(World Helth Organisation) stands ready to support them in the response 
             against this deadly virus.</i></h5>

                <a href="https://www.cdc.gov/vaccines/covid-19/reporting/index.html"><img src="../images/imk.png" alt="loading"></a>
                <br>
                <br>
                <br>
                <a href="appointments.php"class="btn btn-secondary">Make an appointment</a>
        </div>
    </div>  
</div>
<br>
<div class="jumbotron">
 
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left"> 
                      Dear <?php echo($_SESSION['Username']); ?> 
                        <?php 
// Dear  $_SESSION['Username'];
                        if(!empty($Id_number))
                            echo ($_SESSION['Username']); 
                         

                          if(!empty($Id_number))
                              echo($_SESSION['Id_number']) 
                         
                         ?>
                         
                          </b></h2>
                        <!-- <a href="appointments.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New appointment</a> -->
                    </div>

                   
                    <?php
                    // Include config file
                    // require_once "../connection.php";
       
                    
                    // Attempt select query execution
                    $Id_number = '';
                    if(!empty($_SESSION['Id_number']))
                      $Id_number=$_SESSION['Id_number'];
                    if(!empty($Id_number)){
                      require_once "connection.php" ;

                        $sql = "SELECT * FROM appointments where Id_number= '$Id_number'";
                        if($result = mysqli_query($conn, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                echo '<table class="table table-bordered table-striped">';
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>#</th>";
                                            echo "<th>phoneNo</th>";
                                            echo "<th>Id_number</th>";
                                            echo "<th>email</th>";
                                            echo "<th>date</th>";
                                            echo "<th>time</th>";
                                            echo "<th>location</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['phoneNo'] . "</td>";
                                            echo "<td>" . $row['Id_number'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['date'] . "</td>";
                                            echo "<td>" . $row['time'] . "</td>";
                                            echo "<td>" . $row['location'] . "</td>";
                                            // echo "<td>";
                                            //     // echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            //     // echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            //     // echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                            // echo "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";                            
                                echo "</table>";
                                
                                // Free result set
                                mysqli_free_result($result);
                            } else{
                                echo '<div class="alert alert-danger"><em>No pending appointment were found.</em></div>';
                            }
                        } else{
                            echo "Oops! Something went wrong. Please try again later.";
                        }
    
                        // Close connection
                        mysqli_close($conn);
                    }

                    ?>
                </div>
            </div>        
        </div>
    </div>
</div>
</body>
</html>
