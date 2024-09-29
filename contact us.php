<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- JavaScript -->
    <script src="search.js"></script>

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Auto Mart Contact Us</title>

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

.topnav .closebtn, .openbtn{
    display: none;
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

.map-container {
    flex: 1; 
    margin-right: 1rem; 
    justify-content: space-between;
    gap: 20px;
}

#map {
    width: 55%;
    height: 600px; 
    border: 0;
    padding-top: 100px;
    padding-left: 50px;
}

#myForm {
    box-sizing: border-box; 
    text-align: center;
}

#myForm [type="submit"] {
    padding: 14px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border: none;
    cursor: pointer;
    margin: 8px 0;
    background-color: blue;
    color: white;
    border-radius: 5px;
    width: 50%;
}

.contact {
    text-decoration: none; 
    color: white; 
    display: inline-block; 
    padding: 10px; 
    background-color: #007bff; 
    border-radius: 5px; 
    margin-top: 20px;
}

.contact:hover {
    background-color: #0056b3;
}

.contact-container {
    margin-bottom: 90px;
}

.modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: hidden; 
    background-color: rgba(0,0,0,0.4); 
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto; 
    padding: 20px;
    border: 1px solid #888;
    width: 60%; 
    max-width: 800px; 
    border-radius: 10px; 
    position: relative; 
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); 
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.openModel{
    text-decoration: none; 
    color: white;
    padding: 10px;
    border-radius: 5px; 
}

.contact:hover {
    background-color: #0056b3; 
}

.branch-container {
    text-align:center;
    background-color:#12223c; 
    color: white;
    border-radius: 10px;
    overflow: hidden;
    z-index: 1;
    margin-right: 50px;
    padding: 20px;
    width: 350px; 
    margin-left: 900px;
    margin-top: -760px;
    
}

.content h1 {
    text-decoration: underline;
}

footer {
    background-color: #12223c;
    color: #ffffff;
    padding: 20px;
    text-align: center;
    margin-top: 100px;
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

.footer-contact {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 10px;
}

.footer-contact p {
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
        font-size: 16px;
    }

    .search-container h1 {
        font-size: 2.5rem;
    }

    .map-container {
        flex-direction: column;
        align-items: center;
        margin: 0;
        margin-left: 40px;
    }

    #map {
        width: 90%;
        height: 400px;
        padding-left: 0;
    }

    .branch-container {
        margin-left: 40px;
        margin-right: 20px;
        margin-top: 30px;
        width: 80%;
        text-align: center;
    }

    .modal-content {
        width: 80%;
    }

    .bottom-section {
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }

    .icon-container {
        justify-content: center;
    }

    .footer-contact {
        flex-direction: column;
        gap: 10px;
    }

    #myForm [type="submit"] {
        width: 80%;
    }
}

@media (max-width: 480px) {
    .topnav {
        flex-direction: column;
        align-items: flex-start;
        padding: 5px;
    }

    .topnav a {
        font-size: 16px;
        padding: 8px 10px;
    }

    .navbar-brand {
        width: 30px;
    }

    .search-form input[type="text"] {
        font-size: 14px;
    }

    .search-container h1 {
        font-size: 2rem;
    }

    .map-container {
        flex-direction: column;
        margin: 0;
    }

    #map {
        width: 100%;
        height: 300px;
        padding-left: 0;
    }

    .branch-container {
        width: 90%;
        margin: 20px auto;
    }

    .modal-content {
        width: 90%;
    }

    .bottom-section {
        flex-direction: column;
        gap: 5px;
    }

    .icon-container {
        justify-content: center;
    }

    .footer-contact {
        flex-direction: column;
        gap: 5px;
    }

    #myForm [type="submit"] {
        width: 90%;
    }
}}



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
                <a href="Home.php">Home</a>
                <a href="vehicle rates.php">Vehicle Rates</a>
                <a class="active" href="contact us.php">Contact Us</a>
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

    <script>
        function openNav() {
            document.getElementById("mySidenav").classList.add("open");
        }

        function closeNav() {
            document.getElementById("mySidenav").classList.remove("open");
        }
    </script>

<section class="contact-container">
            <div class="map-container">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8217956261387!2d79.84873377417217!3d6.911899593087591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25942865f1bfb%3A0x141db277b60011d8!2sLiberty%20Plaza!5e0!3m2!1sen!2slk!4v1723101241191!5m2!1sen!2slk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <form id="myForm">
                    <a href="contact form.php" class="contact" type="submit" id="openModal">Contact Via Email</a>
                </form>
            </div>
        
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <iframe src="contact form.html" width="100%" height="450px" style="border: none;"></iframe>
                </div>
            </div>

            <script>
                    var modal = document.getElementById("myModal");
                    var link = document.getElementById("openModal");
                    var span = document.getElementsByClassName("close")[0];

                    link.onclick = function(event) {
                        event.preventDefault(); 
                        modal.style.display = "block";
                    }

                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
            </script> 
    </section>

    <!-- PHP: Handle form submission -->
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

            // Sanitize and prepare input data
            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $phone = $conn->real_escape_string($_POST['phone']);
            $message = $conn->real_escape_string($_POST['message']);

            // Prepare and bind the SQL statement
            $sql = "INSERT INTO contact_submissions (name, email, phone, message) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $name, $email, $phone, $message);

            // Execute the statement and check for success
            if ($stmt->execute()) {
                echo "<p>Message successfully sent.</p>";
            } else {
                echo "<p>Error: " . $stmt->error . "</p>";
            }

            // Close connections
            $stmt->close();
            $conn->close();
        }
    ?>

            <section class="branch-container">
                <div class="branch-content">
                    <h1 style="font-size: 22px;">Our Branches</h1>
                    <div class="content">
                        <h1>Head Office</h1>
                        <p>No. 32/A, <br> Second floor <br> Liberty Plaze,<br>Colombo 03.<br>Tel : 011 2475 632<br></p>
                    </div>
                    
                    <div class="content">
                        <h1>Other Branches</h1>
                        <p>Kandy<br> Tel: 011 2956 881</p>
                        <p>Galle<br> Tel: 011 2956 882</p>
                        <p>Kurunegala<br> Tel: 011 2956 883</p>
                        <p>Anuradhapura<br> Tel: 011 2956 884</p>
                        <p>Trincomalee<br> Tel: 011 2956 885</p>
                        <p>Jaffna<br> Tel: 011 2956 886</p>
                    </div>
                </div>
            </section>
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

        <div class="footer-contact">
            <p>Call Us: +94 77 586 2434</p>
            <p>Email: support@automart.lk</p>
        </div>
        <p class="copyright">&copy; 2024 AutoMart</p>
    </footer>

</body>
</html>
