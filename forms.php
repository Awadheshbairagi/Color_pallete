<!DOCTYPE html>
<html>
<head>
	<title>HTML FORMS</title>
</head>
<body>
<h1>HTML Form</h1>
<form method="post">
	
<label for="fname">First Name:</label>
<input type="text" name="fname" required>
<br>
<br>
Last Name: <input type="text" name="lname" readonly>
<br>
<br>
Gender:
<input type="radio" name="gender">Male
<input type="radio" name="gender">Female
<br>
<br>
Date of Birth:<input type="Date" name="dob">
<br>
<br>
Email id:<input type="Email" name="emailid" >
<br>
<br>
Mobile Number:<input type="tel" name="phn-no.">
<br>
<br>
Hobbies:<br>
<input type="checkbox" name="paint">Painting
<br>
<input type="checkbox" name="sleep">Sleeping
<br>
<input type="checkbox" name="swim">Swimming
<br>
<br>
Eye Color:
<select>
	<option>Black</option>
	<option>Brown</option>
	<option>Blue</option>
	<option>Green</option>
	<option>Grey</option>
</select>
<br>
<br>
<button type="Submit">Submit</button>
<button type="Reset">Reset</button>
</form>
</body>
</html>