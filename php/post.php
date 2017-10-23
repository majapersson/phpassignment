<?php

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
    'id' => getAuthorId($_POST['author'], $posts),
    'name' => $_POST['author'],
  ],
  'date' => date('Y-m-d'),
  'likes' => random_int(0, 100),
];

var_dump($posts);
