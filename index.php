<?php
    require "db/config.php";
    $errorMessage = "";
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
        <!-- Registration form -->
        <form class="register-form" method="POST" action="index.php">
        <label style="color:red;"><?php $errorMessage ?></label>
        <input type="text" name="username" placeholder="Enter Username" required/>
        <input type="password" name="pwd" placeholder="Enter Password" required/>
        <input type="email" name="email" placeholder="Enter A Valid Email" required/>
        <button type="submit" name="register">Register</button>
        <p class="message">Already have an account? <a href="#">Log in</a>
        </p>
        </form>
        <!-- /Registration form -->

        <!-- Registration script -->
            <?php
                if(isset($_POST['register'])){
                    $Username = ucfirst($_POST['username']);
                    $encryPassword = md5($_POST['pwd']);
                    $Email = $_POST['email'];

                    $add = "INSERT INTO Users (Username, Password, Email)
                    VALUES('$Username', '$encryPassword', '$Email')";

                    $result = mysqli_query($myConn, $add);
                    
                    if ($result === TRUE){
            ?>

            <script type="text/javascript">
                window.location = "sucessful.php";
            </script>

            <?php
                } 
                else {
                $errorMessage = "Something went wrong";
                }
                    }
            ?>
        <!-- /Registration script -->
        
        <!-- Login form -->
        <form class="login-form" method="post" action="index.php">
        <input type="text" name="username" placeholder="Enter Username" required/>
        <input type="password" name="pwd" placeholder="Enter Password" required/>
        <button name="login">Log in</button>
        <p class="message">Don't have an account? <a href="#">Register</a>
        </p>
        </form>
        <!-- /Login form -->
    
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