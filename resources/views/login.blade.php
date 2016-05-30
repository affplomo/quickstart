<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css"
          integrity="sha384-XXXXXXXX" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

</head>

<body>
<div class="container-fluid">
        <div id="welcomeMessage">
        </div>
    <div id="background-film">
        <div id="loginTextBox">
            <form class="loginForm" action="/" method="post">
                <div class="form-group">
                    <div>
                        <label for="loginUsr">Username</label>
                        <input type="text" name="loginUsr" id="usrField">
                    </div>
                    <div>
                        <label for="loginPwd">Password</label>
                        <input type="password" name="loginPwd" id="pwdField">
                    </div>
                    <div>
                        <input class="loginButton" type="submit" value="Log In">
                    </div>
                </div>
            </form>
        </div>
        <div class="center" id="logo_header">
            img     
        </div>
        <div class="center" id="bottom_icons">
            {{--TODO: Roligare ikoner, legobitar?--}}
            <a href="#"><img src="/img/img_icon_facebook.png" alt="img_facebook"></a>
            <a href="#"><img src="/img/img_icon_google.png" alt="img_google"></a>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js" integrity="sha384-XXXXXXXX"
        crossorigin="anonymous"></script>
</body>
</html>
