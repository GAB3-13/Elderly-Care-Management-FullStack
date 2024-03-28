<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Insertion (Admin Only)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, input {
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

    <h2>Role Insertion (Admin Only)</h2>

    <label for="currentRole">Current Role:</label>
    <select id="currentRole">
        <option value="admin">Admin</option>
        <option value="editor">Editor</option>
        <option value="viewer">Viewer</option>
    </select>

    <label for="accessLevel">Access Level:</label>
    <input type="text" id="accessLevel" readonly>

    <label for="newRole">New Role:</label>
    <input type="text" id="newRole" placeholder="Enter New Role">

    <label for="newAccessLevel">Access Level (1-5):</label>
    <input type="number" id="newAccessLevel" min="1" max="5" placeholder="Enter Access Level">

    <button onclick="submitForm()">OK</button>
    <button class="cancel" onclick="resetForm()">Cancel</button>

    <script>
        function submitForm() {
            // Add your logic here to handle form submission and updating information
            var newRole = document.getElementById("newRole").value;
            var newAccessLevel = document.getElementById("newAccessLevel").value;

            // Display the newly entered role and access level
            document.getElementById("currentRole").value = newRole;
            document.getElementById("accessLevel").value = newAccessLevel;
            
            alert("Role information updated!");
        }

        function resetForm() {
            // Add your logic here to reset the form
            document.getElementById("newRole").value = "";
            document.getElementById("newAccessLevel").value = "";
        }

        // Update access level when a different role is selected
        document.getElementById("currentRole").addEventListener("change", function() {
            var selectedRole = this.value;
            var accessLevel = getAccessLevelByRole(selectedRole);
            document.getElementById("accessLevel").value = accessLevel;
        });

        // Function to get access level based on the selected role
        function getAccessLevelByRole(role) {
            // Add your logic here to determine the access level based on the role
            // For demonstration purposes, setting a default value
            switch(role) {
                case "admin":
                    return "5";
                case "editor":
                    return "3";
                case "viewer":
                    return "1";
                default:
                    return "";
            }
        }
    </script>

</body>
</html>
