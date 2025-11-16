<section>
    <h2>Welcome to JS8Call-Improved</h2>
    <p>This is the unofficial community hub for JS8Call-Improved:
       downloads, documentation, training, and more.</p>

    <h3>Latest Releases</h3>
    <ul>
        <?php foreach ($releases as $release): ?>
            <li>
                <strong><?= htmlspecialchars($release['version']) ?></strong>
                – <?= htmlspecialchars($release['description']) ?>
                – <a href="<?= htmlspecialchars($release['download_url']) ?>">Download</a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
