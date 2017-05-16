<!DOCTYPE html>
<html>
	<head>
  	<link href="pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Admin Privileges</title>
	</head>

	<body>
		<h1>Administration</h1>
		<p>Please choose a table to view<br /> Once selected, you may insert, delete, or modify data</p>
		<div id="controlBox">
			<div id="insert">
        <form action="students_list.php" method="post">
			<fieldset>
				<legend>INSERT</legend>
				<p><label class="title" for="idnumber">ID:</label>
					<input type="text" name="idnumber" id="idnumber" required="required"><br />
					<label class="title" for="fname">First Name:</label>
					<input type="text" name="fname" id="fname" required="required"><br />
					<label class="title" for="mi">Middle Initial:</label>
					<input type="text" name="mi" id="mi" required="required"><br />
					<label class="title" for="lname">Last Name:</label>
					<input type="text" name="lname" id="lname" required="required"><br />
					<label class="title" for="gender">Gender:</label>
					<input type="text" name="gender" id="gender" required="required"><br />
					<label class="title" for="email">Email Address:</label>
					<input type="text" name="email" id="email" required="required"><br />
					<label class="title" for="bdate">Birth Date:</label><br />
					<input type="date" name="bdate" id="bdate" required="required"><br />
					<label class="title" for="parentphone">Parent Phone Number:</label>
					<input type="text" name="parentphone" id="parentphone" required="required"><br />
					<label class="title" for="address">Address:</label>
					<input type="text" name="address" id="address" required="required"><br />
					<label class="title" for="username">Username:</label>
					<input type="text" name="username" id="username" required="required"><br />
					<label class="title" for="password" required="required">Password:</label>
					<input type="password" name="password" id="password"><br />
					<input type="submit" name="add" value="INSERT" />
        </form>
				</div>

					<div id="update">
            <form action="students_list.php" method="post">
					<fieldset>
						<legend>UPDATE</legend>
						<p><label class="title" for="idnumber">ID:</label>
							<input type="text" name="idnumber" id="idnumber" required="required"><br />
							<label class="title" for="fname">First Name:</label>
							<input type="text" name="fname" id="fname" required="required"><br />
							<label class="title" for="mi">Middle Initial:</label>
							<input type="text" name="mi" id="mi" required="required"><br />
							<label class="title" for="lname">Last Name:</label>
							<input type="text" name="lname" id="lname" required="required"><br />
							<label class="title" for="gender">Gender:</label>
							<input type="text" name="gender" id="gender" required="required"><br />
							<label class="title" for="email">Email Address:</label>
							<input type="text" name="email" id="email" required="required"><br />
							<label class="title" for="bdate">Birth Date:</label><br />
							<input type="date" name="bdate" id="bdate" required="required"><br />
							<label class="title" for="parentphone">Parent Phone Number:</label>
							<input type="text" name="parentphone" id="parentphone" required="required"><br />
							<label class="title" for="fname">Address:</label>
							<input type="text" name="address" id="address" required="required"><br />
							<label class="title" for="username">Username:</label>
							<input type="text" name="username" id="username" required="required"><br />
							<label class="title" for="password" required="required">Password:</label>
							<input type="password" name="password" id="password"><br />
							<input type="submit" name="edit" value="UPDATE" />
            </form>
						</div>

						<div id="delete">
              <form action="students_list.php" method="post">
						<fieldset>
							<!-- Delete based on primary key -->
							<legend>Delete</legend>
							<p><label class="title" for="idnumber">ID:</label>
								<input type="text" name="idnumber" id="idnumber" required="required"><br />
								<input type="submit" name = "delete" value="DELETE" />
              </form>
							</div>
		</div>

    <div id="main">
     <table border=1>
       <tr>
       <th>Student ID</th>
       <th>First Name</th>
       <th>Middle Initial</th>
       <th>Last Name</th>
       <th>Gender</th>
       <th>Birthdate</th>
       <th>Parent Phone</th>
       <th>Address</th>
       <th>Email</th>
       <th>Username</th>
       <th>Password</th>
       </tr>
<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the student database
if (!mysql_select_db($databaseName, $connection))
  showerror();

if (isset($_POST["add"])){

$studentID = $_POST["idnumber"];
$fname = $_POST["fname"];
$mi = $_POST["mi"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$bdate = $_POST["bdate"];
$parentPhone = $_POST["parentphone"];
$address = $_POST["address"];
$username = $_POST["username"];
$password = $_POST["password"];

$query = "INSERT INTO student (studentID, Fname, MInit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
 VALUES ('$studentID', '$fname', '$mi', '$lname', '$gender', '$bdate', '$parentPhone', '$address', '$email', '$username', '$password')";


if (mysql_query($query, $connection)) {
  echo "New record created successfully";
} else {
   showerror();
}
}

elseif (isset($_POST["edit"])) {

  $studentID = $_POST["idnumber"];
  $fname = $_POST["fname"];
  $mi = $_POST["mi"];
  $lname = $_POST["lname"];
  $gender = $_POST["gender"];
  $email = $_POST["email"];
  $bdate = $_POST["bdate"];
  $parentPhone = $_POST["parentphone"];
  $address = $_POST["address"];
  $username = $_POST["username"];
  $password = $_POST["password"];

$query = "UPDATE student SET Fname='$fname', MInit='$mi', Lname='$lname', Gender='$gender', Bdate='$bdate', parentPhone='$parentPhone',
Address='$address', Email='$email', Username='$username', Password='$password' WHERE studentID='$studentID'";

if (mysql_query($query, $connection)) {
} else {
 showerror();
}
}
elseif (isset($_POST["delete"])) {

$studentID = $_POST["idnumber"];

$query = "DELETE FROM student WHERE studentID=$studentID";

if (mysql_query($query, $connection)) {
} else {
 showerror();
}
}

    $query = "SELECT * FROM student";
    // Execute SQL statement
    if (!($result = @ mysql_query ($query, $connection)))
      showerror();
    // Display results
    while ($row = @ mysql_fetch_array($result))
      echo "<tr>
    <td>{$row["studentID"]}</td>
    <td>{$row["Fname"]}</td>
    <td>{$row["MInit"]}</td>
    <td>{$row["Lname"]}</td>
    <td>{$row["Gender"]}</td>
    <td>{$row["Bdate"]}</td>
    <td>{$row["parentPhone"]}</td>
    <td>{$row["Address"]}</td>
    <td>{$row["Email"]}</td>
    <td>{$row["Username"]}</td>
    <td>{$row["Password"]}</td>
    </tr>";
  ?>
</table>
<form action="admins_home.php" method="post">
<p><label class="title" for="selectTable"> Select Table:</label>
<select name="selectTable" id="selectTable">
	<option value="" disabled selected>Select an Option</option>
  <option value="Students">Students</option>
  <option value="Teachers">Teachers</option>
  <option value="Admins">Admins</option>
  <option value="Staff">Staff</option>
  <option value="Departments">Departments</option>
  <option value="Classes">Classes</option>
  <option value="Attendance">Attendance</option>
  <option value="Grades">Grades</option>
  <option value="Parents">Parents</option>
  <option value="Violations">Violations</option>
</select></p>
<div class="submit">
 <input type="submit" value="View" />
</div>
</form>
 </div>
 </body>
</html>
