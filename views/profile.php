<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: /index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/profile.css">
    <title>Document</title>
</head>

<body class="body">
    <div class="conteiner">
        <div class="emcabezado">
            <div class="marca">
                <img src="/public/assets/devchallenges.svg" alt="imagen" width="80px">
            </div>
            <div class="logout">
                <div style="height: 30px;"><img src="<?= $_SESSION["user"]["Photo"] ?>" style="width:40px; border-radius:5 ;pxobject-fit: cover;width:100%; height:100%;"></div>
                <span><?= $_SESSION["user"]["Name"] ?></span>
                <a href="/config/logout.php">Logout</a>                      
            </div>
        </div>

        <div>
            <div class="title">
                <h1>Personal info</h1>
                <h4>Basic info, like your name and photo</h4>

            </div>


            <div class="principal">

                <form action="/views/edit.php" method="post">


                    <div>
                        <div class="subtitulo">
                            <div>
                                <h2>Profile</h2>
                                <small>Some info may be visible to other people</small>
                            </div>

                            <button  id="buttom" type="submit">Edit</button>

                        </div>
                        <div class="info">
                            <label class="items">PHOTO</label>
                            <div style=" height: 50px; "><img src="<?= $_SESSION["user"]["Photo"] ?>" style="width:40px; border-radius:5 ;pxobject-fit: cover;width:100%; height:100%;"></div>
                        </div>
                        <div class="info">
                            <label class="items">NAME</label>
                            <input class="input" type="text" value="<?= $_SESSION["user"]["Name"] ?>">
                        </div>
                        <div class="info">
                            <label class="items">BIO</label>
                            <input class="input" type="text" value="<?= $_SESSION["user"]["Bio"] ?>">
                        </div>
                        <div class="info"> 
                            <label class="items">PHONE</label>
                            <input class="input" type="text" value="<?= $_SESSION["user"]["Phone"] ?>">
                        </div>
                        <div class="info"> 
                            <label class="items">EMAIL</label>
                            <input  class="input" type="text" value="<?= $_SESSION["user"]["Email"] ?>">
                        </div>
                        <div class="pass">
                            <label class="items">PASSWORD</label>
                            <input  class="input" type="text">
                        </div>
                    </div>
                </form>

            </div>


        </div>
    </div>
</body>

</html>