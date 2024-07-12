<?php
include '../connect.php';
if (isset($_REQUEST)) {
    $sql = "SELECT * FROM tb_user WHERE username = '".
    $_REQUEST['username']."' AND password = '".$_REQUEST
    ['password']."' ";
    $query = $conn->query($sql);
    $num = $query->num_rows;
    $result = $query->fetch_object();

    if($num > 0 ) {
        session_start();
        $SESSION['sess_id'] = session_id();
        $SESSION['sess_fullname'] = $result->fullname;
        echo json_encode(array('status' => 'true', 'massage' => "successfully"));
    }else {
         echo json_encode(array('status' => 'false', 'massage' => "Username or password is incorrect"));
        }

    
    }

