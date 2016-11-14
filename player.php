<?php
include_once("db.php");
$id = $_GET['id'];
$sql = mysqli_query($db, "SELECT Name FROM Player WHERE ID = ".$id."");
$row = mysqli_fetch_row($sql);
$name = $row[0];
$sql = mysqli_query($db, "SELECT Season, Team, Minutes, FieldGoalsMade_Attempted, FieldGoalPercentage, 3PointFGMade_Attempted, 3PointFGPercentage, FreeThrowMade_Attempted, FreeThrowPercentage, Rebounds, Assists, Blocks, Steals, Fouls, Turnovers, Points FROM SeasonAverage WHERE PlayerID = ".$id." ORDER BY Season DESC");
$sql1 = mysqli_query($db, "SELECT Season, Team, Minutes, FieldGoalsMade_Attempted, FieldGoalPercentage, 3PointFGMade_Attempted, 3PointFGPercentage, FreeThrowMade_Attempted, FreeThrowPercentage, Rebounds, Assists, Blocks, Steals, Fouls, Turnovers, Points FROM SeasonTotals WHERE PlayerID = ".$id." ORDER BY Season DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Player Profile | OpenLocker</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="container"> 
  <div class="row">
  <div class="col-lg-12">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div style="margin-left:0px" class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a style="padding-left:0px" class="navbar-brand" href="index.html">OpenLocker</a></div>
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
  </div>
  </div>
  <!-- /.container-fluid --> 
</nav>
    <section style="margin:0px; padding:0px;" class="bg-brightgray">
    
        <div style="margin-top:0px" class="container">
        <div class="row">
        <div style="margin-top:5px" class="info-block">
<section style="padding-top:100px; padding-right:100px; position: relative; width: 100%; background-image:url(img/WSU.jpg); background-position: center; -webkit-background-size: cover; -moz-background-size: cover; background-size: cover; -o-background-size: cover;">
</section>
<section style="position:relative; padding:0" class="bg-lightishgray"> 
<div style="position:absolute; bottom:0px; margin-left:25px; margin-bottom:10px; background:lightgray; display:inline-block">
	<div style="width:150px; margin:10PX; background:white">
	<img style="width:100%" src="img/logo.png"/>
	</div>
</div>
<div style="display:inline-block; margin-left:225px">
<div>
	<h3 style="margin:0px; margin-top:5px; display:inline-block"><b>WSU Men's Basketball</b></h3>
</div>
<div>
	<p style="margin:0px; display:inline-block"><a href="overview.php">Overview</a> | <a href="reviews.php">Reviews</a> | <a href="coaching.php">Coaching</a> | <a href="currentplayers.php">Current Players</a> | <a href="recruits.php">Recruits</a> | <a href="teamhistory.php">Team History</a> | <a href="more.php">More</a></p>
</div>
</div>
</section>
</div>
         <div style="padding:5px; padding-bottom:0px;" class="col-sm-12">
            <div style="overflow:auto" class="info-block">
            	<div style="margin-left:5px; margin-right:5px;" class="row">
                          <?php 
echo "<h2>".$name."</h2>";
echo "<h3>Season Averages</h3>";
echo "<table class='text-center player-table'><tbody><tr class='bold'><td>Season</td><td>Team</td><td>MIN</td><td>FGM-A</td><td>FGP</td><td>3PFGM-A</td><td>3P%</td><td>FTM-A</td><td>FTP</td><td>Rebounds</td><td>Assists</td><td>Blocks</td><td>Steals</td><td>Fouls</td><td>Turnovers</td><td>Points</td></tr>";
while($row = mysqli_fetch_row($sql)) {
	echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td></tr>";
	}
echo "</tbody></table>";
echo "<h3>Season Totals</h3>";
echo "<table class='text-center player-table'><tbody><tr class='bold'><td>Season</td><td>Team</td><td>MIN</td><td>FGM-A</td><td>FGP</td><td>3PFGM-A</td><td>3P%</td><td>FTM-A</td><td>FTP</td><td>Rebounds</td><td>Assists</td><td>Blocks</td><td>Steals</td><td>Fouls</td><td>Turnovers</td><td>Points</td></tr>";
while($row1 = mysqli_fetch_row($sql1)) {
	echo "<tr><td>".$row1[0]."</td><td>".$row1[1]."</td><td>".$row1[2]."</td><td>".$row1[3]."</td><td>".$row1[4]."</td><td>".$row1[5]."</td><td>".$row1[6]."</td><td>".$row1[7]."</td><td>".$row1[8]."</td><td>".$row1[9]."</td><td>".$row1[10]."</td><td>".$row1[11]."</td><td>".$row1[12]."</td><td>".$row1[13]."</td><td>".$row1[14]."</td><td>".$row1[15]."</td></tr>";
	}
echo "</tbody></table>";
?>
            	</div>
            </div>
            
           
        </div>
        </div>
    </section>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

</body>

</html>
