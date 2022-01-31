<?php
header('Content-Type: application/json');
header('Cache-Control: public, max-age=3600');
header('Access-Control-Allow-Origin: *');
require_once "./res/conn.php";
$results=array();
$sql="SELECT * FROM NewBib WHERE ISBN<>'' ORDER BY RAND() LIMIT 1";
$stmt=$db->query($sql);
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$isbn=explode(";",$row['ISBN']);
	$results=array('title'=>$row['Title'],'isbn'=>$isbn[0],'author'=>$row['Author'],'callno'=>$row['CallNo'],'id'=>$row['MMSid'],'location'=>$row['LocationName']);
}
echo json_encode($results);
?>