<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Report Page</title>
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
        .report-details {
            margin-top: 20px;
        }
        .report-details p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <label for="currentDate">Date:</label>
            <input type="text" id="currentDate" readonly>
        </div>

        <div class="button-container">
            <button onclick="showMissedActivity()">Missed Patient Activity</button>
        </div>

        <div class="report-details" id="missedActivityDetails" style="display: none;">
            <h2>Missed Patient Activity Details</h2>
            <p><strong>Patient Name:</strong> John Doe</p>
            <p><strong>Doctor's Name:</strong> Dr. Smith</p>
            <p><strong>Doctor's Appointment:</strong> 2023-01-15 10:00 AM</p>
            <p><strong>Caregiver's Name:</strong> Caregiver Name</p>
            <p><strong>Morning Medication:</strong> Med A</p>
            <p><strong>Afternoon Medication:</strong> Med B</p>
            <p><strong>Night Medication:</strong> Med C</p>
            <p><strong>Breakfast:</strong> Toast</p>
            <p><strong>Lunch:</strong> Salad</p>
            <p><strong>Dinner:</strong> Chicken</p>
        </div>
    </div>

    <script>
        function showMissedActivity() {
            // Add logic to fetch and display missed patient activity details
            document.getElementById('missedActivityDetails').style.display = 'block';
        }

        // Function to update the date to the current date
        function updateCurrentDate() {
            var currentDate = new Date();
            var formattedDate = currentDate.toISOString().split('T')[0];
            document.getElementById("currentDate").value = formattedDate;
        }

        // Call the function to update the date on page load
        updateCurrentDate();
    </script>
</body>
</html>
