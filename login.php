<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>



<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">

            <h4>Welcome back.</h4>
            <form method = "POST" action = "index1.php">
                <input type="hidden" name="action" value="login">
            <input type="text" id="userName" name = "username" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" id="userPassword" name = "password" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <input type ="submit" value = "Login" class="btn btn-primary btn-md">
            </span>
            </div>
</form>
            </div>
            <p>
                <?php
                    if(isset($_GET['msg'])){
                        echo $_GET['msg'];
                    }
                    
                ?>

            </p>
        </div>
    </div>
</div>
</body>
</html>