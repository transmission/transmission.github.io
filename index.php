<?php
$current_page="main";
include('includes/header.php');
include('includes/version.php');
?>

			<div style="width: 100%; height: 200px;">
 				<div style="float: left; width: 280px; margin-top: <?php echo defined('TRANSMISSION_BETA_VERSION')?'20':'50'?>px; text-align: center; box-shadow: #888 0 0 5px; -moz-box-shadow: #888 0 0 5px; -webkit-box-shadow: #888 0 0 5px; background-image: url('images/gradient.png'); background-position: center bottom; background-repeat: repeat-x;">

					<p><big><b>Transmission <?=TRANSMISSION_VERSION?></b></big></p>
					<p>
						<a href="/download">Download Now</a><br />
						<a href="https://trac.transmissionbt.com/wiki/Changes#version-<?=TRANSMISSION_VERSION?>">Release Notes</a><br/>
						<a href="https://trac.transmissionbt.com/wiki/PreviousReleases">Previous Releases</a>
					</p>

<?php
if (defined('TRANSMISSION_BETA_VERSION')) {
    echo '<p><big><b>Beta Release: '.TRANSMISSION_BETA_VERSION.'</b></big></p>'
	. '<p>'
	. '<a href="http://download.transmissionbt.com/files/Transmission-'.TRANSMISSION_BETA_VERSION.'.dmg">Mac Binary</a><br/>'
	. 'Source code: '
        . '<a href="http://download.transmissionbt.com/files/transmission-'.TRANSMISSION_BETA_VERSION.'.tar.xz">xz</a>  '
        . '<a href="http://download.transmissionbt.com/files/transmission-'.TRANSMISSION_BETA_VERSION.'.tar.bz2">bz2</a><br/>'
	. '<a href="https://trac.transmissionbt.com/wiki/Changes#version-'.TRANSMISSION_BETA_VERSION.'">Release Notes</a><br/>'
	. '</p>';
}

?>
<p>Information on <a href="http://researchcenter.paloaltonetworks.com/2016/03/new-os-x-ransomware-keranger-infected-transmission-bittorrent-client-installer/">OSX.KeRanger.A</a></p>				

				</div>
				<div style="float: left; width: 460px; margin-top: 20px; padding-left: 30px">
					<b>Feature Spotlight:</b>
					<ul>
						<li>Uses <a href="about.php">fewer resources</a> than other clients</li>
						<li>Native <a href="images/screenshots/Mac-Large.png">Mac</a>, <a href="images/screenshots/GTK-Large.jpg">GTK+</a> and <a href="images/screenshots/Qt-Large.jpg">Qt</a> GUI clients</li>
						<li><a href="http://en.wikipedia.org/wiki/Daemon_(computer_software)">Daemon</a> ideal for servers, embedded systems, and headless use</li>
						<li>All these can be remote controlled by <a href="images/screenshots/Clutch-Large.jpg">Web</a> and <a href="images/screenshots/Curses-Large.jpg">Terminal</a> clients</li>
						<li>Local Peer Discovery</li>
						<li>Full <a href="http://en.wikipedia.org/wiki/BitTorrent_protocol_encryption">encryption</a>, <a href="http://en.wikipedia.org/wiki/Distributed_hash_table">DHT</a>, <a href="http://en.wikipedia.org/wiki/Micro_Transport_Protocol">µTP</a>, <a href="http://en.wikipedia.org/wiki/Peer_exchange">PEX</a> and <a href="http://news.softpedia.com/news/BitTorrent-Magnet-Links-Explained-132536.shtml">Magnet Link</a> support</li>
					</ul>
					<p style="text-indent: 2em;"><a href="about.php">Learn More...</a></p>
				</div>
			</div>
			
				<div id="screenshots">
					<a href="images/screenshots/Mac-Large<?php echo (isset($_GET['hula'])) ? 'h' : ''; ?>.png">
						<img src="images/screenshots/Mac-Thumbnail.png" alt="Mac Screenshot Thumbnail" />
						<br/>
						Mac
					</a>
					<a href="images/screenshots/GTK-Large.jpg">
						<img src="images/screenshots/GTK-Thumbnail.jpg" alt="GTK+ Screenshot Thumbnail" />
						<br/>
						GTK+
				 	</a>
					<a href="images/screenshots/Qt-Large.jpg">
						<img src="images/screenshots/Qt-Thumbnail.jpg" alt="Qt Screenshot Thumbnail" />
						<br/>
						Qt
				 	</a>
					<a href="images/screenshots/Clutch-Large.jpg">
						<img src="images/screenshots/Clutch-Thumbnail.jpg" alt="Web Client Screenshot Thumbnail" />
						<br/>
						Web Client
				 	</a>
					<a href="http://github.com/fagga/transmission-remote-cli">
						<img src="images/screenshots/Curses-Thumbnail.jpg" alt="Curses Screenshot Thumbnail" />
						<br/>
						Terminal
				 	</a>
				</div>
<?php include('includes/footer.php'); ?>
