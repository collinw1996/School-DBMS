<!DOCTYPE html>
<html>
	<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
  	<link href="css/pagestyle.css" type="text/css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Teachers Page</title>
	</head>

	<body>
		<h1>Teachers</h1>
		<p>Please choose a table to view<br /> Once selected, you may insert, delete, or modify data</p>
		<div id="controlBox">
			<div id="insert">
        <form action="admin_viewTeacher.php" method="post">
			<fieldset>
				<legend>INSERT</legend>
				<p>
					<label class="title" for="fname">First Name:</label>
					<input type="text" name="fname" id="fname" required="required"><br />
					<label class="title" for="lname">Last Name:</label>
					<input type="text" name="lname" id="lname" required="required"><br />
          <label class="title" for="ssn">SSN:</label>
  				<input type="text" name="ssn" id="ssn" required="required"><br />
					<label class="title" for="gender">Gender:</label>
					<input type="text" name="gender" id="gender" required="required"><br />
					<label class="title" for="email">Email Address:</label>
					<input type="text" name="email" id="email" required="required"><br />
					<label class="title" for="bdate">Birth Date:</label><br />
					<input type="date" name="bdate" id="bdate" required="required"><br />
					<label class="title" for="parentphone">Phone Number:</label>
					<input type="text" name="phone" id="phone" required="required"><br />
					<label class="title" for="fname">Address:</label>
					<input type="text" name="address" id="address" required="required"><br />
          <label class="title" for="salary">Salary:</label>
  				<input type="text" name="salary" id="salary" required="required"><br />
          <label class="title" for="courseid">Course ID:</label>
    			<input type="text" name="courseid" id="courseid" required="required"><br />
					<label class="title" for="username">Username:</label>
					<input type="text" name="username" id="username" required="required"><br />
					<label class="title" for="password" required="required">Password:</label>
					<input type="password" name="password" id="password"><br />
					<input type="submit" name="add" value="INSERT" />
        </form>
				</div>

					<div id="update">
            <form action="admin_viewTeacher.php" method="post">
					<fieldset>
						<legend>UPDATE</legend>
						<p>
						<label class="title" for="ssn">SSN:</label>
	    			<input type="text" name="ssn" id="ssn" required="required"><br />
						<label class="title" for="fname">First Name:</label>
  					<input type="text" name="fname" id="fname" required="required"><br />
  					<label class="title" for="lname">Last Name:</label>
  					<input type="text" name="lname" id="lname" required="required"><br />
  					<label class="title" for="gender">Gender:</label>
  					<input type="text" name="gender" id="gender" required="required"><br />
  					<label class="title" for="email">Email Address:</label>
  					<input type="text" name="email" id="email" required="required"><br />
  					<label class="title" for="bdate">Birth Date:</label><br />
  					<input type="date" name="bdate" id="bdate" required="required"><br />
  					<label class="title" for="phone">Phone Number:</label>
  					<input type="text" name="phone" id="phone" required="required"><br />
  					<label class="title" for="address">Address:</label>
  					<input type="text" name="address" id="address" required="required"><br />
            <label class="title" for="salary">Salary:</label>
    				<input type="text" name="salary" id="salary" required="required"><br />
            <label class="title" for="courseid">Course ID:</label>
      			<input type="text" name="courseid" id="courseid" required="required"><br />
  					<label class="title" for="username">Username:</label>
  					<input type="text" name="username" id="username" required="required"><br />
  					<label class="title" for="password" required="required">Password:</label>
  					<input type="password" name="password" id="password"><br />
							<input type="submit" name="edit" value="UPDATE" />
            </form>
						</div>

						<div id="delete">
              <form action="admin_viewTeacher.php" method="post">
						<fieldset>
							<!-- Delete based on primary key -->
							<legend>Delete</legend>
							<p><label class="title" for="ssn">SSN:</label>
								<input type="text" name="ssn" id="ssn" required="required"><br />
								<input type="submit" name = "delete" value="DELETE" />
              </form>
							</div>
		</div>

    <div id="main">
     <table>
       <tr class="head">
       <th>First Name</th>
       <th>Last Name</th>
			 <th>SSN</th>
       <th>Gender</th>
       <th>Birthdate</th>
       <th>Phone</th>
       <th>Address</th>
       <th>Email</th>
			 <th>Salary</th>
       <th>Username</th>
       <th>Password</th>
			 <th>Course ID</th>
       </tr>
<?php
require_once 'db_connect.php';
// Connect to MySQL DBMS

if (isset($_POST["add"]))
{
	$fname = get_post($conn, "fname");
	$lname = get_post($conn, "lname");
	$ssn = get_post($conn, "ssn");
	$gender = get_post($conn, "gender");
	$bdate = get_post($conn, "bdate");
	$phone = get_post($conn, "phone");
	$address = get_post($conn, "address");
	$email = get_post($conn, "email");
	$salary = get_post($conn, "salary");
	$username = get_post($conn, "username");
	$password = get_post($conn, "password");
	$courseID = get_post($conn, "courseid");
$query = "INSERT INTO teacher (Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
 VALUES ('$fname', '$lname', '$ssn', '$gender', '$bdate', '$phone', '$address', '$email', '$salary', '$username', '$password', '$courseID')";
 $result = $conn->query($query);
 if(!$result) echo "INSERT FAILED: $query<br />" . $conn->error;
}

elseif (isset($_POST["edit"])) {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$ssn = $_POST["ssn"];
	$gender = $_POST["gender"];
	$bdate = $_POST["bdate"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$salary = $_POST["salary"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$courseID = $_POST["courseid"];
$query = "UPDATE teacher SET Fname='$fname', Lname='$lname', Gender='$gender', Bdate='$bdate', Phone='$phone',
Address='$address', Email='$email', Salary='$salary', Username='$username', Password='$password', courseID='$courseID' WHERE Ssn='$ssn'";
$result = $conn->query($query);
}

elseif (isset($_POST["delete"])) {
$ssn = $_POST["ssn"];
$query = "DELETE FROM teacher WHERE Ssn=$ssn";
$result = $conn->query($query);
}

    $query = "SELECT * FROM teacher";
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
      <td>{$row[5]}</td>
      <td>{$row[6]}</td>
      <td>{$row[7]}</td>
  		<td>{$row[8]}</td>
      <td>{$row[9]}</td>
      <td>{$row[10]}</td>
  		<td>{$row[11]}</td>
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
      		<td>{$row[11]}</td>
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
