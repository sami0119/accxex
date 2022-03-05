<!DOCTYPE html>
<html>
<head>
  <title>ACCXEX Connection Data Control</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body style="background-color: black; color: #fff;">
	<center>
		<br><br><br><br>
		<?php
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "serviceaccxex");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$full_name = $_REQUEST['full_name'];
		$email = $_REQUEST['email'];
		$phone_no = $_REQUEST['phone_no'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$adhar_no = $_REQUEST['adhar_no'];
		$pan_no = $_REQUEST['pan_no'];
		$age = $_REQUEST['age'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO validation VALUES ('$full_name','$email','$phone_no','$gender','$address','$adhar_no','$pan_no','$age')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h2>Your data is stored in a secured database successfully.<br>"
			. " This is your entered data"
			. " please proceed for service fee portal</h2>";

			echo nl2br("\n$full_name\n $email\n $phone_no\n "
				. "$gender\n $address\n $adhar_no\n $pan_no\n $age");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	<br><br>
	<button type="submit" class="btn"><a href="service-pay-amount.html">Service Fee Portal</a></button>
	</center>
</body>

</html>
