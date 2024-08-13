<?php
    $servername = "localhost";  
    $username = "root";         
    $password = "";             
    $dbname = "auto_mart";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $title = $_POST['title'];
    $full_name = $conn->real_escape_string($_POST['full-name']);
    $address = $conn->real_escape_string($_POST['address']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $email = $conn->real_escape_string($_POST['email']);
    $nic_no = $conn->real_escape_string($_POST['NIC-no']);
    $license_no = $conn->real_escape_string($_POST['license-no']);
    $license_expiry = $_POST['license-expiry'];
    $vehicle_type = $conn->real_escape_string($_POST['vehicle-type']);
    $vehicle_name = $conn->real_escape_string($_POST['vehicle name']);
    $pick_up_location = $conn->real_escape_string($_POST['pick-up-location']);
    $drop_off_location = $conn->real_escape_string($_POST['drop-off-location']);
    $billing_address = $conn->real_escape_string($_POST['billing-address']);
    $billing_address_optional = $conn->real_escape_string($_POST['billing-address-optional']);
    $postal_code = $conn->real_escape_string($_POST['postal-code']);
    $city = $conn->real_escape_string($_POST['city']);
    $card_type = $conn->real_escape_string($_POST['card-type']);
    $card_number = $conn->real_escape_string($_POST['card-number']);
    $card_expiry = $_POST['card-expiry'];
    $card_cvn = $conn->real_escape_string($_POST['card-cvn']);

    $sql = "INSERT INTO bookings (title, full_name, address, mobile, email, nic_no, license_no, license_expiry, vehicle_type, vehicle_name, pick_up_location, drop_off_location, billing_address, billing_address_optional, postal_code, city, card_type, card_number, card_expiry, card_cvn) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssssss", $title, $full_name, $address, $mobile, $email, $nic_no, $license_no, $license_expiry, $vehicle_type, $vehicle_name, $pick_up_location, $drop_off_location, $billing_address, $billing_address_optional, $postal_code, $city, $card_type, $card_number, $card_expiry, $card_cvn);

    if ($stmt->execute()) {
        echo "Booking successfully submitted.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>
