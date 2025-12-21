<?php
include '../scripts/html_tools.php';

$html = file_get_contents(__DIR__.'/../templates/header.html');
$html .= file_get_contents(__DIR__.'/../templates/logo-div.html');
$html .= get_menu('Downloads');

$html .= '<div class="features-outer-box">
    <div class="features-inner-box">
    <div class="green">
    <div class="banner shadow">JS8Call User Guide</div>
    <div style="display: flex; gap: 100px;"><a href="downloads/JS8Call_User_Guide.pdf"><img class="shadow" src="img/JS8Call_Guide.jpg" height="300"></a>
      <div>
        <h2>Important Note About The JS8Call User Guide</h2>
        <p>JS8Call version 2.2.0 and this user guide were originally released in June 2020. No official program updates were published again until version 2.3.0, which was released in June 2025. The development team is currently working on an updated user guide; until then, this document remains the most recent version available. While some links in the guide are no longer active, the content is still relevant and provides solid foundational training for using JS8Call.</p>
        <p><span class="alert">Download version 2.2.0 of the User Guide Here:</span> <a href="downloads/JS8Call_User_Guide.pdf">JS8Call User Guide</a> </p>
      </div>
    </div>
    <br>
    <br>
    <div class="banner shadow">JS8Call-Improved Version 2.4.0</div>
    <table style="font-family: Kode Mono;">
    <tr style=" font-weight: bold; color: #000000; background-color: #f7fff7; "><td>Filename</td><td>Comment</td><td>Published</td></tr>
    <tr><td><a href="downloads/Debian_INSTALL.tar.gz">Debian_INSTALL.tar.gz</a> </td><td>Debian version</td><td>Nov 2025</td></tr>
    <tr><td><a href="downloads/Fedora_INSTALL.tar.gz">Fedora_INSTALL.tar.gz</a> </td><td>Fedora version</td><td>Nov 2025</td></tr>
    <tr><td><a href="downloads/JS8Call-improved_2.4.0.exe">JS8Call-improved_2.4.0.exe</a> </td><td>Windows version</td><td>Nov 2025</td></tr>
    <tr><td><a href="downloads/JS8Call-improved_2.4.0_arm64.dmg">JS8Call-improved_2.4.0_arm64.dmg</a> </td><td>ARM64 version</td><td>Nov 2025</td></tr>
    <tr><td><a href="downloads/JS8Call-improved_2.4.0_universal.dmg">JS8Call-improved_2.4.0_universal.dmg</a> </td><td>Mac version</td><td>Nov 2025</td></tr>
    </table>
    <br>
    <p><span class="alert">Note</span>: for SHA-256 checksums, licensing information, source code, release history, and to report issues or contribute to development, please visit the JS8Call repository on Github: <a href="https://github.com/JS8Call-improved/JS8Call-improved">https://github.com/JS8Call-improved/JS8Call-improved</a>.</p>
    </div>
    </div>
    </div>';

$html .= file_get_contents(__DIR__.'/../templates/footer.html');

echo $html;

