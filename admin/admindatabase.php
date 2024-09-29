<?php
$host = 'localhost';
$dbname = 'automart';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
$pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// Fetch all vehicles from the database
function fetchVehicles($pdo) {
    $stmt = $pdo->query("SELECT * FROM vehicle");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Handle adding a new car
if (isset($_POST['addCar'])) {
    $model = $_POST['model'];
    $rental_price = $_POST['rental_price'];
    $vehicle_category = $_POST['vehicle_category'];
    $passengers = $_POST['passengers'];
    $transmission_type = $_POST['transmission_type'];
    $air_conditioning = $_POST['air_conditioning'];
    $extra_km_rate = $_POST['extra_km_rate'];
    $free_mileage_km = $_POST['free_mileage_km'];

    // Handle image upload
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0) {
        $image = $_FILES['product_image']['name'];
        $image_tmp = $_FILES['product_image']['tmp_name'];
        $image_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $allowed_ext = ['jpeg', 'jpg', 'png'];

        if (in_array($image_ext, $allowed_ext)) {
            $new_image_name = uniqid() . "." . $image_ext;
            $upload_dir = 'uploads/';

            // Ensure the uploads directory exists
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true); // Create directory if it doesn't exist
            }

            if (move_uploaded_file($image_tmp, $upload_dir . $new_image_name)) {
                // Store the car info with the image
                $sql = "INSERT INTO vehicle (model, rental_price, vehicle_category, passengers, transmission_type, air_conditioning, extra_km_rate, free_mileage_km, image) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$model, $rental_price, $vehicle_category, $passengers, $transmission_type, $air_conditioning, $extra_km_rate, $free_mileage_km, $new_image_name]);
                header('Location: admin.php');
                exit(); // Use exit() after header redirection
            } else {
                echo "Failed to move uploaded file.";
            }
        } else {
            echo "Invalid file type. Only JPEG and PNG files are allowed.";
        }
    } else {
        echo "Error uploading image.";
    }
}

// Handle editing an existing car
if (isset($_POST['editCar'])) {
    $vehicle_id = $_POST['vehicle_id'];
    $model = $_POST['model'];
    $rental_price = $_POST['rental_price'];
    $vehicle_category = $_POST['vehicle_category'];
    $passengers = $_POST['passengers'];
    $transmission_type = $_POST['transmission_type'];
    $air_conditioning = $_POST['air_conditioning'];
    $extra_km_rate = $_POST['extra_km_rate'];
    $free_mileage_km = $_POST['free_mileage_km'];

    // Prepare the update query
    $params = [$model, $rental_price, $vehicle_category, $passengers, $transmission_type, $air_conditioning, $extra_km_rate, $free_mileage_km, $vehicle_id];

    // Handle image upload if a new image is provided
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0) {
        $image = $_FILES['product_image']['name'];
        $image_tmp = $_FILES['product_image']['tmp_name'];
        $image_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $allowed_ext = ['jpeg', 'jpg', 'png'];

        if (in_array($image_ext, $allowed_ext)) {
            $new_image_name = uniqid() . "." . $image_ext;
            $upload_dir = 'uploads/';

            // Move uploaded file
            if (move_uploaded_file($image_tmp, $upload_dir . $new_image_name)) {
                // Update the image in the SQL query
                $sql = "UPDATE vehicle 
                        SET model = ?, rental_price = ?, vehicle_category = ?, passengers = ?, transmission_type = ?, air_conditioning = ?, extra_km_rate = ?, free_mileage_km = ?, image = ? 
                        WHERE vehicle_id = ?";
                $params = array_merge($params, [$new_image_name]);
            } else {
                echo "Failed to move uploaded file.";
            }
        } else {
            echo "Invalid file type. Only JPEG and PNG files are allowed.";
        }
    }

    // Execute the update query
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    header('Location: admin.php');
    exit(); // Use exit() after header redirection
}

// Handle deleting a car
if (isset($_POST['deleteCar'])) {
    $vehicle_id = $_POST['vehicle_id'];

    // Delete the car from the database
    $stmt = $pdo->prepare("DELETE FROM vehicle WHERE vehicle_id = ?");
    $stmt->execute([$vehicle_id]);

    header('Location: admin.php');
    exit(); // Use exit() after header redirection
}

if (isset($_POST['update_product'])) {
    $vehicle_id = $_POST['vehicle_id'];
    $model = $_POST['model'];
    $rental_price = $_POST['rental_price'];
    $vehicle_category = $_POST['vehicle_category'];
    $passengers = $_POST['passengers'];
    $transmission_type = $_POST['transmission_type'];
    $air_conditioning = $_POST['air_conditioning'];
    $extra_km_rate = $_POST['extra_km_rate'];
    $free_mileage_km = $_POST['free_mileage_km'];
    
    // Get the current image
    $current_image = $_POST['current_image'];

    // Check if a new image is uploaded
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0) {
        // Upload new image and set $current_image to the new image's filename
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
        move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
        $current_image = basename($_FILES["product_image"]["name"]);
    }

    // Update vehicle in the database, using $current_image for image path
    $stmt = $pdo->prepare("UPDATE vehicle SET model=?, rental_price=?, vehicle_category=?, passengers=?, transmission_type=?, air_conditioning=?, extra_km_rate=?, free_mileage_km=?, image=? WHERE vehicle_id=?");
    $stmt->execute([$model, $rental_price, $vehicle_category, $passengers, $transmission_type, $air_conditioning, $extra_km_rate, $free_mileage_km, $current_image, $vehicle_id]);
    
    
    header('Location: admin.php');
    exit(); // Use exit() after header redirection
}

?>
