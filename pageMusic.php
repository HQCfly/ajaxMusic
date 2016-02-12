<?PHP

require_once('connect.php');
$page = $_GET['page'];
$len = 3;
$start = $page * $len;

$sql = "select id , name , musicName from music_list limit $start , $len";

$query=$conn->query($sql);

if( $query && mysqli_num_rows($query) ){
    while($row = mysqli_fetch_assoc($query)){
        $data[] = $row;
    }
    echo json_encode($data);
}

?>