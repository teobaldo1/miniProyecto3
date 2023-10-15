    <?php

    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "nivel3";

        $mysqli = new mysqli($host, $username, $password, $database);
    } catch (mysqli_sql_exception $e) {
        "Error: " . $e->getMessage();
    }

    function All()
    {
        global $mysqli;

        $respuesta = $mysqli->query("SELECT * FROM login_bd");
        $data = $respuesta->fetch_assoc();
        return $data;
    }
