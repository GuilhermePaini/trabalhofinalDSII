<body>
    <?php if (!empty($news)) : ?>
        <h3><?= $news['title'] ?> </h3>
        <p><?= $news['body'] ?></p>
    <?php endif; ?>
    
    <?= anchor(previous_url(), 'Voltar') ?>                

    <!-- </ul> -->
</body>

</html>