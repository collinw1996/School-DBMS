<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
  	<link href="css/pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Parents</title>
	</head>

	<body>
		<h1>Parents</h1>
		<p>Please choose a table to view<br /> Once selected, you may insert, delete, or modify data</p>
		<div id="controlBox">
			<div id="insert">
        <form action="admin_viewParents.php" method="post">
			<fieldset>
				<legend>INSERT</legend>
				<p>
					<label class="title" for="fname">First Name:</label>
					<input type="text" name="fname" id="fname" required="required"><br />
					<label class="title" for="lname">Last Name:</label>
					<input type="text" name="lname" id="lname" required="required"><br />
					<label class="title" for="phone">Phone Number:</label>
					<input type="text" name="phone" id="phone" required="required"><br />
					<label class="title" for="address">Address:</label>
					<input type="text" name="address" id="address" required="required"><br />
          <label class="title" for="email">Email Address:</label>
					<input type="text" name="email" id="email" required="required"><br />
					<label class="title" for="studentID">Student's ID:</label>
					<input type="text" name="studentID" id="studentID" required="required"><br />
					<input type="submit" name="add" value="INSERT" />
        </form>
				</div>

					<div id="update">
            <form action="admin_viewParents.php" method="post">
					<fieldset>
						<legend>UPDATE</legend>
						<p>
              <label class="title" for="phone">Phone Number:</label>
    					<input type="text" name="phone" id="phone" required="required"><br />
              <label class="title" for="fname">First Name:</label>
    					<input type="text" name="fname" id="fname" required="required"><br />
    					<label class="title" for="lname">Last Name:</label>
    					<input type="text" name="lname" id="lname" required="required"><br />
    					<label class="title" for="address">Address:</label>
    					<input type="text" name="address" id="address" required="required"><br />
              <label class="title" for="email">Email Address:</label>
    					<input type="text" name="email" id="email" required="required"><br />
    					<label class="title" for="studentID">Student's ID:</label>
    					<input type="text" name="studentID" id="studentID" required="required"><br />
							<input type="submit" name="edit" value="UPDATE" />
            </form>
						</div>

						<div id="delete">
              <form action="admin_viewParents.php" method="post">
						<fieldset>
							<!-- Delete based on primary key -->
							<legend>Delete</legend>
							<p><label class="title" for="phone">Phone Number:</label>
								<input type="text" name="phone" id="phone" required="required"><br />
								<input type="submit" name = "delete" value="DELETE" />
              </form>
							</div>
		</div>

    <div id="main">
     <table>
       <tr class="head">
       <th>First Name</th>
       <th>Last Name</th>
       <th>Phone</th>
       <th>Address</th>
       <th>Email</th>
			 <th>Student's ID</th>
       </tr>

<?php
require_once 'db_connect.php';
// Connect to MySQL DBMS

if (isset($_POST["add"]))
{
	$fname = get_post($conn, 'fname');
	$lname = get_post($conn, 'lname');
	$phone = get_post($conn, 'phone');
	$address = get_post($conn, 'address');
	$email = get_post($conn, 'email');
	$studentID = get_post($conn, 'studentID');
	$query = "INSERT INTO parent (Fname, Lname, Phone, Address, Email, studentID)
 	VALUES ('$fname', '$lname', '$phone', '$address', '$email', '$studentID')";
	$result = $conn->query($query);
	if (!$result) echo "INSERT FAILED: $query<br />" . $conn->error;
}

elseif (isset($_POST["edit"]))
{
  $fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$studentID = $_POST["studentID"];
	$query = "UPDATE parent SET Fname='$fname', Lname='$lname',Address='$address', Email='$email',
	studentID='$studentID' WHERE Phone='$phone'";
	$result = $conn->query($query);
}

elseif (isset($_POST["delete"]))
{
	$phone = $_POST["phone"];
	$query = "DELETE FROM parent WHERE Phone=$phone";
	$result = $conn->query($query);
}


    $query = "SELECT * FROM parent";
		$result = $conn->query($query);
		$rows = $result->num_rows;
		for ($j = 0; $j < $rows; ++$j)
		{
			$result->data_seek($j);
			$row = $result->fetch_array(MYSQLI_NUM);
			if ($j % 2 == 1) {
				echo "<tr>
				<td>{$row[0]}</td>
				<td>{$row[1]}</td>
				<td>{$row[2]}</td>
				<td>{$row[3]}</td>
				<td>{$row[4]}</td>
				<td>{$row[5]}</td>
				</tr>";
				// This is for css to change color of even rows in table to make easier to read
			} else {
				echo "<tr class='even'>
				<td>{$row[0]}</td>
				<td>{$row[1]}</td>
				<td>{$row[2]}</td>
				<td>{$row[3]}</td>
				<td>{$row[4]}</td>
				<td>{$row[5]}</td>
				</tr>";
			}
		}

  ?>
</table>
	<form id="adminFormControl" method="POST">
		<p><label class="title" for="selectTable"> Select Table:</label>
			<select name="selectTable" id="selectTable">
				<option></option>
				<option>Back</option>
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
