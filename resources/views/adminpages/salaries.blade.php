<!DOCTYPE html>
<?php
session_start();
$email = "";
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Salaries Page</title>
  <link rel="stylesheet" href="/css/adminNav.css">
</head>

<body>

  @include('adminpages/header')
  <div class="content-container">
  <h1>Salaries</h1>

  <h2>Doctors</h2>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role ID</th>
        <th>Individual ID</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
    <form method="post" action="{{ route('updateSalary') }}">
      @csrf
    @foreach($doctorIndividuals as $docs)
    {{-- <input type="hidden" name="individualIDd" value="{{ $docs->individualID }}">
    <input type="hidden" name="roleID" value="{{ $docs->roleID }}"> --}}
    <tr>
        <td>{{ $docs->fName }}</td>
        <td>{{ $docs->lName }}</td>
        <td>{{ $docs->roleID }}</td>
        <td>{{ $docs->individualID }}</td>

        <td>
          <input type="hidden" name="individualID[]" value="{{ $docs->individualID }}">
          <input type="hidden" name="roleID[]" value="{{ $docs->roleID }}">
          <input type="text" name="salary[{{ $docs->individualID }}]" value="{{ $docs->salary }}">

        </td>
        <td>
            <button type="submit">Update</button>
        </td>
    </tr>
@endforeach
  </form>
  </table>

  <h2>Caregivers</h2>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role ID</th>
        <th>Individual ID</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <form method="post" action="{{ route('updateSalary') }}">
        @csrf
      @foreach($caregiverIndividuals as $caregiver)
      <input type="hidden" name="individualIDc" value="individualIDc{{ $caregiver->individualID }}">
    <input type="hidden" name="roleID" value="{{ $caregiver->roleID }}">
      <tr>
          <td>{{ $caregiver->fName }}</td>
          <td>{{ $caregiver->lName }}</td>
          <td>{{ $caregiver->roleID }}</td>
          <td>{{ $caregiver->individualID }}</td>

          <td>
            <input type="hidden" name="individualID[]" value="{{ $caregiver->individualID }}">
            <input type="hidden" name="roleID[]" value="{{ $caregiver->roleID }}">
            <input type="text" name="salary[{{ $caregiver->individualID }}]" value="{{ $caregiver->salary }}">
          </td>
          <td>
              <button type="submit">Update</button>
          </td>
      </tr>
  @endforeach
    </tbody>
  </form>
  </table>


  <h2>Supervisor</h2>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role ID</th>
        <th>Individual ID</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <form method="post" action="{{ route('updateSalary') }}">
        @csrf
      @foreach($supervisorIndividuals as $supa)
      <input type="hidden" name="individualIDs" value="individualIDs{{ $supa->individualID }}">
    <input type="hidden" name="roleID" value="{{ $supa->roleID }}">
      <tr>
          <td>{{ $supa->fName }}</td>
          <td>{{ $supa->lName }}</td>
          <td>{{ $supa->roleID }}</td>
          <td>{{ $supa->individualID }}</td>

         <td>
          <input type="hidden" name="individualID[]" value="{{ $supa->individualID }}">
          <input type="hidden" name="roleID[]" value="{{ $supa->roleID }}">
          <input type="text" name="salary[{{ $supa->individualID }}]" value="{{ $supa->salary }}">          </td>
          <td>
              <button type="submit">Update</button>
          </td>
      </tr>
  @endforeach
    </tbody>
  </form>
  </table>

  </div>

<script>
  const successMessage = "{{ session('success') }}";
  if (successMessage) {
      setTimeout(() => {
          location.reload();
      }, 1000);
  }
</script>

</body>

</html>
