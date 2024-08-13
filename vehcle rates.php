<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "car_rental";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $vehicle_type = $_POST['vehicle-type'];
    $location = $_POST['location'];
    $from_date = $_POST['from-date'];
    $from_time = $_POST['from-time'];
    $to_date = $_POST['to-date'];
    $to_time = $_POST['to-time'];
    $show_nearby_vehicles = isset($_POST['show-nearby-vehicles']) ? 1 : 0;

    $stmt = $conn->prepare("INSERT INTO reservations (vehicle_type, location, from_date, from_time, to_date, to_time, show_nearby_vehicles) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $vehicle_type, $location, $from_date, $from_time, $to_date, $to_time, $show_nearby_vehicles);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>
