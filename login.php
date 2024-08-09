<?php
    
    $servername = "localhost"; 
    $username = "root";
    $password = ""; 
    $dbname = "your_database"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $uname = $_POST['uname'];
    $psw = $_POST['psw'];

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $uname, $psw);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        session_start();
        $_SESSION['username'] = $uname;
        header("Location: welcome.php"); 
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
    $conn->close();
?>
