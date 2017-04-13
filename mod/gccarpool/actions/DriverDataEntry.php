<?php
	$user ='root';
	$password='';
	$dbname='elgg2';
	
	$db = new mysqli('localhost', $user, $password, $dbname) or die("Unable to connect to the database.");	


	$name = $_POST['name'];
	$email= $_POST['email'];
	$departure=$_POST['start'];
	$destination=$_POST['end'];
	$time=$_POST['time'];
	$capacity=$_POST['capacity'];
	$music=$_POST['music'];
	$addC=$_POST['addcomments'];
	$date = $_POST['startDate'];

	$countQuery = ($db->query('select * from route'));
	$count = mysqli_num_rows($countQuery);

	$sql="INSERT INTO route (
		RouteID, 
		Departure,
		Destination, 
		TimeOfDeparture, 
		Music, 
		Capacity, 
		StartDate, 
		DriverName, 
		DriverEmail, 
		AdditionalComments, 
		Status) 
		VALUES(
		 '$count ',
		 '$departure ', 
		 '$destination',
		 '$time',
		 '$music',
		 '$capacity',
		 '$date',
		 '$name',
		 '$email',
		 '$addC', 
		 '1')";



	if($db->query($sql) == TRUE){
		system_message(elgg_echo("Successfully Added! Thank you!"));
	}else{
		system_message(elgg_echo("Error"));
	}
	$db->close();

	include"form.php";
?>