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
</head>

<body>

  @include('familymember/familymemberheader')
  <div class="content-container">
    <h1>Patient Look Up</h1>

    <form action="/familymemberNavigation/searchpatient" method="POST">
        @csrf

        <ul id="famcode">
            <li>
                <label for="patientCondition">Family Code</label>
                <input type="text" id="familyCode" name="familyCode" placeholder="Enter Family Code">
            </li>
        </ul>

        <label for="patientDropdown">Select Patient</label>
        <select id="patientDropdown" name="individualID">
            <option value="">Select Patient</option>
            @foreach ($patientIndividuals as $patient)
                <option value="{{ $patient->individualID }}">
                    {{ $patient->fName }} {{ $patient->lName }}
                </option>
            @endforeach
        </select>
<br>  
<br>
        <button type="submit">Submit</button>
    </form>
    @if(isset($patientsInfo) && $patientsInfo->isNotEmpty())    <h2>Patient Information</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>PatientID</th>
                <th>Phone</th>
                <th>Dob</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($patientsInfo as $patient)
          <tr>
              <td>{{ $patient->fName }} {{ $patient->lName }}</td>
              <td>{{ $patient->email }}</td>
              <td>{{ $patient->patientID }}</td>
              <td>{{ $patient->phone }}</td>
              <td>{{ $patient->dob }}</td>
          </tr>
      @endforeach
        </tbody>
    </table>
    <h2>Currently</h2>
    <table border="1">
      <thead>
          <tr>
              <th>Breakfast</th>
              <th>Lunch</th>
              <th>Dinner</th>
              <th>Mornning Medicine</th>
              <th>Afternoon Medicine</th>
              <th>Night Medicine</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($patientsInfo as $patient)
        <tr>
            <td>{{ $patient->breakfast }} </td>
            <td>{{ $patient->lunch }}</td>
            <td>{{ $patient->dinner }}</td>
            <td>{{ $patient->morningMed }}</td>
            <td>{{ $patient->afternoonMed }}</td>
            <td>{{ $patient->nightMed }}</td>
          </tr>
    @endforeach
      </tbody>
  </table>
  <h2>Today</h2>
  <table border="1">
    <thead>
        <tr>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
            <th>Mornning Medicine</th>
            <th>Afternoon Medicine</th>
            <th>Night Medicine</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($caregiverInfo as $patient)
      <tr>
        <td>{{ $patient->check_breakfast }} </td>
        <td>{{ $patient->check_lunch }}</td>
        <td>{{ $patient->check_dinner }}</td>
        <td>{{ $patient->check_morningMeds }}</td>
        <td>{{ $patient->check_afternoonMeds }}</td>
        <td>{{ $patient->check_nightMeds }}</td>
      </tr>


        @endforeach
    </tbody>
</table>
    @endif


</div>

</body>

</html>
