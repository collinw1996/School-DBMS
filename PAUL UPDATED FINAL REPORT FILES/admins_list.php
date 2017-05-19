<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
  	<link href="css/pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Admin Privileges</title>
	</head>

	<body>
		<h1>Administration</h1>
		<p>Please choose a table to view<br /> Once selected, you may insert, delete, or modify data</p>
		<div id="controlBox">
			<div id="insert">
        <form action="admins_list.php" method="post">
			<fieldset>
				<legend>INSERT</legend>
				<p><label class="title" for="idnumber">Admin ID:</label>
					<input type="text" name="idnumber" id="idnumber" required="required"><br />
					<label class="title" for="fname">First Name:</label>
					<input type="text" name="fname" id="fname" required="required"><br />
					<label class="title" for="lname">Last Name:</label>
					<input type="text" name="lname" id="lname" required="required"><br />
          <label class="title" for="username">Username:</label>
					<input type="text" name="username" id="username" required="required"><br />
					<label class="title" for="password" required="required">Password:</label>
					<input type="password" name="password" id="password"><br />
					<input type="submit" name="add" value="INSERT" />
        </form>
				</div>

					<div id="update">
            <form action="admins_list.php" method="post">
					<fieldset>
						<legend>UPDATE</legend>
						<p><label class="title" for="idnumber">Admin ID:</label>
    					<input type="text" name="idnumber" id="idnumber" required="required"><br />
    					<label class="title" for="fname">First Name:</label>
    					<input type="text" name="fname" id="fname" required="required"><br />
    					<label class="title" for="lname">Last Name:</label>
    					<input type="text" name="lname" id="lname" required="required"><br />
              <label class="title" for="username">Username:</label>
    					<input type="text" name="username" id="username" required="required"><br />
    					<label class="title" for="password" required="required">Password:</label>
    					<input type="password" name="password" id="password"><br />
							<input type="submit" name="edit" value="UPDATE" />
            </form>
						</div>

						<div id="delete">
              <form action="admins_list.php" method="post">
						<fieldset>
							<!-- Delete based on primary key -->
							<legend>Delete</legend>
							<p><label class="title" for="idnumber">Admin ID:</label>
								<input type="text" name="idnumber" id="idnumber" required="required"><br />
								<input type="submit" name = "delete" value="DELETE" />
              </form>
							</div>
		</div>

    <div id="main">
     <table>
       <tr class="head">
       <th>Admin ID</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Username</th>
       <th>Password</th>
       </tr>
<?php
require_once 'db_connect.php';
// Connect to MySQL DBMS

if (isset($_POST["add"]))
{
$adminID = get_post($conn, "idnumber");
$fname = get_post($conn, "fname");
$lname = get_post($conn, "lname");
$username = get_post($conn, "username");
$password = get_post($conn, "password");

$query = "INSERT INTO systemadmin (ID, Fname, Lname, Username, Password)
 VALUES ('$adminID', '$fname', '$lname', '$username', '$password')";
 $result = $conn->query($query);
 if (!$result) echo "INSERT FAILED: $query<br />" . $conn->error;
}

elseif (isset($_POST["edit"]))
{
  $adminID = $_POST["idnumber"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $username = $_POST["username"];
  $password = $_POST["password"];

$query = "UPDATE systemadmin SET Fname='$fname', Lname='$lname',
Username='$username', Password='$password' WHERE ID='$adminID'";

$result = $conn->query($query);
}

elseif (isset($_POST["delete"]))
{
$adminID = $_POST["idnumber"];
$query = "DELETE FROM systemadmin WHERE ID=$adminID";
$result = $conn->query($query);
}

    $query = "SELECT * FROM systemadmin";
    // Execute SQL statement
    // Display results
		$result = $conn->query($query);
		$rows = $result->num_rows;
	  for ($j = 0; $j < $rows; ++$j)
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
    </tr>";
		// This is for css to change color of even rows in table to make easier to read
	} else {
		echo "<tr class='even'>
	<td>{$row[0]}</td>
	<td>{$row[1]}</td>
	<td>{$row[2]}</td>
	<td>{$row[3]}</td>
	<td>{$row[4]}</td>
	</tr>";
	}
		}
		function get_post($conn,$var) {
			return $conn->real_escape_string($_POST[$var]);
		}
  ?>
</table>
<form id="adminFormControl" method:"POST">
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
