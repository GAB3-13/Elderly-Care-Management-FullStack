

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caregiver's Home Page</title>
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
        <!-- Sample data, replace with dynamic data from the server -->
        <div class="box">
            <h2>Patient: John Doe</h2>
            <p>Morning Medication: Med A</p>
            <p>Afternoon Medication: Med B</p>
            <p>Night Medication: Med C</p>
            <p>Breakfast: Toast</p>
            <p>Lunch: Salad</p>
            <p>Dinner: Chicken</p>
        </div>

        <!-- Add more patient boxes as needed -->

        <div class="button-container">
            <button onclick="updatePatientDetails()">Ok</button>
            <button onclick="refreshPage()">Cancel</button>
        </div>
    </div>

    <script>
        function updatePatientDetails() {
            // Add logic to update patient details on the server
            alert("Patient details updated successfully!");
        }

        function refreshPage() {
            // Add logic to refresh the page
            location.reload();
        }

   
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

