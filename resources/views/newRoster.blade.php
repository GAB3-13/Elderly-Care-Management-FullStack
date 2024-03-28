<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Roster Blade Page</title>
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
        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
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
        <form action="/process_roster.php" method="post">
            <div class="box">
                <label for="rosterDate">Date (mm/dd/yyyy):</label>
                <input type="text" id="rosterDate" name="rosterDate" placeholder="Enter Date" required>
            </div>

            <div class="box">
                <label for="supervisor">Supervisor:</label>
                <select id="supervisor" name="supervisor" required>
                    <option value="John Doe">John Doe</option>
                    <option value="Jane Smith">Jane Smith</option>
                    <!-- Add more supervisor options as needed -->
                </select>
            </div>

            <div class="box">
                <label for="doctor">Doctor:</label>
                <select id="doctor" name="doctor" required>
                    <option value="Dr. Smith">Dr. Smith</option>
                    <option value="Dr. Johnson">Dr. Johnson</option>
                    <!-- Add more doctor options as needed -->
                </select>
            </div>

            <div class="box">
                <label for="caregiver1">Caregiver 1:</label>
                <select id="caregiver1" name="caregiver1" required>
                    <option value="Caregiver 1A">Caregiver 1A</option>
                    <option value="Caregiver 1B">Caregiver 1B</option>
                    <!-- Add more caregiver options as needed -->
                </select>
            </div>

            <div class="box">
                <label for="caregiver2">Caregiver 2:</label>
                <select id="caregiver2" name="caregiver2" required>
                    <option value="Caregiver 2A">Caregiver 2A</option>
                    <option value="Caregiver 2B">Caregiver 2B</option>
                    <!-- Add more caregiver options as needed -->
                </select>
            </div>

            <div class="box">
                <label for="caregiver3">Caregiver 3:</label>
                <select id="caregiver3" name="caregiver3" required>
                    <option value="Caregiver 3A">Caregiver 3A</option>
                    <option value="Caregiver 3B">Caregiver 3B</option>
                    <!-- Add more caregiver options as needed -->
                </select>
            </div>

            <div class="box">
                <label for="caregiver4">Caregiver 4:</label>
                <select id="caregiver4" name="caregiver4" required>
                    <option value="Caregiver 4A">Caregiver 4A</option>
                    <option value="Caregiver 4B">Caregiver 4B</option>
                    <!-- Add more caregiver options as needed -->
                </select>
            </div>

            <div class="button-container">
                <button type="submit">Ok</button>
                <button type="reset">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
