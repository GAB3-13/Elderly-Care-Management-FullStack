<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Schedule Page</title>
        <link rel="stylesheet" href="/css/adminNav.css">
      </head>
<body>
    @include('patientpages/patientheader')
    <div class="content-container">

    <div class="container">
        <div class="box">
            <label for="patientId">Patient ID:</label>
            <input type="text" id="patientId" readonly value="12345">
        </div>
        <div class="box">
            <label for="date">Date:</label>
            <input type="text" id="date">
        </div>
        <div class="box">
            <label for="patientName">Patient Name:</label>
            <input type="text" id="patientName" readonly value="John Doe">
        </div>
        <div class="column">
            <label for="doctorsName">Doctor's Name:</label>
            <input type="text" id="doctorsName" readonly>
        </div>
        <div class="column">
            <label>Doctor's Appointment:</label>
            <button class="appointment-button" onclick="scheduleAppointment()">Schedule Appointment</button>
            <div id="appointmentDetails"></div>
        </div>
        <div class="column">
            <label for="caregiversName">Caregiver's Name:</label>
            <input type="text" id="caregiversName" readonly>
        </div>
        <div class="column">
            <label for="morningMedicine">Morning Medicine:</label>
            <input type="text" id="morningMedicine" readonly>
        </div>
        <div class="column">
            <label for="afternoonMedicine">Afternoon Medicine:</label>
            <input type="text" id="afternoonMedicine" readonly>
        </div>
        <div class="column">
            <label for="nightMedicine">Night Medicine:</label>
            <input type="text" id="nightMedicine" readonly>
        </div>
        <div class="column">
            <label for="breakfast">Breakfast:</label>
            <input type="text" id="breakfast" readonly>
        </div>
        <div class="column">
            <label for="lunch">Lunch:</label>
            <input type="text" id="lunch" readonly>
        </div>
        <div class="column">
            <label for="dinner">Dinner:</label>
            <input type="text" id="dinner" readonly>
        </div>
    </div>
    </div>
    <script>
        function scheduleAppointment() {
            var appointmentDetails = prompt("Enter appointment details:");
            document.getElementById("appointmentDetails").innerText = "Appointment: " + appointmentDetails;
        }
    </script>

</body>
</html>
