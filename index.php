<?php
include('connection.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>FIRST PHP</title>
</head>
<body>
	<!-- <h1>SignUp Form</h1>


	<form method="POST">
		Email: <input type="email" name="email">
		<br>
		Password: <input type="password" name="password">
		<br>
		Confirm Password: <input type="password" name="cpassword">
		<br>
		<button type="submit" name="submitbtn">Submit</button>
		


	</form>
 -->


<h1>Login Form</h1>
<form method="POST">
	Email: <input type="email" name="email">
	<br>
	Password: <input type="password" name="password">
	<br>
	<button type="Submit" name ="submitbtn">Login</button>
</form>


	<?php

if(isset($_POST['submitbtn'])){
	$mail= $_POST['email'];
	$pass= $_POST['password'];
	


$sql = "INSERT INTO Login VALUES('$mail','$pass');";

if(mysqli_query($conn, $sql)){
	// echo "<script>
	// location.href = "localhost/ff06/gradient.html";
	// </script>";

	header("Location: http://localhost/ff06/gradient.html");
}
else{
	echo "Error". $sql."<br>". mysqli_error($conn);
}
}










// if(isset($_POST['submitbtn'])){
// 	$mail= $_POST['email'];
// 	$pass= $_POST['password'];
// 	$confirm= $_POST['cpassword'];


// $sql = "INSERT INTO SignUp VALUES('$mail','$pass','$confirm');";

// if(mysqli_query($conn, $sql)){
// 	echo "SignUp successful";

// }
// else{
// 	echo "Error". $sql."<br>". mysqli_error($conn);
// }
// }







// 	echo "This is php";
// 	print "<br>";
// 	print "This is print statement";

// 	$str="Hello Interns";
// 	$i=5;
// 	$flo=5.6;
// 	$bol=true;
// 	print "<br>";

// 	print $str;
// 	print "<br>";
// 	print $i;
// 	print "<br>";
// 	print $flo;
// 	print "<br>";
// 	print $bol;
// 	print "<br>";
// 	echo strlen("Hello world!");
// 	print "<br>";


// 	//string library
// 	echo str_word_count("Hello world!");
// 	print "<br>";
// 	echo strrev("Hello world!");
// 	print "<br>";
// 	echo strpos("Hello world!", "world");
// 	print "<br>";
// 	echo str_replace("world", "Dolly", "Hello world!");
// 	print "<br>";


// 	//math library
// 	echo(pi());
// 	print "<br>";
// 	echo(min(0, 180, 30, 70, -7, -200));  // returns -200
// 	print "<br>";
// 	echo(max(0, 180, 19, 20, -8, -50));  // returns 150
// 	print "<br>";
// 	echo(abs(-8.7));  // returns 6.7
// 	print "<br>";
// 	echo(sqrt(225));  // returns 8
// 	print "<br>";
	
// 	echo(round(0.51));  // returns 1
// 	print "<br>";

// 	echo(round(0.49));  // returns 0
// 	print "<br>";
// 	echo(rand());
// 	print "<br>";
// 	echo(rand(1, 100));
// 	print "<br>";
// 	print "<br>";

// 	//If else and elseif statements
// 	$x=0;

// 	if($x==0){
// 		print"it is zero.";
// 	}
// 	elseif ($x%2==0) {
// 		print"it is an even number.";
// 	}
// 	else{
// 		print"it is an odd number.";
// 	}
// print "<br>";


// 	//Switch Statement

// 	$ch=1;
// 	switch ($ch) {
// 		case 1: print "Monday";
// 		break;
// 		case 2: print "Tuesday";
// 		break;
// 		case 3: print "Wednesday";
// 		break;
// 		case 4: print "Thursday";
// 		break;
// 		case 5: print "Friday";
// 		break;
// 		case 6: print "Saturday";
// 		break;
// 		case 7: print "Sunday";
// 		break;
// 		default : print "Invalid number";
			
// 	}
// print "<br>";


// 	//While Loop


// 	$t=1;


// 	 while ($t<=10) {
// 	 	echo "$t ";
// 	 	$t++; 	
// 	 }
// print "<br>";

// 	 //Do While Loop


// 	 $d=1;

// 	 do{
// 	 	echo "$d ";
// 	 	$d++;
// 	 }
// 	 while($d<=10);
// 	 print "<br>";

// 	 //For Loop

// 	 for($f=1; $f<=10; $f++){
// 	 	print "$f <br>";
// 	 }

// 	 print "<br>";



// 	 //Foreach Loop



// 	 $colors = array("red", "green", "blue", "yellow","orange","violet");

//     foreach ($colors as $x) {
//       echo "$x <br>";
// }


// //It is function definition

// function checkevenodd($z) {
// 	if($z%2==0){
// 		echo "even";
// 	}
// 	else{
// 		echo"odd";
// 	}
// }
// echo "<br>";
// // function calling or invoking

// checkevenodd(5);
// print"<br>";
// checkevenodd(10);

// echo "<br>";

// function numcheck($n){
// 	if($n==0){
// 		echo "The number is Zero";
// 	}
// 	elseif($n>0){
// 		echo "The number is Positive";
// 	}
// 	else{
// 		echo "The number is Negative";
// 	}
// }
// echo "<br>";

// numcheck(7);
// echo "<br>";
// numcheck(0);
// echo "<br>";
// numcheck(-8);
// echo "<br>";



// $c= array("Apple","Banana","Cheeku","Dragon Fruit","Elephant Apple");
// foreach ($c as $x){
// echo "$x <br>";
// }





// $db_host = "localhost";
// $db_user = "root";
// $db_password = "";
// $db_name = "ff06";
// $db_port=3306;

// //create connection 
// $conn = new mysqli($db_host, $db_user, $db_password, $db_name,$db_port);

// // check connection 
// if($conn->connect_error) {
	
	
// 	die("connection failed");
	
// }
// else {
// 	echo "Connection successful";
// }












	?>

</body>
</html>