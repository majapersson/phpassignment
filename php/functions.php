<?php

declare(strict_types=1);

// This file is for all functions

// TO DO:
//   - If author exists, add existing ID and picture, else ADD NEW ID and default picture
// - Add Like-function

function getAuthor(array $post): array {
  // Returns author-array for existing author
  return $post['author'];
}

function sortByDate($firstPost, $secondPost) {
  // Sorts posts by date published
  // TO DO:
  // Sort by time() instead of date
  return $firstPost['date'] < $secondPost['date'];
}

function newAuthor(string $authorName, array $posts):array {
  // Checks new author name against existing authors
  // If author exists, returns author, else returns new ID and default profile picture
  $newId = 0;
  foreach($posts as $post){
    if ($post['author']['id'] > $newId){
      $newId = $post['author']['id'];
    }
    if ($authorName === $post['author']['name']){
      return $post['author'];
    }
  }
  // $newId++; // Add new id
  return ['name' => $authorName, 'id' => ++$newId,'picture' => 'images/default.png'];
}
