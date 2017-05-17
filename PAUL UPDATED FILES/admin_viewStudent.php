<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
  	<link href="css/pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Student Page</title>
	</head>

	<body>
		<h1>Students</h1>
		<p>Please choose a table to view<br /> Once selected, you may insert, delete, or modify data</p>
		<div id="controlBox">
			<div id="insert">
        <form action="admin_viewStudent.php" method="post">
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
            <form action="admin_viewStudent.php" method="post">
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
              <form action="admin_viewStudent.php" method="post">
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
     <table>
       <tr class="head">
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
require_once 'db_connect.php';
// Connect to MySQL DBMS

if (isset($_POST["add"])){
$studentID = get_post($conn, "idnumber");
$fname = get_post($conn, "fname");
$mi = get_post($conn, "mi");
$lname = get_post($conn, "lname");
$gender = get_post($conn, "gender");
$email = get_post($conn, "email");
$bdate = get_post($conn, "bdate");
$parentPhone = get_post($conn, "parentphone");
$address = get_post($conn, "address");
$username = get_post($conn, "username");
$password = get_post($conn, "password");
$query = "INSERT INTO student (studentID, Fname, MInit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
 VALUES ('$studentID', '$fname', '$mi', '$lname', '$gender', '$bdate', '$parentPhone', '$address', '$email', '$username', '$password')";
 $result = $conn->query($query);
 if(!$result) echo "INSERT FAILED: $query<br />" . $conn->error;
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
$result = $conn->query($query);
}

elseif (isset($_POST["delete"])) {
$studentID = $_POST["idnumber"];
$query = "DELETE FROM student WHERE studentID=$studentID";
$result = $conn->query($query);
}

    $query = "SELECT * FROM student";
    $result = $conn->query($query);
		$rows= $result->num_rows;

		for($j = 0; $j < $rows; ++$j)
		{
				$result->data_seek($j);
				$row = $result->fetch_array(MYSQLI_NUM);

				if($j % 2 == 1) {
					echo "<tr>
				<td>{$row[0]}</td>
				<td>{$row[1]}</td>
				<td>{$row[2]}</td>
				<td>{$row[3]}</td>
				<td>{$row[4]}</td>
				<td>{$row[5]}</td>
				<td>{$row[6]}</td>
				<td>{$row[7]}</td>
				<td>{$row[8]}</td>
				<td>{$row[9]}</td>
				<td>{$row[10]}</td>
				</tr>";
			} else {
				echo "<tr class='even'>
			<td>{$row[0]}</td>
			<td>{$row[1]}</td>
			<td>{$row[2]}</td>
			<td>{$row[3]}</td>
			<td>{$row[4]}</td>
			<td>{$row[5]}</td>
			<td>{$row[6]}</td>
			<td>{$row[7]}</td>
			<td>{$row[8]}</td>
			<td>{$row[9]}</td>
			<td>{$row[10]}</td>
			</tr>";
			}
		}

		function get_post($conn,$var) {
			return $conn->real_escape_string($_POST[$var]);
		}

  ?>
</table>
<form id="adminFormControl" method="POST">
<p><label class="title" for="selectTable"> Select Table:</label>
<select name="selectTable" id="selectTable">
	<option></option>
	<option>Admin</option>
	<option>Staff</option>
  <option>Teacher</option>
  <option>Student</option>
  <option>Department</option>
  <option>Classes</option>
  <option>Attendance</option>
  <option>Grades</option>
  <option>Parents</option>
  <option>Violations</option>
</select></p>
<div class="submit">
 <input type="submit" value="View" />
</div>
</form>
 </div>
 </body>
</html>
