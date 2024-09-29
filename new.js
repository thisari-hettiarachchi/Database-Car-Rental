document.addEventListener('DOMContentLoaded', function() {
    // Fetch and display statistics (dummy data for now)
    document.getElementById('totalCars').innerText = "50";
    document.getElementById('totalUsers').innerText = "120";
    document.getElementById('totalRentals').innerText = "75";
    document.getElementById('availableCars').innerText = "10";

    // Add New Car button event
    document.getElementById('addCarBtn').addEventListener('click', function() {
        alert('Add Car Functionality Coming Soon!');
    });

    // Fetch and display cars (dummy data for now)
    const carsTableBody = document.querySelector('#cars table tbody');
    const cars = [
        { id: 1, model: "Suzuki Wagon-R", price: 148500.00, category: "Mini Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 105.00, freeMileageKm: 300 },
        { id: 2, model: "Suzuki Alto", price: 102960.00, category: "Mini Cars", passengers: 4, transmission: "Manual", airConditioning: 1, extraKmPrice: 50.00, freeMileageKm: 300 },
        { id: 3, model: "Perodua Axia", price: 142556.00, category: "Mini Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 86.00, freeMileageKm: 300 },
        { id: 4, model: "Suzuki Swift", price: 172000.00, category: "General Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 100.00, freeMileageKm: 300 },
        { id: 5, model: "Toyota Aqua", price: 153000.00, category: "General Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 175.00, freeMileageKm: 300 },
        { id: 6, model: "Honda Insight", price: 192000.00, category: "General Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 200.00, freeMileageKm: 300 },
        { id: 7, model: "Honda Grace", price: 225000.00, category: "Premium Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 215.00, freeMileageKm: 300 },
        { id: 8, model: "Honda Civic", price: 229000.00, category: "Premium Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 119.00, freeMileageKm: 300 },
        { id: 9, model: "Toyota Premio", price: 289000.00, category: "Premium Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 225.00, freeMileageKm: 300 },
        { id: 10, model: "Toyota Allion", price: 298000.00, category: "Premium Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 225.00, freeMileageKm: 300 },
        { id: 11, model: "Nissan Leaf", price: 260000.00, category: "Electric Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 265.00, freeMileageKm: 300 },
        { id: 12, model: "BMW 520", price: 300000.00, category: "Luxury Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 258.00, freeMileageKm: 300 },
        { id: 13, model: "Benz S", price: 359000.00, category: "Luxury Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 295.00, freeMileageKm: 300 },
        { id: 14, model: "Land Rover Defender", price: 398000.00, category: "4WD and SUV", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 400.00, freeMileageKm: 300 },
        { id: 15, model: "Mitsubishi Montero", price: 425000.00, category: "4WD and SUV", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 500.00, freeMileageKm: 300 },
        { id: 16, model: "Toyota Prado", price: 465000.00, category: "4WD and SUV", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 520.00, freeMileageKm: 300 },
        { id: 17, model: "Mitsubishi Outlander", price: 485000.00, category: "4WD and SUV", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 540.00, freeMileageKm: 300 },
        { id: 18, model: "Suzuki Hustler", price: 110000.00, category: "Mini Cars", passengers: 4, transmission: "Auto", airConditioning: 1, extraKmPrice: 102.00, freeMileageKm: 300 }
    ];

    cars.forEach(car => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${car.id}</td>
            <td>${car.model}</td>
            <td>${car.price}</td>
            <td>${car.category}</td>
            <td>${car.passengers}</td>
            <td>${car.transmission}</td>
            <td>${car.airConditioning ? 'Yes' : 'No'}</td>
            <td>${car.extraKmPrice}</td>
            <td>${car.freeMileageKm}</td>
            <td><button>Edit</button> <button>Delete</button></td>
        `;
        carsTableBody.appendChild(row);
    });

    // Fetch and display users (dummy data for now)
    const usersTableBody = document.querySelector('#users table tbody');
    const users = [
        { id: 1, name: "John Doe", email: "john@example.com" },
        { id: 2, name: "Jane Smith", email: "jane@example.com" }
    ];

    users.forEach(user => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${user.id}</td>
            <td>${user.name}</td>
            <td>${user.email}</td>
            <td><button>Edit</button> <button>Delete</button></td>
        `;
        usersTableBody.appendChild(row);
    });

    // Fetch and display rentals
    const rentalsTableBody = document.querySelector('#rentals table tbody');
    const rentals = [
        { 
            id: 1, 
            title: 'Mr', 
            fullName: 'Thisari', 
            address: '313/3, Ashokarama Road', 
            mobileNo: '0704009616', 
            email: 'msthisari@gmail.com', 
            nicNo: '200256401103', 
            licenseNo: '0255666', 
            licenseExpiry: '2024-09-07', 
            vehicleType: 'Mini Cars', 
            vehicleName: 'Wagon R', 
            pickUpLocation: 'Kaduwela', 
            dropOffLocation: 'Kaduwela', 
            billingAddress: 'Ihala Bomiriya', 
            billingAddressOptional: '', 
            cardType: 'Visa', 
            cardNumber: '22225545', 
            cardExpiry: '0000-00-00', 
            cardCvn: '124'
        }
    ];
    
    rentals.forEach(rental => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${rental.id}</td>
            <td>${rental.title}</td>
            <td>${rental.fullName}</td>
            <td>${rental.address}</td>
            <td>${rental.mobileNo}</td>
            <td>${rental.email}</td>
            <td>${rental.nicNo}</td>
            <td>${rental.licenseNo}</td>
            <td>${rental.licenseExpiry}</td>
            <td>${rental.vehicleType}</td>
            <td>${rental.vehicleName}</td>
            <td>${rental.pickUpLocation}</td>
            <td>${rental.dropOffLocation}</td>
            <td>${rental.billingAddress}</td>
            <td>${rental.billingAddressOptional}</td>
            <td>${rental.cardType}</td>
            <td>${rental.cardNumber}</td>
            <td>${rental.cardExpiry}</td>
            <td>${rental.cardCvn}</td>
            <td><button>Edit</button> <button>Delete</button></td>
        `;
        rentalsTableBody.appendChild(row);
    });
}); // <-- Closing event listener properly
