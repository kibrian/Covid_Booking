<?php
// Include config file
require_once "../connection.php";
 
// Define variables and initialize with empty values
$phoneNo = $Id_number = $date = $time = $location = "";
$phoneNo_err = $Id_number_err = $date_err = $time_err = $location_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["update"])){
    // Get hidden input value
    $id = $_POST["id"];
    $phoneNo =$_POST["phoneNo"];
    $Id_number =$_POST["Id_number"];
    $date = date('y-m-d',strtotime($_POST['date']));
    $time =$_POST["time"];
    $location =$_POST["location"];

    // echo   $id . " " .  $phoneNo . " " . $Id_number . " " . $date . " " . $time . " " . $location;
    
    // Check input errors before inserting in database
       
        //     # code...
          $sql = "UPDATE appointments SET phoneNo='$phoneNo', Id_number='$Id_number', date = '$date' , time = '$time', location='$location'  WHERE id='$id' ";
      
          if ($conn->query($sql) === TRUE) {
              # code...
            //   move_uploaded_file($_FILES['studentImage']['name'], $newTarget);
              echo "record updated";
          } else {
              echo "records not updated";
          }
      
      
       
      
       
        
        // Close statement
        // mysqli_stmt_close($stmt);
    
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM appointments WHERE id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $phoneNo = $row["phoneNo"];
                    $Id_number = $row["Id_number"];
                    $date = $row["date"];
                    $date = $row["time"];
                    $date = $row["location"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../covid-19/css/style.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the appointments record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>phoneNo</label>
                            <input type="text" name="phoneNo" class="form-control <?php echo (!empty($phoneNo_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phoneNo; ?>">
                            <span class="invalid-feedback"><?php echo $phoneNo_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Id_number</label>
                            <input type="text" name="Id_number" class="form-control <?php echo (!empty($Id_number_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Id_number; ?>">
                            <span class="invalid-feedback"><?php echo $Id_number_err;?></span>
                        </div>
                        <div class="form-group">
                        <label class="control-label" for="date">Date</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                        </div>
                        <div class="form-group">
                        <select class="custom-select custom-select-sm" name="time">
                      <option selected>time</option>
                      <option value="7:00am-9:00am">7:00am-9:00am</option>
                      <option value="10:00am-12:00pm">10:00am-12:00pm</option>
                      <option value="2:00pm-4:00pm">2:00pm-4:00pm</option>
                   </select>
                        </div>
                        <div class="form-group">
                        <select class="custom-select custom-select-md" name="location">
                      <option selected>location</option>
                      <option value="Ngong">Ngo`ng</option>
                      <option value="Rongai">Rongai</option>
                      <option value="Kitengela">Kitengela</option>
                  </select>
                        </div>
                        <input name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" name="update" value="Submit">
                        <a href="Admindashboard.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>