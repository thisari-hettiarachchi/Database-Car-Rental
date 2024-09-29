<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Java script-->
    <script src="search.js"></script>

    <!-- Icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Auto Mart Booking</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="Images/Favicon.png" type="image/svg+xml">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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

        .hero {
            height: 75vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            overflow: hidden;
            color: black;
        }

        .bg-text {
            color: rgb(0, 0, 0);
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 85%;
            padding: 30px;
            text-align: center;
        }

        .bg-text h1 {
            font-size: 90px; 
        }

        .slideshow-container {
            position: absolute;
            width: 100%;
            height: 100vh; 
            overflow: hidden;
        }

        .mySlides {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            vertical-align: middle;
        }

        .fade {
            animation-name: fade;
            animation-duration: 30s;
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        .topnav .closebtn, .openbtn{
            display: none;
        }

        @media (max-width: 768px) {
            .topnav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 3;
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

            .search-form input[type="text"] {
                font-size: 15px;
            }

            .slideshow-container {
                height: 75vh; 
            }

            .hero {
                margin-bottom: 0; 
                padding: 0; 
            }

            .bg-text {
                width: 70%; 
            }

            .bg-text h1 {
                font-size: 60px; 
            }

            .bottom-section {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .icon-container {
                justify-content: center;
            }

            .booking-container {
                margin-top: 0; 
            }

            .booking-form {
                gap: 15px;
            }

            .personal-details-group,
            .vehicle-info-group,
            .billing-address-group,
            .payment-details-group {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .topnav a {
                font-size: 16px;
                padding: 8px 12px;
            }

            .search-form input[type="text"] {
                font-size: 14px;
            }

            .slideshow-container {
                height: 60vh; 
            }

            .hero {
                height: 75vh; 
            }

            .bg-text h1 {
                font-size: 40px;
            }
            .bottom-section {
                flex-direction: column;
                gap: 5px;
            }

            .icon-container p {
                font-size: 14px;
            }

            .booking-container {
                width: 95%;
                padding: 10px;
            }

            .personal-info,
            .vehicle-info,
            .billing-info,
            .payment-info {
                gap: 0.5rem;
            }

            .personal-details-group,
            .vehicle-info-group,
            .billing-address-group,
            .payment-details-group {
                flex-direction: column;
            }

            button {
                padding: 8px;
            }
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

        .booking-container {
            width: 80%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 170px;
        }


        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #0056b3;
        }

        .booking-form {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 20px;
        }

        fieldset {
            border: 1px solid #000000;
            padding: 10px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
            padding: 0 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: rgb(0, 0, 0);
            font-size: 15px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button  {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .personal-info {
            display: flex;
            flex-direction: column; 
            gap: 1rem; 
        }

        .personal-details-group {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .personal-details-group > * {
            flex: 1; 
            min-width: 200px; 
        }

        .personal-details-group label {
            margin-right: 0.5rem; 
        }

        .personal-details-group select,
        .personal-details-group input {
            flex: 1; 
            min-width: 150px; 
        }
        .vehicle-info {
            display: flex;
            flex-direction: column; 
            gap: 1rem; 
        }

        .vehicle-info-group {
            display: flex;
            align-items: center; 
            gap: 1rem; 
        }

        .vehicle-info-group > * {
            flex: 1; 
            min-width: 150px; 
        }

        .vehicle-info-group label {
            margin-right: 0.5rem; 
        }

        .vehicle-info-group select,
        .vehicle-info-group input {
            flex: 1; 
            min-width: 150px; 
        }

        .billing-info {
            display: flex;
            flex-direction: column; 
            gap: 1rem; 
        }

        .billing-address-group {
            display: flex;
            align-items: center; 
            gap: 1rem; 
        }

        .billing-address-group > * {
            flex: 1; 
            min-width: 150px; 
        }

        .billing-address-group label {
            margin-right: 0.5rem; 
        }

        .billing-address-group select,
        .billing-address-group input {
            flex: 1; 
            min-width: 150px; 
        }

        .payment-info {
            display: flex;
            flex-direction: column; 
            gap: 1rem; 
        }

        .payment-details-group {
            display: flex;
            align-items: center; 
            gap: 1rem;
        }

        .payment-details-group > * {
            flex: 1; 
            min-width: 150px; 
        }

        .payment-details-group label {
            margin-right: 0.5rem; 
        }

        .payment-details-group select,
        .payment-details-group input {
            flex: 1; 
            min-width: 150px; 
        }

        .submit {
            background-color: blue;
        }

    </style>
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
                <a href="login.php">Log In</a>
            </div>
            <form id="search-form" class="search-form" onsubmit="return myFunction()">
                <input type="text" id="myInput" name="query" placeholder="Search...">
                <button type="submit">
                    <img src="Images/Sear.png" alt="Search Icon">
                </button>
            </form>
        </div>

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

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="Images/book-def.jpg" alt="Book Definition">
        </div>
        <div class="mySlides fade">
            <img src="Images/volvo car.jpeg" alt="Volvo Car">
        </div>
        <div class="mySlides fade">
            <img src="Images/booking-def.jpg" alt="Booking Definition">
        </div>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            if (dots.length > 0) {
                dots[slideIndex - 1].className += " active";
            }
            setTimeout(showSlides, 2000);
        }
    </script>

    <section class="hero">
        <div class="bg-text">
            <h1>BOOK YOUR <br> VEHICLE TODAY</h1>
        </div>
    </section>

    <div class="booking-container">
        <h2>Booking Details</h2>
        <form class="booking-form" method="post">
            <fieldset>
                <legend>Personal Information</legend>

                <!-- Group 1: Title and Full Name -->
                <div class="personal-info">
                    <div class="personal-details-group">
                        <label for="title">Title:</label>
                        <select id="title" name="title">
                            <option value="mr">Mr.</option>
                            <option value="mrs">Mrs.</option>
                            <option value="miss">Miss</option>
                            <option value="ms">Ms.</option>
                            <option value="dr">Dr.</option>
                        </select>

                        <label for="full-name">Full Name:</label>
                        <input type="text" id="full-name" name="full-name" placeholder="Full name.." required>
                    </div>
                </div>

                <!-- Group 2: Address and Mobile No. -->
                <div class="personal-info">
                    <div class="personal-details-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Address.." required>

                        <label for="mobile">Mobile No.:</label>
                        <input type="tel" id="mobile" name="mobile" placeholder="Mobile number.." required>
                    </div>
                </div>

                <!-- Group 3: Email Address and NIC No. -->
                <div class="personal-info">
                    <div class="personal-details-group">
                        <label for="email">E-mail Address:</label>
                        <input type="email" id="email" name="email" placeholder="Email.." required>

                        <label for="NIC-no">NIC No.:</label>
                        <input type="text" id="NIC-no" name="NIC-no" placeholder="NIC no.." required>
                    </div>
                </div>

                <!-- Group 4: License No and License Expiry Date -->
                <div class="personal-info">
                    <div class="personal-details-group">
                        <label for="license-no">License No:</label>
                        <input type="text" id="license-no" name="license-no" placeholder="License number.." required>

                        <label for="license-expiry">License Expiry Date:</label>
                        <input type="date" id="license-expiry" name="license-expiry" required>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Vehicle Details</legend>

                <div class="vehicle-info">
                    <div class="vehicle-info-group">
                        <label for="vehicle_type">Choose Vehicle Type:</label>
                        <select id="vehicle_type" name="vehicle-type">
                            <option value="mini-cars">Mini Car</option>
                            <option value="general-car">General Car</option>
                            <option value="premium-car">Premium car</option>
                            <option value="electri-car">Electric Car</option>
                            <option value="lxury-car">Luxury Car</option>
                            <option value="4wd-suv">4WD and SUV</option>
                        </select>

                        <label for="vehicle-name">Vehicle Name:</label>
                        <input type="text" id="vehicle-name" name="vehicle-name" placeholder="Vehicle name.." required>
                    </div>
                    
                    <div class="vehicle-info-group">
						<label for="pick-up-location">Pick-Up Location:</label>
						<input type="text" id="pick-up-location" name="pick-up-location" placeholder="Location.." required>
					
						<label for="drop-off-location">Drop-Off Location:</label>
						<input type="text" id="drop-off-location" name="drop-off-location" placeholder="Location.." required>
					</div>
                </div>

            </fieldset>

            <fieldset>
                <legend>Billing Information</legend>
				
				<div class="billing-info">
                    <div class="billing-address-group">
                        <label for="billing-address">Billing Address:</label>
                        <input type="text" id="billing-address" name="billing-address" placeholder="Billing address.." required>
                    
                        <label for="billing-address-optional">Billing Address (Optional):</label>
                        <input type="text" id="billing-address-optional" name="billing-address-optional" placeholder="billing address..">
                    </div>	
                </div>
                
            </fieldset>

            <fieldset>
                <!-- Payment Details Section -->
                <legend>Payment Details</legend>

                <div class="payment-info">
                    <div class="payment-details-group">
                        <label for="card-type">Card Type:</label>
                        <select id="card-type" name="card-type">
                            <option value="visa">Visa</option>
                            <option value="mastercard">MasterCard</option>
                        </select>
                   
                        <label for="card-number">Card Number:</label>
                        <input type="text" id="card-number" name="card-number" placeholder="Card number.." required>
                    </div>
                </div>

                <div class="payment-info">
                    <div class="payment-details-group">
                        <label for="card-expiry">Expiry Date:</label>
                        <input type="month" id="card-expiry" name="card-expiry" required>
                    
						<label for="card-cvn">CVN:</label>
                        <input type="text" id="card-cvn" name="card-cvn" placeholder="123" required>
                    </div>
                </div>
            </fieldset>

            <button type="submit">Submit</button>
        </form>
    </div>

        <!-- PHP Code for form submission -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $title = $_POST['title'];
            $fullName = $_POST['full-name'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $nic = $_POST['NIC-no'];
            $licenseNo = $_POST['license-no'];
            $licenseExpiry = $_POST['license-expiry'];
            $vehicleType = $_POST['vehicle-type'];
            $vehicleName = $_POST['vehicle-name'];
            $pickUpLocation = $_POST['pick-up-location'];
            $dropOffLocation = $_POST['drop-off-location'];
            $billingAddress = $_POST['billing-address'];
            $billingAddressOptional = $_POST['billing-address-optional'];
            $cardType = $_POST['card-type'];
            $cardNumber = $_POST['card-number'];
            $cardExpiry = $_POST['card-expiry'];
            $cvv = $_POST['cvv'];

            // Database connection (replace with actual credentials)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "automart";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Insert data into database
            $sql = "INSERT INTO bookings (title, full_name, address, mobile, email, NIC_no, license_no, license_expiry, vehicle_type, vehicle_name, pick_up_location, drop_off_location, billing_address, billing_address_optional, card_type, card_number, card_expiry, cvv) 
                    VALUES ('$title', '$fullName', '$address', '$mobile', '$email', '$nic', '$licenseNo', '$licenseExpiry', '$vehicleType', '$vehicleName', '$pickUpLocation', '$dropOffLocation', '$billingAddress', '$billingAddressOptional', '$cardType', '$cardNumber', '$cardExpiry', '$cvv')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Booking successful!</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>
    </div>

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
