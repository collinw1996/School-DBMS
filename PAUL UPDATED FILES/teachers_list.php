<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
  	<link href="css/pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Teacher View</title>
	</head>

	<body>
    <h1>Teacher View</h1>
    <p>Below is a list of your fellow co-workers<br /></p>
     <div id="main">
     <table>
       <tr class="head">
       <th>First Name</th>
       <th>Last Name</th>
			 <th>Gender</th>
       <th>Phone</th>
			 <th>Email</th>
			 <th>CourseID</th>
       </tr>
<?php
require_once 'db_connect.php';

    $query = "SELECT Fname,Lname,Gender,Phone,Email,courseID FROM teacher";
		$result = $conn->query($query);
		$rows = $result->num_rows;

		for($j = 0; $j < $rows; ++$j)
		{
			$result->data_seek($j);
			$rows = $result->fetch_array(MYSQLI_NUM);
			if($j % 2 == 1) {
	      echo "<tr>
		    <td>{$rows[0]}</td>
		    <td>{$rows[1]}</td>
				<td>{$rows[2]}</td>
				<td>{$rows[3]}</td>
				<td>{$rows[4]}</td>
				<td>{$rows[5]}</td>
				<td>{$rows[6]}</td>
		    </tr>";
			} else {
				echo "<tr class='even'>
				<td>{$rows[0]}</td>
		    <td>{$rows[1]}</td>
				<td>{$rows[2]}</td>
				<td>{$rows[3]}</td>
				<td>{$rows[4]}</td>
				<td>{$rows[5]}</td>
				<td>{$rows[6]}</td>
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
