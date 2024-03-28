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

    @include('caregiverpages/caregiverheader')
    <div class="content-container">
        <h1>

            {{ $cgI[0]->fName }} {{ $cgI[0]->lName }}'s Caregiver Dashboard</h1>
        <p>Here the caregiver is able to select from a dropdown of patients they have been assigned.
            Once they select a patient, they can view their medicine schedule for breakfast, lunch, dinner, etc.</p>

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


        <br>
        <form id="patientInformation" action="{{ route('createCheckUpdate') }}" method="post" accept-charset="UTF-8">
            {{ csrf_field() }}
            <label for="appointments">Select Patient:</label>
            <select name="appointments" onchange="getForChange()">
                <option value="" disabled selected hidden>Select Patient - Date</option>
                @foreach ($caregiverPatients as $patient)
                    <option value={{ $patient->appointmentID }}>{{ $patient->fName }}
                        {{ $patient->lName }} - {{ $patient->appointmentDate }}</option>
                @endforeach
            </select>
            <input type="submit" id="submit" disabled>

            <table id="updateTable" style="display: none">
                <thead>
                    <tr>
                        <th>Breakfast</th>
                        <th>Morning Medicine</th>
                        <th>Lunch</th>
                        <th>Afternoon Medicine</th>
                        <th>Dinner</th>
                        <th>Night Medicine</th>
                    </tr>
                    <tr>
                        <td><input name="breakfast" type="checkbox" id="breakfast"></td>
                        <td><input name="morning_meds" type="checkbox" id="morning_meds"></td>
                        <td><input name="lunch" type="checkbox" id="lunch"></td>
                        <td><input name="afternoon_meds" type="checkbox" id="afternoon_meds"></td>
                        <td><input name="dinner" type="checkbox" id="dinner"></td>
                        <td><input name="night_meds" type="checkbox" id="night_meds"></td>
        </form>
        </tr>
        </thead>
        </table>
    </div>

</body>

</html>
