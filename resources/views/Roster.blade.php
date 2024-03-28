<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roster Blade Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
        }
        .box {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <label for="rosterDate">Date:</label>
            <input type="text" id="rosterDate" readonly>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Supervisor</th>
                    <th>Doctor</th>
                    <th>Caregiver1</th>
                    <th>Caregiver2</th>
                    <th>Caregiver3</th>
                    <th>Caregiver4</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label for="supervisorName">Name:</label>
                        <input type="text" id="supervisorName" readonly value="John Doe">
                    </td>
                    <td>
                        <label for="doctorName">Name:</label>
                        <input type="text" id="doctorName" readonly value="Dr. Smith">
                    </td>
                    <td>
                        <label for="caregiver1Name">Name:</label>
                        <input type="text" id="caregiver1Name" readonly value="Caregiver 1">
                    </td>
                    <td>
                        <label for="caregiver2Name">Name:</label>
                        <input type="text" id="caregiver2Name" readonly value="Caregiver 2">
                    </td>
                    <td>
                        <label for="caregiver3Name">Name:</label>
                        <input type="text" id="caregiver3Name" readonly value="Caregiver 3">
                    </td>
                    <td>
                        <label for="caregiver4Name">Name:</label>
                        <input type="text" id="caregiver4Name" readonly value="Caregiver 4">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <label for="doctorGroupName">Patient Group:</label>
                        <input type="text" id="doctorGroupName" readonly value="Group A">
                    </td>
                    <td>
                        <label for="caregiver1GroupName">Patient Group:</label>
                        <input type="text" id="caregiver1GroupName" readonly value="Group B">
                    </td>
                    <td>
                        <label for="caregiver2GroupName">Patient Group:</label>
                        <input type="text" id="caregiver2GroupName" readonly value="Group C">
                    </td>
                    <td>
                        <label for="caregiver3GroupName">Patient Group:</label>
                        <input type="text" id="caregiver3GroupName" readonly value="Group D">
                    </td>
                    <td>
                        <label for="caregiver4GroupName">Patient Group:</label>
                        <input type="text" id="caregiver4GroupName" readonly value="Group E">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        // Function to update the date to the current date
        function updateCurrentDate() {
            var currentDate = new Date();
            var formattedDate = currentDate.toISOString().split('T')[0];
            document.getElementById("rosterDate").value = formattedDate;
        }

        // Call the function to update the date on page load
        updateCurrentDate();
    </script>
</body>
</html>
