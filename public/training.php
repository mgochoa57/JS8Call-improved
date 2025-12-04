<?php
include '../scripts/html_tools.php';

$html = file_get_contents(__DIR__.'/../templates/header.html');
$html .= file_get_contents(__DIR__.'/../templates/logo-div.html');
$html .= file_get_contents(__DIR__.'/../templates/menu-div.html');

$html .= '<div class="features-outer-box">
    <div class="features-inner-box">
    

    <div class="video-box">
        <a href="https://www.youtube.com/watch?v=XZPfBNgn-P0" target="_blank" rel="noopener noreferrer"><img src="img/js8call_vid1_jjs_2025-12.png" class="shadow-video"></a>
        <!--<iframe src="https://www.youtube.com/embed/XZPfBNgn-P0" title="JS8Call Vid 1 | Introduction, Install, Configure, First Tour" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        <div>
            <h2 class="video-text-18">JS8Call Vid 1 | Introduction, Install, Configure, First Tour</h2>
            <p class="video-text-44">Mama Kissy shares how the X39 patch transformed her health, boosting her energy, alleviating chronic pain, and enhancing her overall well-being. She highlights its natural, non-invasive approach and encourages others to try it for improved vitality and quality of life..</p>
            <p class="video-text-18"><strong>Note:</strong> This is a 38 minute video.</p>
        </div>
    </div>
    <hr>
    <div class="video-box">
        <a href="https://www.youtube.com/watch?v=koi3hA--YMw" target="_blank" rel="noopener noreferrer"><img src="img/js8call_vid2_jjs_2025-12.png"></a>
        <!--<iframe src="https://www.youtube.com/embed/XZPfBNgn-P0" title="JS8Call Vid 1 | Introduction, Install, Configure, First Tour" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        <div>
            <h2 class="video-text-18">JS8Call Vid 2 | Operation & Features</h2>
            <p class="video-text-44">Mama Kissy shares how the X39 patch transformed her health, boosting her energy, alleviating chronic pain, and enhancing her overall well-being. She highlights its natural, non-invasive approach and encourages others to try it for improved vitality and quality of life..</p>
            <p class="video-text-18"><strong>Note:</strong> This is a 27 minute video.</p>
        </div>
    </div>
    <hr>
    <div class="video-box">   
        <iframe width="560" height="315" class="shadow-video" src="https://www.youtube.com/embed/eE84BgTNSVA" title="Next-Level JS8CALL Features &amp; Updates" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div>
            <h2 class="video-text-18">Next-Level JS8CALL Features & Updates</h2>
            <p class="video-text-44">Mama Kissy shares how the X39 patch transformed her health, boosting her energy, alleviating chronic pain, and enhancing her overall well-being. She highlights its natural, non-invasive approach and encourages others to try it for improved vitality and quality of life..</p>
            <p class="video-text-18"><strong>Note:</strong> This is a 1 hour, and 30 minute video.</p>
        </div>
    </div>
    <hr>
</div>
</div>';


$html .= file_get_contents(__DIR__.'/../templates/footer.html');

echo $html;