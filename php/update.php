<?php 

    require_once("data.php");
    
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST['id'];
        $name = $conn->real_escape_string($_POST['name']);
        $surname = $conn->real_escape_string($_POST['surname']);
        $age = $conn->real_escape_string($_POST['age']);
        $mail = $conn->real_escape_string($_POST['mail']);

        if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
            $data = [
                "response"=>"invalid-mail",
                "message"=>"The mail isn't valid",
                "mail"=>$mail
            ];
            echo json_encode($data);
            die();
        }

        $getUsers = "SELECT * FROM users WHERE mail='$mail'";

        if($state = $conn->query($getUsers)){
            if($state->num_rows > 0){
                $data = [
                    "response"=>"invalid-mail",
                    "message"=>"This mail alredy exists"
                ];
                echo json_encode($data);
                die();
            }else{
                $req = "UPDATE users SET name='$name',surname='$surname',
                age='$age',mail='$mail' WHERE id='$id'";
                if($conn->query($req)){
                    $data = [
                        "response"=>1,
                        "message"=>"User update"
                    ];
                    echo json_encode($data);
                }else{
                    $data = [
                        "response"=>0,
                        "message"=>"Problem with the query"
                    ];
                    echo json_encode($data);
                    die();
                }
            }
        }else{
            $data = [
                "response"=>0,
                "message"=>"Error from Server"
            ];
            echo json_encode($data);
            die();
        }


    }else{
        header(("location:../index.php"));
    }

?>