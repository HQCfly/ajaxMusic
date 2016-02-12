<?php
require_once('../ajaxmusic/connect.php');
$id = $_GET['id'];
$sql="select * from music_list where id = $id";
$query=$conn->query($sql);
if($query && mysqli_num_rows($query)){
    echo json_encode(mysqli_fetch_assoc($query));
    }
?>