<?php
$current_page="download";
ini_set('include_path',ini_get('include_path').':..');
include('includes/header.php');
include('includes/version.php');
?>

<style type="text/css">

#downloads {
	width: 80%;
	margin: 0 auto;
}

#downloads div {
	float: left;
	width: 50%;
	height: 90px;
}

#downloads div img {
	float: left;
	padding: 1em 0.5em 1em 0.5em;
}

#downloads h2 {
	margin: 0;
	padding: 0;
	margin-top: 10px;
}

#downloads div small {
	font-size: 1.05em;
}

</style>



<div id="downloads">
	<h2>Download Transmission</h2>
	The current release version is <b><?=TRANSMISSION_VERSION?></b><br /><br />

	<div>
		<img src="/images/platforms/osx.png">
			<b>Mac OS X</b>
			<br /><a href="https://download.transmissionbt.com/files/Transmission-<?=TRANSMISSION_VERSION?>.dmg" title="SHA256: <?=MAC_HASH?>">Transmission-<?=TRANSMISSION_VERSION?>.dmg</a>
			<br /><small>Requires Mac OS X 10.7 or later</small>
			<br /><a href="https://build.transmissionbt.com/job/trunk-mac/">Nightly builds</a>
			<br /><a href="https://trac.transmissionbt.com/wiki/PreviousReleases">Previous Releases</a>
	</div>
	
	<div>
		<img src="/images/platforms/tarball.png">
			<b>Source Code</b>
	 		<br /><a href="https://download.transmissionbt.com/files/transmission-<?=TRANSMISSION_VERSION?>.tar.xz" title="SHA256: <?=tar_xz_HASH?>">transmission-<?=TRANSMISSION_VERSION?>.tar.xz</a>
			<br /><a href="https://build.transmissionbt.com/job/trunk-linux/">Nightly tarballs</a>
			<br /><a href="https://download.transmissionbt.com/files/">Previous tarballs</a>
			<br /><a href="https://trac.transmissionbt.com/wiki/Building">How to build</a>
	</div>
	<b>SHA256 Hashes</b><br />
	Transmission-<?=TRANSMISSION_VERSION?>.dmg: <a href="https://www.virustotal.com/en/file/<?=MAC_HASH?>/analysis/"><?=MAC_HASH?></a><br />
	transmission-<?=TRANSMISSION_VERSION?>.tar.xz: <a href="https://www.virustotal.com/en/file/<?=tar_xz_HASH?>/analysis/"><?=tar_xz_HASH?></a>
	<h2 style="margin-top: 100px">Unix Distros</h2><br />
	<div>
		<img src="/images/platforms/ubuntu.png">
		
			<b>Ubuntu</b>
			<br /><a href="https://launchpad.net/ubuntu/saucy/+source/transmission/2.82-0ubuntu1">Stable</a>
			<br /><a href="https://forum.transmissionbt.com/viewtopic.php?f=13&amp;t=5604">More info</a>
	</div>
	<div>
		<img src="/images/platforms/fedora.png">
		
			<b>Fedora</b>
                        <br /><a href="https://admin.fedoraproject.org/pkgdb/acls/name/transmission">Official Packages</a>
			<br /><small><code>$ yum install transmission</code></small>
	</div>
	<div>
		<img src="/images/platforms/opensuse.png">
		
			<b>OpenSUSE</b>
			<br /><a href=" http://software.opensuse.org/search?baseproject=openSUSE:11.3&q=transmission">Official Packages</a>
	</div>
	<div>
		<img src="/images/platforms/mandriva.png">
		
			<b>Mandriva</b>
			<br /><a href="http://wiki.mandriva.com/fr/Transmission">Mandriva Wiki</a>
			<br /><small><code>$ urpmi transmission</code></small>
	</div>
	<div>
		<img src="/images/platforms/centos.png">
		
			<b>CentOS</b>
			<br /><a href="http://geekery.altervista.org/dokuwiki/doku.php">Contrib Packages</a>
	</div>
	<div>
		<img src="/images/platforms/debian.png">
		
			<b>Debian</b>
			<br /><a href="https://packages.debian.org/search?searchon=names&amp;keywords=transmission">Official Packages</a>
			<br /><small><code>$ apt-get install transmission</code></small>
	</div>
	<div>
		<img src="/images/platforms/puppy.png">
		
			<b>Puppy</b>
			<br /><a href="http://www.murga-linux.com/puppy/viewtopic.php?t=38969">.pet Packages</a>
	</div>
	<div>
		<img src="/images/platforms/arch-linux.png">
		
			<b>Arch Linux</b>
			<br /><a href="https://www.archlinux.org/packages/?arch=&amp;repo=&amp;q=transmission&amp;last_update=&amp;limit=50">Official Packages</a>
	</div>
	<div>
		<img src="/images/platforms/slackware.png">
			<b>Slackware</b>
<!--		<br/><a href="http://www.linuxpackages.net/search_view.php?by=name&name=transmission">Official Packages</a> --!>
			<br/><a href="http://www.slacky.eu/asche/pkgs/index.php?sear=transmission">Newer Packages</a>
	</div>
	<div>
		<img src="/images/platforms/freebsd.png">
		
			<b>FreeBSD</b>
			<br /><a href="https://www.freebsd.org/cgi/ports.cgi?query=transmission&amp;stype=name&amp;sektion=net-p2p">Official Packages</a>
			<br /><a href="http://www.freshports.org/net-p2p/transmission-gtk2/">Fresh Ports</a>
	</div>
	<div>
		<img src="/images/platforms/gentoo.png">
		
			<b>Gentoo</b>
			<br /><a href="https://packages.gentoo.org/package/net-p2p/transmission">Official Packages</a>
	</div>
	<div>
		<img src="/images/platforms/pardus.png">
		
			<b>Pardus</b>
			<br /><a href="http://packages.pardus.org.tr/info/contrib/2009/stable/source/transmission.html">Official Packages</a>
			<br /><small><code>$ sudo pisi it transmission</code></small>
	</div>
<!--	<div>
		<img src="/images/platforms/foresight.png">
		
			<b>Foresight</b>
			<br /><a href="http://www.rpath.org/repos/foresight/troveInfo?t=transmission">Official Packages</a>
			<br /><small><code>$ conary update transmission</code></small>
	</div> --!>
	<div>
		<img src="/images/platforms/openbsd.png">
		
			<b>OpenBSD</b>
			<br /><a href="https://www.google.com/search?q=transmission&amp;domains=www.openbsd.org&amp;sitesearch=www.openbsd.org&amp;btnG=Search">Official Packages</a>
	</div>
<!--	<div>
		<img src="/images/platforms/solaris.png">
		
			<b>Solaris</b>
			<br /><a href="http://pkg.opensolaris.org/release/en/advanced_search.shtml?token=transmission&amp;show=p">Official Packages</a>
			<br /><a href="http://trisk.acm.jhu.edu/SFE/">Contrib packages</a>
			<small><i>(<a href="http://pkgbuild.sourceforge.net/spec-files-extra">README</a>)</i></small>
	</div> --!>
	<div>
		<img src="/images/platforms/netbsd.png">
		
			<b>NetBSD</b>
			<br /><a href="ftp://ftp.netbsd.org/pub/pkgsrc/current/pkgsrc/net/transmission/README.html">Official Packages</a>
	</div>
<!--	<div>
		<img src="/images/platforms/platypux.png">
		
			<b>Platypux</b>
			<br /><a href="http://platypux.site.free.fr/Lzms/transmission.sh">Official Packages</a>
	</div> 
	<div>
	</div>--!>
	
	<h2>Embedded Systems</h2><br />
	<div>
		<img src="/images/platforms/networked-media-tank.png">
		
			<b>Networked Media Tank</b>
			<br /><a href="http://www.networkedmediatank.com/showthread.php?tid=10662&amp;page=1">Newest Build</a>
			<br /><a href="http://www.networkedmediatank.com/forumdisplay.php?fid=64">Forum Help</a>
	</div>
	<div>
		<img src="/images/platforms/wd-mybook.png">
		
			<b>WD MyBook</b>
			<br /><a href="http://mybookworld.wikidot.com/forum/t-162908/transmission-1-72">Optware Package</a>
			<br /><a href="http://mybookworld.wikidot.com/forum/c-34400/torrent-programs">Forum Help</a>
	</div>
	<div>
		<img src="/images/platforms/netgear-readynas.png">
		
			<b>ReadyNAS</b>
			<br /><a href="http://www.readynas.com/forum/viewtopic.php?f=47&amp;t=24271">Newest Build</a>
			<br /><a href="http://www.readynas.com/forum/viewtopic.php?f=36&amp;t=27242&amp;start=240">Forum Help</a>
	</div>
	<div>
		<img src="/images/platforms/dns-323.png">
		
			<b>D-Link DNS-323 & CH3SNAS</b>
			<br /><a href="http://forum.dsmg600.info/t2719-%5BREL%5D-Transmission.html">Newest Build</a>
	</div>
	<div>
		<img src="/images/platforms/synology.png">
		
			<b>Synology</b>
			<br /><a href="http://forum.synology.com/enu/viewtopic.php?f=38&amp;t=14773">Newest Build</a>
			<br /><a href="http://forum.synology.com/enu/viewforum.php?f=38">Forum Help</a>
	</div>
	<div>
		<img src="/images/platforms/ip-box-9000.png">
		
			<b>IP Box 9000</b>
			<br /><a href="http://www.sat-universe.com/showthread.php?t=123931&amp;page=2">Newest Build</a>
	</div>
	<div>
		<img src="/images/platforms/thecus.png">
		
			<b>Thecus</b>
			<br /><a href="http://forum.thecus.com/viewtopic.php?f=2&t=767">Newest Build</a>
	</div>
		<div>
		<img src="/images/platforms/memup.jpg">
		
			<b>MemUp LX</b>
			<br /><a href="http://www.rastersoft.com/programas/ftp_bt4lxmedia.html">Newest Build</a>
	</div>
	<div>
		<img src="/images/platforms/Drobo_5D_Front_Low.png">
		<b>Drobo</b>
		<br /><a href="http://www.drobospace.com/forums/showthread.php?tid=109145">Newest Build</a>
	</div>
	<div>
	</div>
	&nbsp;<!-- make the white background extend to the bottom -->
	<div>
	</div>
	&nbsp;<!-- make the white background extend to the bottom -->
	<div>
	</div>
	&nbsp;<!-- make the white background extend to the bottom -->
</div>
<?php include('includes/footer.php'); ?>
