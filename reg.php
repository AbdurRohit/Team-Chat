<!DOCTYPE html>
<html>
<head>
	<title>Team Chat - Registration</title>
	<link rel="stylesheet" type="text/css" href="style-reg.css">
</head>
<body>
    <div class="image"></div>
        <div class="login-container">
            <b><h1>Team Chat Registration</h1></b>
            <form action="register.php" method:"Post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
    
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="password">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Date of brith:</label>
                <input type="date" id="dob" name="dob" required>

                <input type="submit" id="submmit" value="Register">
            </form> 
            <div class="login-links">
                <a href="login.php">Already have an account?</a>
            </div>
        </div>
</body>
</html>

