<?php

$servername = "localhost";
$username = "root";
$passwd = "";
$dbname = "east_african_explorer";

// Create connection
$conn = mysqli_connect($servername, $username, $passwd,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


if ($_POST['password'] !== $_POST['confirmpassword']){
   die("Error: Passwords do not match.");
}


// insert data ito database table - registration.

if(isset($_POST['submit'])) {
   $lname = $_POST['lname'];
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash the plain-text password
   $sql = "INSERT INTO registration (fname,lname,email,mobile,password)
           VALUES ('$fname','$lname','$email','$mobile','$password')";
   if (mysqli_query($conn, $sql)) {
      // echo "New record has been added successfully !<br>";
      // echo "Please login to the site!";
      echo '<script>alert("Registration successful,Please login to the site! "); window.location.href="http://localhost/workspace/login/login.php";</script>';
   } else {
      
       echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }
   mysqli_close($conn);
}


?>