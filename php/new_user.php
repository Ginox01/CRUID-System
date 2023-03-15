<?php 
    require_once("data.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $name = $conn->real_escape_string($_POST['name']);
        $surname = $conn->real_escape_string($_POST['surname']);
        $age = $conn->real_escape_string($_POST['age']);
        $mail = $conn->real_escape_string($_POST['mail']);

        $request = "SELECT * FROM users WHERE mail='$mail'";
        if($state=$conn->query($request)){
            if($state->num_rows == 0){
                if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
                    $data = [
                        "response"=>"err-mail",
                        "message"=>"The mail field is not valid"
                    ];
                    echo json_encode($data);
                    die();
                }else{
                    $req = "INSERT INTO users(name,surname,age,mail)
                    VALUES('$name','$surname','$age','$mail')";
        
                    if($conn->query($req)){
                        $data = [
                            "response"=>1,
                            "message"=>"User created with success"
                        ];
                        echo json_encode($data);
                        die();
                    }else{
                        $data = [
                            "response"=>0,
                            "message"=>"Error from Server response"
                        ];
                        echo json_encode($data);
                        die();
                    }
                }
            }else{
                $data = [
                    "response"=>"err-mail",
                    "message"=>"This mail alredy exists"
                ];
                echo json_encode($data);
                die();
            }
        }

        


    }else{
        header("location: ../index.php");
    }


?>