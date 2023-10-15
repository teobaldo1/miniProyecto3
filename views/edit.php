<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/edit.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <title>Document</title>
</head>

<body class="body">

    <div class="emcabezado">
        <div class="marca">
            <img src="/public/assets/devchallenges.svg" alt="imagen" width="80px">
        </div>
        <div class="logout">
            <div style="height: 30px;"><img src="<?= $_SESSION["user"]["Photo"] ?>" style="width:40px; border-radius:5 ;pxobject-fit: cover;width:100%; height:100%;"></div>
            <span><?= $_SESSION["user"]["Name"] ?></span>
            <span class="material-symbols-outlined">
                exit_to_app
            </span>
            <a href="/config/logout.php">Logout</a>
        </div>
    </div>

    <div class="conteiner">
        <div id="back">
            <a href="/views/profile.php"> <span class="material-symbols-outlined">
                    arrow_back_ios_new
                </span></a><span>Back</span>
        </div>

        <div class="principal">
            <div>
                <h3 class="title">Changes Info</h3>

                <small>Changes will be reflected to every services</small>
            </div>



            <form action="/config/update.php" method="post" enctype="multipart/form-data" class="form">

                <div class="foto">
                    <div style=" height: 60px; "><img src="<?= $_SESSION["user"]["Photo"] ?>" style="width:40px; border-radius:5 ;pxobject-fit: cover;width:100%; height:100%;"></div>
                    <input type="file" value="<?= $_SESSION["user"]["Photo"] ?>" name="imgPhoto">
                </div>
                <div class="conteinerInputs">
                    <div class="inputs">
                        <label>Name</label>
                        <input type="text" class="input" placeholder="Enter your name" value="<?= $_SESSION["user"]["Name"] ?>" name="textName">
                    </div>

                    <div class="inputs">
                        <label>Bio</label>
                        <input type="text" class="inputBio" placeholder="Enter your bio" value="<?= $_SESSION["user"]["Bio"] ?>" name="textBio">
                    </div>

                    <div class="inputs">
                        <label>Phone</label>
                        <input type="text" class="input" placeholder="Enter your phone" value="<?= $_SESSION["user"]["Phone"] ?>" name="textPhone">
                    </div>
                    <div class="inputs">
                        <label>Email</label>
                        <input type="text" class="input" placeholder="Enter your email" value="<?= $_SESSION["user"]["Email"] ?>" name="textEmail">
                    </div>

                    <div class="inputs">
                        <label>Password</label>
                        <input type="text" class="input" placeholder="Enter your password" value="<?= $_SESSION["user"]["Contrasena"] ?>" name="textPassword">
                    </div>
                </div>
                <button id="boton" type="submit">Save</button>



            </form>
        </div>
    </div>
</body>

</html>