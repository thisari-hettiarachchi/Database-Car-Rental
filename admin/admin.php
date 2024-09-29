<?php
session_start();
include 'admindatabase.php';

// Check if user is logged in
if (!isset($_SESSION['Username'])) {
    header("Location: adminlogin.php");
    exit();
}

// Fetch vehicles from database
$vehicles = fetchVehicles($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Admin Dashboard</title>
    <style> 
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        #sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 22px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            color: #f1f1f1;
        }

        #sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 20px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            border: none;
            padding: 10px 15px;
        }

        .openbtn:hover {
            background-color: #444;
        }

        .main-content {
            margin-left: 10px;
            margin-top: 9px;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .dashboard-stats {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            gap: 10px;
            flex-wrap: wrap;
        }

        #cars h2 {
            margin-left: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        #addCarBtn {
            margin-left: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        table th:nth-child(1) {
            width: 3%;
        }

        /* Table column width adjustments */
        table th:nth-child(3) { width: 15%; }
        table th:nth-child(4) { width: 10%; }
        table th:nth-child(5) { width: 10%; }
        table th:nth-child(6) { width: 6%; }
        table th:nth-child(7) { width: 10%; }
        table th:nth-child(8) { width: 6%; }
        table th:nth-child(9) { width: 10%; }
        table th:nth-child(10) { width: 10%; }
        table th:nth-child(11) { width: 15%; }

        table th {
            background-color: #f4f4f4;
        }

        table tr:hover {
            background-color: #f9f9f9;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #555;
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
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 35%;
            max-width: 500px;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-content h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .modal-content form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            row-gap: 10px;
        }

        .modal-content input {
            flex: 1 1 48%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .modal-content button {
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

        .modal-content .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover, .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Sidebar HTML -->
<div id="sidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Dashboard</a>
    <a href="#">Profile</a>
    <a href="logout.php">Logout</a>
</div>

<!-- Main Content -->
<div id="main">
    <button class="openbtn" id="openSidebarBtn" onclick="openNav()">☰</button>
</div>

<div class="main-content">
    <header>
        <h1>Welcome to the Car Rental Dashboard, <?php echo htmlspecialchars($_SESSION['Username']); ?></h1>
    </header>

    <section id="cars">
        <h2>Manage Cars</h2>

        <!-- Button to trigger the modal popup -->
        <div id="addCarForm">
            <button id="addCarBtn" type="button">Add New Car</button>
        </div>

        <!-- Modal Popup for Adding a Car -->
        <div id="addCarModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="admindatabase.php" method="POST" enctype="multipart/form-data">
                    <h2>Add New Car</h2>
                    <input type="text" name="model" placeholder="Model" required>
                    <input type="text" name="rental_price" placeholder="Rental Price" required><br><br>
                    <input type="text" name="vehicle_category" placeholder="Vehicle Category" required>
                    <input type="number" name="passengers" placeholder="Passengers" required><br><br>
                    <input type="text" name="transmission_type" placeholder="Transmission Type" required>
                    <input type="text" name="air_conditioning" placeholder="Air Conditioning (Yes/No)" required><br><br>
                    <input type="text" name="extra_km_rate" placeholder="Extra Km Rate" required>
                    <input type="number" name="free_mileage_km" placeholder="Free Mileage Km" required><br><br>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box" required>
                    <button type="submit" name="addCar">Submit</button>
                </form>
            </div>
        </div>

        <!-- Modal Popup for Editing a Car -->
<div id="editCarModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeEditModal()">&times;</span>
        <form action="admindatabase.php" method="POST" enctype="multipart/form-data" id="editCarForm">
            <h2>Edit Car</h2><br>
            <input type="hidden" name="vehicle_id" id="edit_vehicle_id">
            <input type="text" name="model" id="edit_model" placeholder="Model" required>
            <input type="text" name="rental_price" id="edit_rental_price" placeholder="Rental Price" required><br><br>
            <input type="text" name="vehicle_category" id="edit_vehicle_category" placeholder="Vehicle Category" required>
            <input type="number" name="passengers" id="edit_passengers" placeholder="Passengers" required><br><br>
            <input type="text" name="transmission_type" id="edit_transmission_type" placeholder="Transmission Type" required>
            <input type="text" name="air_conditioning" id="edit_air_conditioning" placeholder="Air Conditioning (Yes/No)" required><br><br>
            <input type="text" name="extra_km_rate" id="edit_extra_km_rate" placeholder="Extra Km Rate" required>
            <input type="number" name="free_mileage_km" id="edit_free_mileage_km" placeholder="Free Mileage Km" required><br><br>
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
            <input type="hidden" name="current_image" id="current_image">
            <p>Current Image: <img src='uploads/<span id="current_image_display"></span>' width='100' height='70'></p>
            <button type="submit" name="update_product">Update Product</button>
        </form>
    </div>
</div>

<script>
    function openEditModal(vehicle) {
        document.getElementById('edit_vehicle_id').value = vehicle.vehicle_id;
        document.getElementById('edit_model').value = vehicle.model;
        document.getElementById('edit_rental_price').value = vehicle.rental_price;
        document.getElementById('edit_vehicle_category').value = vehicle.vehicle_category;
        document.getElementById('edit_passengers').value = vehicle.passengers;
        document.getElementById('edit_transmission_type').value = vehicle.transmission_type;
        document.getElementById('edit_air_conditioning').value = vehicle.air_conditioning;
        document.getElementById('edit_extra_km_rate').value = vehicle.extra_km_rate;
        document.getElementById('edit_free_mileage_km').value = vehicle.free_mileage_km;

        // Set the current image path
        document.getElementById('current_image').value = vehicle.image;  // Save the current image name
        document.getElementById('current_image_display').textContent = vehicle.image; // Display the current image

        document.getElementById('editCarModal').style.display = "block";
    }
</script>


        <!-- Table to display cars -->
        <table>
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Model</th>
                <th>Rental Price</th>
                <th>Vehicle Category</th>
                <th>Passengers</th>
                <th>Transmission Type</th>
                <th>Air Conditioning</th>
                <th>Extra Km Rate</th>
                <th>Free Mileage Km</th>
                <th>Actions</th>
            </tr>

            <?php
            if (!empty($vehicles)) {
                foreach ($vehicles as $vehicle) {
                    echo "<tr>
                            <td><img src='uploads/{$vehicle['image']}' width='100' height='70'></td>
                            <td>{$vehicle['vehicle_id']}</td>
                            <td>{$vehicle['model']}</td>
                            <td>{$vehicle['rental_price']}</td>
                            <td>{$vehicle['vehicle_category']}</td>
                            <td>{$vehicle['passengers']}</td>
                            <td>{$vehicle['transmission_type']}</td>
                            <td>{$vehicle['air_conditioning']}</td>
                            <td>{$vehicle['extra_km_rate']}</td>
                            <td>{$vehicle['free_mileage_km']}</td>
                            <td>
                                <button type='button' onclick='openEditModal(" . json_encode($vehicle) . ")'>Edit</button>
                                <form action='admindatabase.php' method='post' style='display:inline;'>
                                    <input type='hidden' name='vehicle_id' value='{$vehicle['vehicle_id']}'>
                                    <button type='submit' name='deleteCar' onclick='return confirm(\"Are you sure you want to delete this vehicle?\");'>Delete</button>
                                </form>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='10'>No vehicles found</td></tr>";
            }
            ?>
        </table>
    </section>
</div>

<script>
    // Handle modal for Add Car
    var addCarModal = document.getElementById("addCarModal");
    var addCarBtn = document.getElementById("addCarBtn");
    var spanAdd = document.getElementsByClassName("close")[0];

    addCarBtn.onclick = function() {
        addCarModal.style.display = "block";
    }

    spanAdd.onclick = function() {
        addCarModal.style.display = "none";
    }

     // Handle modal for Edit Car
     function openEditModal(vehicle) {
        document.getElementById('edit_vehicle_id').value = vehicle.vehicle_id;
        document.getElementById('edit_model').value = vehicle.model;
        document.getElementById('edit_rental_price').value = vehicle.rental_price;
        document.getElementById('edit_vehicle_category').value = vehicle.vehicle_category;
        document.getElementById('edit_passengers').value = vehicle.passengers;
        document.getElementById('edit_transmission_type').value = vehicle.transmission_type;
        document.getElementById('edit_air_conditioning').value = vehicle.air_conditioning;
        document.getElementById('edit_extra_km_rate').value = vehicle.extra_km_rate;
        document.getElementById('edit_free_mileage_km').value = vehicle.free_mileage_km;

        document.getElementById('editCarModal').style.display = "block";
    }

    function closeEditModal() {
        document.getElementById('editCarModal').style.display = "none";
    }

    // Close modals when clicking outside
    window.onclick = function(event) {
        if (event.target == addCarModal || event.target == document.getElementById('editCarModal')) {
            event.target.style.display = "none";
        }
    }

    // Sidebar toggle
    function openNav() {
        document.getElementById("sidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("sidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }

    function closeEditModal() {
        document.getElementById('editCarModal').style.display = "none";
    }
</script>

</body>
</html>
