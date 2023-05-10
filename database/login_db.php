<?php

$servername = "localhost";
$username = "root";
$passwd = "";
$dbname = "east_african_explorer";

$conn = mysqli_connect($servername, $username, $passwd,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];



// // Check if the form has been submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     // Check if the email and password have been filled in
//     if (!empty($_POST["email"]) && !empty($_POST["password"])) {
//         // TODO: Add your login logic here

//         // If the login is successful, redirect to the reservation page
//         header("Location: reservation.php");
//         exit();

//     } else {
//         // If the email or password is missing, display an error message
//         echo '<script>alert("Please fill in all fields!!");</script>';
//     }
// }




// Fetch the user record using prepared statement
$stmt = $conn->prepare("SELECT * FROM registration WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists in database
if ($result->num_rows === 1) {
  $row = $result->fetch_assoc();
  $hashed_password = $row['password'];

  // Verify the password using password_verify()
  if (password_verify($password, $hashed_password)) {
    // echo "Logged in successfully";
    echo '<script>alert("Logged in successfully");</script>';
    // $_SESSION['email'] = $row['email'];
    // $_SESSION['pass'] = $row['password'];
    header('Location:../login/reservation.php');
    exit;
  } else {
    // echo "Invalid password";
  }
} else {
  echo '<script>alert("Please fill in all fields!!"); window.location.href="http://localhost/workspace/login/login.php";</script>';
}

$stmt->close();



?>