<?php
include '../scripts/html_tools.php';

$html = file_get_contents(__DIR__.'/../templates/header.html');
$html .= file_get_contents(__DIR__.'/../templates/logo-div.html');
$html .= get_menu('Tools');

$html .= '<div class="features-outer-box">
    <div class="features-inner-box">
    
    <div class="shadow" style="background-color: #375487; color: #FFFFFF; font-weight: 700; padding: 20px; margin-bottom: 20px;">JS8 Spotter</div>
    <div class="tools">
        <img src="img/js8-spotter.png" class="shadow-video center-image"></a>
        <h2>JS8 Spotter | Fills The Gaps in The JS8Call Feature Set</h2>
        <p><strong>Description: </strong>JS8 Spotter can help users sort and track band activity, send APRS messages more easily, view stations on an offline map, send custom automated responses, and even implement simple forms. Data is stored in an SQLite database file, which is easily accessed via <a href="https://www.sqlitestudio.pl/"> SQLiteStudio</a> (export features are also built-in to JS8Spotter, for easy save or copy without having to open the database file.) </p>
        <p class="video-text-18"><strong>Visit the JS8 Spotter Website here:</strong> </<a href="https://kf7mix.com/js8spotter.html">https://kf7mix.com/js8spotter</a> </p>
    </div>
    <br>
    
    <div class="shadow" style="background-color: #375487; color: #FFFFFF; font-weight: 700; padding: 20px; margin-bottom: 20px;">QRZ Client</div>
    <div class="tools">
        <img src="img/qrz-client.png" class="center-image">
    <br>
    <div class="tools-text-18">
        <h2>A Command Line Client For The QRZ.com XML API</h2>
    </div>
    <div class="tools-text-44">
        <p><strong>Features</strong></p>
        <ul>
            <li>Callsign lookups</li>
            <li>DXCC Lookups</li>
            <li>BIO Retreival</li>
            <li>Multiple lookups per call</li>
            <li>Output to console, CSV, JSON, XML, or Markdown</li>
            <li>Can be used in scripts (Python, PHP, etc.)</li>
        </ul>
    </div>
    <p><strong>Example</strong></p>
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
  | N0PRNK   | Bark Simpson       | G     | 3511 Fort St       | Springfield | Wayne     | IL    | 48146 | United States | DM04li |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | M0MNY    | Elon Musk          | G     | 404 Billioaire Dr  | Katy        | Harris    | TX    | 78577 | United States | EL06vc |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | N0MNY    | Satoshi Nakamoto   | G     | 4646 Wisconsin Ave | Washington  | Travis    | DC    | 70669 | United States | EM30ig |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | M0FUN    | Alfred E Neuman    | E     | 25 Main Street     | Las Vegas   | Area 51   | NV    | 14502 | United States | FN13ib |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  | H2OGUY   | Spongebob Sqrpants | E     | 5655 Townsend CT   | Los Angeles | Walton    | CA    | 37909 | United States | EM75xw |  
  +----------+--------------------+-------+--------------------+-------------+-----------+-------+-------+---------------+--------+  
  
</pre>
</div>
<p>
<span class="alert"><strong>Runs on: </strong></span>Windows & Linux<br>
<span class="alert"><strong>Requirements: </strong></span>You must have a qrz xml subscription<br>
<span class="alert"><strong>Download: </strong></span><a href="https://github.com/rruchte/qrzclient">https://github.com/rruchte/qrzclient</a> Click the "Latest" link in the right column<br>
</p>
</div>
<br>
</div>
</div>';


$html .= file_get_contents(__DIR__.'/../templates/footer.html');

echo $html;
