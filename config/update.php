<!-- <?php
session_start();


?> 

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    extract($_POST);

 $name = $_FILES['imgPhoto']['name'];
 $tmp_name = $_FILES['imgPhoto']['tmp_name'];
 $type = $_FILES["imgPhoto"]["type"];

 $route_db = "/public/photos/$name";
 $route = $_SERVER["DOCUMENT_ROOT"] . $route_db;

if (move_uploaded_file($tmp_name, $route)){

require_once($_SERVER["DOCUMENT_ROOT"]."/database/database.php");

$$route_db !== "" && $mysqli->query("UPDATE login_bd  SET Photo = '$route_db' WHERE Email='$textEmail'");

header("Location: /views/edit.php");
}
}   


?>












<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/database/database.php");

    extract($_POST);

    $response= $mysqli->query("UPDATE login_bd SET Name='$textName', Bio='$textBio', Phone='$textPhone', Email='$textEmail', Contrasena = '$textPassword' WHERE Email = '$textEmail'");
    if ($response) {
        $res = $mysqli->query("SELECT * FROM login_bd WHERE Email='$textEmail';");
        session_start();
        $_SESSION["user"]= $res->fetch_assoc();
        header("Location: /views/profile.php"); 
     }

    header("location: /views/profile.php");


} else {
    header("location: /index.php");
}

?>
