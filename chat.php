<html>

<head>
  <meta charset="UTF-8">
  <title>Team-Chat-home</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style-chat.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="principal">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="IMAGES/chat.png" height="40"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Notifications</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Log out</a>
              </li>
            </ul>
          </div>
      </nav>

    </header>

    <div class="chat-area">
       
        <div class="message-data">
          <span class="message-data-time"><b>Naruto</b></span><br>
            <span class="message-data-time">10:15 AM, Today</span>
        </div>
        <div class="message my-message">Project has been already finished and I have results to show you.</div>

        <div class="message-data">
          <span class="message-data-time"><b>Naruto</b></span><br>
            <span class="message-data-time">10:15 AM, Today</span>
        </div>
        <div class="message my-message">Project has been already finished and I have results to show you.</div>

        <div class="message-data">
          <span class="message-data-time"><b>Naruto</b></span><br>
            <span class="message-data-time">10:15 AM, Today</span>
        </div>
        <div class="message my-message">Project has been already finished and I have results to show you.</div>

        <div class="message-data">
          <span class="message-data-time"><b>Naruto</b></span><br>
            <span class="message-data-time">10:15 AM, Today</span>
        </div>
        <div class="message my-message">Project has been already finished and I have results to show you.</div> <div class="message-data">
          <span class="message-data-time"><b>Naruto</b></span><br>
            <span class="message-data-time">10:15 AM, Today</span>
        </div>
        <div class="message my-message">Project has been already finished and I have results to show you.</div>
        <span class="message-data-time"><b>Naruto</b></span><br>
        <span class="message-data-time">10:15 AM, Today</span>
  
      
    </div>
  
  </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <style>
    .chat-area {
      z-index: 1;
      min-height: 70vh;
      margin-bottom:20px ;
      margin-top: 20px;
      border-radius: 6px;
      background-color: rgb(166, 228, 255);
      overflow-y: scroll;
    }
  </style>
</body>

</html>