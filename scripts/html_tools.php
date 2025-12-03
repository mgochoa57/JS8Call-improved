<?php
function build_welcome_message()
{
    // URL of the raw version.txt file
        $url = "https://github.com/JS8Call-improved/JS8Call-improved/releases/download/release%2F2.4.0/version.txt";

    // Try to fetch the version file
        $version = file_get_contents($url);

    // If it fails, assign a default version
        if ($version === false) {
            $version = "2.X.X";
        } else {
            $version = trim($version);
        }
    $data = <<<EOT
    <div class="outer-box">
      <div class="inner-box">
        <h1 style="margin-top:0; font-family:'Roboto Slab', serif; color: maroon;  font-size:32px;">Welcome to JS8Call-Improved</h1>
        <p style="font-size:16px; line-height:1.5;">
          JS8Call-Improved is a community-driven evolution of JS8Call, bringing modern features,
          active development, and long-term support to HF digital communication. It’s fully
          compatible with existing JS8Call versions while<br> adding new capabilities and refinements.
        </p>
    
        <h2 style="font-family:'Roboto Slab', serif; font-size:24px; margin-top:24px;">
          Now Available: Version $version</h2> 
          <span class="roboto"><strong>Release Date:</strong> November 2, 2025</span>
        
        <p style="font-size:16px; line-height:1.5;">
          Download the latest JS8Call-Improved release from our GitHub repository:
          <br>
          <a href="https://github.com/JS8Call-improved/JS8Call-improved/releases/latest"
             style="font-weight:bold; text-decoration:none; color:#0000ee;">
            https://github.com/JS8Call-improved/JS8Call-improved
          </a>
        </p>
    
        <p style="margin-top:16px; font-size:16px;">
          Comments, questions, or suggestions? Email:
          <br>
          <a href="mailto:js8call-improved@proton.me"
             style="text-decoration:none; color:#0000ee;">
            js8call-improved@proton.me
          </a>
        </p>
      </div>
    </div>
EOT;

    return $data;
}
