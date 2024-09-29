<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Auto Mart Contact Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .form {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 600px;
                height: 400px;
            }

            h3 {
                text-align: center;
                color: #333;
            }

            .box {
                width: 100%;
                padding: 5px;
                margin: 10px 0;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
                row-gap: 1rem;
            }

            .input-group {
                display: flex;
                gap: 10px;
            }

            .email, .phone {
                flex: 1; 
            }

            textarea.box {
                resize: vertical;
            }

            .btn {
                display: block;
                width: 100%;
                padding: 10px;
                background-color: #050c64;
                color: #fff;
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .btn:hover {
                background-color: #050c64;
            }

            .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s;
            }

            @-webkit-keyframes animatezoom {
            from { -webkit-transform: scale(0); }
            to { -webkit-transform: scale(1); }
            }

            @keyframes animatezoom {
            from { transform: scale(0); }
            to { transform: scale(1); }
            }

            .topnav .closebtn, .openbtn{
                display: none;
            }

            @media (max-width: 768px) {
                .form {
                    padding: 15px;
                    max-width: 90%;
                    height: auto;
                }

                h3 {
                    font-size: 20px;
                }

                .box {
                    margin: 8px 0;
                    padding: 8px;
                }

                .input-group {
                    flex-direction: column;
                }

                .email, .phone {
                    width: 100%;
                }

                .btn {
                    padding: 8px;
                    font-size: 14px;
                }
            }

            /* For mobile devices */
            @media (max-width: 480px) {
                body {
                    padding: 20px;
                    height: auto;
                    display: block;
                }

                .form {
                    padding: 10px;
                    max-width: 100%;
                    box-shadow: none;
                }

                h3 {
                    font-size: 18px;
                }

                .box {
                    margin: 5px 0;
                    padding: 5px;
                }

                .btn {
                    padding: 10px;
                    font-size: 14px;
                }
            }
        </style>

         <!--Favicon-->
         <link rel="shortcut icon" href="Images/Favicon.png" type="image/svg+xml">

    </head>
    <body>
        <div class="form animate">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // Collect form data
                $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                $contact_number = isset($_POST['contact_number']) ? trim($_POST['contact_number']) : '';
                $message = isset($_POST['message']) ? trim($_POST['message']) : '';

                // Validate form data
                if (empty($name) || empty($email) || empty($contact_number) || empty($message)) {
                    echo "<p style='color: red;'>All fields are required.</p>";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p style='color: red;'>Invalid email format.</p>";
                } else {
                    // Database connection
                    $servername = "localhost";
                    $db_username = "root";
                    $db_password = "";
                    $dbname = "automart";

                    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("<p style='color: red;'>Connection failed: " . $conn->connect_error . "</p>");
                    }

                    // Prepare and execute SQL query
                    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, contact_number, message) VALUES (?, ?, ?, ?)");
                    if ($stmt === false) {
                        die("<p style='color: red;'>Prepare failed: " . $conn->error . "</p>");
                    }

                    $stmt->bind_param("ssss", $name, $email, $contact_number, $message);

                    if ($stmt->execute()) {
                        echo "<p style='color: green;'>Thank you for your message. It has been sent.</p>";
                    } else {
                        echo "<p style='color: red;'>Error saving your message: " . $stmt->error . "</p>";
                    }

                    // Close the prepared statement and connection
                    $stmt->close();
                    $conn->close();
                }
            }
            ?>

            <form>
                <h3>Get In Touch</h3>
                <input type="text" name="name" placeholder="Name" class="box name" required><br><br>
                <div class="input-group">
                    <input type="email" name="email" placeholder="E-mail" class="box email" required>
                    <input type="tel" name="contact_number" placeholder="Contact Number" class="box phone" required>
                </div>
                <br><br>
                <textarea name="message" placeholder="Your message" class="box message" cols="58" rows="8" required></textarea>
                <br><br>
                <input type="submit" value="Send Message" class="btn">
            </form>          
        </div>
    </body>
</html>
