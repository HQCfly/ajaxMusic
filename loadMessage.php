<?php
require_once('../ajaxmusic/connect.php');

$mid = $_GET['mid'];

$sql = "select * from message_list where mid=$mid";

$query=$conn->query($sql);

if($query && mysqli_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
        $data[]=$row;
    }
    echo json_encode($data);
}

?>