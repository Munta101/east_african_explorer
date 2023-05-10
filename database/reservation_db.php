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
// echo '<script>alert("Connected successful");</script>';


// insert data ito database table - registration.
if(isset($_POST['submit']))
{    
    $class = $_POST['class'];
    $seat_number = $_POST['seat_number'];
    $stage = $_POST['stage'];     
    $destination = $_POST['destination'];
    $period = $_POST['period'];


    $sql = "INSERT INTO reservation (class,seat_number,stage,destination,period)
    VALUES ('$class','$seat_number','$stage','$destination','$period')";
    if (mysqli_query($conn, $sql)) {
    // echo "New record has been added successfully !";
    // echo '<script>alert("New record has been added successfully !");</script>';
    echo '<script>alert("Reservation has been made successfully"); window.location.href="http://localhost/workspace/login/reservation.php";</script>';
   

    } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}


     



 


?>