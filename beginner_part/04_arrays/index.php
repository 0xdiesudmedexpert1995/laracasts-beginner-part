<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First tag</title>
</head>
<body>
    <?php 
        // lets declare an simple array
        $goods_list = ["bread", "milk", "apples", "eggs"];
    ?>
    <!-- Let's show its elements by foreach -->
     <ul>
        <?php foreach($goods_list as $good): ?>
            <li><?=$good?></li>
        <?php endforeach?>
    </ul>
            
    <?php 
        // it is a associative array
        $books = [
        [
            "name" => "Do Androids Dream of Electric Sheep?",
            "author" => "Philip K. Dick",
            "purchaseUrl" => "https://example.com/androids-dream"
        ],
        [
            "name" => "Project Hail Mary",
            "author" => "Andy Weir",
            "purchaseUrl" => "https://example.com/hail-mary"
        ]
    ];
    ?>
    <?php foreach($books as $book): ?>
        <li>
            <?= $book["name"]?> by <?= $book["author"]?>
            <a href="<?= $book['purchaseUrl'] ?>">Buy here</a>
        </li>
    <?php endforeach;?>
    
</body>
</html>