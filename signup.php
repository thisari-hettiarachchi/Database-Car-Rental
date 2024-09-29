<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!--Java script-->
    <script src="search.js"></script>

    <!--Icon link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Auto Mart Sign Up</title>

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
    padding: 2px;
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

.search-container {
    text-align: center;
    color: #fff;
}

.search-container h1 {
    font-size: 3rem;
    margin-bottom: 10px;
}

.search-container p {
    font-size: 1.2rem;
    margin-bottom: 20px;
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

    .topnav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    .openbtn {
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

    .hero-container {
        margin-left: 20px;
        max-width: 90%;
        padding: 20px;
        width: auto;
    }

    .hero-container h1 {
        font-size: 24px;
    }

    .hero-container button {
        padding: 8px 15px;
    }

    .search-container h1 {
        font-size: 2.5rem;
    }

    #signup-section {
        width: 90%;
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .topnav a {
        font-size: 16px;
        padding: 8px;
    }

    .hero-container {
        margin-left: 10px;
        max-width: 100%;
        padding: 15px;
        width: auto;
    }

    .hero-container h1 {
        font-size: 20px;
    }

    .hero-container button {
        padding: 6px 10px;
    }

    .search-container h1 {
        font-size: 2rem;
    }

    #signup-section {
        width: 100%;
        padding: 15px;
    }

    footer {
        padding: 10px;
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
    background: url("Images/sign\ in.png") no-repeat center center/cover;
    z-index: -1; 
}

.hero-container {
    margin-left: 100px;
    z-index: 1;
    max-width: 600px;
    font-size: 20px;
    padding: 10px;
    background-color: transparent;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 600px;
}

.hero-container button {
    background: transparent;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    border: 2px solid rgba(255, 255, 255, .5);
}

.hero-container button:hover {
    background-color: rgb(100, 100, 170);
}

.hero-container h1 {
    font-size:30px;
    color: blue;
}

html {
    scroll-behavior: smooth;
}

.register-button {
    display: inline-block;
    background: transparent;
    color: rgb(255, 255, 255);
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    border: 2px solid rgba(255, 255, 255, .5);
    text-decoration: none;
}

.register-button:hover {
    background-color: rgb(100, 100, 170);
}

#signup-section {
    background-color: rgba(138, 138, 255, 0.897);
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    padding: 30px;
    width: 70%;
    min-width: 300px;
    margin: 40px auto; 
    overflow: hidden;
    z-index: 1;
    margin-top: 10px;
}

#signup-section h2 {
    text-align: center;
    margin-bottom: 20px;
}

.signup-page input[type="text"],
.signup-page input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 5px;
}

.signup button {
    background-color: blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
}

.signup button::hover {
    opacity: 0.8;
}

.login-text {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}

.login-text a {
    color: blue;
}

.login-text a:hover {
    text-decoration: underline;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

input.invalid {
  background-color: #ffdddd;
}

.signup-page {
  display: none;
}

.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

.step.finish {
  background-color: #04AA6D;
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


    <!--Favicon-->
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
                    <a href="Home.php">Home</a>
                    <a href="vehicle rates.php">Vehicle Rates</a>
                    <a href="contact us.php">Contact Us</a>
                    <a class="active" href="login.php">Log In</a>
            </div>

            <form id="search-form" class="search-form" onsubmit="return myFunction()">
                <input type="text" id="myInput" name="query" placeholder="Search...">
                <button type="submit">
                    <img src="Images/Sear.png" alt="Search Icon">
                </button>
            </form>
        </div>

        <span class="openbtn" onclick="openNav()">&#9776;</span>

    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").classList.add("open");
        }

        function closeNav() {
            document.getElementById("mySidenav").classList.remove("open");
        }
    </script>

<section class="hero">

<div class="hero-container">

    <h1>Welcome to AutoMart!</h1>

    <p>Forget expensive, impersonal rental car companies - AutoMart offers a revolutionary new way to rent out vehicles.<br>
        <p><b>AutoMart has all your driving needs covered!</b></p>
        <br>Create your account now to unlock a seamless car rental experience. <br>Enjoy hassle-free bookings, exclusive offers, and more.
    </p>

    <a href="#signup-section" class="register-button">Register Now</a>

</div>

</section>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="signup-section">
        <h2>Sign Up Here</h2>

        <div class ="signup">
                <div class="signup-page">Name:
                    <p><input type="text" placeholder="First name..." name="firstName" oninput="this.className = 'firstName'"></p>
                    <p><input type="text" placeholder="Last name..." name="lastName" oninput="this.className = 'lastName'"></p>
                </div>
                
                <div class="signup-page">Contact Info:
                    <p>
                        <input type="email" id="email" placeholder="E-mail..." name="email" 
                               oninput="this.className = 'email'" 
                               required>
                        <span id="emailError" style="color:red; display:none;">Invalid email address</span>
                    </p>
                    <p>
                        <input type="tel" id="phone" placeholder="Phone..." name="phone" 
                               oninput="validatePhoneNumber()" 
                               pattern="\d{10}" 
                               title="Please enter a 10-digit phone number" 
                               required>
                        <span id="phoneError" style="color:red; display:none;">Phone number must be 10 digits</span>
                    </p>
                </div>

                <script>
                    document.getElementById("email").addEventListener("input", function() {
                        const emailInput = this;
                        const emailError = document.getElementById("emailError");
                
                        if (emailInput.validity.typeMismatch) {
                            emailError.style.display = "block";
                        } else {
                            emailError.style.display = "none";
                        }
                    });
               
                    function validatePhoneNumber() {
                        const phoneInput = document.getElementById("phone");
                        const phoneError = document.getElementById("phoneError");
                        const phonePattern = /^\d{10}$/; 
                
                        if (phonePattern.test(phoneInput.value)) {
                            phoneError.style.display = "none";
                            phoneInput.className = 'phone';
                        } else {
                            phoneError.style.display = "block";
                        }
                    }
                </script>

            <div class="signup-page">Address Info:
                    <p><input type="text" placeholder="Address..." name="address" oninput="this.className = 'address'"></p>
                    <p><input type="text" placeholder="Postal Code." name="postalCode" oninput="this.className = 'postalCode'"></p>
                </div>
            
                <div class="signup-page">Login Info:
                    <p><input type="text" placeholder="Username..." name="username" oninput="this.className = 'username'"></p>
                    <p><input type="password" placeholder="Password..." name="password" oninput="this.className = 'password'"></p>
                    <p><input type="password" placeholder="Confirm Password..." name="confirm_password" oninput="this.className = 'confirm_password'"></p>
                </div>
                
                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>

                    <div style="float:left;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    </div>
                </div>

                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

                <button type="submit">Sign Up</button>

                <p class="login-text">Already have an account? <a href="login.php">Sign In</a></p>
            </div>
        </form>

        <script>
            var currentTab = 0; 
            showTab(currentTab);
            
            function showTab(n) 
            {
                var x = document.getElementsByClassName("signup-page");
                x[n].style.display = "block";
                
                if (n == 0) 
                {
                    document.getElementById("prevBtn").style.display = "none";
                } 
                else 
                {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) 
                {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                } 
                else 
                {
                    document.getElementById("nextBtn").innerHTML = "Next";
                }
                fixStepIndicator(n)
            }
            
            function nextPrev(n) 
            {
                
                var x = document.getElementsByClassName("signup-page");
                
                if (n == 1 && !validateForm()) return false;
            
                x[currentTab].style.display = "none";
                
                currentTab = currentTab + n;
            
                if (currentTab >= x.length) 
                {
                    
                    document.getElementById("signup-section").submit();
                    return false;
                }
                
                showTab(currentTab);
            }
            
            function validateForm() 
            {
                var x, y, i, valid = true;
                x = document.getElementsByClassName("signup-page");
                y = x[currentTab].getElementsByTagName("input");
                
                for (i = 0; i < y.length; i++) 
                {
                    
                    if (y[i].value == "") 
                    {
                        y[i].className += " invalid";
                        valid = false;
                    }
                }
                
                if (valid) 
                {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; 
            }
            
            function fixStepIndicator(n) 
            {
                
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) 
                {
                    x[i].className = x[i].className.replace(" active", "");
                }
                x[n].className += " active";
            }
        </script>


    <!-- PHP Processing Code -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $postalCode = $_POST['postalCode'];
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($Password !== $confirm_password) {
            echo "<script>alert('Passwords do not match');</script>";
        } elseif ($firstName && $lastName && $email && $phone && $address && $postalCode && $Username && $Password) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "automart";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $stmt = $conn->prepare("INSERT INTO customers (FirstName, LastName, Email, MobileNo, address, postal_code, Username, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssiss", $firstName, $lastName, $email, $phone, $address, $postalCode, $Username, $Password);

            if ($stmt->execute()) {
                echo "<script>alert('Registration Success'); window.location.href='Login.html';</script>";
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }

            $stmt->close();
            $conn->close();
        } else {
            echo "<script>alert('Invalid input.');</script>";
        }
    }
    ?>

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
