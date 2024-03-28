<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button.cancel {
            background-color: #f44336;
        }
    </style>
</head>
<body>

    <h2>Patient Information</h2>

    <label for="patientID">Patient ID:</label>
    <input type="text" id="patientID" placeholder="Enter Patient ID">

    <label for="group">Group:</label>
    <input type="text" id="group" placeholder="Enter Group">

    <label for="admissionDate">Admission Date:</label>
    <input type="text" id="admissionDate" placeholder="Enter Admission Date">

    <label for="patientName">Patient Name:</label>
    <input type="text" id="patientName" placeholder="Enter Patient Name">

    <button onclick="submitForm()">OK</button>
    <button class="cancel" onclick="resetForm()">Cancel</button>

    <script>
        function submitForm() {
            // Add your logic here to handle form submission and updating information
            alert("Information submitted!");
        }

        function resetForm() {
            // Add your logic here to reset the form
            document.getElementById("patientID").value = "";
            document.getElementById("group").value = "";
            document.getElementById("admissionDate").value = "";
            document.getElementById("patientName").value = "";
        }
    </script>

</body>
</html>
