<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
  	<link href="css/pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Teacher Students</title>
	</head>

	<body>
		<h1>Update a Student's Grades</h1>
		<p>Once selected, you may modify data</p>
		<div id="controlBox">
			<div id="update">
				<form action="teachers_students.php" method="post">
			<fieldset>
				<legend>UPDATE</legend>
				<p>
					<label class="title" for="cgrade">Course Grade:</label>
					<input type="text" name="cgrade" id="cgrade" required="required"><br />
					<label class="title" for="courseID">Course ID:</label>
					<input type="text" name="courseID" id="courseID" required="required"><br />
					<label class="title" for="studentID">Student ID:</label>
					<input type="text" name="studentID" id="studentID" required="required"><br />
					<input type="submit" name="edit" value="UPDATE" />
				</form>
			</div>
		</div>

		<div id="main">
		 <table>
			 <tr class="head">
			 <th>Course Grade</th>
			 <th>Course ID</th>
			 <th>Student ID</th>
			 </tr>

<?php
require_once 'db_connect.php';

	if (isset($_POST["edit"]))
		{
			$cgrade = $_POST["cgrade"];
			$courseID = $_POST["courseID"];
			$studentID = $_POST["studentID"];
		  $query = "UPDATE grades SET courseG='$cgrade' WHERE courseID='$courseID' AND studentID='$studentID'";
		  $result = $conn->query($query);
		}

		    $query = "SELECT * FROM grades";
		    $result = $conn->query($query);
		    $rows = $result->num_rows;
		    // Execute SQL statement
		    for ($j = 0; $j < $rows; ++$j)
		    {
		        $result->data_seek($j);
		        $row = $result->fetch_array(MYSQLI_NUM);
		        if($j % 2 == 1) {
		          echo "<tr>
		          <td>{$row[0]}</td>
		          <td>{$row[1]}</td>
		          <td>{$row[2]}</td>
		          </tr>";
		        } else {
		          echo "<tr class='even'>
		          <td>{$row[0]}</td>
		          <td>{$row[1]}</td>
		          <td>{$row[2]}</td>
		          </tr>";
		        }
		    }

	?>
</table>
			<form id="backToIndex" method="POST">
				<p><label class="title" for="selectTable"> Select Table:</label>
					<select name="selectTable" id="selectTable">
						<option></option>
						<option>Back</option>
						<option>Students</option>
						<option>Teachers</option>
					</select></p>
					<div class="submit">
		 			<input type="submit" value="View" />
				</div>
			</form>
</div>
</body>
</html>
