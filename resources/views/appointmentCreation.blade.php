<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Creation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
        }
        .box {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }
        .button-container {
            text-align: right;
            margin-top: 15px;
        }
        .button-container button {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <label for="patientId">Patient ID:</label>
            <input type="text" id="patientId" placeholder="Enter Patient ID">
        </div>

        <div class="box">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" placeholder="Enter First Name">
        </div>

        <div class="box">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" placeholder="Enter Last Name">
        </div>

        <div class="box">
            <label for="appointmentDate">Appointment Date:</label>
            <input type="date" id="appointmentDate">
        </div>

        <div class="box">
            <label for="doctor">Select Doctor:</label>
            <select id="doctor">
                <option value="doctor1">Doctor 1</option>
                <option value="doctor2">Doctor 2</option>
                <!-- Add more doctors as needed -->
            </select>
        </div>

        <div class="button-container">
            <button onclick="createAppointment()">Create</button>
            <button onclick="resetPage()">Cancel</button>
        </div>
    </div>

    <script>
        function createAppointment() {
            // Add logic to send the information to the doctor's appointment page
            var patientId = document.getElementById('patientId').value;
            var firstName = document.getElementById('firstName').value;
            var lastName = document.getElementById('lastName').value;
            var appointmentDate = document.getElementById('appointmentDate').value;
            var selectedDoctor = document.getElementById('doctor').value;

            // Send the information to the doctor's appointment page
            // You can use AJAX or any suitable method to send the data

            alert("Appointment created successfully!");
        }

        function resetPage() {
            // Reset the form
            document.getElementById('patientId').value = '';
            document.getElementById('firstName').value = '';
            document.getElementById('lastName').value = '';
            document.getElementById('appointmentDate').value = '';
            document.getElementById('doctor').value = '';
        }
    </script>
</body>
</html>
