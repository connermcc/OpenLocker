<?php
include_once('../db.php');
include('simple_html_dom.php');

if(isset($_GET['SchoolID']) && isset($_GET['espnID'])){
	$espnID = $_GET['espnID'];
	$schoolID = $_GET['SchoolID'];
	$url = 'http://www.espn.com/mens-college-basketball/team/roster/_/id/'.$espnID;
	$sql = mysqli_query($db, "SELECT * FROM Roster ORDER BY ID DESC LIMIT 1");
 $row = mysqli_fetch_row($sql);
 $rosterID = $row[0] + 1;
 mysqli_query($db, "INSERT INTO Roster (ID, SchoolID) VALUES ('$rosterID', '$schoolID')");
 
// Retrieve the DOM from a given URL
$html = file_get_html($url);
$table = $html->find('table',0);

$data = array();
if($table) {
    foreach($table->children() as $k => $tr) {
        foreach($tr->children as $td) {
            $data[$k][] = $td->innertext;
        }
    }
}

for ($i = 2; $i < count($data); ++$i) {
	$sql1 = mysqli_query($db, "SELECT ID FROM Player ORDER BY ID DESC LIMIT 1");
	$row1 = mysqli_fetch_row($sql1);
	
	$id = $row1[0] + 1;
	
	$number = $data[$i][0];
	$position = $data[$i][2];
	$height = $data[$i][3];
	$weight = $data[$i][4];
	$class = $data[$i][5];
	$hometown = $data[$i][6];
	
	$html = $data[$i][1];
	$dom = new DOMDocument;
	$dom->loadHTML($html);
	foreach ($dom->getElementsByTagName('a') as $node) {
		$name = $node->nodeValue; 
		$poop = $node->getAttribute( 'href' );
		}
	
	$sql = "INSERT INTO Player (ID, RosterID, JerseyNumber, Name, Position, Height, Weight, Class, Hometown) VALUES ('$id', '$rosterID', '$number', '$name', '$position', '$height', '$weight', '$class', '$hometown')";
	mysqli_query($db, $sql);
	
	$html1 = file_get_html($poop);
	$table1 = $html1->find('table',2);
	$table2 = $html1->find('table',3);
	$data1 = array();
	if($table1) {
    	foreach($table1->children() as $k1 => $tr1) {
      	  foreach($tr1->children as $td1) {
        	    $data1[$k1][] = $td1->innertext;
     			}
   			}
		}
		
	$data2 = array();
	if($table2) {
    	foreach($table2->children() as $k2 => $tr2) {
      	  foreach($tr2->children as $td2) {
        	    $data2[$k2][] = $td2->innertext;
     			}
   			}
		}
	
	for ($j = 2; $j < count($data1); ++$j) {
		$season = $data1[$j][0];
		$team = $data1[$j][1];
		$min = $data1[$j][2];
		$fgm_fga = $data1[$j][3];
		$fgp = $data1[$j][4];
		$tpm_tpa = $data1[$j][5];
		$tpp = $data1[$j][6];
		$ftm_fta = $data1[$j][7];
		$ftp = $data1[$j][8];
		$rebounds = $data1[$j][9];
		$assists = $data1[$j][10];
		$blocks = $data1[$j][11];
		$steals = $data1[$j][12];
		$fouls = $data1[$j][13];
		$turnovers = $data1[$j][14];
		$points = $data1[$j][15];
		
		$sql2 = "INSERT INTO SeasonAverage (PlayerID, Season, Team, Minutes, FieldGoalsMade_Attempted, FieldGoalPercentage, 3PointFGMade_Attempted, 3PointFGPercentage, FreeThrowMade_Attempted, FreeThrowPercentage, Rebounds, Assists, Blocks, Steals, Fouls, Turnovers, Points) VALUES ('$id', '$season', '$team', '$min', '$fgm_fga', '$fgp', '$tpm_tpa', '$tpp', '$ftm_fta', '$ftp', '$rebounds', '$assists', '$blocks', '$steals', '$fouls', '$turnovers', '$points')";
		
		mysqli_query($db, $sql2);
		}
		
		for ($h = 2; $h < count($data1); ++$h) {
		$season = $data2[$h][0];
		$team = $data2[$h][1];
		$min = $data2[$h][2];
		$fgm_fga = $data2[$h][3];
		$fgp = $data2[$h][4];
		$tpm_tpa = $data2[$h][5];
		$tpp = $data2[$h][6];
		$ftm_fta = $data2[$h][7];
		$ftp = $data2[$h][8];
		$rebounds = $data2[$h][9];
		$assists = $data2[$h][10];
		$blocks = $data2[$h][11];
		$steals = $data2[$h][12];
		$fouls = $data2[$h][13];
		$turnovers = $data2[$h][14];
		$points = $data2[$h][15];
		
		$sql3 = "INSERT INTO SeasonTotals (PlayerID, Season, Team, Minutes, FieldGoalsMade_Attempted, FieldGoalPercentage, 3PointFGMade_Attempted, 3PointFGPercentage, FreeThrowMade_Attempted, FreeThrowPercentage, Rebounds, Assists, Blocks, Steals, Fouls, Turnovers, Points) VALUES ('$id', '$season', '$team', '$min', '$fgm_fga', '$fgp', '$tpm_tpa', '$tpp', '$ftm_fta', '$ftp', '$rebounds', '$assists', '$blocks', '$steals', '$fouls', '$turnovers', '$points')";
		
		mysqli_query($db, $sql3);
		}
	
    }
	mysqli_query($db, "UPDATE Schools SET done = 1 WHERE ID = ".$schoolID);
	}

$sql = "SELECT ID, Name, ESPNID FROM Schools WHERE done = 0 ORDER BY Name ASC";
$result = mysqli_query($db, $sql);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
while($row = mysqli_fetch_row($result)){
	echo "<a href='rosters.php?SchoolID=".$row[0]."&espnID=".$row[2]."'>".$row[1]."</a><br>";
	}
?>
</body>
</html>