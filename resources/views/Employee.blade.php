<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Blade Page</title>
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
        input, button {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }
        .button-container {
            text-align: right;
        }
        .button-container button {
            margin-left: 5px;
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
                    <th>Role</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample employee data, replace this with dynamic data from the server -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Supervisor</td>
                    <td>$50,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>Admin</td>
                    <td>$60,000</td>
                </tr>
                <!-- Add more employee rows as needed -->
            </tbody>
        </table>

        <div class="box">
            <label for="empId">Emp ID:</label>
            <input type="text" id="empId" placeholder="Enter Employee ID">
        </div>
        <div class="box">
            <label for="newSalary">New Salary:</label>
            <input type="text" id="newSalary" placeholder="Enter New Salary" readonly>
        </div>

        <div class="button-container">
            <button onclick="updateInformation()">Ok</button>
            <button onclick="resetPage()">Cancel</button>
        </div>
    </div>

    <script>
        function updateInformation() {
            // Add logic to update information on the server
            alert("Information updated successfully!");
        }

        function resetPage() {
            // Add logic to reset the page
            document.getElementById("empId").value = "";
            document.getElementById("newSalary").value = "";
        }
    </script>
</body>
</html>
