<?php
include_once("../db.php");

$sql = mysqli_query($db, "SELECT ID, Name FROM Player");

$xml = new DOMDocument();

while($row = mysqli_fetch_row($sql)){
$xml_link = $xml->createElement("player");

$xml_title = $xml->createElement("id", $row[0]);

$xml_url = $xml->createElement("name", $row[1]);

$xml_link->appendChild( $xml_title );
$xml_link->appendChild( $xml_url );
$xml->appendChild( $xml_link );
}

$xml->save("link.xml");
?>