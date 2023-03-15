<?php 

    require_once("data.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST['id'];
        $req = "DELETE FROM users WHERE id='$id'";
        if($conn->query($req)){
            $data = [
                "response"=>1,
                "message"=>"User delete"
            ];
            echo json_encode($data);
        }else{
            $data = [
                "response"=>0,
                "message"=>"Error from server"
            ];
            echo json_encode($data);
        }
    }else{
        header("location: ../index.php");
    }

?>