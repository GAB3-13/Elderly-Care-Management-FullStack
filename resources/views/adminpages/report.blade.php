<!DOCTYPE html>
<?php
session_start();
$email = '';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/adminNav.css">
    <script>
        function getForChange() {
            var patientInformation = document.getElementById('patientInformation');
            var updatePatient = document.getElementById('updateTable');
            var submit = document.getElementById('submit')
            if (patientInformation.value != '') {
                updatePatient.style.display = 'block';
                submit.disabled = false;
            } else {
                updatePatient.style.display = 'none';
                submit.disabled = true;
            }
        }
    </script>

</head>

<body>

    @include('adminpages/header')
    <div class="content-container">
        <h1>Admin Activity Dashboard</h1>
        <p>Here is a Activity Report that the Caregiver updates on their end </p>

        <table id="patientHistory">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Date</th>
                    <th>Breakfast</th>
                    <th>Morning Medicine</th>
                    <th>Lunch</th>
                    <th>Afternoon Medicine</th>
                    <th>Dinner</th>
                    <th>Night Medicine</th>
                </tr>
                @foreach ($caregiverPatients as $cgP)
                    <tr>
                        <td>{{ $cgP->fName }} {{ $cgP->lName }}</td>
                        <td>{{ $cgP->appointmentDate }}</td>
                        <td>{{ $cgP->check_breakfast }}</td>
                        <td>{{ $cgP->check_morningMeds }}</td>
                        <td>{{ $cgP->check_lunch }}</td>
                        <td>{{ $cgP->check_afternoonMeds }}</td>
                        <td>{{ $cgP->check_dinner }}</td>
                        <td>{{ $cgP->check_nightMeds }}</td>
                    </tr>
                @endforeach
                </tr>
            </thead>
        </table>


    </div>

</body>

</html>
