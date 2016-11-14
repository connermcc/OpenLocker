<?php

define('DB_NAME', 'westnlxx_OpenLocker');
define('DB_USER', 'westnlxx_OL');
define('DB_PASSWORD', 'starbucks1');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

// Include the library
include('simple_html_dom.php');
 
 $school = $_POST['school'];
 $url = $_POST['link'];
 $conference = $_POST['conference'];
 
 $sql = mysql_query("SELECT * FROM Schools ORDER BY ID DESC LIMIT 1");
 $row = mysql_fetch_row($sql);
 $schoolID = $row[0] + 1;
 mysql_query("INSERT INTO Schools (ID, Name, ConferenceID) VALUES ('$schoolID', '$school', $conference)");
 
 $sql = mysql_query("SELECT * FROM Roster ORDER BY ID DESC LIMIT 1");
 $row = mysql_fetch_row($sql);
 $rosterID = $row[0] + 1;
 mysql_query("INSERT INTO Roster (ID, SchoolID) VALUES ('$rosterID', '$schoolID')");
 
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
	$sql1 = mysql_query("SELECT ID FROM Player ORDER BY ID DESC LIMIT 1");
	$row1 = mysql_fetch_row($sql1);
	
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
	mysql_query($sql);
	
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
		
		mysql_query($sql2);
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
		
		mysql_query($sql3);
		}
	
    }

mysql_close();

header('Location: roster.php?id='.$rosterID.'');
?>