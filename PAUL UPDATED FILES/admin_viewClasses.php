<!DOCTYPE html>
<html>
	<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
  	<link href="css/pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Classes</title>
	</head>

	<body>
		<h1>Classes</h1>
		<p>Please choose a table to view<br /> Once selected, you may insert, delete, or modify data</p>
		<div id="controlBox">
			<div id="insert">
        <form action="admin_viewClasses.php" method="post">
			<fieldset>
				<legend>INSERT</legend>
				<p><label class="title" for="idnumber">Course ID:</label>
					<input type="text" name="idnumber" id="idnumber" required="required"><br />
					<label class="title" for="cname">Course Name:</label>
					<input type="text" name="cname" id="cname" required="required"><br />
					<label class="title" for="studentID">Student ID:</label>
					<input type="text" name="studentID" id="studentID" required="required"><br />
					<label class="title" for="participation">Participation:</label>
					<input type="text" name="participation" id="participation" required="required"><br />
					<input type="submit" name="add" value="INSERT" />
        </form>
				</div>

					<div id="update">
            <form action="admin_viewClasses.php" method="post">
					<fieldset>
						<legend>UPDATE</legend>
						<p><label class="title" for="idnumber">Course ID:</label>
    					<input type="text" name="idnumber" id="idnumber" required="required"><br />
    					<label class="title" for="cname">Course Name:</label>
    					<input type="text" name="cname" id="cname" required="required"><br />
    					<label class="title" for="studentID">Student ID:</label>
    					<input type="text" name="studentID" id="studentID" required="required"><br />
							<label class="title" for="participation">Participation:</label>
							<input type="text" name="participation" id="participation" required="required"><br />
							<input type="submit" name="edit" value="UPDATE" />
            </form>
						</div>

						<div id="delete">
              <form action="admin_viewClasses.php" method="post">
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
     <table>
       <tr class="head">
       <th>Course ID</th>
       <th>Course Name</th>
       <th>Student ID</th>
			 <th>Participation</th>
       </tr>
<?php
require_once 'db_connect.php';
// Connect to MySQL DBMS

if (isset($_POST["add"])){
$courseID = get_post($conn, "idnumber");
$cname = get_post($conn, "cname");
$studentID = get_post($conn, "studentID");
$participation = get_post($conn, "participation");
$query = "INSERT INTO class (courseID, courseName, studentID, participation)
 VALUES ('$courseID', '$cname', '$studentID', '$participation')";
 $result = $conn->query($query);
 if (!$result) echo "INSERT FAILED: $query<br />" . $conn->error;
}

elseif (isset($_POST["edit"]))
{
  $courseID = $_POST["idnumber"];
  $cname = $_POST["cname"];
  $studentID = $_POST["studentID"];
  $query = "UPDATE class SET courseName='$cname', studentID='$studentID', participation='$participation' WHERE courseID='$courseID'";
  $result = $conn->query($query);
}

elseif (isset($_POST["delete"]))
{
$courseID = $_POST["idnumber"];
$query = "DELETE FROM class WHERE courseID=$courseID";
$result = $conn->query($query);
}

    $query = "SELECT * FROM class";
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
        </tr>";
      } else {
        echo "<tr class='even'>
        <td>{$row[0]}</td>
        <td>{$row[1]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>
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
