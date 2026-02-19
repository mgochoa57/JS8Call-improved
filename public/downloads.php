<?php
include '../scripts/html_tools.php';

$html = file_get_contents(__DIR__.'/../templates/header.html');
$html .= file_get_contents(__DIR__.'/../templates/logo-div.html');
$html .= get_menu('Downloads');

$html .= '<div class="features-outer-box">
<div class="features-inner-box">
  <div class="green">
    <div class="banner shadow">JS8Call User Guide</div>
    <div style="display: flex; gap: 100px;"><a href="https://github.com/JS8Call-improved/JS8Call-improved/releases/latest/download/JS8Call_User_Guide.pdf"><img class="shadow" src="img/JS8Call_Guide.jpg" height="300" alt="User Guide"></a>
      <div>
        <h2>Important Note About The JS8Call User Guide</h2>
        <p>JS8Call version 2.2.0 and this user guide were originally released in June 2020. No official program updates were published again until version 2.3.0, which was released in June 2025. The development team is currently working on an updated user guide; until then, this document remains the most recent version available. While some links in the guide are no longer active, the content is still relevant and provides solid foundational training for using JS8Call.</p>
        <p><span class="alert">Download version 2.2.0 of the User Guide Here:</span> <a href="https://github.com/JS8Call-improved/JS8Call-improved/releases/latest/download/JS8Call_User_Guide.pdf">JS8Call User Guide</a> </p>
      </div>
    </div>
    <br>
    <br>
    <div class="banner shadow">Download Links For JS8Call Version 2.5.2</div>
    <table style="font-family: \'Kode Mono\', monospace;">
    <tr style=" font-weight: bold; color: #000000; background-color: #f7fff7; "><td>Filename</td><td>Comment</td><td>Published</td></tr>
    <tr><td><a href="https://github.com/JS8Call-improved/JS8Call-improved/releases/download/release%2F2.5.2/JS8Call-2.5.2-arm64.AppImage">JS8Call-2.5.2-arm64.AppImage</a> </td><td>Linux ARM64</td><td>Jan 28, 2026</td></tr>
    <tr><td><a href="https://github.com/JS8Call-improved/JS8Call-improved/releases/download/release%2F2.5.2/JS8Call-2.5.2-installer.exe">JS8Call-2.5.2-installer.exe</a> </td><td>Windows x86_64</td><td>Jan 28, 2026</td></tr>
    <tr><td><a href="https://github.com/JS8Call-improved/JS8Call-improved/releases/download/release%2F2.5.2/JS8Call-2.5.2-x86_64.AppImage">JS8Call-2.5.2-x86_64.AppImage</a> </td><td>Linux	x86_64 (AMD64)</td><td>Jan 28, 2026</td></tr>
    <tr><td><a href="https://github.com/JS8Call-improved/JS8Call-improved/releases/download/release%2F2.5.2/JS8Call_2.5.2_arm64.dmg">JS8Call_2.5.2_arm64.dmg</a> </td><td>Mac OS - ARM64 (Apple Silicon)</td><td>Jan 28, 2026</td></tr>
    <tr><td><a href="https://github.com/JS8Call-improved/JS8Call-improved/releases/download/release%2F2.5.2/JS8Call_2.5.2_universal.dmg">JS8Call_2.5.2_universal.dmg</a> </td><td>Mac OS - Universal (Intel + Apple Silicon)</td><td>Jan 28, 2026</td></tr>
    <tr><td><a href="https://github.com/JS8Call-improved/Android-port/releases/download/1.0-RC1/JS8Android-1.0-RC1.apk">JS8Android-1.0-RC1.apk</a> </td><td>Android Release Candidate 1</td><td>Feb 13, 2026</td></tr>
    </table>
    <p><span class="alert">Note</span>: for SHA-256 checksums, licensing information, source code, release history, and to report issues or contribute to development, please visit the JS8Call repository on Github: <a href="https://github.com/JS8Call-improved/JS8Call-improved">https://github.com/JS8Call-improved/JS8Call-improved</a>.</p>
    <p><span class="alert">Android</span>: The source code for the Android port can be found here: <a href="https://github.com/JS8Call-improved/Android-port/releases/tag/1.0-RC1">https://github.com/JS8Call-improved/Android-port/releases/tag/1.0-RC1</a></p>
    <br>';

$html .='<div class="banner shadow">Discover CommStat And Run CommStat & JS8Call Together</div>
        <div style="display: flex; justify-content: center; gap: 20px;">
        <img src="img/commstat+js8call.png" width="516"><img src="img/js8call+commstat.png" width="520">
        </div>

        <h2>What Is CommStat?</h2>
        <p>CommStat is a companion application designed to extend the capabilities of JS8Call by adding structured reporting, tracking, and visualization of stations operating on a network. It provides a practical way to collect, manage, and interpret STATREPs transmitted over HF, turning individual messages into actionable situational awareness.<br><br>
        CommStat is built for operators and groups who need clarity, coordination, and continuity when communications matter most.<br><br>
        
        <b>Visit the Commstat website here</b>: <a href="https://commstat-improved.com/">https://commstat-improved.com/</a></p>
        <br>';


$html .=  '<div class="banner shadow">Clarification on the JS8Call Name and Project Organization</div>
    <p>We want to clear up some recent confusion regarding the JS8Call name, the JS8Call-Improved organization, and recent version releases.</p>
    <p>For many years, the program was released under the name JS8Call, and development took place under the js8call organization.</p>
    <p>With the release of version 2.4.0, two changes occurred at the same time:
      <ul>
      <li>The application name was released as JS8Call-Improved</li>
      <li>A new development organization was created called js8call-improved</li>
    </ul>
    <p>These simultaneous changes understandably caused confusion within the community.</p>
    <p>Beginning with version 2.5.0, the application name was restored to JS8Call, which remains the official name of the software going forward. The development organization, however, continues to operate under the JS8Call-Improved name.</p>
    <p>The official website for the JS8Call project is: js8call-improved.com</p>

    <h2>Development Team Update</h2>
    <p>The development team has continued to grow and now consists of 11 contributors. Jordan Sherer, the original creator of JS8Call, remains an active member of the development team.</p>
    <p>We appreciate the community’s patience and continued support as the project evolves. Our goal remains to maintain clarity, continuity, and transparency while advancing JS8Call’s development.</p>
    <div>';

$html .= '<h2>What\'s New in Version 2.5.1</h2>
    <p>Version 2.5.1 is a patch release that improves theme compatibility and user experience in the Configuration dialog.</p>
    <p><b>Dark Mode Compatibility Fix</b></p>
    <p>This release resolves an issue where the Configuration dialog did not display correctly when using dark desktop themes, particularly on Linux systems. The previous version used hardcoded background colors that conflicted with system theme settings, resulting in poor readability and visual inconsistencies.</p>
    <p><b>Changes include</b>:</p>
    <ul>
        <li>Removed hardcoded background colors that interfered with dark themes</li>
        <li>Removed custom styling from the saved messages list that caused display issues</li>
        <li>The UI now properly respects your system\'s color scheme</li>
    </ul>
    <p><b>Improved Configuration Validation</b></p>
    <p>We\'ve added visual feedback to help ensure your station is properly configured:</p>
    <ul>
    <li>The Callsign and Grid fields now display a warning icon when empty</li>
    <li>Hovering over the icon shows a tooltip indicating the field is required</li>
    <li>The warning automatically disappears once you enter valid information</li>
    </ul>
    <p>This makes it easier to spot missing configuration at a glance.</p>';


$html .= '<h2>Major Features For The 2.5.0 Release</h2>
    <ul>
        <li>WSJT-X UDP Protocol Support - Added WSJT-X UDP protocol reporting support for better integration with logging software</li>
        <li>User Guide - Added comprehensive JS8Call User Guide to Help menu (PDF and editable .docx source)</li>
        <li>Software Update Notifier - Fixed and improved the automatic update check feature</li>
        <li>Reduced Headers for Small Screens - Added optional reduced-length strings for table headers and cells to optimize space on small displays (toggle in View menu)</li>
    </ul>
    
    <h2>Decoder Improvements (Major Performance Boost)</h2>
    <ul>
        <li>Soft Combining - Added soft combining of repeat frames for SNR improvement</li>
        <li>Per-tone/Per-symbol Noise + LLR Whitening - Better noise handling</li>
        <li>Per-symbol Frequency Tracker - Added PLL/Kalman filter for improved frequency tracking</li>
        <li>LDPC Erasure Handling - Multi-pass feedback for better error correction</li>
        <li>Decoder Quality - Fixed assumptions that lowered decode quality on non-normal modes</li>
        <li>Multi-pass Decoding - Decoder improvements broken out into separate classes for better maintainability</li>
    </ul>
    
    <h2>Bug Fixes</h2>
    <ul>
        <li>Turbo Mode - Fixed bug causing initial symbols to be dropped in turbo mode unless tx_delay was configured</li>
        <li>Split Mode TX Frequency - Fixed logic bug preventing split mode tx frequency from being set correctly</li>
        <li>DIRECTED.txt Offset - Fixed program writing current user\'s offset to DIRECTED.txt instead of transmitted offset</li>
        <li>Type and Send Bug - Fixed bug that made it impossible to type and send</li>
        <li>hread Safety - Made isIdle() in Modulator thread-safe</li>
        <li>Hamlib Bug Workaround - Work around for hamlib bug #1966</li>
    </ul>
    
    <h2>Frequency/Band Updates</h2>
    <ul>
        <li>New 60m Segment - Added 5363kHz to frequency list for new 60m band segment</li>
        <li>160m Frequency - Moved 160m frequency to 1843.5 dial to prevent interference from FT8</li>
    </ul>
    
    <h2>UI Improvements</h2>
    <ul>
        <li>TX Delay Minimum - Reduced minimum Tx delay setting to 100ms (necessary to prevent clipping leading symbols)</li>
        <li>Clearer Context Menu - Made station list context menu clearer about what will be cleared</li>
        <li>HB Button UI - Re-established previous HB-button UI</li>
        <li>Table Headers - Disabled mouseover/click behavior on table headers in band activity and callsign tables</li>
        <li>About Dialog - Updated About dialog with FFmpeg legal notices and cleaner presentation</li>
    </ul>
    
    <h2>PSK Reporter Improvements</h2>
    <ul>
        <li>Made callsign cache band-awar</li>
        <li>Fixed callsign cache timeout logic</li>
        <li>Extended callsign cache expiration to 1 hour (from 5 minutes)</li>
        <li>Added randomness to reporting interval</li>
        <li>Removed 49 MHz+ cache bypass inherited from WSJT-X</li>
    </ul>

    <h2>Documentation & Build</h2>
    <ul>
        <li>Hamlib Updated - Updated to Hamlib 4.6.5 (from 4.6.4) across all platforms</li>
        <li>Build Attestations - Added build attestations for Linux, Windows, and MacOS</li>
        <li>Linux Build Scripts - Improved Linux build scripts, added support for KDE Plasma</li>
        <li>CI/CD - Added GitHub Actions CI for Linux, Windows, MacOS (including ARM64 support)</li>
        <li>Doxygen - Added Doxygen documentation hooks throughout codebase</li>
        <li>Qt 6.9 Compatibility - Fixed deprecated setTimeSpec for Qt 6.9</li>
    </ul>

    <h2>Code Cleanup</h2>
    <ul>
        <li>Major code reorganization: moved loose source/header files to group folders</li>
        <li>Renamed all header files with .h extension</li>
        <li>Reformatted entire codebase to LLVM C++ standard</li>
        <li>Removed unused and legacy files</li>
        <li>Fixed MessageBox naming conflict with Microsoft\'s #define</li>
        <li>Added .clang-format configuration file</li>
    </ul>

    <h2>Licensing</h2>
    <ul>
        <li>Updated LICENSE and About dialog to include FFmpeg licensing requirements</li>
    </ul>
    <br>
    <br>
    <p><span class="alert">Bottom Line</span>: Version 2.5.0 brings significant decoder performance improvements, better WSJT-X integration, enhanced PSK Reporter functionality, and numerous bug fixes while maintaining compatibility with the latest toolchains.</p>
    </div>
 
    <br>
    </div>
    </div>';

$html .= file_get_contents(__DIR__.'/../templates/footer.html');

echo $html;

/*
 * JS8Call-2.5.0-arm64.AppImage
JS8Call-2.5.0-installer.exe
JS8Call-2.5.0-x86_64.AppImage
JS8Call_2.5.0_arm64.dmg
JS8Call_2.5.0_universal.dmg

JS8Call-2.5.0-arm64.AppImage	Linux	ARM64
JS8Call-2.5.0-x86_64.AppImage	Linux	x86_64 (AMD64)
JS8Call-2.5.0-installer.exe	Windows	x86_64/Windows native
JS8Call_2.5.0_arm64.dmg	macOS	ARM64 (Apple Silicon)
JS8Call_2.5.0_universal.dmg	macOS	Universal (Intel + Apple Silicon)
 */