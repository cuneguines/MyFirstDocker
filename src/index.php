<!DOCTYPE HTML>  
<html>
<head>
    <style>
        html
        {
            background-color:aqua;
        }
        </style>
</head>
<body>  

<?php

$mysqli = new mysqli('db01', 'root', 'root_pass', 'vishu');

// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2 style=margin-left:40%>PHP Form Validation Example</h2>
<form style=margin-left:40%;method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Name:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="name">
  <br><br>
  E-mail: &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email">
  <br><br>
  Website: &nbsp;&nbsp;&nbsp;<input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit"style='background-color:cornsilk'>  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
