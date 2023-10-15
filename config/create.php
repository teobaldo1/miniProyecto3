<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST"){

extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"] . "/database/database.php");
try {
     if (isset($email) && $email !== "" ) {

        $hash = password_hash($password,PASSWORD_DEFAULT);
        $response = $mysqli->query("INSERT INTO login_bd (Email, Contrasena) VALUES ('$email','$hash')");

        if ($response) {
            $res = $mysqli->query("SELECT * FROM login_bd WHERE Email='$email';");
            session_start();
            $_SESSION["user"]= $res->fetch_assoc();
            header("Location: /views/edit.php"); 
         }

     }else {
        header("Location: /views/register.php");
        
     }
} catch (mysqli_sql_exception $e) {
    if ($mysql->errno===1062) {
        echo "correo esta en uso";
    }else {
        Echo "Error:". $e ->getMessage();
    }
    
}

}else {

    echo "Ingresa desde Post";
}

