<?php
    require "db/config.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login/Sign Page</title>
    <link rel="stylesheet" href="CSS/login.signpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.min.css">
</head>
<body>
    <div class="login-page">
    <div class="form">
       <h1 style="color:white;">Account Created Successfully (: </h1>
       <button name="login"><a href="index.php" style="text-decoration:none;">Log in</a></button>

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
    $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
    </script>
</body>
</html>