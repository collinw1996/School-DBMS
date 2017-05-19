<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
  	<link href="css/pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Department Page</title>
	</head>

	<body>
		<h1>Department</h1>
		<p>Please choose a table to view<br /> Once selected, you may insert, delete, or modify data</p>
		<div id="controlBox">
			<div id="insert">
        <form action="admin_viewDepartment.php" method="post">
			<fieldset>
				<legend>INSERT</legend>
				<p>
					<label class="title" for="schoolID">School ID:</label>
					<input type="text" name="schoolID" id="schoolID" required="required"><br />
					<label class="title" for="courseID">Course ID:</label>
					<input type="text" name="courseID" id="courseID" required="required"><br />
          <label class="title" for="ssn">SSN:</label>
  				<input type="text" name="ssn" id="ssn" required="required"><br />
					<label class="title" for="id">ID:</label>
					<input type="text" name="id" id="id" required="required"><br />
					<label class="title" for="essn">Essn:</label>
					<input type="text" name="essn" id="essn" required="required"><br />
					<input type="submit" name="add" value="INSERT" />
        </form>
				</div>

					<div id="update">
            <form action="admin_viewDepartment.php" method="post">
					<fieldset>
						<legend>UPDATE</legend>
						<p>
              <label class="title" for="schoolID">School ID:</label>
    					<input type="text" name="schoolID" id="schoolID" required="required"><br />
    					<label class="title" for="courseID">Course ID:</label>
    					<input type="text" name="courseID" id="courseID" required="required"><br />
              <label class="title" for="ssn">SSN:</label>
      				<input type="text" name="ssn" id="ssn" required="required"><br />
    					<label class="title" for="id">ID:</label>
    					<input type="text" name="id" id="id" required="required"><br />
    					<label class="title" for="essn">Essn:</label>
    					<input type="text" name="essn" id="essn" required="required"><br />
							<input type="submit" name="edit" value="UPDATE" />
            </form>
						</div>

						<div id="delete">
              <form action="admin_viewDepartment.php" method="post">
						<fieldset>
							<!-- Delete based on primary key -->
							<legend>Delete</legend>
							<p><label class="title" for="schoolID">School ID:</label>
								<input type="text" name="schoolID" id="schoolID" required="required"><br />
								<input type="submit" name = "delete" value="DELETE" />
              </form>
							</div>
		</div>

    <div id="main">
     <table>
       <tr class="head">
       <th>School ID</th>
       <th>Course ID</th>
			 <th>SSN</th>
       <th>ID</th>
       <th>ESSN</th>
       </tr>
<?php
require 'db_connect.php';
// Connect to MySQL DBMS
if (isset($_POST["add"])){
	$schoolID = get_post($conn, "schoolID");
	$courseID = get_post($conn, "courseID");
	$ssn = get_post($conn, "ssn");
	$id = get_post($conn, "id");
	$essn = get_post($conn, "essn");
	$query = "INSERT INTO schooldept (schoolID, courseID, Ssn, ID, Essn)
 VALUES ('$schoolID', '$courseID', '$ssn', '$id', '$essn')";
 $result = $conn->query($query);
 if(!$result) echo "INSERT FAILED: $query<br />" . $conn->error;
}
elseif (isset($_POST["edit"])) {
  $schoolID = $_POST["schoolID"];
	$courseID = $_POST["courseID"];
	$ssn = $_POST["ssn"];
	$id = $_POST["id"];
	$essn = $_POST["essn"];
$query = "UPDATE schooldept SET courseID='$courseID', Ssn='$ssn', ID='$id', Essn='$essn'
WHERE schoolID='$schoolID'";
$result = $conn->query($query);
}
elseif (isset($_POST["delete"])) {
$schoolID = $_POST["schoolID"];
$query = "DELETE FROM schooldept WHERE schoolID=$schoolID";
$result = $conn->query($query);
}
    $query = "SELECT * FROM schooldept";
		$result = $conn->query($query);
		$rows = $result->num_rows;
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
		    </tr>";
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
