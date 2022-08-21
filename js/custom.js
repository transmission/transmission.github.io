// constants.js and jquery must preceed this script on the site.
// constants.js serves as a singular location for relavent variables to be called on site-wide.

var OSName="Unknown OS";
if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";

//Homepage uses <span id="downloadsection"></span> to be populated.

if (OSName = "Windows") {
  $(function(){
      $("#downloadsection").load("apple_download_include.html"); 
    });
} else if (OSName == "MacOS") {
  $(function(){
      $("#downloadsection").load("windows_download_include.html"); 
    });
} else if (OSName == "UNIX") {
  document.getElementById("downloadsection").innerHTML= "<a class="'btn btn-labeled btn-danger me-sm-3 fw-bold mt-3'" href="'download.html#unix_distros'" role="'button'"><span class="'btn-label'"><i class="'fa-brands fa-linux'"></i></span> Download v<span class="'current-version'"></span></a>";
} else if (OSName == "Linux") {
    document.getElementById("downloadsection").innerHTML= "<a class="'btn btn-labeled btn-danger me-sm-3 fw-bold mt-3'" href="'download.html#unix_distros'" role="'button'"><span class="'btn-label'"><i class="'fa-brands fa-linux'"></i></span> Download v<span class="'current-version'"></span></a>";
} else {
    document.getElementById("downloadsection").innerHTML= "<a class="'btn btn-danger btn-lg px-4 me-sm-3 fw-bold mt-3'" href="'download.html'" role="'button'">Download v<span class="'current-version'"></span></a>";
}

//Returns values for versions and download links. Works perfectly on Downloads page.
         $(function(){
             var dmg = 'Transmission-' + Constants.current_version_dmg + '.dmg',
                 tar = 'transmission-' + Constants.current_version_tar + '.tar.xz',
                 msi32 = 'transmission-' + Constants.current_version_msi + '-x86.msi',
                 msi64 = 'transmission-' + Constants.current_version_msi + '-x64.msi',
                 dl_base = 'https://github.com/transmission/transmission-releases/raw/master/',
                 dl_dmg = dl_base + dmg,
                 dl_tar = dl_base + tar,
                 dl_msi32 = dl_base + msi32,
                 dl_msi64 = dl_base + msi64,
                 sum_base = 'https://www.virustotal.com/en/file/checksum/analysis',
                 sum_dmg = sum_base.replace('checksum', Constants.sha256_dmg),
                 sum_tar = sum_base.replace('checksum', Constants.sha256_tar),
                 sum_msi32 = sum_base.replace('checksum', Constants.sha256_msi32),
                 sum_msi64 = sum_base.replace('checksum', Constants.sha256_msi64);
             $('#current-version').text(Constants.current_version);
             $('#dmg-link').html('<a href="'+dl_dmg+'" title="'+Constants.sha256_dmg+'">'+dmg+'</a>');
             $('#dmg-checksum').html(dmg+': <a href="'+sum_dmg+'">'+Constants.sha256_dmg+'</a>');
             $('#tar-link').html('<a href="'+dl_tar+'" title="'+Constants.sha256_tar+'">'+tar+'</a>');
             $('#tar-checksum').html(tar+': <a href="'+sum_tar+'">'+Constants.sha256_tar+'</a>');
             $('#msi32-link').html('<a href="'+dl_msi32+'" title="'+Constants.sha256_msi32+'">'+msi32+'</a>');
             $('#msi32-checksum').html(msi32+': <a href="'+sum_msi32+'">'+Constants.sha256_msi32+'</a>');
             $('#msi64-link').html('<a href="'+dl_msi64+'" title="'+Constants.sha256_msi64+'">'+msi64+'</a>');
             $('#msi64-checksum').html(msi64+': <a href="'+sum_msi64+'">'+Constants.sha256_msi64+'</a>');
             $('#min-req-dmg').text(Constants.min_req_dmg);
             $('#min-req-msi').text(Constants.min_req_msi);
         });