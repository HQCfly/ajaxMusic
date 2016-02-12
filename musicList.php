<?php
require_once('../ajaxmusic/connect.php');
$sql="select id , name , musicName from music_list";
$query=$conn->query($sql);
if($query && mysqli_num_rows($query)){
    while($row = mysqli_fetch_assoc($query)){
        $data[] = $row;
    }
    echo json_encode($data);
}
?>