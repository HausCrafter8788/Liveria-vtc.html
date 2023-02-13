<?php
$servername = "localhost";
$username = "ADMIN";
$password = "Password";
$dbname = "registration_db";

/// Create connextion
$conn = mysqli_connect($servername, $username, $password, $dbname);
/// Check connectiom
if (!$conn) {
    die("Connextion failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/index.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Liveria VTC</title>
    <link rel="website icon" type="png" href="images/logo.png">
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Codinglab</span>
                    <span class="profession">Web developer</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
				<li class="">
					<a href="#">
						<i class='bx bx-user-plus icon'></i>
						<span class="text nav-text">Register</span>
					</a>
				</li>
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-in icon' ></i>
                        <span class="text nav-text">Login</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Registration</div>        
        <form action="register.php" method="post">
            <label for ="first_name">Vorname:</label>
            <input type="text" name="first_name" id="first_name" required><br><br>
            <label for ="username">Username:</label>
            <input type="text" name="username" id="username" required><br><br>
            <label for ="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>
            <label for ="password">Passwort:</label>
            <input type="password" name="password" id="password" required><br><br>
            <input type ="submit" value="Submit">
        </form>
    </section>

    <script src="js/index.js"></script>
</body>
</html>

<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /// Escape user inputs for security
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']),
    $username = mysqli_real_escape_string($conn, $_POST['username']),
    $email = mysqli_real_escape_string($conn, $_POST['email']),
    $password = mysqli_real_escape_string($conn, $_POST['password']),

    // Attempt insert query execution
    $sql = "INSERT INTO registrants (first_name, username, email, password)
    VALUES ('$first_name', '$username', '$email' , '$password')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully.";
    } else {
        echo "ERROR : Could not execute §sql. " . mysqli_error($conn);
    }
}
// Close connection
mysqli_close($conn);
?>