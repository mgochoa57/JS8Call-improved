<?php

// app/Template.php

function render_template(string $template, array $data = []): void
{
    // Make $data keys available as variables in the template
    extract($data);

    // Every page gets wrapped in layout.php
    include __DIR__ . '/../templates/layout.php';
}