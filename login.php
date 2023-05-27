<!DOCTYPE html>
<html>
<head>
	<title>Team Chat - Login</title>
	<link rel="stylesheet" type="text/css" href="style-login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <div class="image"></div>

    <!-- <script>
        $(document).ready(function () {
            $('#my-form').submit(function(event) {
    // Prevent default form submission behavior
    event.preventDefault();
    var formData = $(this).serialize();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                dataType:'json',
                data: formData,
                success: function (data) {
                    $('#value-container').text(data);
                    console.log(data);
                },
                // error: function(xhr, status, error) {
                // console.log('something went wrong');
    // handle the error response from the server here
  
            }); 
        });
    });
    </script> -->
</head>
<body>
   

    <div id="value-container"></div>
    
        <!-- <div class="alert alert-success" role="alert">
            Login successful !
        </div> -->
        <div class="login-container">
            <b><h1>Welcome to Team Chat </h1></b>
            <form id="my-form" action="LoginSession.php" method="get">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" id="submmit" value="Login">
            </form> 

            <div class="login-links">
                <a href="#">Forgot Password?</a>
                <a href="reg.php">Sign Up</a>
            </div>
           
        </div> 
      
</body>
</html>
