<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Approval Blade Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
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
        .checkbox-container {
            margin-top: 10px;
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
        <div class="box">
            <label for="userName">Name:</label>
            <input type="text" id="userName" readonly value="John Doe">
        </div>
        <div class="box">
            <label for="userRole">Role:</label>
            <input type="text" id="userRole" readonly value="Supervisor">
        </div>

        <div class="checkbox-container">
            <label>Grant Access:</label>
            <input type="checkbox" id="grantAccessYes" value="yes"> Yes
            <input type="checkbox" id="grantAccessNo" value="no"> No
        </div>

        <div class="button-container">
            <button onclick="updateApproval()">Ok</button>
            <button onclick="resetPage()">Cancel</button>
        </div>
    </div>

    <script>
        function updateApproval() {
            var grantAccessYes = document.getElementById("grantAccessYes").checked;
            var grantAccessNo = document.getElementById("grantAccessNo").checked;

            if (grantAccessYes || grantAccessNo) {
                // Add logic to update approval status on the server
                alert("User access updated successfully!");
            } else {
                alert("Please select Yes or No to update user access.");
            }
        }

        function resetPage() {
            // Add logic to reset the page
            document.getElementById("grantAccessYes").checked = false;
            document.getElementById("grantAccessNo").checked = false;
        }
    </script>
</body>
</html>
