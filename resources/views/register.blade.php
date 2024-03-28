<!DOCTYPE html>
<html lang="en">
<?php

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="/css/register.css">


    <script>
        function showPatientFields() {
            var role = document.getElementById('roleID');
            var patientFields = document.getElementById('patientFields');
            if (role.value === '1') {
                patientFields.style.display = 'block';
            } else {
                patientFields.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const inputField = document.getElementById('numberInput');

            inputField.addEventListener('input', function() {
                let inputValue = inputField.value.replace(/\D/g, '');
                let formattedValue = formatPhoneNumber(inputValue);
                inputField.value = formattedValue;
            });

            inputField.addEventListener('keydown', function(event) {
                if (inputField.value.length >= 13 && event.key !== 'Backspace' && event.key !== 'Tab') {
                    event.preventDefault();
                }
            });

            function formatPhoneNumber(value) {
                let formattedNumber = '';

                for (let i = 0; i < value.length; i++) {
                    if (i === 0) {
                        formattedNumber += '(';
                    }
                    if (i === 3) {
                        formattedNumber += ')';
                    }
                    if (i === 6) {
                        formattedNumber += '-';
                    }
                    formattedNumber += value[i];
                }
                return formattedNumber;
            }
        });
    </script>
</head>

<body>

    <section class="hero">
        <h1> A Path to a better life</h1>
    </section>
    <section class="input-fields">
        <div class="register-container">

            <form action="{{ route('register.submit') }}" method="post" accept-charset="UTF-8" class="register-form">
                {{ csrf_field() }}
                <h2>Register here</h2>
                <ul>
                    <li>
                        <label for="fName">First Name</label>
                        <input type="text" id="fName" name="fName" placeholder="Enter your first name"
                            required>
                    </li>
                    <li>
                        <label for="lName">Last Name</label>
                        <input type="text" id="lName" name="lName" placeholder="Enter your last name" required>
                    </li>
                    <li>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address"
                            required>
                    </li>
                    <li>
                        <label for="phone">Phone</label>
                        <input type="tel" id="numberInput" name="phone" placeholder="Enter your phone number"
                            pattern="\(\d{3}\)\d{3}-\d{4}" required>
                    </li>
                    <li>
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" placeholder="Enter your date of birth"
                            required>
                    </li>
                    <li>
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" placeholder="Enter your Password" required>
                    </li>
                    <li>
                        <label for="role">Role</label>
                        <select name="roleID" id="roleID" onchange="showPatientFields()" required>
                            <option>Choose an option</option>
                            <option value="1">Patient</option>
                            <option value="2">Caregiver</option>
                            <option value="3">Doctor</option>
                            <option value="4">Family Member</option>
                            <option value="5">Supervisor</option>

                        </select>
                    </li>
                    <ul id="patientFields" style="display: none;">
                        <li>
                            <label for="patientCondition">Family Code</label>
                            <input type="number" id="familyCode" name="familyCode" placeholder="Enter Family Code">
                        </li>
                        <li>
                            <label for="patientHistory">Emergency Contact</label>
                            <input type="text" id="emergencyContact" name="emergencyContact"
                                placeholder="emergencyContact">
                        </li>
                        <li>
                            <label for="insurance">Relationship to Emergency Contact</label>
                            <input type="text" id="ecRelationship" name="ecRelationship"
                                placeholder="Relationship to Emergency Contact">
                        </li>
                    </ul>
                </ul>
                <button type="submit" class="button">Open Account</button><br><br>
                <span>Already have an account: </span><a href="/login">Click here</a>
        </div>
        </form>
    </section>



    <script>

    </script>



</body>

</html>
