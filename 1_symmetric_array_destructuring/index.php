<?php

// Example 1
$book = ['The Title', 'Najibu Nsubuga'];

// list($title, $author) = $book; // Old way
[$title, $author] = $book; // New way

// Example 2
$book2 = ['title' => 'The Title', 'author' => 'Najibu Nsubuga'];

['title' => $title, 'author' => $author] = $book2;

// var_dump($title, $author);

// Example 3
$books = [
    ['title' => 'The Martian', 'author' => 'Andy Weir'],
    ['title' => 'Harry Porter', 'author' => 'JK Rowling'],
];

// ['title' => $book, 'author' => $author] = $books[0];

foreach ($books as ['title' => $title, 'author' => $author]) {
    var_dump($title, $author);
}
