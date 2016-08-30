<?php

$current_page='content';
ini_set('include_path',ini_get('include_path').':..');
require_once('includes/simplepie.php');
include('includes/header.php');

$all_feeds = array(
    'http://www.clearbits.net/rss.xml' => 'clearbits',
    'http://www.jamendo.com/en/rss/popular-albums' => 'jamendo',
//    'http://www.legittorrents.info/rss_torrents.php' => 'legittorrents',
    'http://feeds.feedburner.com/Linuxtracker' => 'linuxtracker'
    // commented out -- VODO's rss feed isn't sorted by date
    //'http://vodo.net/feeds/mrss' => 'VODO'
);

$maxlinks = 100;
$show_feeds = $_GET['feeds'];
if(empty($show_feeds))
    $show_feeds = $all_feeds;
$pies = array();
foreach ($show_feeds as $feed):
	$url = array_search($feed,$all_feeds);
	if(!empty($url))
		$pies[] = new SimplePie($url);
endforeach;
$items = SimplePie::merge_items($pies,0,$maxlinks);

?>

<p><img width="200" height="200" align="right" hspace="20" src="pioneer-one.jpg"/></p>
<h1>Featured Content</h1>
<p><large><b><a href="http://vo.do/assets/torrents/Pioneer.One.S01E03.720p.x264-VODO.torrent">Pioneer One Episode 3: "Alone in the Night"</a></b></large></p>
<p>Now quarantined to the Calgary base for two weeks, Taylor and his team have bought time to get answers from the supposed Martian cosmonaut. But who can get him to talk?</p>
<p><a href="http://vo.do/pioneerone">Homepage</a></p>

<p><a href="featured.php">Previous featured content</a></p>

<hr/>

<h1>New BitTorrent Downloads<br><small>Sorted by date</small></h1>
 
<!-- Yes, I know... tables.
     We need a real web designer.
     If you're reading this source, maybe you're that person?
     mail us at dev@transmissionbt.com -->
<table width="100%">
<tr>
<td valign="top" rowspan="1000" width="150">Show sources:
<form action="/content/" method="get">
<?php
foreach ($all_feeds as $key):
    $permalink = array_search($key,$all_feeds);
    $url = parse_url($permalink);
    $checked = in_array($key,$show_feeds) ? 'checked' : '';
    echo '<input type="checkbox" name="feeds[]" value="'.$key.'" '.$checked.'/>'.$key.'<br/>';
endforeach; ?>
<p><input type="submit" value="Update Filter"/></p>
</form>
</td>
</tr>

<?php foreach ($items as $item):
$f = $item->get_feed();
$url = parse_url($f->get_permalink()); ?>

<tr>
<td width="20" valign="top">
	<a href="<?php echo $item->get_permalink();?>">
	<img width="16" height="16" src="<?php echo $f->get_favicon();?>">
	</a>
</td>
<td>
	<?php

	$description = $item->get_description();
	if(empty($description)) {
		$enclosure = $item->get_enclosure();
//echo '<pre>'.htmlspecialchars(print_r($enclosure, true)).'</pre>';
		if($enclosure) {
			$description = $enclosure->get_description();
			if(empty($description)) {
				$caption = $enclosure->get_caption();
				if($caption) {
					$description = $caption->get_text();
				}
			}
		}
	}
        $description = str_replace( array( '<tr>', '</tr>', '<td>', '</td>', '<pre>', '</pre>' ), '', $description );
	echo '<a href="'.$item->get_permalink().'">'.$item->get_title().'</a> - <small><a href="'.$item->get_feed()->get_permalink().'">'.$url['host'].'</a></small><br/><small>Posted on '.$item->get_date('j F Y | g:i a').'</small><p>'.$description.'</p>';
	?>
</td>
</tr>
<?php endforeach; ?>

</table>
 
<?php include('../includes/footer.php'); ?>
