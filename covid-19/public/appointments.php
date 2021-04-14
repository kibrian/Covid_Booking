

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
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
<?php include 'connection.php' ?>;
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">BOOKING APP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard-1.php">Home</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#">Appointments</a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="appointments.php">Add-appointment</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

<div class="jumbotron">
  <h2 style="text-align:center;"><strong>Book for your test and vaccine here</strong></h2>
    <div class="row">
        <div class="col-sm-6">
            <form action="../functions.php" method="post">
                <div class="form-group">
                   <label for="PhoneNo">PhoneNo</label>
                   <input type="text" name="PhoneNo" class="form-control">
                </div>
                <div class="form-group">
                   <label for="Id_number">Id_number</label>
                   <input type="text" name="Id_number" class="form-control">
                </div>
                <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" name="email" class="form-control">
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
                <div class="form-group">
                   <input type="submit" class="btn btn-success btn-block"  name="Book-appointment"value="Book-appointment">
                </div>
                <a href="#"> checkout the following links for resent updates</a>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="https://www.nursingworld.org/practice-policy
                        /work-environment/
                        health-safety/disaster-preparedness/coronavirus/"><img src="../images/001.jpg" alt="loading" width="100%"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href=""><img src="../images/002.jpg" alt="loading" width="100%"></a>
                    </div>
                    <!-- <div class="col-sm-4">
                        <a href=""><img src="../images/003.jpg" alt="loading" width="100%"></a>
                    </div> -->
                </div>
            </form>
        </div>
        <div class="col-sm-6">
           <img src="../images/000.png" alt="loading" height="610">
        </div>
    </div>
</div>



<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</body>
</html>
