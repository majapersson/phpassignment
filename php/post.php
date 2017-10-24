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

require __DIR__.'\data.php';
require __DIR__.'\functions.php';

$posts[] = [
  'title' => $_POST['title'],
  'content' => $_POST['content'],
  'author' => [
    'id' => newAuthor($_POST['author'], $posts)['id'],
    'name' => $_POST['author'],
    'picture' => newAuthor($_POST['author'], $posts)['picture']
  ],
  'date' => time(),
  'likes' => random_int(0, 100),
];

file_put_contents(__DIR__.'/posts.json', json_encode($posts));

header("Location: ../index.php");
