<?php
// Database connection details
$servername = "localhost";  // Change if necessary
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "automart";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'vehicle' table
$sql = "SELECT vehicle_id, vehicle_category, model, rental_price, passengers, transmission_type, air_conditioning, extra_km_rate, free_mileage_km FROM vehicle";
$result = $conn->query($sql);

$vehicles = array();
if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        $vehicles[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($vehicles);
?>

<?php
// Database connection details
$servername = "localhost";  // Change if necessary
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "automart";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'bookings' table
$sql = "SELECT booking_id, title, full_name, address, mobile_no, email, nic_no, license_no, license_expiry, vehicle_type, vehicle_name, pick_up_location, drop_off_location, billing_address, billing_address_optional, card_type, card_number, card_expiry, card_cvn FROM bookings";
$result = $conn->query($sql);

$bookings = array();
if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($bookings);
?>

<?php
// Database connection details
$servername = "localhost";  // Change if necessary
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "automart";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'customers' table
$sql = "SELECT CustomerID, FirstName, LastName, Email, MobileNo, address, postal_code, Username FROM customers";
$result = $conn->query($sql);

$customers = array();
if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        $customers[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($customers);
?>
