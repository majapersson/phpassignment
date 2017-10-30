<?php

declare(strict_types=1);

// This file is for writing new posts to posts.json
// Every $post contains title, content, author (with name, ID and profile picture), date published and number of likes

//   [
//     'title' => '',
//     'content' => '',
//     'author' => [
//       'id' => '',
//       'name' => '',
//       'picture' => '',
//     ],
//
//     'date' => '',
//     'likes' => '',
//   ],

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

$posts[] = [
  'title' => filter_var($_POST['title'], FILTER_SANITIZE_STRING),
  'content' => filter_var($_POST['content'], FILTER_SANITIZE_STRING),
  'author' => [
    'id' => newAuthor($_POST['author'], $posts)['id'],
    'name' => filter_var($_POST['author'], FILTER_SANITIZE_STRING),
    'picture' => newAuthor($_POST['author'], $posts)['picture']
  ],
  'date' => time(),
  'likes' => random_int(0, 100),
];

file_put_contents(__DIR__.'/posts.json', json_encode($posts));

header("Location: ../index.php");
