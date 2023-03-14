<?php 

    require_once("data.php");

    
        $req = "SELECT * FROM users";
        if($state = $conn->query($req)){
            if($state->num_rows > 0 ){
                $data = [];
                while($row = $state->fetch_array(MYSQLI_ASSOC)){
                    $tmp['id'] = $row['id'];
                    $tmp['name'] = $row['name'];
                    $tmp['surname'] = $row['surname'];
                    $tmp['age'] = $row['age'];
                    $tmp['mail'] = $row['mail'];
                    array_push($data,$tmp);
                }
                echo json_encode($data);
                
            }else{
                $data = [
                    "response"=>"empty",
                    "message"=>"The table is empty"
                ];
                echo json_encode($data);
            }
        }else{
            $data = [
                "response"=>0,
                "message"=>"There is a problem with the request"
            ];
            echo json_encode($data);
        }
    

?>