
<?php
session_start();
require 'db_connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Immortal Martial Arts Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="style.css" media="all" type="text/css">
  
</head>




<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    
    <div class="collapse navbar-collapse" id="myNavbar">
 <left><img src="imams.jpg"  width="150" height="110"></left>
      <ul class="nav navbar-nav navbar-right">
          
          
            <li><a href="home.php">MyProfile</a></li>
          <li><a href="attendance.php">Attendance</a></li>
          <li><a href="schedule.php">Schedule</a></li>
        <li><a href="events.php">Event</a></li>
        <li><a href="fees.php">Fee</a></li> 
        <li><a href="merchan.php">Merchandise</a></li>
        <li><a href="communication.php">Communication</a></li> 
        <li><a href="logout.php">Logout</a></li> 
        
      </ul>
    </div>
 
</nav>
 
<br><br><br><br><br>
			<div class="box-body">				
				<table class="table table-striped table-responsive no-margin">
					<thead>
						<tr>
							<th>Event</th>
							<th colspan="4" class="text-center">Status</th>
							<th class="text-center">Total No. of Present</th>
							<th class="text-center">Total No. of Absent</th>
						</tr>
						<tr>
							<th></th>
							<th class="text-center">AM In</th>
							<th class="text-center">AM Out</th>
							<th class="text-center">PM In</th>
							<th class="text-center">PM Out</th>
							<th class="text-center"></th>
							<th class="text-center"></th>
						</tr>
					</thead>
					<tbody>
					
    
      </body>
</html>

