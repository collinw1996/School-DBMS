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
        <form action="classes_list.php" method="post">
			<fieldset>
				<legend>INSERT</legend>
				<p><label class="title" for="idnumber">Course ID:</label>
					<input type="text" name="idnumber" id="idnumber" required="required"><br />
					<label class="title" for="cname">Course Name:</label>
					<input type="text" name="cname" id="cname" required="required"><br />
					<label class="title" for="studentID">Student ID:</label>
					<input type="text" name="studentID" id="studentID" required="required"><br />
					<input type="submit" name="add" value="INSERT" />
        </form>
				</div>

					<div id="update">
            <form action="classes_list.php" method="post">
					<fieldset>
						<legend>UPDATE</legend>
						<p><label class="title" for="idnumber">Course ID:</label>
    					<input type="text" name="idnumber" id="idnumber" required="required"><br />
    					<label class="title" for="cname">Course Name:</label>
    					<input type="text" name="cname" id="cname" required="required"><br />
    					<label class="title" for="studentID">Student ID:</label>
    					<input type="text" name="studentID" id="studentID" required="required"><br />
							<input type="submit" name="edit" value="UPDATE" />
            </form>
						</div>

						<div id="delete">
              <form action="classes_list.php" method="post">
						<fieldset>
							<!-- Delete based on primary key -->
							<legend>Delete</legend>
							<p><label class="title" for="idnumber">Course ID:</label>
								<input type="text" name="idnumber" id="idnumber" required="required"><br />
								<input type="submit" name = "delete" value="DELETE" />
              </form>
							</div>
		</div>

    <div id="main">
     <table border=1>
       <tr>
       <th>Course ID</th>
       <th>Course Name</th>
       <th>Student ID</th>
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

$courseID = $_POST["idnumber"];
$cname = $_POST["cname"];
$studentID = $_POST["studentID"];

$query = "INSERT INTO class (courseID, courseName, studentID)
 VALUES ('$courseID', '$cname', '$studentID')";


if (mysql_query($query, $connection)) {
  echo "New record created successfully";
} else {
   showerror();
}
}

elseif (isset($_POST["edit"])) {

  $courseID = $_POST["idnumber"];
  $cname = $_POST["cname"];
  $studentID = $_POST["studentID"];

$query = "UPDATE class SET courseName='$cname', studentID='$studentID' WHERE courseID='$courseID'";

if (mysql_query($query, $connection)) {
} else {
 showerror();
}
}
elseif (isset($_POST["delete"])) {

$courseID = $_POST["idnumber"];

$query = "DELETE FROM class WHERE courseID=$courseID";

if (mysql_query($query, $connection)) {
} else {
 showerror();
}
}

    $query = "SELECT * FROM class";
    // Execute SQL statement
    if (!($result = @ mysql_query ($query, $connection)))
      showerror();
    // Display results
    while ($row = @ mysql_fetch_array($result))
      echo "<tr>
    <td>{$row["courseID"]}</td>
    <td>{$row["courseName"]}</td>
    <td>{$row["studentID"]}</td>
    </tr>";
  ?>
</table>
 </div>
 </body>
</html>
