<?php
include '../scripts/html_tools.php';

$html = file_get_contents(__DIR__.'/../templates/header.html');
$html .= file_get_contents(__DIR__.'/../templates/logo-div.html');
$html .= get_menu('Training');

$html .= '<div class="features-outer-box">
    <div class="features-inner-box">
    
    <div>
    
    
    </div>
    
    
    
    
    
    <div class="shadow" style="background-color: #375487; color: #FFFFFF; font-weight: 700; padding: 20px; margin-bottom: 20px;">These Videos Feature Version 2.2.0, But The Instructions Are The Same For Version 2.3.0 And Above</div>
    <div class="video-box">
        <a href="https://www.youtube.com/watch?v=XZPfBNgn-P0" target="_blank" rel="noopener noreferrer"><img src="img/js8call_vid1_jjs_2025-12.png" class="shadow-video"></a>
        <!--<iframe src="https://www.youtube.com/embed/XZPfBNgn-P0" title="JS8Call Vid 1 | Introduction, Install, Configure, First Tour" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        <div>
            <h2 class="video-text-18">JS8Call Vid 1 | Introduction, Install, Configure, First Tour</h2>
            <p class="video-text-44">Get started with JS8Call in this introductory tutorial by John Jacob Schmidt. You\'ll learn how to download, install, and configure the software, while gaining an understanding of its strengths, limitations, and standout features. The video also covers settings optimized for <a href="https://amrron.com/">AmRRON</a> radio operators.</p>
            <p class="video-text-18"><strong>Note:</strong> This is a 38 minute video.</p>
        </div>
    </div>
    <hr>
    <div class="video-box">
        <a href="https://www.youtube.com/watch?v=koi3hA--YMw" target="_blank" rel="noopener noreferrer"><img src="img/js8call_vid2_jjs_2025-12.png"></a>
        <!--<iframe src="https://www.youtube.com/embed/XZPfBNgn-P0" title="JS8Call Vid 1 | Introduction, Install, Configure, First Tour" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        <div>
            <h2 class="video-text-18">JS8Call Vid 2 | Operation & Features</h2>
            <p class="video-text-44">In this video, John Jacob Schmidt demonstrates JS8Call\'s core operating features, including messaging, queries, message relaying, and several other useful tools and concepts. He guides you through how these functions work together to create a flexible and powerful digital communication mode.</p>
            <p class="video-text-18"><strong>Note:</strong> This is a 27 minute video.</p>
        </div>
    </div>
    <br>
    <br>
    <div class="shadow" style="background-color: #bb2648; color: #FFFFFF; font-weight: 700; padding: 20px; margin-bottom: 20px;">This Video Showcases The Group Messaging Feature Released in Version 2.3.1</div>
    <div class="video-box">   
        <iframe width="560" height="315" class="shadow-video" src="https://www.youtube.com/embed/eE84BgTNSVA" title="Next-Level JS8CALL Features &amp; Updates" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div>
            <h2 class="video-text-18">Next-Level JS8CALL Features & Updates</h2>
            <p class="video-text-44">Josh Nass and friends (Mike and Jason) do a great job of explaining and demonstrating group messaging in JS8Call-Improved. This new feature adds a Group Message Inbox, allowing operators to store messages for a group and letting any station following that group retrieve them later—even if the original sender is offline—making group coordination simpler and more reliable.</p>
            <p class="video-text-18"><strong>Note:</strong> This is a 1 hour, and 30 minute video.</p>
        </div>
    </div>
    <hr>
    <br>
    <p>More videos coming soon...</p>
<br>
</div>';


$html .= file_get_contents(__DIR__.'/../templates/footer.html');

echo $html;