function myFunction() {
    var input = document.getElementById('myInput').value.trim().toUpperCase();

    const vehicleUrls = {
        'MINI CARS': 'vehicle rates.php#box-container-minicars',
        'WAGON-R': 'vehicle rates.php#box-container-minicars',
        'HUSTLER': 'vehicle rates.php#box-container-minicars',
        'ALTO': 'vehicle rates.php#box-container-minicars',
        'AXIA': 'vehicle rates.php#box-container-minicars',
        'GENERAL CARS': 'vehicle rates.php#box-container-generalcars',
        'SWIFT': 'vehicle rates.php#box-container-generalcars',
        'AQUA': 'vehicle rates.php#box-container-generalcars',
        'INSIGHT': 'vehicle rates.phpp#box-container-generalcars',
        'GRACE': 'vehicle rates.php#box-container-premiumcars',
        'CIVIC': 'vehicle rates.php#box-container-premiumcars',
        'PREMIO': 'vehicle rates.php#box-container-premiumcars',
        'ALLION': 'vehicle rates.php#box-container-premiumcars',
        'ELECTRIC CARS': 'vehicle rates.php#box-container-electriccars',
        'LEAF': 'vehicle rates.php#box-container-electriccars',
        'LUXURY CARS': 'vehicle rates.php#box-container-luxurycars',
        'BMW': 'vehicle rates.php#box-container-luxurycars',
        'BENZ': 'vehicle rates.php#box-container-luxurycars',
        '4WD': 'vehicle rates.php#box-container-4wd-and-suv',
        'SUV': 'vehicle rates.php#box-container-4wd-and-suv',
        'DEFENDER': 'vehicle rates.php#box-container-4wd-and-suv',
        'MONTERO': 'vehicle rates.php#box-container-4wd-and-suv',
        'PRADO': 'vehicle rates.php#box-container-4wd-and-suv',
        'OUTLANDER': 'vehicle rates.php#box-container-4wd-and-suv'
    };
    
    // Redirect based on input
    if (vehicleUrls[input]) {
        window.location.href = vehicleUrls[input];
    } else {
        alert('Vehicle not found.');
    }

    return false; // Only necessary if used in a form submission context
}
