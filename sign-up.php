<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="Sign-up_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <a class="navbar-brand fs-4" href="#"><i class="fa-solid fa-tooth fa-lg" style="color: #ffffff;"></i> &nbsp C U Smile </i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link lg text-end fs-4 nav-services navbar-selections" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item nav-about">
                    <a class="nav-link text-end fs-4 navbar-selections" href="aboutus.html">About</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link fs-4 login-button text-end navbar-selections" >Login</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="center">
		<div class="signup-box"style="width: 400px; height: 400px;">
			<h2>Sign Up</h2>
			<form action="sign-up.php" method="post">
                <label for="email_or_id">Email or ID</label>
				<input type="text" name="email"id="email_or_id" placeholder="Email or ID">
                <label for="password">Password</label>
				<input type="password" name="password"id="password" placeholder="Password">
				<input type="submit" value="Sign Up" name="signup">
			</form>
			<p>Already have an account? <a href="login.php">Log in!</a></p>
		</div>
	</div>

    <footer>
        <div class="container">
          <div class="footer-content">
            <div class="logo">
              <a class="navbar-brand fs-4" href="#"><i class="fa-solid fa-tooth fa-lg" style="color: #ffffff;"></i> &nbsp C U Smile </a>
            </div>
            <div class="contact-info">
              <p>Email: <a href="mailto:youremail@example.com">CUsmile@gmail.com</a></p>
             <p>Mobile #: <a href="tel:+1234567890">(032) 230 0100</a></p>
            </div>
          </div>
        </div>
      </footer>
      
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "final_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if the form has been submitted
if (isset($_POST['signup'])){
    

    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Check if the email already exists in the database
    $sql = "SELECT * FROM users WHERE user_email = '$email'";
    $result = $conn->query($sql);
    // Check if the email was found
    if ($result->num_rows > 0){

        // The email already exists, display an error message
        echo "The email already exists.";
    } else {
        // The email does not exist, insert the user into the database
        $sql_insert = "INSERT INTO users (user_email, user_password) VALUES ('$email', '$password')";

        $result_insert = $conn->query($sql_insert);
        if ($result_insert){
            header("Location: login.php");
            exit;
        } else {
            echo "Error inserting user into users table";
        }
    }
}
// Close the connection
$conn->close();
?>
