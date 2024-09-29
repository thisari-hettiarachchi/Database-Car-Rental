<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];

    // Basic form validation
    if (!$uname || !$psw) {
        die("Username and password are required.");
    }

    // Database connection details
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "automart";

    // Create a new database connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to check for the user in the database
    $sql = "SELECT FirstName, LastName, Email, MobileNo, address, postal_code, Username, Password FROM customers WHERE Username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind the parameters and execute the query
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if ($psw == $row["Password"]) {
            // Set session variables
            $_SESSION['Username'] = $uname;
            $_SESSION['FirstName'] = $row['FirstName'];
            $_SESSION['LastName'] = $row['LastName'];

            // Redirect to the home page after successful login
            header("Location: Home.html");
            exit();
        } else {
            // Invalid password
            echo "<script>         
                alert('Invalid password. Please try again.');
                window.location.href = 'Login.php';
                </script>";
        }
    } else {
        // User not found
        echo "<script>
            alert('User not registered. Please sign up.');
            window.location.href = 'Sign up.html';
            </script>";
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
    <>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <!-- JavaScript -->
        <script src="search.js"></script>

        <!-- Icon link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            
        <title>Auto Mart Login</title>

        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .topnav {
                position: absolute;
                top: 0;
                width: 100%;
                overflow: hidden;
                background: transparent;
                display: flex;
                align-items: center;
                padding: 10px 0;
                justify-content: space-between;
                z-index: 1;
            }

            .topnav .navbar-brand {
                margin-right: auto;
            }

            .topnav a {
                color: black;
                text-align: center;
                padding: 14px 20px;
                text-decoration: none;
                font-size: 20px;
            }

            .topnav a:hover {
                color: blue;
            }

            .topnav a.active {
                padding: 2px 12px;
                text-decoration: none;
                border-bottom: solid blue;
            }

            .search-form {
                display: flex;
                align-items: center;
            }

            .search-form input[type="text"] {
                padding: 6px;
                margin: 8px 0;
                font-size: 17px;
                border: 1px solid #ccc;
                border-radius: 5px 0 0 5px;
            }

            .search-form button {
                padding: 6px 10px;
                background: #ddd;
                border: none;
                border-radius: 0 5px 5px 0;
                cursor: pointer;
            }

            .search-form button img {
                width: 16px;
                height: 16px;
            }

            .topnav .closebtn, .openbtn{
                display: none;
            }

            @media (max-width: 768px) {
                .topnav {
                    height: 100%;
                    width: 0; 
                    position: fixed;
                    z-index: 2;
                    top: 0;
                    left: 0;
                    background-color: #12223c;
                    overflow-x: hidden;
                    transition: 0.5s;
                    display: block;
                    padding-top: 60px;
                    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
                }

                .topnav .closebtn,
                .openbtn{
                    display: inline; 
                }

                .topnav.open {
                    width: 250px; 
                }

                .topnav a {
                    text-decoration: none;
                    color: white;
                    display: block;
                    transition: 0.3s;
                    padding: 10px 0;
                    font-size: 20px;
                    position: relative;
                }

                .topnav a.hover {
                    text-decoration: none;
                }

                .topnav a.active {
                    border-bottom: none; 
                    padding: 10px 0; 
                }

                .topnav .closebtn {
                    position: absolute;
                    top: 0;
                    right: 25px;
                    font-size: 36px;
                    margin-left: 50px;
                    color: white;
                }

                .openbtn {
                    top: 20px;      
                    left: 20px;     
                    z-index: 1000; 
                    font-size: 20px;
                    cursor: pointer;
                    background-color: #12223c;
                    color: white;
                    padding: 10px 15px;
                    border: none;
                }

                .openbtn:hover {
                    background-color: #444;
                }

                .search-form {
                    padding-left: 32px;
                    margin-top: 20px;
                }

                .search-form input {
                    width: 80%;
                    padding: 8px;
                }

                .search-form button {
                    padding: 8px 10px;
                }

                .topnav .navbar-brand {
                    margin-bottom: 10px; 
                    text-align: center; 
                }
                
                .hero {
                    flex-direction: column;
                    height: auto;
                }

                .hero-container {
                    margin-left: 0;
                    max-width: 90%;
                    padding: 10px;
                    align-items: center;
                    margin-right: 40px;
                }

                .login-form {
                    width: 80%;
                    margin-top: 20px;
                    align-items: center;
                    margin-bottom: 50px;
                }

                footer {
                    padding: 10px;
                    margin-top: 40px;
                }

                .icon-container p {
                    font-size: 12px;
                }

                .fa-square-facebook,
                .fa-square-instagram,
                .fa-square-x-twitter {
                    font-size: 30px;
                }
            }

            @media (max-width: 480px) {
                .topnav a {
                    font-size: 16px;
                    padding: 8px;
                }

                .hero-container {
                    margin-left: 0;
                    max-width: 100%;
                    padding: 5px;
                    font-size: 16px;
                }

                .login-form {
                    width: 90%;
                    margin: 20px auto;
                }

                .hero {
                    flex-direction: column;
                    height: auto;
                }

                .login-form h2 {
                    font-size: 18px;
                }

                .login-form button {
                    padding: 12px;
                }

                .search-form input[type="text"],
                .search-form button {
                    font-size: 15px;
                    padding: 5px;
                }

                footer {
                    padding: 5px;
                    font-size: 12px;
                }

                .fa-square-facebook,
                .fa-square-instagram,
                .fa-square-x-twitter {
                    font-size: 25px;
                }

                .bottom-section p {
                    font-size: 12px;
                }

                .signup-text a {
                    font-size: 12px;
                }
            }



            .hero {
                height: 700px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                overflow: hidden;
                color: black;
            }

            .hero::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url("Images/Login\ bg.jpg") no-repeat center center/cover;
                filter: blur(8px); 
                z-index: -1; 
            }

            .hero-container {
                margin-left: 100px;
                z-index: 1;
                max-width: 600px;
                font-size: 20px;
                padding: 20px;
                border: 2px solid #000;
                background-color: transparent;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: center;
            }

            .login-form {
                background: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                width: 300px;
                height: 400px;
                z-index: 1;
                margin-right: 50px;
            }

            .login-form h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            .login-form input[type="text"],
            .login-form input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                border-radius: 5px;
            }

            .login-form button {
                background-color: blue;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                border-radius: 5px;
            }

            .login-form button::hover {
                opacity: 0.8;
            }

            .forgot-password {
                display: block;
                text-align: right;
                margin: 10px 0;
                color: blue;
                text-decoration: none;
                font-size: 14px;
            }

            .forgot-password:hover {
                text-decoration: underline;
            }

            .signup-text {
                text-align: center;
                margin-top: 20px;
                font-size: 14px;
            }

            .signup-text a {
                color: blue;
                text-decoration: none;
            }

            .signup-text a:hover {
                text-decoration: underline;
            }


            footer {
                background-color: #12223c;
                color: #ffffff;
                padding: 20px;
                text-align: center;
            }

            .bottom-section {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .bottom-section p {
                margin: 0;
            }

            .bottom-section a {
                margin: 0;
                text-decoration: none;
                color: grey;
            }

            .bottom-section a:hover {
                color: #2514b9;
            }


            .icon-container {
                display: flex;
                justify-content: flex-start;
                gap: 20px;
            }

            .icon-container p {
                margin: 0;
                margin-right: 10px;
            }

            .fa-square-facebook {
                font-size: 40px;
                color: blue;
            }

            .fa-square-instagram {
                font-size: 40px;
                color: #ee2a7b;
            }

            .fa-square-x-twitter {
                font-size: 40px;
                color: black;
            }

            nav ul {
                list-style: none;
                display: flex;
                justify-content: center;
            }

            nav li {
                margin: 0 10px;
            }

            nav a {
                text-decoration: none;
                color: grey;
            }

            nav a:hover {
                color: #2514b9;
            }

            .contact {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 20px;
                margin-top: 10px;
            }

            .contact img {
                max-width: 200px;
                height: auto;
            }

            .contact p {
                margin: 0;
            }

            .copyright {
                margin-top: 20px;
                font-size: 12px;
                color: #666;
            }



        </style>

        <!-- Favicon -->
        <link rel="shortcut icon" href="Images/Favicon.png" type="image/svg+xml">

    </head>

    <body>
        <!-- Navigation bar and background image -->
        <div class="bg-img">
            <div id="mySidenav" class="topnav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="navbar-brand" href="#">
                    <img src="Images/Logo.png" alt="logo" style="width:250px;">
                </a>

                <div class="nav-links">
                    <a href="Home.html">Home</a>
                    <a href="Vehicle Rates.html">Vehicle Rates</a>
                    <a href="contact us.php">Contact Us</a>
                    <a class="active" href="login.php">Log In</a>
                </div>
                <form id="search-form" class="search-form" onsubmit="return myFunction()">
                    <input type="text" id="myInput" name="query" placeholder="Search...">
                    <button type="submit">
                        <img src="Images/Sear.png" alt="Search Icon">
                    </button>
                </form>

                <span class="openbtn" onclick="openNav()">&#9776;</span>

                <script>
                    function openNav() {
                        document.getElementById("mySidenav").classList.add("open");
                    }
        
                    function closeNav() {
                        document.getElementById("mySidenav").classList.remove("open");
                    }
        
                </script>

            </div>

        </div>

        <section class="hero">
            <div class="hero-container">
                <h1>Welcome to Auto Mart Car Rent Service</h1>
                <p>Log in to access our extensive fleet of vehicles, manage your bookings, and enjoy a seamless rental experience.
                Enter your credentials to get started and discover how we can meet your transportation needs.</p>
            </div>

            <form id="signup-section" action="login.php" method="post">
                <div class="login-form">
                    <h2>Login</h2>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                        <p class="signup-text">Don't have an account? <a href="signup.php">Sign Up</a></p>
                        <button type="submit">Login</button>
                </div>
            </form>    
        </section>

        <!-- Footer -->
        <footer>
            <div class="bottom-section">
                <p>You have any questions or need additional information? <a href="contact us.php">Contact Us</a></p>
                <div class="icon-container">
                    <p>Follow us on</p>
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                    <i class="fa-brands fa-square-x-twitter"></i>
                </div>
            </div>

            <nav>
                <ul>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </nav>

            <div class="contact">
                <p>Call Us: +94 77 586 2434</p>
                <p>Email: support@automart.lk</p>
            </div>
            <p class="copyright">&copy; 2024 AutoMart</p>
        </footer>
    </body>
</html>
