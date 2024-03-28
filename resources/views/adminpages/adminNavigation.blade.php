<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="/css/adminNav.css">
</head>

<body>

  @include('adminpages/header')
  <div class="content-container">
    <div class="tree-container">
      <h1 class="title">Admin Staff Hierarchy</h1>
      <br>
      <ul class="icon-list">
        <li>
          Admin (1)
          <ul class="center-icons">
            <li><span class="icon"><img class="icon" src="images/welcome/icons/admin.png" alt=""></span></li>
          </ul>
        </li>
    
        <li>
          Supervisors ({{ $supervisorCount }})
          <ul class="center-icons">
            @if($supervisorCount > 0)
              @for($i = 1; $i <= $supervisorCount; $i++)
                <li><span class="icon"><img class="icon" src="images/welcome/icons/supervisor.png" alt=""></span></li>
              @endfor
            @endif
          </ul>
        </li>
    
        <li>
          Doctors ({{ $doctorCount }})
          <ul class="center-icons">
            @if($doctorCount > 0)
              @for($i = 1; $i <= $doctorCount; $i++)
                <li><span class="icon"><img class="icon" src="images/welcome/icons/doc.png" alt=""></span></li>
              @endfor
            @endif
          </ul>
        </li>
    
        <li>
          Caregivers ({{ $caregiverCount }})
          <ul class="center-icons">
            @if($caregiverCount > 0)
              @for($i = 1; $i <= $caregiverCount; $i++)
                <li><span class="icon"><img class="icon" src="images/welcome/icons/caregiver.png" alt=""></span></li>
              @endfor
            @endif
          </ul>
        </li>
    
        <li>
          Patients ({{ $patientCount }})
          <ul class="center-icons">
            @if($patientCount > 0)
              @for($i = 1; $i <= $patientCount; $i++)
                <li><span class="icon"><img class="icon" src="images/welcome/icons/patient.png" alt=""></span></li>
              @endfor
            @endif
          </ul>
        </li>
      </ul>
    </div>
  </div>
  
</body>

</html>
