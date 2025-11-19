<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtering and separate</title>
</head>
<body>
    <!-- Its view, separated from core logic -->
    <!-- Let's show its elements by foreach -->
     <ul>
        <?php foreach($goods_list as $good): ?>
            <li><?=$good?></li>
        <?php endforeach?>
    </ul>

    <ul>
    <?php foreach($filteredByAuthor as $book): ?>
        <li>
            <?= $book["name"]?> by <?= $book["author"]?>, <?= $book["release_year"]?>
            <a href="<?= $book['purchaseUrl'] ?>">Buy here</a>
        </li>
        <?php endforeach;?>
            
    </ul>
</body>
</html>