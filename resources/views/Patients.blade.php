<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients Blade Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .box {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Emergency Contact</th>
                    <th>Emergency Contact Name</th>
                    <th>Admission Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample patient data, replace this with dynamic data from the server -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>45</td>
                    <td>555-555-5555</td>
                    <td>Jane Doe</td>
                    <td>2023-01-15</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>32</td>
                    <td>555-123-4567</td>
                    <td>John Smith</td>
                    <td>2023-02-20</td>
                </tr>
                <!-- Add more patient rows as needed -->
            </tbody>
        </table>

        <div class="box">
            <label for="searchId">Search ID:</label>
            <input type="text" id="searchId" placeholder="Enter Patient ID">
        </div>
        <div class="box">
            <label for="searchName">Search Name:</label>
            <input type="text" id="searchName" placeholder="Enter Patient Name">
        </div>
        <div class="box">
            <label for="searchAge">Search Age:</label>
            <input type="text" id="searchAge" placeholder="Enter Patient Age">
        </div>
        <div class="box">
            <label for="searchEmergencyContact">Search Emergency Contact:</label>
            <input type="text" id="searchEmergencyContact" placeholder="Enter Emergency Contact">
        </div>
        <div class="box">
            <label for="searchEmergencyContactName">Search Emergency Contact Name:</label>
            <input type="text" id="searchEmergencyContactName" placeholder="Enter Emergency Contact Name">
        </div>
        <div class="box">
            <label for="searchAdmissionDate">Search Admission Date:</label>
            <input type="text" id="searchAdmissionDate" placeholder="Enter Admission Date">
        </div>
    </div>
</body>
</html>
