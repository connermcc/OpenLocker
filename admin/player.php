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
$id = $_GET['id'];
$sql = mysql_query("SELECT Name FROM Player WHERE ID = ".$id."");
$row = mysql_fetch_row($sql);
$name = $row[0];
$sql = mysql_query("SELECT Season, Team, Minutes, FieldGoalsMade_Attempted, FieldGoalPercentage, 3PointFGMade_Attempted, 3PointFGPercentage, FreeThrowMade_Attempted, FreeThrowPercentage, Rebounds, Assists, Blocks, Steals, Fouls, Turnovers, Points FROM SeasonAverage WHERE PlayerID = ".$id." ORDER BY Season DESC");
$sql1 = mysql_query("SELECT Season, Team, Minutes, FieldGoalsMade_Attempted, FieldGoalPercentage, 3PointFGMade_Attempted, 3PointFGPercentage, FreeThrowMade_Attempted, FreeThrowPercentage, Rebounds, Assists, Blocks, Steals, Fouls, Turnovers, Points FROM SeasonTotals WHERE PlayerID = ".$id." ORDER BY Season DESC");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Player Profile | OpenLocker</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/creative.css" type="text/css">
</head>

<body id="page-top">

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.html">OpenLocker</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#">Conferences</a></li>
        <li><a href="#">Schools</a></li>
        <li><a href="#">Coaches & Reviews</a></li>
        <li><a href="#">Recruiting</a></li>
        <li><a href="#">Academics</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Sign In</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Conferences</a></li>
            <li><a href="#">Schools</a></li>
            <li><a href="#">Coaches & Reviews</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<section style="padding:0" class="bg-gray">
<div class="container">
<div class="row text-center">
<h2 style="padding:0; margin:5px; color:#C0C0C0"><b>Player Season Stats</b></h2>
</div>
</div>
</section>

    <section class="bg-lightgray">
    
        <div class="container">
        <div class="row">
        <?php 
echo "<h2>".$name."</h2>";
echo "<h3>Season Averages</h3>";
echo "<table class='text-center'><tbody><tr class='bold'><td>Season</td><td>Team</td><td>MIN</td><td>FGM-A</td><td>FGP</td><td>3PFGM-A</td><td>3P%</td><td>FTM-A</td><td>FTP</td><td>Rebounds</td><td>Assists</td><td>Blocks</td><td>Steals</td><td>Fouls</td><td>Turnovers</td><td>Points</td></tr>";
while($row = mysql_fetch_row($sql)) {
	echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td></tr>";
	}
echo "</tbody></table>";
echo "<h3>Season Totals</h3>";
echo "<table class='text-center'><tbody><tr class='bold'><td>Season</td><td>Team</td><td>MIN</td><td>FGM-A</td><td>FGP</td><td>3PFGM-A</td><td>3P%</td><td>FTM-A</td><td>FTP</td><td>Rebounds</td><td>Assists</td><td>Blocks</td><td>Steals</td><td>Fouls</td><td>Turnovers</td><td>Points</td></tr>";
while($row1 = mysql_fetch_row($sql1)) {
	echo "<tr><td>".$row1[0]."</td><td>".$row1[1]."</td><td>".$row1[2]."</td><td>".$row1[3]."</td><td>".$row1[4]."</td><td>".$row1[5]."</td><td>".$row1[6]."</td><td>".$row1[7]."</td><td>".$row1[8]."</td><td>".$row1[9]."</td><td>".$row1[10]."</td><td>".$row1[11]."</td><td>".$row1[12]."</td><td>".$row1[13]."</td><td>".$row1[14]."</td><td>".$row1[15]."</td></tr>";
	}
echo "</tbody></table>";
?>
		</div>
		</div>
</body>
</html>