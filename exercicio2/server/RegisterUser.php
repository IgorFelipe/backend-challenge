<?php
    require_once("config.php");

    $request_body = json_decode(file_get_contents('php://input'));

    if($request_body->nome == "" || $request_body->pass == "" || $request_body->acesso == "")
    {
        $return["error"] = true;
        $return["message"] = "Algume item necessario nao foi enviado";
        die(json_encode($return));
    }

    try {
        $connection = mysqli_connect($hostnameBD, $usuarioBD, $senhaBD, $bancodedadosUsers);

        if (!$connection) {
            $return["error"] = true;
            $return["message"] = "problema ao connectar com o banco";
            die(json_encode($return));
        }

        $insert  = "INSERT INTO Users (name, pass, Acess)
        VALUES ('$request_body->nome', '$request_body->pass', '$request_body->acesso')";

        if ($connection->query($insert) === TRUE) {
            $sql = "SELECT * FROM Users WHERE name='$request_body->nome' and  pass= '$request_body->pass'";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data = array("msisdn" => $request_body->number, 
                                    "name" => $request_body->nome,
                                    "access_level" => $request_body->acesso, 
                                    "password" => $request_body->pass,
                                    "external_id" => $row["id"]);                                                                    
                    $data_string = json_encode($data);                                                                                   
                                                                                                                                        
                    $ch = curl_init($hostAPI."/integrator/".$serviceIdAPI."/users");                                                                      
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                        'Content-Type: application/json',                                                                                
                        'Content-Length: ' . strlen($data_string),
                        "Authorization: ".$authorizationAPI,
                        "app-users-group-id: 20")                                                                       
                    );                                                                                                                   
                                                                                                                                        
                    $result = curl_exec($ch);

                    die($result);
                }
            }
        } 
    } catch (\Throwable $th) {
        //throw $th;
    }


?>