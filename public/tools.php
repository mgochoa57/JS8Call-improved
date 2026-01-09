<?php
include '../scripts/html_tools.php';

$html = file_get_contents(__DIR__.'/../templates/header.html');
$html .= file_get_contents(__DIR__.'/../templates/logo-div.html');
$html .= get_menu('Tools');

$html .= '<div class="features-outer-box">
    <div class="features-inner-box">
    <div class="purple">
    <div class="banner shadow">JS8 Spotter</div>
    <div class="tools">
        <img src="img/js8-spotter.png" class="shadow-video center-image"></a>
        <h2>Fills The Gaps in The JS8Call Feature Set</h2>
        <p><strong>Description: </strong>JS8 Spotter can help users sort and track band activity, send APRS messages more easily, view stations on an offline map, send custom automated responses, and even implement simple forms. Data is stored in an SQLite database file, which is easily accessed via <a href="https://www.sqlitestudio.pl/"> SQLiteStudio</a> (export features are also built-in to JS8Spotter, for easy save or copy without having to open the database file.) </p>
        <p><span class="alert">Visit the JS8 Spotter Website here:</span> <a href="https://kf7mix.com/js8spotter.html">https://kf7mix.com/js8spotter</a> </p>
    </div>
    <br>
    
    <div class="banner shadow">QRZ Client</div>
    <div class="tools">
        <img src="img/qrz-client.png" class="center-image">
    <br>
    <div class="tools-text-18">
        <h2>A Command Line Client For The qrz.com XML API</h2>
    </div>
    <div class="tools-text-44">
        <h3>Features</h3>
        <ul>
            <li>Callsign lookups</li>
            <li>DXCC Lookups</li>
            <li>BIO Retreival</li>
            <li>Multiple lookups per call</li>
            <li>Output to console, CSV, JSON, XML, or Markdown</li>
            <li>Can be used in scripts (Python, PHP, etc.)</li>
        </ul>
    </div>
    <h3>Example</h3>
    <div style="width: auto; display: flex">
    <pre style="font-family: \'Kode Mono\'; font-size: 12px; background-color: #222632; color: #8BBFEF; ">
  
  C:\N0DDK>qrz --help

  Optional arguments:
    -h, --help     shows help message and exits
    -v, --version  prints version information and exits
    -a, --action   Specify the action to perform. callsign[default]|bio|dxcc|login [nargs=0..1] [default: "callsign"]
    -f, --format   Specify the output format. Console[default]|CSV|JSON|XML|MD [nargs=0..1] [default: "console"]
    
  C:\N0DDK>qrz n0prnk m0mny n0mny m0fun h2oguy    
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | Callsign |        Name        | Class |      Address       |     City    |   County  | State |  Zip  |    Country    |  Grid  |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | N0PRNK   | Bart Simpson       | G     | 2107 MacArthur Dr  | West Orange | Orange    | TX    | 77630 | United States | EM30cc |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | M0MNY    | Indiana Jones      | G     | 1415 Hillsboro Bl  | Manchester  | Coffee    | TN    | 37355 | United States | EM65xl |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | N0MNY    | Satoshi Nakamoto   | G     | 333 Kaehole St     | Honolulu    | Honolulu  | HI    | 96825 | United States | BL11dg |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | M0FUN    | Alfred E Neuman    | E     | 41728 W 10 Mile Rd | Novi        | Oakland   | MI    | 48375 | United States | EN82gl |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | H2OGUY   | Spongebob Sqrpants | E     | 371 W Parker St    | Baxley      | Appling   | GA    | 31513 | United States | EM81ts |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  
</pre>
</div>
<p>
  <span class="alert">Runs on: </span>Windows & Linux<br>
  <span class="alert">Requirements: </span>You must have a qrz xml subscription<br>
  <span class="alert">Download: </span><a href="https://github.com/rruchte/qrzclient">https://github.com/rruchte/qrzclient</a> Click the "Latest" link in the right column<br>
</p>
</div>
<br>
<div class="banner shadow">CommStat-Improved</div>
<a href="img/commstat-2-3-0.png"><img src="img/commstat-2-5-0.png" class="shadow-video center-image" width="640"></a>
<h2>A Companion App Developed For Use With JS8Call</h2>
<p><strong>CommStat</strong> allows operators to send and receive standardized status <strong>reports (STATREPs)</strong> over the radio, and then <strong>compile, visualize, and map the locations and activity of participating stations</strong> that have submitted those reports. The tool (a Python-based program) enhances situational awareness in a JS8Call network by providing reporting, tracking, and mapping functions that support coordinated communications among a group of operators.</p>
<p><span class="alert">Note:</span> Instructions and download links coming soon. (Updated: December 21, 2025)</p>
</div>
</div>
</div>';

//Next item:  https://www.sqlitestudio.pl/

$html .= file_get_contents(__DIR__.'/../templates/footer.html');

echo $html;
