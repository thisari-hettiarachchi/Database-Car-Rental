<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];

    if (!$uname || !$psw) {
        die("Username and password are required.");
    }

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "automart";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Username, Password FROM admin WHERE Username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if ($psw == $row["Password"]) {
            $_SESSION['Username'] = $uname;
            header("Location: admin.php"); // Redirect to admin page
            exit();
        } else {
            $error_message = "Invalid password. Please try again.";
        }
    } else {
        // Redirect to signup page if user is not registered
        header("Location: adminsignup.php"); 
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0; 
        }

        .login-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
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

        .login-form button:hover {
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

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>

     <!--Favicon-->
     <link rel="shortcut icon" href="Images/Favicon.png" type="image/svg+xml">

</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <?php
        if (isset($error_message)) {
            echo "<p class='error-message'>" . htmlspecialchars($error_message) . "</p>";
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="uname" placeholder="Username" required>
            <input type="password" name="psw" placeholder="Password" required>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="adminsignup.php">Sign Up</a></p>
    </div>
</body>
</html>
