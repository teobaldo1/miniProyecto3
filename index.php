<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <title>Document</title>
</head>

<body class="body">

    <div class="principal">
        <div class="titleLogin">
            <div><img src="public/assets/devchallenges.svg" alt="imagen" width="80px">

            </div>

            <h1 id="title">Login</h1>
        </div>
        <form action="/config/login.php" method="post" class="login">
            <div class="inputEnter">
                <div class="entradas">
                    <div id="email">
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                        <input class="inputs" type="text" placeholder="Email" name="email">
                    </div>
                    <div id="pass">
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                        <input class="inputs" type="text" placeholder="Password" name="password">
                    </div>

                </div>
                <button id="buttonLogin"> Login</button>
            </div>

            <small class="small">or continue with these social profile</small>

            <ul class="icons">
                <li><img src="/public/assets/Google.svg" alt="google" width="40px"></li>
                <li><img src="/public/assets/Facebook.svg" alt="google" width="40px"></li>
                <li><img src="/public/assets/Twitter.svg" alt="google" width="40px"></li>
                <li><img src="/public/assets/Gihub.svg" alt="google" width="40px"></li>
            </ul>


        </form>

        <div class="small">

            <p >Don't have an acount yet?</p>
            <a href="/views/register.php" >Register</a>
        </div>
    </div>

</body>

</html>