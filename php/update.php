<?php 

    require_once("data.php");
    
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST['id'];
        $name = $conn->real_escape_string($_POST['name']);
        $surname = $conn->real_escape_string($_POST['surname']);
        $age = $conn->real_escape_string($_POST['age']);
        $mail = $conn->real_escape_string($_POST['mail']);

        $getUsers = "SELECT * FROM users";

        if($state)//+++++++++++++++++

    }else{
        header(("location:../index.php"));
    }

?>