<?php
session_start();

// Define constants for site and database connection
define('SITEURL', 'http://localhost/automart/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'automart');

// Establish database connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));

// Select the database
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- JavaScript -->
    <script src="search.js"></script>

    <!-- Icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Auto Mart</title>

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
            background:transparent;
            display: flex;
            align-items: center;
            padding: 10px 0;
            justify-content: space-between;
            z-index: 1; 
        }

        .topnav .navbar-brand {
            margin-right: auto;
            width: 50px;
            height: auto;
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

        .topnav a:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .topnav a.active {
            padding: 2px;
            text-decoration: none; 
            border-bottom:  solid blue; 
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
            background: url("Images/road\ car.jpg") no-repeat center center;
            background-size: cover;
            height: 109vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .topnav .closebtn, .openbtn{
            display: none;
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

        .bg-text {
            background-color: rgba(0, 0, 0, 0.4);
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            width: 85%;
            padding: 30px;
            text-align: center;
        }

        .about-container {
            display: flex;
            align-items: center;
            padding: 30px;
            gap: 30px;
            justify-content: space-between;
            background-color: #12223c;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 4000px;
            margin: 20px auto;
        }

        .about-text {
            max-width: 650px;
            text-align: left;
            color: white;
        }

        .about-us-heading {
            color: white;
            text-align: center;
            font-size: 30px;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .about-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            background-color: #12223c;
            border: 2px solid white; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .about-container img:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(24, 27, 177, 0.3);
        }

        * {
            box-sizing: border-box;
        }

        .vehicle-category h1 {
            color: blue;
            text-align: center;
            font-size: 30px;
        }

        .vehicle-category p {
            font-size: 20px;
            text-align: center;
            padding: 0 20px; 
            margin: 0 auto; 
            max-width: 80%; 
        }

        .row {
            margin: 8px -1px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .column {
            flex: 1;
            margin: 10px;
            position: relative;
        }

        .content {
            position: relative;
            text-align: center;
            color: white;
        }

        .content img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.5s ease;
        }

        .model-image:hover {
            transform: scale(1.05);
        }

        .model-link {
            display: block;
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
            background-color: #333;
            color: var(--bg-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .model-link:hover {
            color: #007bff;
        }

        .content a {
            position: absolute;
            bottom: 10px; 
            left: 0;
            right: 0;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            margin: 0;
            text-decoration: none;
        }


        .services-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #12223c;
            color: white;
        }

        .services-text {
            flex: 1;
            padding-right: 20px;
        }

        .services-text h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .services-text p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .services-images {
            display: flex;
            flex: 2;
            justify-content: space-between;
        }

        .service-item {
            position: relative;
            width: 50%;
            height: 300px;
            background-size: cover;
            background-position: center;
            margin: 0 10px;
        }

        #self-drive {
            background-image: url(Images/self\ drive.jpg);
        }

        #with-driver {
            background-image: url(Images/with\ driver.jpg);
        }

        .overlay {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            font-size: 18px;
        }

        .vehicle-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #12223c;
            color: white;
            width: 90%;
            max-width: 1200px;
        }

        .services-text {
            flex: 1;
            text-align: center;
            padding: 20px;
        }

        .services-text h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .services-text p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .details-button {
            padding: 10px 20px;
            background-color: white;
            color: #12223c;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .services-images {
            display: flex;
            flex: 2;
            justify-content: space-between;
        }

        .service-item {
            position: relative;
            width: 50%;
            height: 300px;
            background-size: cover;
            background-position: center;
            margin: 0 10px;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            font-size: 18px;
        }

        .whychoose-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .whychoose-heading {
            color: blue;
            text-align: center;
            font-size: 30px;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .values {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px; 
        }

        .value {
            padding: 20px;
            text-align: center;
        }

        .value img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }

        .value h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .value p {
            font-size: 14px;
            color: #666;
        }

        .review-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: white;
        }

        .review-rating {
            font-size: 1.2em;
            color: #f39c12;
            margin-bottom: 5px; 
        }

        .review-text {
            font-size: 1em;
            line-height: 1.5;
        }

        .reviews {
            width: 80%;
            margin: auto;
            padding-top: 0.05px;
            text-align: center;
            margin-bottom: 0.5px;
        }

        .review-row {
            display: flex; 
            justify-content: space-between; 
            flex-wrap: wrap; 
        }

        .reviews-col {
            flex-basis: 44%; 
            border-radius: 10px;
            margin-bottom: 5%;
            text-align: left;
            background-color: white;
            padding: 25px;
            cursor: pointer;
            display: flex;
            flex-direction: column; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border: 1px solid #12223c; 
        }

        .review-header {
            display: flex;
            align-items: center; 
            justify-content: space-between; 
        }

        .review-content {
            display: flex;
            align-items: flex-start; 
            margin: 10px 0; 
        }

        .review-content img {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            margin-right: 10px; 
        }

        .review-content .review-text {
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            flex-grow: 1;
        }

        .review-text h3 {
            margin: 0; 
        }

        .review-text p {
            margin: 0; 
        }

        .review-date {
            color: #888;
            font-size: 0.9em;
        }

        footer {
            background-color: #12223c;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            margin-top: 0.05px;
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

            .hero {
                background-size: contain; 
                height: 80vh; 
            }

            .search-container h1 {
                font-size: 2rem;
            }

            .search-container p {
                font-size: 1rem; 
            }

            .about-container {
                flex-direction: column; 
                padding: 20px;
            }

            .about-text {
                max-width: 100%; 
            }

            .services-container {
                flex-direction: column; 
            }

            .services-images {
                flex-direction: column;
                width: 100%; 
                max-width: 600px; 
                height: auto; 
                margin: 20px 0; 
                align-items: center;
            }

            .vehicle-category h1 {
                font-size: 24px; 
            }

            .vehicle-category p {
                font-size: 16px; 
            }

            .row {
                flex-direction: column; 
            }

            .column {
                width: 100%; 
            }

            .whychoose-container {
                padding: 10px; 
            }

            .values {
                grid-template-columns: 1fr; 
            }

            .review-container {
                display: flex;
                flex-direction: column;
                gap: 20px; 
                padding: 10px;
            }

            .reviews-col {
                flex-basis: 100%; 
                margin-bottom: 10px;
            }

            footer {
                padding: 15px; 
            }

            .bottom-section {
                flex-direction: column;
                text-align: center;
            }

            .icon-container {
                justify-content: center; 
            }
        }

        @media (max-width: 480px) {
            .topnav a {
                font-size: 16px; 
                padding: 8px 0; 
            }

            .hero {
                height: 70vh; 
            }

            .about-container {
                padding: 10px; 
            }

            .about-us-heading {
                font-size: 24px;
            }

            .services-text h2 {
                font-size: 28px; 
            }

            .services-text p {
                font-size: 16px; 
            }

            .service-item {
                height: 200px;
            }

            .whychoose-container {
                padding: 10px; 
            }

            .values {
                grid-template-columns: 1fr; 
            }

            .value img {
                width: 80px; 
                height: 80px;
            }

            .review-container {
                padding: 5px;
            }

            .reviews-col {
                margin-bottom: 5px; 
            }

            .copyright {
                font-size: 10px; 
            }
        }

        .travel-tips {
            margin: 40px 0;
        }

        .travel-tips-container {
            background-color: #12223c;
            padding: 20px; 
            border-radius: 8px;
        }


        .travel-heading {
            display: flex; 
            flex-direction: column; 
            align-items: center;
            text-align: center; 
            font-size: 20px;
            margin-top: 0;
            margin-bottom: 20px; 
        }

        .travel-heading h1 {
            margin-bottom: 5px;
            color: white;
        }

        .travel-heading p {
            margin-top: 0; 
            margin-bottom: 0; 
            color: white;
        }

        .tips-row {
            display: flex;
            gap: 20px; 
            margin-bottom: 20px;
        }

        .travel-tips .tip {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            width: calc(50% - 10px); 
            max-height: 200px; 
            box-sizing: border-box; 
        }

        .travel-tips .tip img {
            width: 40%; 
            max-width: 40%; 
            object-fit: cover;
            height: 100%; 
            margin-right: 10px; 
        }

        .travel-tips .tip-content {
            padding: 10px; 
            flex: 1; 
            overflow: hidden;
            display: flex;
            flex-direction: column; 
        }

        @media (max-width: 768px) {
            .tips-row {
                flex-direction: column;
            }

            .travel-tips .tip {
                width: 100%; 
                max-height: none; 
            }

            .travel-tips .tip img {
                width: 100%; 
                margin-right: 0;
            }
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
                    <a class="active" href="Home.php">Home</a>
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
            
    </div>

        <section class="hero">
            <div class="bg-text">
                <h1 style="font-size:50px"><span class="note">#1 CAR RENT SERVICE </span><br>CHAIN IN SRI LANKA</h1>
            </div>
        </section>

           
        <div class="about-container">
            <div class="about-text">
                <h1 class="about-us-heading">ABOUT US</h1>
                <p style="font-size:18px">Auto Mart is a 100% Sri Lankan owned company. We are a pioneer member in the formation of the RACA (Rent-A-Car Association) in Sri Lanka.</p>
                <p style="font-size:18px">The company is one of the largest self-drive car rental service providers in Sri Lanka. Auto Mart’s services include chauffeur-driven vehicles, self-drive cars, and 24-hour roadside assistance services.</p>
                <p style="font-size:18px">Further, to strengthen our capabilities, we also have a well-organized in-house back-office structure to serve our clients in a manner that reflects our reputation. Our services also comprise an efficient outsourcing structure consisting of Maintenance Service Centers and Fuel Filling stations located in Colombo as well as in other major cities such as Kandy, Galle, Kurunegala, Anuradhapura, Trincomalee, and Jaffna. This network is available to our clients and is committed to providing an effective and efficient service to expedite operational difficulties.</p>
            </div>
            <img src="Images/about image.png" alt="About Image">
        </div>

        <div class="vehicle-category">
            <h1 class="vehicle-category-heading">VEHICLE FLEET</h1>
            <p>View our entire car rental vehicle fleet.
                Every vehicle is available Daily, Weekly, Monthly and for all our rent a car
                services. With over 60 models to choose from over 11 brands,
                we boast one of the widest range of vehicles for rent in Sri Lanka.</p>
        
            <div class="row">
                <div class="column">
                    <div class="content">
                        <img src="Images/alto.jpg" alt="Mini Car" class="model-image">
                        <a href="Vehicle Rates.html#box-container-minicars" class="model-link">Mini Cars</a>                    
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="Images/general car.jpg" alt="General Car" class="model-image">
                        <a href="Vehicle Rates.html#box-container-generalcars" class="model-link">General Cars</a>                   
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="Images/premium.jpg" alt="Premium Car" class="model-image">
                        <a href="Vehicle Rates.html#box-container-premiumcars" class="model-link">Premium Cars</a>                                   
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="column">
                    <div class="content">
                        <img src="Images/LEAF-101203-12.jpg" alt="Electric Car" class="model-image">
                        <a href="Vehicle Rates.html#box-container-electriccars" class="model-link">Electric Cars</a>                  
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="Images/luxury.jpg" alt="Luxury Car" class="model-image">
                        <a href="Vehicle Rates.html#box-container-luxurycars" class="model-link">Luxury Cars</a>                  
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="Images/4wd and suv.jpg" alt="4WD and SUV" class="model-image">
                        <a href="Vehicle Rates.html#box-container-4wd" class="model-link">4WD and SUV</a>                
                    </div>
                </div>
            </div>
        </div>

        <div class="services-container">
            <div class="services-text">
                <h2>SERVICES</h2>
                <p>Our services are tailor-made to meet any type of transportation service you require.</p>
            </div>
            <div class="services-images">
                <div class="service-item" id="self-drive">
                    <div class="overlay">
                        <span>SELF DRIVE</span>
                    </div>
                </div>
                <div class="service-item" id="with-driver">
                    <div class="overlay">
                        <span>WITH DRIVER / TOURS</span>
                    </div>
                </div>
                </div>
            </div>
        </div>
        

        <div class="whychoose-container">
            <h2 class="whychoose-heading">Why Choose Us?</h2>
            <p style="font-size: 25px;" >Reasons why we are the Sri Lanka's leading rent-a-car company</p>
            <div class="values">
                <div class="value">
                    <img src="Images/car icon.png" alt="car">
                    <h3>Over 500 Vehicles</h3>
                    <p>Explore over 500 diverse vehicles, from classic to modern models</p>
                </div>

                <div class="value">
                    <img src="Images/people.png" alt="people">
                    <h3>Our Strength</h3>
                    <p>30 staff, 18 technicians, and 90 drives from across the island</p>
                </div>

                <div class="value">
                    <img src="Images/online book.png" alt="bookings">
                    <h3>Simple and Secure Online Booking</h3>
                    <p>Offering effortless and safe oline reservation capability</p>
                </div>

                <div class="value">
                    <img src="Images/tow-truck.png" alt="Breakdown">
                    <h3>24/7 Breakdown Service</h3>
                    <p>24hr island wide beakdown service provides continuous support</p>
                </div>

                <div class="value">
                    <img src="Images/cancel-event.png" alt="cancellation">
                    <h3>Free Cancellation</h3>
                    <p>Enjoy the flexibility of free cancellation on all bookings</p>
                </div>

                <div class="value">
                    <img src="Images/star.png" alt="star">
                    <h3>Insurance</h3>
                    <p>Comprehensive insurance available for vehicles including passengers</p>
                </div>
            </div>
        </div>

        <section class="travel-tips">
            <div class="travel-tips-container">
                <div class="travel-heading">
                    <h1>Travel Tips for a Smooth Ride</h1>
                    <p>Explore our top tips for making your car rental journey safe and enjoyable.</p>
                </div>
                
                <!-- Row 1: Tips 1 and 2 -->
                <div class="tips-row">
                    <article class="tip">
                        <img src="Images/tip1.jpg">
                        <div class="tip-content">
                            <h2>Tip 1: Plan Your Route in Advance</h2>
                            <p>Before setting off, make sure to map out your route using a reliable GPS or navigation app. It’s always good to have an offline map backup in case of low signal areas.</p>
                        </div>
                    </article>

                    <article class="tip">
                        <img src="Images/tip2.jpg">
                        <div class="tip-content">
                            <h2>Tip 2: Check the Car Before Driving</h2>
                            <p>Always inspect your rental car for any pre-existing damage or technical issues. Take photos if needed and inform the rental agency to avoid unexpected charges later.</p>
                        </div>
                    </article>
                </div>

                <!-- Row 2: Tips 3 and 4 -->
                <div class="tips-row">
                    <article class="tip">
                        <img src="Images/tip3.jpg">
                        <div class="tip-content">
                            <h2>Tip 3: Keep Important Documents Handy</h2>
                            <p>Ensure you have your driver’s license, car rental agreement, insurance papers, and any other essential documents readily accessible while traveling.</p>
                        </div>
                    </article>

                    <article class="tip">
                        <img src="Images/tip4.jpg">
                        <div class="tip-content">
                            <h2>Tip 4: Stay Hydrated and Take Breaks</h2>
                            <p>Long road trips can be exhausting. Remember to stay hydrated, take frequent breaks, and avoid driving for long hours without resting.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>


        <div class="review-container">
            <section class="reviews">
                <h1>What Our Customers Say</h1>
                
                <div class="review-row">
                    <div class="reviews-col">
                        <div class="review-content">
                            <img src="Images/user1.jpg" alt="James Oliver">
                            <div class="review-text">
                                <div class="review-header">
                                    <h3>James Oliver</h3>
                                    <div class="review-rating">
                                        ★★★★☆
                                    </div>
                                </div>
                                <p>I had an exceptional experience with Auto Mart Rent Car Service. Customer service was incredibly responsive and helpful. Highly recommend for anyone needing a reliable car rental service!</p>
                                <span class="review-date">September 5, 2024</span>
                            </div>
                        </div>
                    </div>
                
                    <div class="reviews-col">
                        <div class="review-content">
                            <img src="Images/user2.jpg" alt="Amelia Isabella">
                            <div class="review-text">
                                <div class="review-header">
                                    <h3>Amelia Isabella</h3>
                                    <div class="review-rating">
                                        ★★★★☆
                                    </div>
                                </div>
                                <p>Auto Mart Rent Car Service made my trip stress-free. The staff were friendly and efficient. I'll definitely use their service again for future travels.</p>
                                <span class="review-date">September 5, 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </section>
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

    <!-- Include your JavaScript below -->
    <script>
        // Open and close side navigation
        function openNav() {
            document.getElementById("mySidenav").classList.add("open");
        }

        function closeNav() {
            document.getElementById("mySidenav").classList.remove("open");
        }

        // Smooth scrolling effect for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Image fade-in effect on page load
        window.addEventListener('load', function() {
            document.querySelectorAll('.model-image').forEach(function(image) {
                image.style.opacity = 1;
            });
        });
    </script>
    
</body>

</html>
