<?php
    require_once("config.php");


    $connection = mysqli_connect($hostnameBD, $usuarioBD, $senhaBD, $bancodedadosUsers);

    if (!$connection) {
        $return["error"] = true;
        $return["message"] = "problema ao connectar com o banco";
        die(json_encode($return));
    }

    $sql = "SELECT * FROM Users";
    $result = $connection->query($sql);

    $resultArray = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            array_push($resultArray,$row);
        }
        die(json_encode($resultArray));
    }
?>
