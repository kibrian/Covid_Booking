<?php
    session_start();
        //including the database connection file
        include_once("public/connection.php");   
        //    Variables to store the user input
        $Username = $Id_number = $PhoneNo = $Location = $Password = '' ;
        // Check If form submitted, insert user data into database.
        if (isset($_POST['Register'])) {
            $role = $_POST['role'];
            $Username = $_POST['Username'];
            $Id_number= $_POST['Id_Number'];
            $PhoneNo  = $_POST['PhoneNo'];
            $Location = $_POST['Location'];
            $Password = $_POST['Password'];
            $Password = md5($Password);

            // If Id_number already exists, throw error
            $Id_number_result = mysqli_query($conn, "SELECT * FROM users WHERE Id_number='$Id_number' && Password='$Password' ");

            // Count the number of row matched 
            $user_matched = mysqli_num_rows($Id_number_result);

            // If number of user rows returned more than 0, it means Id-number already exists
            if ($user_matched > 0) {
                echo "<br/><br/><strong>Error: </strong> User already exists with the  Id_number '$Id_number'.";
            } else {
                // Insert user data into database
                $result   = mysqli_query($conn, "INSERT INTO users(role,Username,Id_number,PhoneNo,Location,Password)VALUES('$role','$Username','$Id_number','$PhoneNo','$Location','$Password')");
                // $result .= " AND comment_status = 'Approved' ";
                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/>User Registered successfully.";
                    header('Location:public/login.php');
                } else{
                    echo "Registration error. Please try again." . mysqli_error($conn);
                }
            }
        }
    
        if(isset($_POST["LogIn"]))  
        {  
             if(empty($_POST["Username"])  && empty($_POST["Id_number"])&& empty($_POST["password"]))  
             {  
                echo '<script>alert(alert("All the fields are requred"))</script>';  
             }else
            
             {  
                  $Username = $_POST["Username"];
                  $Id_number = $_POST["Id_number"];  
                  $Password =  $_POST["Password"];  
                  $EncryptPassword = md5($Password);  
                  $query = "SELECT * FROM users WHERE Id_number = '$Id_number' && Password = '$EncryptPassword'";  
                  $result = mysqli_query($conn, $query);  
                  if(mysqli_num_rows($result) == 1)  
                  {  
                       $_SESSION['Username'] = $Username;  
                       $_SESSION['Id_number'] = $Id_number;  
                       $_SESSION['role'] = 'Admin';
                       while($row= mysqli_fetch_array($result)){
                           $userRole = $row['role'];
                       }  

                       if($userRole=='Admin'){
                           header("location:public/Admin/Admindashboard.php");
                       }else
                       header("location:public/dashboard-1.php");  
                  }  
                  else  
                  {  
                       echo '<script>alert(alert("Wrong User Details"))</script>';  
                  }  
             }  
        }
        // $num = mysqli_num_rows($result);

		// if ($num == 1) {
		// 	# code...
        //      //use the while loop to fetch records of matched row 
		// 	while ($row = mysqli_fetch_array($result)) {
		// 		# code...
		// 		$userRole = $row['role'];
		// 		$status = $row['verified_status']; //name inside [] refers to the column name 
		// 	}

		// 	//redirect ,switch
		// 	switch ($userRole) {
		// 		case 'Admin':
		// 			# code...
		// 		    if ($status == "yes") {
		// 		    	# code...
		// 		     $_SESSION['activeuser'] = $Id_number;
        //              header('location: ../public/Admin/Admindashboard.php');

		// 		    } else {
		// 		    	$_SESSION['notVerified'] = "not verified yet";
		// 		    	header('location: ../message.php?nverified');
		// 		    }
		// 			break;

		// 			case 'user':

		// 	          $_SESSION['activeuser'] = $Id_number;
        //               header('location: ../public/dashboard-1.php');
		// 			break;
				
		// 		// default:
		// 		// 	# code...
		// 		//      $_SESSION['guest'] = "welcome guest user";
		// 		//      header('location: ../public/dashboard-1.php?guest');
		// 		// 	break;
		// 	}





		// 	// header('location: ../public/dashboard.php?logged');
		// } else {
		// 	$_SESSION['userUnaivable'];
		// 	header('location: ../public/index.php');
		// }


 
               // Check If form submitted, insert user data into database.
               if (isset($_POST['Book-appointment'])) {
                $PhoneNo = $_POST['PhoneNo'];
                $Id_number= $_POST['Id_number'];
                $email= $_POST['email'];
                $date  = date('y-m-d',strtotime($_POST['date']));
                $time = $_POST['time'];
                $location = $_POST['location'];

                // If Id_number already exists, throw error
                $Id_number_result = mysqli_query($conn, "SELECT * FROM appointments WHERE Id_number='$Id_number' && PhoneNo='$PhoneNo' ");
    
                // Count the number of row matched 
                $user_matched = mysqli_num_rows($Id_number_result);
    
                // If number of user rows returned more than 0, it means Id-number already exists
                if ($user_matched > 0) {
                    echo "<br/><br/><strong>Error: </strong> User already exists with the  Id_number '$Id_number'.";
                } else {
                    // Insert user data into database
                    $result   = mysqli_query($conn, "INSERT INTO appointments(PhoneNo,Id_number,email,date, time,location) VALUES('$PhoneNo','$Id_number','$email','$date','$time','$location')");
    
                    // check if user data inserted successfully.
                    if ($result) {
                        echo "<br/><br/>Appointment booked successfully.";
                        header('Location:public/message.php');
                    } else {
                        echo "Booking error. Please try again." . mysqli_error($conn);
                    }
                }
            }
            
          
           
    ?>