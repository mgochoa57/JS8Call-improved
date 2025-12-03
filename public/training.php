<?php
include '../scripts/html_tools.php';

$html = file_get_contents(__DIR__.'/../templates/header.html');
$html .= file_get_contents(__DIR__.'/../templates/logo-div.html');
$html .= file_get_contents(__DIR__.'/../templates/menu-div.html');

$html .= '<div class="features-outer-box">
    <div class="features-inner-box">
    

    <div class="video-box">
        <a href="https://www.youtube.com/watch?v=XZPfBNgn-P0"><img src="img/js8call_vid1_jjs_2025-12.png" width="400"></a>
        <!--<iframe src="https://www.youtube.com/embed/XZPfBNgn-P0" title="JS8Call Vid 1 | Introduction, Install, Configure, First Tour" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        <div>
            <h2 class="video-text-18">JS8Call Vid 1 | Introduction, Install, Configure, First Tour</h2>
            <p class="video-text-44">Mama Kissy shares how the X39 patch transformed her health, boosting her energy, alleviating chronic pain, and enhancing her overall well-being. She highlights its natural, non-invasive approach and encourages others to try it for improved vitality and quality of life..</p>
            <p class="video-text-18"><b>Note:</b> This is a 10 minute video.<span class="right-align">Download X39 product brochure: <a href="media/X39_product_brochure.pdf" target="_blank">X39 Product Brochure</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
        </div>
    </div>
    <hr>
    <div class="video-box">
        <a href="https://www.youtube.com/watch?v=XZPfBNgn-P0"><img src="img/js8call_vid2_jjs_2025-12.png"></a>
        <!--<iframe src="https://www.youtube.com/embed/XZPfBNgn-P0" title="JS8Call Vid 1 | Introduction, Install, Configure, First Tour" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        <div>
            <h2 class="video-text-18">JS8Call Vid 2 | Operation & Features</h2>
            <p class="video-text-44">Mama Kissy shares how the X39 patch transformed her health, boosting her energy, alleviating chronic pain, and enhancing her overall well-being. She highlights its natural, non-invasive approach and encourages others to try it for improved vitality and quality of life..</p>
            <p class="video-text-18"><b>Note:</b> This is a 10 minute video.<span class="right-align">Download X39 product brochure: <a href="media/X39_product_brochure.pdf" target="_blank">X39 Product Brochure</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
        </div>
    </div>
    <hr>
</div>
</div>';


$html .= file_get_contents(__DIR__.'/../templates/footer.html');

echo $html;