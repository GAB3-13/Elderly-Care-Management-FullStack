<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="login-container">
        <form action="{{ route('validateLogin') }}" class="login-form" method="POST">
            {{ csrf_field() }}

            <h2>Login</h2>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

            <input type="submit" name="submit" value="login" class="login">
            <span class="register">Register: </span><a class="register" href="/register">Click here</a>
            <p onclick="toggleSampleLogins()">Sample logins</p>
        </form>
        <div class="samplelog" id="samplelog">
        <p>Admin: adminmatos@gmail.com // pass</p>
        <p>Supervisor: david@example.com // strongPassword</p>
        <p>Doctor: michael@example.com // mySecretPassword</p>
        <p>Caregiver: janesmith@example.com // securePass!</p>
        <p>Patient: johndoe@example.com// password123</p>
        <p>Family Member: emily@example.com // p@ssw0rd</p>
    </div>
    </div>
    <script>
        function toggleSampleLogins() {
            var sampleLog = document.getElementById("samplelog");
            if (sampleLog.style.display === "none") {
                sampleLog.style.display = "block";
            } else {
                sampleLog.style.display = "none";
            }
        }
    </script>
</body>

</html>



{{-- DON'T DELETE --}}
{{-- $request->session()->forget('userID'); --}}
