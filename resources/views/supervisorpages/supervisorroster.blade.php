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

  @include('supervisorpages/supervisorheader')
  <div class="content-container">

    <h1>Supervisor Hub</h1>
    <div class="roster-table">
      <h2>Set Rosters</h2>
      <table>    <table class="custom-table">
          <thead>
              <tr>
                  <th>Roster Date</th>
                  <th>Supervisor</th>
                  <th>Doctor</th>
                  <th>Caregiver 1</th>
                  <th>Caregiver 2</th>
                  <th>Caregiver 3</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($setRosters as $roster)
              <tr>
                  <td>{{ $roster->rosterDate }}</td>
                  <td>{{ $roster->supervisor->fName }}</td>
                  <td>{{ $roster->doctor->fName }}</td>
                  <td>{{ $roster->caregiver1->fName }}</td>
                  <td>{{ $roster->caregiver2->fName }}</td>
                  <td>{{ $roster->caregiver3->fName }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  </div>
</body>

</html>
