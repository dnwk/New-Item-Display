<?php
/**
 * This file will generate JSON feed for books purchased in last 30 days.
*/

header('Content-Type: application/json');
header('Cache-Control: public, max-age=3600');
header('Access-Control-Allow-Origin: *');
require_once "./res/conn.php";
$results = array();

$sql = "SELECT * FROM NewBib WHERE ISBN<>'' ORDER BY CallNo";
$stmt = $db->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //if there are multiple ISBN, only first ISBN is included in the feed.
    $isbn = explode(";", $row['ISBN']);
    $result_temp = array('title'=>$row['Title'], 'isbn'=>$isbn[0], 'author'=>$row['Author'], 'callno'=>$row['CallNo'], 'id'=>$row['MMSid'], 'location'=>$row['LocationName'] );
    array_push($results, $result_temp);
}
echo json_encode($results);
