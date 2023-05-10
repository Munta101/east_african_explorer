<!-- To add functionality for a "Forgot Password" feature, you could do the following:

Add a link to the login page that directs users to a "Forgot Password" page.
Diff
Copy
Insert
New
<a href="forgot_password.php"> Forgot password?</a> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
<form action="reset_password.php" method="POST">
        <label for="email">Enter your email:</label><br>
        <input type="email" id="email" name="email"><br>
        <button type="submit" name="submit">Reset Password</button>
    </form>

</body>
</html>

<!-- Create a new page named "forgot_password.php" where users can enter their email address associated with their account. -->

<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Check if email exists in database
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($result) == 1) {

        // Generate unique token
        $token = md5(rand().time());

        // Store token in database for this user
        mysqli_query($conn, "UPDATE users SET reset_token='$token' WHERE email='$email'");

        // Send password reset email to user with link to reset_password.php and token as parameter:
        $to = $email;
        $subject = "Password Reset";
        $message = "Click the following link to reset your password: http://example.com/reset_password.php?token=$token";
        $headers = "From: webmaster@example.com" . "\r\n" .
        "CC: somebodyelse@example.com";
        
        mail($to, $subject, $message, $headers);
    }

    // Display message to user
    echo "An email has been sent to your address with instructions on how to reset your password.";
}

?>

<!-- Create a new page named "reset_password.php" where users can enter their new password along with the token received in the email. -->


<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <form action="update_password.php" method="POST">
        <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
        <label for="password">Enter new password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="confirm_password">Confirm new password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password"><br>
        <button type="submit" name="submit">Save Password</button>
    </form>
</body>
</html>

<!-- Once a user submits their new password and the token associated with that user matches the one in the database, update the user's password. -->
<?php
if (isset($_POST['submit'])) {
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if both passwords match
    if ($password === $confirm_password) {

        // Update user's password in database
        mysqli_query($conn, "UPDATE users SET password='$password' WHERE reset_token='$token'");

        // Display message to user
        echo "Your password has been successfully updated.";
    } else {
        // Display error message to user
        echo "Passwords do not match.";
    }
}
?>