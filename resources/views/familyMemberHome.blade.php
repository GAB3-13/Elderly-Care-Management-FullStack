<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Member Home Page</title>
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
            <label for="currentDate">Date:</label>
            <input type="text" id="currentDate" readonly>
        </div>

        <div class="box">
            <label for="familyCode">Family Code:</label>
            <input type="text" id="familyCode" placeholder="Enter Family Code">
        </div>

        <div class="box">
            <label for="patientId">Patient ID:</label>
            <input type="text" id="patientId" placeholder="Enter Patient ID">
        </div>

        <div class="button-container">
            <button onclick="updateDetails()">Ok</button>
            <button onclick="refreshPage()">Cancel</button>
        </div>

        <!-- Display details dynamically based on the family code and patient id -->
        <div id="patientDetails" style="display: none;">
            <h2>Doctor's Name: Dr. John Doe</h2>
            <h3>Caregiver: Caregiver Name</h3>
            <p>Morning Medicine: Med A</p>
            <p>Afternoon Medicine: Med B</p>
            <p>Night Medicine: Med C</p>
            <p>Breakfast: Toast</p>
            <p>Lunch: Salad</p>
            <p>Dinner: Chicken</p>
        </div>
    </div>

    <script>
        function updateDetails() {
            // Add logic to fetch and display patient details based on family code and patient id
            document.getElementById('individualID' => 'individualID').style.display = 'block';
        }

        function refreshPage() {
            // Reset the form and hide patient details
            document.getElementById('familyCode').value = '';
            document.getElementById('patientId').value = '';
            document.getElementById('individualID').style.display = 'none';
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
    @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box">
            <label for="rosterDate">Date:</label>
            <input type="text" id="rosterDate" readonly>
        </div>
@include('Roster.blade.php', ['roster' => $roster])

        <table>
            <thead>
                <tr>
                    <th>Supervisor</th>
                    <th>Doctor</th>
                    <th>Caregiver1</th>
                    <th>Caregiver2</th>
                    <th>Caregiver3</th>
                    <th>Caregiver4</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label for="supervisorName">Name:</label>
                        <input type="text" id="supervisorName" readonly value="John Doe">
                    </td>
                    <td>
                        <label for="doctorName">Name:</label>
                        <input type="text" id="doctorName" readonly value="Dr. Smith">
                    </td>
                    <td>
                        <label for="caregiver1Name">Name:</label>
                        <input type="text" id="caregiver1Name" readonly value="Caregiver 1">
                    </td>
                    <td>
                        <label for="caregiver2Name">Name:</label>
                        <input type="text" id="caregiver2Name" readonly value="Caregiver 2">
                    </td>
                    <td>
                        <label for="caregiver3Name">Name:</label>
                        <input type="text" id="caregiver3Name" readonly value="Caregiver 3">
                    </td>
                    <td>
                        <label for="caregiver4Name">Name:</label>
                        <input type="text" id="caregiver4Name" readonly value="Caregiver 4">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <label for="doctorGroupName">Patient Group:</label>
                        <input type="text" id="doctorGroupName" readonly value="Group A">
                    </td>
                    <td>
                        <label for="caregiver1GroupName">Patient Group:</label>
                        <input type="text" id="caregiver1GroupName" readonly value="Group B">
                    </td>
                    <td>
                        <label for="caregiver2GroupName">Patient Group:</label>
                        <input type="text" id="caregiver2GroupName" readonly value="Group C">
                    </td>
                    <td>
                        <label for="caregiver3GroupName">Patient Group:</label>
                        <input type="text" id="caregiver3GroupName" readonly value="Group D">
                    </td>
                    <td>
                        <label for="caregiver4GroupName">Patient Group:</label>
                        <input type="text" id="caregiver4GroupName" readonly value="Group E">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
</body>
</html>
