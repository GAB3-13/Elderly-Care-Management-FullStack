<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .button-container {
            text-align: right;
            margin-top: 15px;
        }
        .button-container button {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Available Medications</h2>
        <table>
            <thead>
                <tr>
                    <th>Medication Name</th>
                    <th>On Hand</th>
                    <th>Being Used</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Medication A</td>
                    <td>50</td>
                    <td>10</td>
                    <td>$50.00</td>
                </tr>
                <tr>
                    <td>Medication B</td>
                    <td>30</td>
                    <td>5</td>
                    <td>$30.00</td>
                </tr>
                <!-- Add more medications as needed -->
            </tbody>
        </table>

        <div class="button-container">
            <button onclick="updateMedication()">Update Medication</button>
        </div>
    </div>

    <script>
        function updateMedication() {
            // Add logic to update medication information
            alert("Medication information updated successfully!");
        }
    </script>
</body>
</html>
