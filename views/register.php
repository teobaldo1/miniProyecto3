<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/register.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <title>Document</title>
</head>

<body class="body1">
   
    <div class="principal">
        <div class="titleLogin">
            <div>
                <img src="/public/assets/devchallenges.svg" alt="imagen" width="80px">
            </div>

            <h2 id="title">Join thousands of learners from around the world</h2>
            <p id="title">
                Master web development by making real-life projects. there are multiple paths for you to choose
            </p>
        </div>
        <form action="/config/create.php" method="post">
            <div class="inputEnter">
                <div class="entradas">
                    <div id="email">
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                        <input type="text" class="inputs" placeholder="Email" name="email">
                    </div>
                    <div id="pass">
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                        <input type="text" class="inputs" placeholder="Password" name="password">
                    </div>
                </div>
                <button id="buttonLogin"> Start coding now</button>
            </div>

            <small class="small" >or continue with these social profile</small>

            <ul class="icons">
                <li><img src="/public/assets/Google.svg" alt="google" width="35px"></li>
                <li><img src="/public/assets/Facebook.svg" alt="google" width="35px"></li>
                <li><img src="/public/assets/Twitter.svg" alt="google" width="35px"></li>
                <li><img src="/public/assets/Gihub.svg" alt="google" width="35px"></li>
            </ul>

        </form>
        <div class="small">
            <p>Don't have an acount yet?</p>
            <a href="/index.php" id="register" >Login</a>
        </div>

    </div>
</body>

</html>