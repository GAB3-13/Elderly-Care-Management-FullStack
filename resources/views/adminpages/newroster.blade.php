<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="/css/newRoster.css">
</head>

<body>

  @include('adminpages/header')
  <div class="content-container">

    <div class="fields-container">
        <h1 class="title">New Daily Roster</h1>
        <form method="POST" action="{{ route('saveRoster') }}" >
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
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
$(document).ready(function(){
    $('#rosterDate').datepicker({
        format: 'yyyy/mm/dd', 
        autoclose: true
    }).on('show', function(e){
        $('.datepicker').wrap('<div class="datepicker-popup"></div>');
    }).on('hide', function(e){
        $('.datepicker-popup').remove(); 
    });
});




  const urlParams = new URLSearchParams(window.location.search);
const errorMessage = urlParams.get('error');
if (errorMessage) {
    const errorDiv = document.getElementById('errorMessage');
    errorDiv.textContent = errorMessage;
    errorDiv.style.display = 'block'; // Show the error message

    setTimeout(() => {
        errorDiv.style.opacity = '0'; 
        setTimeout(() => {
            errorDiv.style.display = 'none'; // Hide the error message after fading out
        }, 400); 
    }, 3000);
}


</script>
</body>

</html>
