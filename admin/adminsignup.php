<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = $_POST['uname'];
    $Password = $_POST['psw'];
    $confirm_password = $_POST['confirm_psw'];

    $error_message = "";

    if ($Password !== $confirm_password) {
        $error_message = "Passwords do not match";
    } elseif ($Username && $Password) {
        $servername = "localhost";
        $username = "root"; 
        $password = ""; 
        $dbname = "automart"; 

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            $error_message = "Connection failed: " . $conn->connect_error;
        } else {
            $stmt = $conn->prepare("INSERT INTO admin (Username, Password, `Confirm Password`) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $Username, $Password, $confirm_password);

            if ($stmt->execute()) {
                header("Location: adminlogin.php");
                exit();
            } else {
                $error_message = "Error: " . $stmt->error;
            }
            
            $stmt->close();
            $conn->close();
        }
    } else {
        $error_message = "Invalid input.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
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

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Register as Admin</h2>
        <?php
        if (isset($error_message) && !empty($error_message)) {
            echo "<p class='error-message'>" . htmlspecialchars($error_message) . "</p>";
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="uname" placeholder="Username" required>
            <input type="password" name="psw" placeholder="Password" required>
            <input type="password" name="confirm_psw" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="adminlogin.php">Login</a></p>
    </div>
</body>
</html>