<?php

include 'header.php';

?>

<!DOCTYPE html>
<html>      
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="login_style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="index.php"><i class="fa-solid fa-tooth fa-lg" style="color: #ffffff;"></i> &nbsp C U Smile </i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link lg text-end fs-4 nav-services navbar-selections" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item nav-about">
                    <a class="nav-link text-end fs-4 navbar-selections" href="aboutUs.html">About</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link fs-4 login-button text-end navbar-selections" >Login</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="center">
        <div class="login-box" style="width: 400px; height: 400px;">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="email_or_id">Email or ID</label>
            <input type="text" name="email_or_id" id="email_or_id" placeholder="Email or ID">
            <label for="password">Password</label>
            <input type="password" name="password" id=" password" placeholder="Password">
            <input type="submit" value="Login" name="login">
        </form>
        <p>Don't have an account? <a href="sign-up.php">Sign up!</a></p>
        </div>
    </div>
</body> 
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "flatpickr";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Check if the form has been submitted
if (isset($_POST['login'])){
// Get the email and password from the form
$email = $_POST['email_or_id'];
$password = $_POST['password'];
// Check if the user exists in the database
$sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";
$result = $conn->query($sql);
// Check if the user was found
if ($result->num_rows > 0){
// The user was found, log them in
$row = $result->fetch_assoc();
$_SESSION['email'] = $row['user_email'];
header("Location: appointment.php");
exit;
}else{
// The user was not found, display an error message
echo "Invalid email or password";
}
}
// Close the connection
$conn->close();
?>