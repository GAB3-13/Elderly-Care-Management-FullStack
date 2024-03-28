<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Blade Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
        }
        .box {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, button {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }
        .column {
            float: left;
            width: 33.33%;
            padding: 0 15px;
            box-sizing: border-box;
        }
        .appointment-button {
            display: block;
            margin-top: 10px;
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <label for="patientId">Patient ID:</label>
            <input type="text" id="patientId" readonly value="12345">
        </div>
        <div class="box">
            <label for="date">Date:</label>
            <input type="text" id="date">
        </div>
        <div class="box">
            <label for="patientName">Patient Name:</label>
            <input type="text" id="patientName" readonly value="John Doe">
        </div>
        <div class="column">
            <label for="doctorsName">Doctor's Name:</label>
            <input type="text" id="doctorsName" readonly>
        </div>
        <div class="column">
            <label>Doctor's Appointment:</label>
            <button class="appointment-button" onclick="scheduleAppointment()">Schedule Appointment</button>
            <div id="appointmentDetails"></div>
        </div>
        <div class="column">
            <label for="caregiversName">Caregiver's Name:</label>
            <input type="text" id="caregiversName" readonly>
        </div>
        <div class="column">
            <label for="morningMedicine">Morning Medicine:</label>
            <input type="text" id="morningMedicine" readonly>
        </div>
        <div class="column">
            <label for="afternoonMedicine">Afternoon Medicine:</label>
            <input type="text" id="afternoonMedicine" readonly>
        </div>
        <div class="column">
            <label for="nightMedicine">Night Medicine:</label>
            <input type="text" id="nightMedicine" readonly>
        </div>
        <div class="column">
            <label for="breakfast">Breakfast:</label>
            <input type="text" id="breakfast" readonly>
        </div>
        <div class="column">
            <label for="lunch">Lunch:</label>
            <input type="text" id="lunch" readonly>
        </div>
        <div class="column">
            <label for="dinner">Dinner:</label>
            <input type="text" id="dinner" readonly>
        </div>
    </div>
//b
    <script>
        function scheduleAppointment() {
            var appointmentDetails = prompt("Enter appointment details:");
            document.getElementById("appointmentDetails").innerText = "Appointment: " + appointmentDetails;
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
