<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <!--CSS Style-->
        <link rel="stylesheet" href="vehicle rates style.css">
     
        <!--Icon link-->
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

    .topnav a.active {
        padding: 2px;
        text-decoration: none; 
        border-bottom:  solid blue; 
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
            text-decoration: none;
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

        .hero-container {
            width: 90%;
            padding: 20px;
        }

        .hero::before {
            background-size: contain;
        }
        
        .hero-container h1 {
            font-size: 2.5rem;
        }

        .form-group {
            flex-direction: column;
        }

        .box-container-minicars, .box-container-generalcars,
        .box-container-premiumcars, .box-container-electriccars, 
        .box-container-luxurycars, .box-container-4wd-and-suv {
            margin: 10px;
            padding: 15px;
        }

        .car-card {
            width: 200px;
        }

        .search-container h1 {
            font-size: 2.5rem;
        }

        .search-container p {
            font-size: 1rem;
        }
    }

    /* For mobile devices */
    @media (max-width: 480px) {
        .topnav {
            padding: 5px;
        }

        .topnav a {
            font-size: 16px;
            padding: 8px;
        }

        .hero-container {
            width: 95%;
            padding: 15px;
        }

        .hero-container h1 {
            font-size: 2rem;
        }

        .search-container h1 {
            font-size: 2rem;
        }

        .search-container p {
            font-size: 0.9rem;
        }

        .form-group {
            flex-direction: column;
            margin-bottom: 15px;
        }

        .box-container-minicars, .box-container-generalcars,
        .box-container-premiumcars, .box-container-electriccars, 
        .box-container-luxurycars, .box-container-4wd-and-suv {
            margin: 5px;
            padding: 10px;
        }

        .car-card {
            width: 180px;
        }
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
        background-size: cover;
        height: 109vh;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("Images/new\ girl.jpg") no-repeat center center/cover;
        filter: blur(8px); 
        z-index: -1; 
    }

    input[type="date"],
    input[type="time"] {
        display: block;
        margin: 0 auto;
        text-align: center; 
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

    .hero-container {
    background-color: rgba(0,0,0, 0.4); 
    color: white;
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


    h1 {
    margin-bottom: 20px;
    font-size: 40px;
    }

    .form-group {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    }

    .form-group label {
    flex: 1;
    margin-bottom: 5px;
    color: white;
    }

    .form-group input {
    flex: 2;
    }

    .form-group select {
        background: transparent;
        color: white;
        flex: 2;
    }

    .form-group option {
        background-color: rgba(40, 63, 126, 0.788);
    }

    input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: transparent;
    color: white;
    }

    button {
    background: transparent;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    border: 2px solid rgba(255, 255, 255, .5);
    }

    .hero-container form > .form-group {
    margin-bottom: 20px; 
    }

    .hero-container form > .date-time-group {
    margin-bottom: 20px; 
    }

    .hero-container form > .checkbox-group {
    margin-bottom: 30px;
    }

    .date-time-group > value{
    text-align: center;
    }

    input[type="date"]{
        input[type="time"] {
            display: block;
            margin: 0 auto;
            text-align: center; 
        }
    }
    
    .box-container-minicars {
        border: 2px solid #f8f8f8; 
        border-radius: 10px;
        padding: 20px; 
        background-color: white; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        margin: 20px; 
        display: flex; 
        flex-direction: column; 
        align-items: center; 
    }

    .box-heading {
        font-size: 30px; 
        margin-bottom: 20px; 
        text-align: center; 
        color: #384aaf; 
        font-family: Arial, sans-serif; 
    }

    .car-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px; 
        justify-content: center; 
    }

    .car-card {
        width: 250px;
        border: 1px solid #000000;
        border-radius: 5px;
        overflow: hidden;
        font-family: Arial, sans-serif;
        margin: 10px; 
        background: white;
        box-sizing: border-box;
        transition: background-color 0.3s, transform 0.3s; 
        padding: 10px;
    }

    .car-card:hover {
        background-color: #f0f0f0; 
        transform: scale(1.05); 
    }

    .car-image img {
        width: 100%;
        height: auto;
    }

    .car-details {
        padding: 15px;
    }

    .car-details h3 {
        font-size: 18px;
        text-align: center;
    }

    .car-details .self-driven {
        color: #888;
        font-size: 14px;
        margin-bottom: 10px;
        text-align: center;
    }

    .car-details .price {
        color: red;
        font-size: 20px;
        margin-bottom: 15px;
        text-align: center;
    }

    .car-details .price span {
        font-weight: bold;
    }

    .car-details .book-now {
        display: flex;
        align-items: center;
        justify-content: center;
        width: calc(100% - 20px); 
        padding: 10px;
        margin: 10px auto; 
        color: white;
        cursor: pointer;
        background-color: green;
        font-size: 16px; 
        transform: scale(1.05);
        border-radius: 5px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        transition: background-color 0.3s, transform 0.3s; 
        text-decoration: none;
    }

    .car-details .book-now:hover {
        transform: scale(1.1); 
    }

    .car-details .book-now img {
        width: 25px;  
        height: 25px; 
        margin-left: 8px; 
    }

    .car-details .deposit {
        background-color: #f5f5f5;
        padding: 10px;
        margin-bottom: 10px;
        text-align: center;
    }

    .car-details .deposit p {
        margin: 0;
    }

    .car-info, .additional-info {
        list-style-type: none;
        padding: 0;
        margin: 0 0 10px 0;
    }

    .car-info li, .additional-info li {
        font-size: 14px;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
    }

    .car-info li:before, .additional-info li:before {
        content: '•';
        color: red;
        margin-right: 5px;
    }


    .box-container-generalcars {
        border: 2px solid #f8f8f8; 
        border-radius: 10px;
        padding: 20px; 
        background-color: white; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        margin: 20px; 
    }

    .box-container-premiumcars {
        border: 2px solid #f8f8f8; 
        border-radius: 10px;
        padding: 20px; 
        background-color: white; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        margin: 20px; 
    }

    .box-container-electriccars {
        border: 2px solid #f8f8f8; 
        border-radius: 10px;
        padding: 20px; 
        background-color: white; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        margin: 30px; 
    }

    .box-container-luxurycars {
        border: 2px solid #f8f8f8; 
        border-radius: 10px;
        padding: 20px; 
        background-color: white; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        margin: 20px; 
    }

    .box-container-4wd-and-suv {
        border: 2px solid #f8f8f8; 
        border-radius: 10px;
        padding: 20px; 
        background-color: white; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        margin: 20px; 
    }

    .more-info {
        margin-top: 20px;
    }

    .read-more  {
        display: flex;
        align-items: center;
        justify-content: center;
        width: calc(100% - 20px); 
        padding: 10px;
        margin: 10px auto; 
        color: white;
        cursor: pointer;
        background-color: #12223c;
        font-size: 16px; 
        transform: scale(1.05);
        border-radius: 5px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        transition: background-color 0.3s, transform 0.3s; 
        text-decoration: none;
    }

    .read-more:hover{
        transform: scale(1.1); 
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
                    <a class="active" href="vehicle rates.php">Vehicle Rates</a>
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

        <section class="hero">
            <div class="hero-container">
                <h1>Your Next Adventure <br> Starts Here</h1>
                <form id="vehicleForm">
                    <div class="form-group">
                        <label for="vehicleType">Vehicle Type:</label>
                        <select id="vehicleType">
                            <option value="mini car">Mini Car</option>
                            <option value="general car">General Car</option>
                            <option value="premium car">Premium Car</option>
                            <option value="electric car">Electric Car</option>
                            <option value="luxury car">Luxury Car</option>
                            <option value="4wd and suv">4WD and SUV</option>
                        </select>

                        <label for="myInput">Vehicle Name:</label>
                        <input type="text" id="myInput" name="vehiclename" placeholder="Enter Name">

                        
       
                    <script src="search.js"></script>
                    </div>

                    <button type="button" onclick="searchVehicle()">Search</button>
                </form>

            </div>
        </section>

        <section id="box-container-minicars" class="box-container minicars">
            <h2 class="box-heading">Mini Cars</h2>
            <div class="car-container">
                <div class="car-card">
                    <div class="car-image">
                        <img src="Images/Suzuki_Wagon_R.png" alt="Wagon-r">
                    </div>
                    <div class="car-details">
                        <h3>Suzuki Wagon-R</h3>
                        <p class="price">LKR <span>25,000.00</span></p>
                        <a href="booking.php" class="book-now">
                            BOOK NOW
                            <img src="Images/calendar-date.png" alt="bookings">
                        </a>
                        <ul class="car-info">
                            <li>4 Passengers</li>
                            <li>Auto</li>
                            <li>Air conditioning</li>
                            <li>105.00 LKR Per Extra Km</li>
                        </ul>
                        <ul class="additional-info">
                            <li>Free mileage: 300 KM</li>
                        </ul>
                        <div class="more-info">
                            <a href="" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                    
                <div class="car-card">
                    <div class="car-image">
                        <img src="Images/Suzuki-Hustler.png" alt="Hustler">
                    </div>
                    <div class="car-details">
                        <h3>Suzuki Hustler</h3>
                        <p class="price">LKR <span>20,000.00</span></p>
                        <a href="booking.php" class="book-now">
                            BOOK NOW
                            <img src="Images/calendar-date.png" alt="bookings">
                        </a>
                        <ul class="car-info">
                            <li>4 Passengers</li>
                            <li>Auto</li>
                            <li>Air conditioning</li>
                            <li>102.00 LKR Per Extra Km</li>
                        </ul>
                        <ul class="additional-info">
                            <li>Free mileage: 300 KM</li>
                        </ul>
                        <div class="more-info">
                            <a href="" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                    
                <div class="car-card">
                    <div class="car-image">
                        <img src="Images/Suzuki_Alto.png" alt="Alto">
                    </div>
                    <div class="car-details">
                        <h3>Suzuki Alto</h3>
                        <p class="price">LKR <span>15,000.00</span></p>
                        <a href="booking.php" class="book-now">
                            BOOK NOW
                            <img src="Images/calendar-date.png" alt="bookings">
                        </a>
                        <ul class="car-info">
                            <li>4 Passengers</li>
                            <li>Manual</li>
                            <li>Air conditioning</li>
                            <li>50.00 LKR Per Extra Km</li>
                        </ul>
                        <ul class="additional-info">
                            <li>Free mileage: 300 KM</li>
                        </ul>
                        <div class="more-info">
                            <a href="" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                    
                <div class="car-card">
                    <div class="car-image">
                        <img src="Images/Perodua_Axia.png" alt="Axia">
                    </div>
                    <div class="car-details">
                        <h3>Perodua Axia</h3>
                        <p class="price">LKR <span>22,000.00</span></p>
                        <a href="booking.php" class="book-now">
                            BOOK NOW
                            <img src="Images/calendar-date.png" alt="bookings">
                        </a>
                        <ul class="car-info">
                            <li>4 Passengers</li>
                            <li>Auto</li>
                            <li>Air conditioning</li>
                            <li>86.00 LKR Per Extra Km</li>
                        </ul>
                        <ul class="additional-info">
                            <li>Free mileage: 300 KM</li>
                        </ul>
                        <div class="more-info">
                            <a href="" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                            
                <div id="box-container-generalcars" class="box-container generalcars">
                    <h2 class="box-heading">General Cars</h2>
                    <div class="car-container">
                        <!-- Car Card 1 -->
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Suzuki_Swift.png" alt="Swift">
                            </div>
                            <div class="car-details">
                                <h3>Suzuki Swift</h3>
                                <p class="price">LKR <span>25,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>100 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                            
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Toyota_Aqua.png" alt="Aqua">
                            </div>
                            <div class="car-details">
                                <h3>Toyota Aqua</h3>
                                <p class="price">LKR <span>27,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>175.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Honda_Insite.png" alt="Insight">
                            </div>
                            <div class="car-details">
                                <h3>Honda Insight</h3>
                                <p class="price">LKR <span>29,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>200.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div id="box-container-premiumcars" class="box-container premiumcars">
                    <h2 class="box-heading">Primium Cars</h2>
                    <div class="car-container">
                        <!-- Car Card 1 -->
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Honda_Grace.png" alt="Grace">
                            </div>
                            <div class="car-details">
                                <h3>Honda Grace</h3>
                                <p class="price">LKR <span>30,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>215.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Honda-Civic.png" alt="Civic">
                            </div>
                            <div class="car-details">
                                <h3>Honda Civic</h3>
                                <p class="price">LKR <span>32,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>119.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Toyota-Premio.png" alt="Premio">
                            </div>
                            <div class="car-details">
                                <h3>Toyota Premio</h3>
                                <p class="price">LKR <span>35,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>225 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Toyota_Allion.png" alt="Allion">
                            </div>
                            <div class="car-details">
                                <h3>Toyota Allion</h3>
                                <p class="price">LKR <span>38,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>225.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        
                <div id="box-container-electriccars" class="box-container electriccars">
                    <h2 class="box-heading">Electric Cars</h2>
                    <div class="car-container">
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Nissan-Leaf.png" alt="Leaf">
                            </div>
                            <div class="car-details">
                                <h3>Nissan Leaf</h3>
                                <p class="price">LKR <span>40,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>265.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="box-container-luxurycars" class="box-container luxurycars">
                    <h2 class="box-heading">Luxury Cars</h2>
                    <div class="car-container">
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/BMW_520.png" alt="BMW 520">
                            </div>
                            <div class="car-details">
                                <h3>BMW 520</h3>
                                <p class="price">LKR <span>42,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>258 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Mercedes_Benz_S_Class_1.png" alt="Benz S">
                            </div>
                            <div class="car-details">
                                <h3>Benz S</h3>
                                <p class="price">LKR <span>42,800.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>295.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="box-container-4wd-and-suv" class="box-container 4wd-and-suv">
                    <h2 class="box-heading">4WD and SUV Cars</h2>
                    <div class="car-container">
                        <!-- Car Card 1 -->
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Land-Rover-Defender.png" alt="Defender">
                            </div>
                            <div class="car-details">
                                <h3>Land Rover Defender</h3>
                                <p class="price">LKR <span>50,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>400.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Mitsubishi-Monteropreview.png" alt="Montero">
                            </div>
                            <div class="car-details">
                                <h3>Mitsubishi Montero</h3>
                                <p class="price">LKR <span>52,000.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>500.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Toyota-Prado.png" alt="Prado">
                            </div>
                            <div class="car-details">
                                <h3>Toyota Prado</h3>
                                <p class="price">LKR <span>48,500.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>520.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                
                        <div class="car-card">
                            <div class="car-image">
                                <img src="Images/Mitsubishi-Outlander.png" alt="Outlander">
                            </div>
                            <div class="car-details">
                                <h3>Mitsubishi Outlander</h3>
                                <p class="price">LKR <span>46,750.00</span></p>
                                <a href="booking.php" class="book-now">
                                    BOOK NOW
                                    <img src="Images/calendar-date.png" alt="bookings">
                                </a>
                                <ul class="car-info">
                                    <li>4 Passengers</li>
                                    <li>Auto</li>
                                    <li>Air conditioning</li>
                                    <li>540.00 LKR Per Extra Km</li>
                                </ul>
                                <ul class="additional-info">
                                    <li>Free mileage: 300 KM</li>
                                </ul>
                                <div class="more-info">
                                    <a href="" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
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

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $vehicletype = $_POST['vehicletype'];
        $vehiclename = $_POST['vehiclename'];

        if ($vehicletype && $vehiclename) {
            $servername = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "automart";
        
            $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            $sql = "SELECT vehicle_category, model, rental_price, refundable_deposit, passengers, bags, transmission_type, air_conditioning, extra_km_rate, free_mileage_km, availability_status FROM vehicle";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
        }
    }
    ?>
</body>
</html>