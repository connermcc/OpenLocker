<?php include("checklogin.php"); ?>
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

    <section style="margin:0px; padding:0px;" class="bg-brightgray">
    
        <div style="margin-top:0px" class="container">
        <div class="row">
        	<h2 style="margin:5px"><b>Current Players (2015-2016)</b></h2>
            <div style="padding:5px;" class="col-lg-4 col-sm-6">
            	<div style="" class="player-block">
                		<div style="height:100%; padding:5px" class="col-xs-4">
                    	<div class="new-player-photo-holder"><div class="player-photo-number">#33</div><img class="player-photo" src="img/players/brett_boese.jpg"/></div>
                    	</div>
                        <p class="player-name">Brett Boese</p>
                        <p class="player-info">6'7" 230 lbs<br><br>
                        Position: Forward<br>
                        Year: Senior<br>
                        Hometown: Spokane, WA</p>
                        <p><a href="player.php">View Player Profile</a></p>
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/charles_callison.jpg"/>
                    </div>
                    <div class="col-xs-8">
                    	<p class="player-name">Charles Callison<br></p>
                        <p  class="player-info">6'0" 183 lbs<br><br>
                        Position: Guard<br>
                        Year: Junior<br>
                        Hometown: Moreno Valley, CA</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/conor_clifford.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Conor Clifford<br></p>
                        <p class="player-info">7'0" 283 lbs<br><br>
                        Position: Center<br>
                        Year: Red Shirt Junior<br>
                        Hometown: Huntington Beach, CA</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>            
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/vionte_daniels.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Viont'e Daniels<br></p>
                        <p class="player-info">6'2" 163 lbs<br><br>
                        Position: Guard<br>
                        Year: Freshman<br>
                        Hometown: Federal Way, WA</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
             <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/robert_franks.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Robert Franks<br></p>
                        <p class="player-info">6'7" 250 lbs<br><br>
                        Position: Forward<br>
                        Year: Freshman<br>
                        Hometown: Vancouver, WA</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/josh_hawkinson.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Josh Hawkinson<br></p>
                        <p class="player-info">6'10" 232 lbs<br><br>
                        Position: Forward<br>
                        Year: Junior<br>
                        Hometown: Shoreline, WA</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
			<div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/ike_iroegbu.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Ike Iroegbu<br></p>
                        <p class="player-info">6'2" 195 lbs<br><br>
                        Position: Guard<br>
                        Year: Junior<br>
                        Hometown: Sacramento, CA</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/valentine_izundu.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Valentine Izundu<br></p>
                        <p class="player-info">6'10" 235 lbs<br><br>
                        Position: Center<br>
                        Year: Red Shirt Junior<br>
                        Hometown: Houstin, TX</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/que_johnson.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Que Johnson<br></p>
                        <p class="player-info">6'5" 208 lbs<br><br>
                        Position: Guard<br>
                        Year: Red Shirt Junior<br>
                        Hometown: Pontiac, MI</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/derrien_king.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Derrien King<br></p>
                        <p class="player-info">6'6" 170 lbs<br><br>
                        Position: Forward<br>
                        Year: Sophomore<br>
                        Hometown: Wichita, KA</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/hunior_longrus.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Junior Longrus<br></p>
                        <p class="player-info">6'7" 240 lbs<br><br>
                        Position: Forward<br>
                        Year: Senior<br>
                        Hometown: Oakland, CA</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/ny_redding.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Ny Redding<br></p>
                        <p class="player-info">6'2" 166 lbs<br><br>
                        Position: Guard<br>
                        Year: Sophomore<br>
                        Hometown: Cleveland, OH</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
                </div>
            </div>
            <div style="padding:5px" class="col-lg-4 col-sm-6">
            	<div class="player-block">
                <div style="height:100%" class="col-xs-4">
                    	<span class="helper"></span><img class="player-photo" src="img/players/renard_suggs.jpg"/>
                    </div>
                    <div style="height:100%" class="col-xs-8">
                    	<p class="player-name">Renard Suggs<br></p>
                        <p class="player-info">6'2" 188 lbs<br><br>
                        Position: Guard<br>
                        Year: Junior<br>
                        Hometown: St. Paul, MN</p>
                        <p><a href="player.php">View Player Profile</a></p>
                    </div>
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
