<?php
include_once('../db.php');

if(isset($_GET['year'])){
	$year = $_GET['year'];
	}
else {
	$year = 2016;	
	}
$pyear = $year - 1;

$cid = $_GET['id'];
$sql = mysqli_query($db, "SELECT Roster.ID, Schools.Name, Standings.ConferenceWL, Standings.ConferencePCT, Standings.OverallWL, Standings.OverallPCT, Standings.Streak FROM Schools JOIN Roster ON Schools.ID = Roster.SchoolID JOIN Standings ON Schools.ID = Standings.SchoolID WHERE Schools.ConferenceID = ".$cid." AND Standings.Year = ".$year);
$sql1 = mysqli_query($db, "SELECT Name FROM Conferences WHERE ID = ".$cid);
$row1 = mysqli_fetch_row($sql1);
$cname = $row1[0];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Conference | OpenLocker</title>

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
<h2 style="padding:0; margin:5px; color:#C0C0C0"><b>Conference</b></h2>
</div>
</div>
</section>

    <section class="bg-lightgray">
    
        <div class="container">
        <div class="row text-center">
        <p>
        <?php
		echo "<h2>".$cname." (".$pyear."-".$year." Season)<small><select onChange='window.document.location.href=this.options[this.selectedIndex].value;'><option disabled selected>Year</option><option value='conference.php?id=".$cid."&year=2016'>2015-2016</option><option value='conference.php?id=".$cid."&year=2015'>2014-2015</option><option value='conference.php?id=".$cid."&year=2014'>2013-2014</option><option value='conference.php?id=".$cid."&year=2013'>2012-2013</option><option value='conference.php?id=".$cid."&year=2012'>2011-2012</option><option value='conference.php?id=".$cid."&year=2011'>2010-2011</option><option value='conference.php?id=".$cid."&year=2010'>2009-2010</option><option value='conference.php?id=".$cid."&year=2009'>2008-2009</option><option value='conference.php?id=".$cid."&year=2008'>2007-2008</option><option value='conference.php?id=".$cid."&year=2007'>2006-2007</option></select></small></h2>";
		echo "<table class='center-table'><tr class='bold'><td>School Name</td><td>ConferenceWL</td><td>ConferencePCT</td><td>OverallWL</td><td>OverallPCT</td><td>Streak</td>";
		while($row = mysqli_fetch_row($sql)){
			echo "<tr><td><a href='roster.php?id=".$row[0]."'>".$row[1]."</a></td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td>";
			}
		?>
		</p>
		</div>
		</div>
</body>
</html>