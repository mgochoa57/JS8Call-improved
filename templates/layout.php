<?php
// templates/layout.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? 'JS8Call-Improved') ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/partial_header.php'; ?>

    <main>
        <?php
        // $view is the page template
        if (!empty($view)) {
            include __DIR__ . '/' . $view;
        }
        ?>
    </main>

    <?php include __DIR__ . '/partial_footer.php'; ?>
</body>
</html>