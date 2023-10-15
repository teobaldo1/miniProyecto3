<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/database/database.php");

    extract($_POST);

    $response =  $mysqli->query("SELECT * FROM login_bd WHERE Email = '$email'");

    if (isset($email) && $email !== "" ) {

     if ($response->num_rows === 1) {

        $data = $response->fetch_assoc();

        if (!password_verify($password, $data["Contrasena"])) {
            session_start();
            $_SESSION["user"]=$data;
            header("location: /views/profile.php");
        } else {
            echo "los datos no coinciden";
            
        }
    } else {
        echo "No coinciden las credenciales";
        "<br>";
            var_dump(password_verify($password, $data["Contrasena"]));
            "<br>";
            var_dump($password);
            "<br>";
           // var_dump($data["Contrasena"]);
    }
}else {
    header("Location: /views/register.php");
    
 }
} else {
    echo "No estas ingresando desde POST";
    
}
