<body>
    <h1>News</h1>
    <!-- <ul> -->
    <?php if (!empty($news) && is_array($news)) : ?>
        
        <?php foreach ($news as $item) : ?>
            <h2><?= $item['title'] ?></h2>
            <p><?= $item['body'] ?></p>
            <p>
                <?= anchor('news/'.$item['slug'], 'Details'); ?>                
            </p>
            <hr>
        <?php endforeach; ?>
    <?php else : ?>
        <h3>No News</h3>

        <p>Unable to find any news for you.</p>

    <?php endif ?>

    <?= anchor('pages/create','Add Article') ?>
    <!-- </ul> -->
