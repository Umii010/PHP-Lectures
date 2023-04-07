<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Simple HTML Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<form action="insert1.php" method="post">
    <center>
    <h2>Simple HTML Form</h2>
   <label for="Name">Name:</label>
   <input type="text" name="name" placeholder="Enter your name"><br>
   <label for="Email">Email:</label>
   <input type="email" name="email" placeholder="Enter your email"><br>
   <label for="Password">Password:</label>
   <input type="password" name="password" placeholder="Enter your password"><br>
   <input type="submit" name="submit" value="submit">
   </center>
</form>  
</body>
</html> -->

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<h2>PHP Form Validation</h2>
<?php
// define variables and set to empty values
$nameErr = $emailErr  = $passwordErr = "";
$name = $email = $password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["password"])) {
    $website = "";
  } else {
    $website = test_input($_POST["password"]);
  }

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="text" name="password">
  <span class="error"><?php echo $passwordErr;?></span>
  <br><br>
 <br>
  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>