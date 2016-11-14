<?php
include_once('../db.php');

// Include the library
include('simple_html_dom.php');

$url = $_POST['url'];
$conference = $_POST['conference'];
$division = $_POST['division'];

$url_array = explode('/', $url);
$year = $url_array[10];
$url_array[10] = (int)$url_array[10] - 1;


$html = file_get_html($url);
$table = $html->find('table',0);
$table1 = $html->find('table',1);

$data = array();
if($table) {
    foreach($table->children() as $k => $tr) {
        foreach($tr->children as $td) {
            $data[$k][] = $td->innertext;
        }
    }
}

$data1 = array();
if($table1) {
    foreach($table1->children() as $k => $tr) {
        foreach($tr->children as $td) {
            $data1[$k][] = $td->innertext;
        }
    }
}

$sql = "SELECT ID FROM Conferences ORDER BY ID DESC LIMIT 1";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_row($result);
$conferenceID = $row[0] + 1;

$sql = "INSERT INTO Conferences (ID, Name, Division) VALUES ('$conferenceID', '$conference', '$division')";
mysqli_query($db, $sql);


for ($h = 2; $h < count($data); ++$h) {
	$html = $data[$h][0];
	$dom = new DOMDocument;
	$dom->loadHTML($html);
	foreach ($dom->getElementsByTagName('a') as $node) {
		$name = $node->nodeValue; 
		$url = $node->getAttribute( 'href' );
		}
	$exploded = explode('/', $url);
	$schoolname = $name;
	$espnID = $exploded[7];
	$conferenceWL = $data[$h][1];
	$gb = $data[$h][2];
	$conferencePCT = $data[$h][3];
	$overallWL = $data[$h][4];
	$overallPCT = $data[$h][5];
	$streak = $data[$h][6];
	
	$AP25WL = $data1[$h][1];
	$USA_Today_WL = $data1[$h][2];
	$homeWL = $data1[$h][3];
	$roadWL = $data1[$h][4];
	$overallPF = $data1[$h][5];
	$overallPA = $data1[$h][6];
	
	$sql = "SELECT ID FROM Schools ORDER BY ID DESC";
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_row($result);
	$schoolID = $row[0] + 1;
	
	$sql = "INSERT INTO Schools (ID, Name, ESPNID, ConferenceID) VALUES ('$schoolID', '$schoolname', '$espnID', '$conferenceID') ";
	mysqli_query($db, $sql);
	
	$sql = "INSERT INTO Standings (SchoolID, Year, ConferenceWL, GB, ConferencePCT, OverallWL, OverallPCT, Streak, AP25WL, USA_Today_WL, HomeWL, RoadWL, OverallPF, OverallPA) VALUES ('$schoolID', '$year', '$conferenceWL', '$gb', '$conferencePCT', '$overallWL', '$overallPCT', '$streak', '$AP25WL', '$USA_Today_WL', '$homeWL', '$roadWL', '$overallPF', '$overallPA')";
	mysqli_query($db, $sql);
}
echo $year;
echo count($url_array);

$url="";
$url = implode("/", $url_array);
echo $url;


for ($i = 1; $i < 10; ++$i) {


$url_array = explode('/', $url);
$year = $url_array[10];
$url_array[10] = (int)$url_array[10] - 1;


$html = file_get_html($url);
$table = $html->find('table',0);
$table1 = $html->find('table',1);

$data = array();
if($table) {
    foreach($table->children() as $k => $tr) {
        foreach($tr->children as $td) {
            $data[$k][] = $td->innertext;
        }
    }
}

$data1 = array();
if($table1) {
    foreach($table1->children() as $k => $tr) {
        foreach($tr->children as $td) {
            $data1[$k][] = $td->innertext;
        }
    }
}


for ($h = 2; $h < count($data); ++$h) {
	$html = $data[$h][0];
	$dom = new DOMDocument;
	$dom->loadHTML($html);
	foreach ($dom->getElementsByTagName('a') as $node) {
		$name = $node->nodeValue; 
		$url = $node->getAttribute( 'href' );
		}
	$exploded = explode('/', $url);
	echo "".$name." ".$exploded[7]."<br>";
	$schoolname = $name;
	$espnID = $exploded[7];
	$conferenceWL = $data[$h][1];
	$gb = $data[$h][2];
	$conferencePCT = $data[$h][3];
	$overallWL = $data[$h][4];
	$overallPCT = $data[$h][5];
	$streak = $data[$h][6];
	
	$AP25WL = $data1[$h][1];
	$USA_Today_WL = $data1[$h][2];
	$homeWL = $data1[$h][3];
	$roadWL = $data1[$h][4];
	$overallPF = $data1[$h][5];
	$overallPA = $data1[$h][6];
	
	$sql = "SELECT ID FROM Schools WHERE Name = '$name'";
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_row($result);
	$schoolID = $row[0];
	
	$sql = "INSERT INTO Standings (SchoolID, Year, ConferenceWL, GB, ConferencePCT, OverallWL, OverallPCT, Streak, AP25WL, USA_Today_WL, HomeWL, RoadWL, OverallPF, OverallPA) VALUES ('$schoolID', '$year', '$conferenceWL', '$gb', '$conferencePCT', '$overallWL', '$overallPCT', '$streak', '$AP25WL', '$USA_Today_WL', '$homeWL', '$roadWL', '$overallPF', '$overallPA')";
	mysqli_query($db, $sql);
}
echo $year;
echo count($url_array);

$url="";
$url = implode("/", $url_array);
echo $url;

}

echo "<pre>";
print_r($data);
print_r($data1);

?>