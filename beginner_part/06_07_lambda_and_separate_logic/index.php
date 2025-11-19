<?php
        // lets declare an simple array
$goods_list = ["bread", "milk", "apples", "eggs"];
        
// it is a associative array
$books = [
    [
        "name" => "Do Androids Dream of Electric Sheep?",
        "author" => "Philip K. Dick",
        "purchaseUrl" => "https://example.com/androids-dream",
        "release_year" => 1969
    ],
    [
        "name" => "Project Hail Mary",
        "author" => "Andy Weir",
        "purchaseUrl" => "https://example.com/hail-mary",
        "release_year" => 2011
    ],
    [
        "name" => "Martian",
        "author" => "Andy Weir",    
        "purchaseUrl" => "https://example.com/martian",
        "release_year" => 2021
    ]
];
/*function filterByAuthor($books_array, $author): array{
    $filteredByAuthor = [];
    foreach($books_array as $book){
        if($book['author'] === $author){
            $filteredByAuthor[] = $book;
        }
    }
    return $filteredByAuthor;
}*/

$filterCallbackByYear = function($book):bool {
    return $book["release_year"] > 1965 && $book["release_year"] <=2015;
};

$filteredByAuthor = array_filter($books, $filterCallbackByYear);

require "index.view.php";