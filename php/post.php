<?php

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
    'id' => getNewAuthor($_POST['author'], $posts)['id'],
    'name' => $_POST['author'],
    'picture' => getNewAuthor($_POST['author'], $posts)['picture']
  ],
  'date' => date('Y-m-d'),
  'likes' => random_int(0, 100),
];

file_put_contents(__DIR__.'/posts.json', json_encode($posts));

header("Location: ../index.php");
