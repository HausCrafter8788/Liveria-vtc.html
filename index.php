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
                    <span class="name">Liveria VTC</span>
                    <span class="profession">Spedition & Logistig</span>
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
					<a href="register.php">
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
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
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
        <div class="text">Dashboard Sidebar</div>
    </section>

    <script src="js/index.js"></script>
</body>
</html>
