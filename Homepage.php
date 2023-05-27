<!DOCTYPE html>
<html>
<head>
	<title>Team Chat - Registration</title>
	<link rel="stylesheet" type="text/css" href="HomeCss.css">
</head>
<body>
    <div class="image"></div>
        <div class="login-container">
            <b><h1>Team chat</h1></b>
            <form action="Token_check.php" method:"get">
                <label for="username">Enter chat id: </label>
                <input type="text" id="username" name="chatid" required>
                <input type="submit" id="submmit">
            </form> 
            <div class="login-links">
            <button id="Token" onclick="document.location='Token_Gen.php'">New Chat</button>
            </div>
        </div>
</body>
</html>