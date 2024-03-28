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

  @include('patientpages/patientheader')
  <div class="content-container">
  <h1>Patient Hub</h1>

  <h2>Patient Information</h2>
  <ul>
    @foreach ($patients as $patient)

    <li><strong>Patient Name:</strong> {{ $patient->fName }} {{ $patient->lName }}</li>
    <li><strong>Patient ID:</strong> {{ $patient->patientID }}</li>
    <li><strong>Morning Medicine:</strong> {{ $patient->morningMed }}</li>
    <li><strong>Afternoon Medicine:</strong> {{ $patient->afternoonMed}}</li>
    <li><strong>Night Medicine:</strong> {{ $patient->nightMed }}</li>
    <li><strong>Breakfast:</strong> {{ $patient->breakfast }}</li>
    <li><strong>Lunch:</strong> {{ $patient->lunch }}</li>
    <li><strong>Dinner:</strong> {{ $patient->dinner }}</li>
    @endforeach

  </ul>
  </div>
</body>

</html>
