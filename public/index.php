<?php
$html = file_get_contents(__DIR__.'/../templates/header.html');
$html .= '<h1>Welcome to the JS8Call-Improved Website</h1><hr>';

$html .= '<div style="width: 840px;"><img src="img/js8call-2025-11-16.png" width="800" alt="JS8Call Improved Screenshot">
';

$html .= '<p>Download Version 2.4.0 <a href="https://github.com/JS8Call-improved/JS8Call-improved">Click Here</a></p>';
$html .= '<p>Comments, questions or suggestions? Email js8call-improved @ proton.me';
$html .= '<p></p><b>NOTE:</b> This website is currently under development. More content will be published soon.<br>
<h2>Comming Soon</h2>
<ul>
<li>Additional Resources</li>
<li>Blog Posts</li>
<li>Community Forum</li>
<li>Training Videos</li>
<li>Updated Documentation</li>
<li>And Much More...</li>
</ul>';
$html .= '</div>';



$html .= file_get_contents(__DIR__.'/../templates/footer.html');
echo $html;