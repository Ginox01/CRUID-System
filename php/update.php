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
        $req = "UPDATE users SET name='$name',surname='$surname',
                age='$age' WHERE id='$id'";

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
    }else{
        header(("location:../index.php"));
    }

?>