<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Team Roster | OpenLocker</title>

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
$sql = mysql_query("SELECT SchoolID FROM Roster WHERE ID = ".$id."");
$row = mysql_fetch_row($sql);
$sid = $row[0];
$sql = mysql_query("SELECT Name FROM Schools WHERE ID = ".$sid."");
$row = mysql_fetch_row($sql);
$schoolname = $row[0];
$sql = mysql_query("SELECT ID, JerseyNumber, Name, Position, Height, Weight, Hometown FROM Player WHERE RosterID = ".$id." ORDER BY JerseyNumber ASC");
?>
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
<h2 style="padding:0; margin:5px; color:#C0C0C0"><b>Team Roster</b></h2>
</div>
</div>
</section>

    <section class="bg-lightgray">
    
        <div class="container">
        <div class="row text-center" >
<div class="col-centered">
<p>
<?php 
echo "<h3>".$schoolname."</h3>";
echo "<table class='center-table'><tbody><tr class='bold'><td>Jersey #</td><td>Name</td><td>Postion</td><td>Height</td><td>Weight</td><td>Hometown</td></tr>";
while($row = mysql_fetch_row($sql)) {
	echo "<tr><td>".$row[1]."</td><td><a href='player.php?id=".$row[0]."'>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>";
	}
echo "</tbody></table>";
?>
</p>
</div>

</div>
</div>
</body>
</html>