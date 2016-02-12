<?PHP

	header("Content-type: text/html; charset=utf-8");
	$conn =new mysqli('localhost','root','123456');
    $conn->select_db('ajaxMusic2');
    $result=$conn->query('select * from ajaxMusic ');
//	mysql_select_db('ajaxMusic2');
    $conn->query('set names utf8');
//    mysqli_set_charset('ajaxMusic2','set names utf8');
?>