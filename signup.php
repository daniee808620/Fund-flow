<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form onsubmit="signup(event)">
        <label>Username:</label>
        <input type="text" id="username" required><br><br>

        <label>Email:</label>
        <input type="email" id="email" required><br><br>

        <label>Password:</label>
        <input type="password" id="password" required><br><br>

        <button type="submit">Sign Up</button>
    </form>

    <p><a href="index.html">Back to Home</a></p>

    <script>
        function signup(event) {
            event.preventDefault(); // Prevent page reload

            let username = document.getElementById("username").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;

            // Save user data to LocalStorage
            localStorage.setItem("username", username);
            localStorage.setItem("email", email);
            localStorage.setItem("password", password);

            alert("Signup successful! Now login.");
            window.location.href = "login.html"; // Redirect to login page
        }
    </script>
</body>
</html>
