<?php
//$html = file_get_contents('test.html');
$html = file_get_contents(__DIR__.'/../templates/header.html');

$html .= '<!-- Background Video -->

  <video id="bg-video" autoplay muted loop playsinline>
    <source src="img/2K_Tech_Globe_green-slow.mp4" type="video/mp4">
  </video>
<div id="video-overlay"></div>';

$html .= file_get_contents(__DIR__.'/../templates/logo-div.html');
$html .= file_get_contents(__DIR__.'/../templates/menu-div.html');
$html .= file_get_contents(__DIR__.'/../templates/hero-div.html');
$html .= file_get_contents(__DIR__ . '/../templates/features-div.html');
$html .= file_get_contents(__DIR__.'/../templates/footer.html');

echo $html;