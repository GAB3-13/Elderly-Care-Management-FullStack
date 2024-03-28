<!DOCTYPE html>
<?php
session_start();
$email = "";
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="/css/adminNav.css">
  <script>
    function toggleTables() {
      var patientDropdown = document.getElementById('patientDropdown');
      var selectedPatient = patientDropdown.value;
      var bottomTables = document.getElementById('bottomTables');

      if (selectedPatient !== '') {
        bottomTables.style.display = 'block';
      } else {
        bottomTables.style.display = 'none';
      }
    }
  </script>
</head>

<body>

  @include('doctorpages/doctorheader')
  <div class="content-container">
  <h1>Patient Of the Day</h1>

  <table>
    <thead>
      <tr>
        <th>Patient ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Schedule Date</th>
        <th>AppointmentID</th>
      </tr>
    </thead>
    <tbody>
        @if($appointments->isNotEmpty()) 
            @foreach ($appointments as $appointment)
            <tr>
                <td>{{ $appointment->patientID }}</td>
                <td>{{ $appointment->fName }}</td>
                <td>{{ $appointment->lName }}</td>
                <td>{{ $appointment->scheduleDate }}</td>
                <td>{{ $appointment->appointmentID }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">No appointments found</td> <!-- Display message if no appointments -->
            </tr>
        @endif
    </tbody>
  </table>

  {{-- <form id="patientForm" action="/doctorNavigation/details" method="POST">
    @csrf
    <select id="patientDropdown" name="patientID" onchange="this.form.submit()">
      <option value="">Select Patient</option>
      @foreach ($appointments as $appointment)
      <option value="{{ $appointment->patientID }}">
        {{ $appointment->fName }} {{ $appointment->lName }}
      </option>
      @endforeach
    </select>
  </form> --}}
  <br>

  @if($appointments->isNotEmpty()) <!-- Check if appointments exist -->
  <table>
      <form action="/doctorNavigation/set" method="POST">
          @csrf
          <input type="hidden" name="patientID" value="{{  $appointment->patientID  }}">
          <input type="hidden" name="appointmentID" value="{{  $appointment->appointmentID  }}">
        <table>
          <thead>
            <tr>
              <th>CareGivers</th>
              <th>Morning Meds</th>
              <th>Afternoon Meds</th>
              <th>Night Meds</th>
      
            </tr>
          </thead>
      <tbody>
          <tr>
              <td>
                  <select name="caregiverID">
                      <option value="">Select Caregiver</option>
                      @foreach($caregiversDetails as $individualID => $caregiver)
                          <option value="{{ $individualID }}" @if($individualID == $appointments[0]->caregiverID) selected @endif>
                              {{ $caregiver->fName }} {{ $caregiver->lName }}
                          </option>
                      @endforeach
                  </select>
              </td>
              <td><input type="text" name="morning_meds" value="{{ $appointments[0]->morningMeds }}"></td>
              <td><input type="text" name="afternoon_meds" value="{{ $appointments[0]->afternoonMeds }}"></td>
              <td><input type="text" name="night_meds" value="{{ $appointments[0]->nightMeds }}"></td>
          </tr>
      </tbody>
  </table>
  <br>
    <table>
      <thead>
          <tr>
              <th>Breakfast</th>
              <th>Lunch</th>
              <th>Dinner</th>
              <th>Comments</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td><input type="text" name="breakfast" value="{{ $appointments[0]->breakfast }}"></td>
              <td><input type="text" name="lunch" value="{{ $appointments[0]->lunch }}"></td>
              <td><input type="text" name="dinner" value="{{ $appointments[0]->dinner }}"></td>
              <td><input type="text" name="comment" value="{{ $appointments[0]->comment }}"></td>
          </tr>
      </tbody>
  </table>
@endif
  <br>
  <button type="submit">Submit</button>
</form>
  </div>

<script>
  function fetchPatientInfo() {
    var patientDropdown = document.getElementById('patientDropdown');
    var selectedPatient = patientDropdown.value;
    var bottomTables = document.getElementById('bottomTables');

    if (selectedPatient !== '') {
      fetch('/your-controller-endpoint/' + selectedPatient, {
        method: 'GET', // Adjust the method as per your controller endpoint
        headers: {
          'Content-Type': 'application/json'
        }
      })
      .then(response => response.json())
      .then(data => {
        bottomTables.style.display = 'block'; // Show the bottom tables

        // Update form fields based on fetched data
        document.querySelector('select[name="caregiverID"]').value = data.caregiverID;
        document.querySelector('input[name="morning_meds"]').value = data.morningMeds;
        document.querySelector('input[name="afternoon_meds"]').value = data.afternoonMeds;
        document.querySelector('input[name="night_meds"]').value = data.nightMeds;
        document.querySelector('input[name="breakfast"]').value = data.breakfast;
        document.querySelector('input[name="lunch"]').value = data.lunch;
        document.querySelector('input[name="dinner"]').value = data.dinner;
        document.querySelector('input[name="comment"]').value = data.comment;
        // Add similar lines for other fields as needed
      })
      .catch(error => {
        console.error('Error fetching patient details:', error);
      });
    } else {
      bottomTables.style.display = 'none'; // Hide the bottom tables if no patient is selected
    }
  }
</script>


</body>

</html>
