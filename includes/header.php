<?php
	header('Content-Type: text/html; charset=UTF-8');


	// Style the current page's link
	$current = basename($_SERVER['SCRIPT_FILENAME'], '.php');
	//$$current = 'class="current"';
	$$current_page = 'class="current"';
?>	
<!DOCTYPE html>
<html>
	<head>
	<title>Transmission</title>
	<script src="/js/js-global/FancyZoom.js" type="text/javascript"></script>
	<script src="/js/js-global/FancyZoomHTML.js" type="text/javascript"></script>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="robots" content="noarchive" />
	<style type="text/css">
      body, html{
        margin: 0;
        padding: 0;
        height: 100%;
      }
      body{
        background: url(/images/background.png);
<?php
	if (isset($_GET['hula']))
		echo "background-image: url('/images/dancing-girls.gif');";
?>
        font-family: Helvetica, sans-serif;
        color: #262626;
        text-shadow: #eee 0 1px 0;
      }
      #header{
        margin: 0;
        padding: 0;
        height: 141px;
        position: fixed;
        background: white url(/images/header.png) center bottom repeat-x;
        float: left;
        width: 100%;

        margin-bottom: 3em;
      }
      #header .meat{
        width: 800px;
        background: url(/images/h-mask.png) center top repeat-y;
        margin: 0 auto;
        height: 137px;
        position: relative;
      }
      #header .meat h1{
        height: 42px;
        width: 412px;
        margin: 0;
        background: url(/images/transmission.png) center top no-repeat;
        position: absolute;
        top: 50px;
        left: 105px;
      }
      #header .meat h1 span{display: none;}
      #tagline{
        height: 16px;
        width: 219px;
        background: url(/images/tagline.png) center top no-repeat;
        position: absolute;
        top: 105px;
        left: 300px;
      }
      #tagline span{display: none;}
      #gearshift{
        height: 167px;
        width: 178px;
        background: url(/images/gearshift.png) center top no-repeat;
        position: absolute;
        right: 105px;
        z-index: 10;
      }
      #nav{
        position: absolute;
        top: 141px;
        background-color: white;
        text-shadow: #fff 0 2px 0;
        width: 100%;
        overflow: hidden;
     	-moz-box-shadow: 0 15px 15px #FFF;
        -webkit-box-shadow: 0 15px 15px #FFF;
      }
      #nav ul{
      	margin: 0;
        list-style: none;
        padding: 0;
        overflow: hidden; /*  */
      }
      #nav li{
        float: left;
        padding: 0 10px;

      }
      #nav a{
      	display: block;
        color: black;
        font-weight: bold;
        text-shadow: 1px white;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 12px;
        padding-top: 5px;
        line-height: 18px;
      }
      #nav a:hover {
      	color: #444;
      }
      #nav a:active {
      	color: #222;
      }
      #nav a.current{
        background: url(/images/current.png) top center no-repeat;
      }
      #main{
        width: 800px;
        min-height: 100%;
        margin: 0 auto;
        background-color: white;
        box-shadow: 0 -10px 10px #888;
        -moz-box-shadow: 0 -10px 10px #888;
        -webkit-box-shadow: 0 -10px 10px #CCC;
        font-size: 0.82em;
        padding: 0 1em 0 1em;
      }
      #main .meat{
      	 padding: 170px 1em 55px 1em;
      }
      #footer{
        height: 50px;
        width: 100%;
        position: fixed;
        bottom: 0;
        background: url(/images/footer.png) top center repeat-x;
        -webkit-box-shadow: 0px -5px 5px #EEE;
      }

/* CONTENT */
	#screenshots {
		text-align: center;
		width: 631px;
		padding-top: 40px;
		margin: 0 auto;
		overflow: hidden;
	}

	#screenshots a{
		float: left;
		display: block;
	}

	#screenshots img {
		border: #f00 1px solid;
		width: 100px;
		height: 100px;
		margin: 10px;
	}

/* break */
a {
	text-decoration: none;
	font-weight: bold;
	color: #8a0e0e;
	border: none;
}

a:active {
	outline: 0;
}

a:hover {
	text-decoration: none;
	font-weight: bold;
	color: #400606;
}

#Footer {
	margin-top: 20px;
	width: inherit;
	text-align: center;
	font-size: 0.7em;
	z-index: 200;
	color: #917575;
	text-shadow: none;
}

#Footer a {
	color: #918181;
}

#Footer a:hover {
	color: #c2c2c2;
}

#Donate {
	position: absolute;
	bottom: 0;
	left: 0;
	width: 220px;
	height: 45px;
	background: url("/images/Donate.png") center no-repeat;
	overflow: hidden;
}

#Bandwidth {
	position: absolute;
	bottom: 0;
	right: 0;
	width: 208px;
	height: 45px;
	background: url("/images/Bandwidth.png") center no-repeat;
	overflow: hidden;
}

#Donate a, #Bandwidth a {
	padding: 200px;
}
		</style>
	</head>
	<body onload="setupZoom()">
		<div id="header">
			<div class="meat">
				<h1><span>Transmission</span></h1>
				<div id="tagline"><span>A Fast, Easy, and Free BitTorrent Client</span></div>
				<div id="gearshift"></div>
				<div id="nav">
					<ul>
						<li><a <?php echo $main; ?> href="/">Main</a></li>
						<li><a <?php echo $about; ?> href="/about/">About</a></li>
						<li><a <?php echo $download; ?> href="/download/">Download</a></li>
						<li><a href="https://trac.transmissionbt.com">Development</a></li>
						<li><a <?php echo $resources; ?> href="/resources/">Add-Ons</a></li>
						<li><a <?php echo $content; ?> href="/content/">Content</a></li>

						<li style="float: right;"><a href="irc://irc.freenode.net/transmission">IRC</a></li>
						<li style="float: right;"><a href="https://forum.transmissionbt.com">Support</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="main">
			<div class="meat">
