<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
  	<link href="css/pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Student Parents</title>
	</head>

	<body>
    <h1>Student Parents</h1>
    <p>Please choose a table to view<br /></p>
    <div id="main">
     <table>
       <tr class="head">
       <th>First Name</th>
       <th>Last Name</th>
			 <th>Phone</th>
			 <th>Address</th>
			 <th>Email</th> <!-- If we associate parent with studentID publicly/ Identity will be exposed -->
       </tr>
<?php
require_once 'db_connect.php';

    $query = "SELECT * FROM parent";
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
  ?>
</table>
	<form id="studentFormControl" method="POST">
		<p><label class="title" for="selectTable"> Select Table:</label>
			<select name="selectTable" id="selectTable">
				<option></option>
				<option>Back</option>
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
