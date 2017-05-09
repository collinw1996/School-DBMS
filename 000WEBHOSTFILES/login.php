<?php
  require_once 'header.php';
  echo "<div class='main'><h3>Please enter your details to log in</h3>";
  echo "<link href='css/style.css' type='text/css' rel='stylesheet' />";
  $error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        $error = "Not all fields were entered<br>";
    else
    {
      $result = queryMySQL("SELECT Username,Password FROM SYSTEMADMIN
        WHERE Username='$user' AND Password='$pass'");

      if ($result->num_rows == 0)
      {
        $error = "<span class='error'>Username/Password
                  invalid</span><br><br>";
      }
      else
      {
        $_SESSION['Username'] = $user;
        $_SESSION['Password'] = $pass;
        die("You are now logged in. Please <a href='members.php?view=$user'>" .
            "click here</a> to continue.<br><br>");
      }
    }
  }

  echo <<<_END
    <form method='post' action='login.php'>$error
    <span class='fieldname'>Username</span><input type='text'
      maxlength='25' name='user' value='$user'><br>
    <span class='fieldname'>Password</span><input type='password'
      maxlength='25' name='pass' value='$pass'>
_END;
?>

    <br>
    <span class='fieldname'>&nbsp;</span>
    <input type='submit' value='Login'>
    </form><br></div>
  </body>
</html>
