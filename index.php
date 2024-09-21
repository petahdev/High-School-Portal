<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles1.css">
    <style>
        .error {
            color: red;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="landing">
        <h1>Welcome to Our Portal</h1>
    </div>

    <?php
    // Display error messages if present
    if (isset($_GET['signup_error'])) {
        echo '<div class="error">' . htmlspecialchars($_GET['signup_error']) . '</div>';
    }
    if (isset($_GET['login_error'])) {
        echo '<div class="error">' . htmlspecialchars($_GET['login_error']) . '</div>';
    }
    ?>

    <div class="login-container" id="signUp" style="display: none;">
        <h2>Sign Up</h2>
        <form action="register.php" method="post">
            <label for="fName">First Name</label>
            <input type="text" id="fName" name="fName" required>
            <label for="mName">Middle Name</label>
            <input type="text" id="mName" name="mName" required>
            <label for="lName">Last Name</label>
            <input type="text" id="lName" name="lName" required>
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required>
            <label for="form">Form</label>
            <input type="text" id="form" name="form" required>
            <label for="indexno">Index Number</label>
            <input type="text" id="indexno" name="indexno" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" value="Sign up" name="signUp">Sign Up</button>
        </form>
        <p class="signup-prompt">Already have an account? <a id="signInButton" href="#">Log in</a></p>
    </div>

    <div class="login-container" id="signIn">
        <h2>Login</h2>
        <form action="register.php" method="post">
            <label for="indexno">Admission Number</label>
            <input type="text" id="indexno" name="indexno" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" value="Sign In" name="signIn">Login</button>
        </form>
        <p class="signup-prompt">Don't have an account? <a id="signUpButton" href="#">Sign up</a></p>
    </div>

    <footer>
        <p>© 2024 Company Name. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript for switching between sign-up and sign-in forms
        document.getElementById('signUpButton').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('signUp').style.display = 'block';
            document.getElementById('signIn').style.display = 'none';
        });

        document.getElementById('signInButton').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('signUp').style.display = 'none';
            document.getElementById('signIn').style.display = 'block';
        });
    </script>
</body>
</html>
