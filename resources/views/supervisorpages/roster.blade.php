<!DOCTYPE html>
<?php
session_start();
$email = "";
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="/css/newRoster.css">
</head>

<body>

  @include('supervisorpages/supervisorheader')
  <div class="content-container">

    <div class="fields-container">
      <h1 class="title">New Daily Roster</h1>
      <form method="POST" action="{{ route('saveRosterr') }}" >
          @csrf
          <ul class="fields">
              <li>
                  <label for="rosterDate">Roster Date:</label>
                  <input type="text" name="rosterDate" id="rosterDate" class="form-control">
              </li>
              <li>
                  <label for="supervisor">Supervisor:</label>
                  <select name="supervisorID" id="supervisor">
                      @foreach ($supervisorIndividuals as $supervisor)
                          <option value="{{ $supervisor->individualID }}">Id:{{ $supervisor->individualID  }}, Name:{{ $supervisor->fName}}</option>
                      @endforeach
                  </select>
              </li>
              <li>
                  <label for="doctor">Doctor:</label>
                  <select name="doctorID" id="doctor">
                      @foreach ($doctorIndividuals as $doctor)
                          <option value="{{ $doctor->individualID }}">Id:{{ $doctor->individualID }}, Name:{{ $doctor->fName }}</option>
                      @endforeach
                  </select>
              </li>
              <li>
                  <label for="caregiver1">Caregiver 1:</label>
                  <select name="caregiverID1" id="caregiver1" onchange="filterCaregivers('caregiver1')">
                      @foreach ($caregiverIndividuals as $caregiver)
                      <option value="{{ $caregiver->individualID }}">Id:{{ $caregiver->individualID }}, Name:{{ $caregiver->fName }}</option>
                      @endforeach
                  </select>
              </li>
              <li>
                  <label for="caregiver2">Caregiver 2:</label>
                  <select name="caregiverID2" id="caregiver2" onchange="filterCaregivers('caregiver2')">
                      @foreach ($caregiverIndividuals as $caregiver)
                      <option value="{{ $caregiver->individualID }}">Id:{{ $caregiver->individualID }}, Name:{{ $caregiver->fName }}</option>
                      @endforeach
                  </select>
              </li>
              <li>
                  <label for="caregiver3">Caregiver 3:</label>
                  <select name="caregiverID3" id="caregiver3"onchange="filterCaregivers('caregiver3')">
                      @foreach ($caregiverIndividuals as $caregiver)
                      <option value="{{ $caregiver->individualID }}">Id:{{ $caregiver->individualID }}, Name:{{ $caregiver->fName }}</option>
                      @endforeach
                  </select>
              </li>
          </ul>
          <button type="submit">Submit</button>
      </form>
      <div id="errorMessage" class="error-message">
      </div>
      
  </div>
  </div>
</body>

</html>
