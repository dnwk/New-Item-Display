<?php
require_once "conn.php";
$db->exec('TRUNCATE NewBib');
$url="https://api-na.hosted.exlibrisgroup.com/almaws/v1/analytics/reports?path=/shared/Whitman%20College/Reports/NewItem&limit=250&apikey=".$apikey;
	$connection = curl_init($url);
	curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($connection, CURLOPT_HEADER, false);
	$response = curl_exec($connection);
	$xml = new SimpleXMLElement($response);
	$xml->registerXPathNamespace('rowset', 'urn:schemas-microsoft-com:xml-analysis:rowset');
	$received = $xml->xpath('//rowset:Row');
	foreach($received as $key => $value){
		$author=$value->Column1;
		$biblevel=$value->Column2;
		$isbn=$value->Column3;
		$mmsid=$value->Column4;
		$pubdate=$value->Column5;
		$publocation=$value->Column6;
		$publisher=$value->Column7;
		$title=$value->Column8;
		$callno=$value->Column9;
		$location=$value->Column10;
		$receivedate=$value->Column11;
		$sql = "INSERT INTO NewBib(ReceivingDate,CallNo,LocationName,ISBN,MMSid,Title,Author,Publisher,PublicationDate,PublicationPlace)
    VALUES ('".$receivedate."','".$callno."','".$location."','".$isbn."','".$mmsid."','".$title."','".$author."','".$publisher."','".$pubdate."','".$publocation."')";
		$db->exec($sql);
		
	}
	echo json_encode(array('result'=>"ok"));
?>
