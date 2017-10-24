<?php

declare(strict_types=1);

// This file is for all functions

// TO DO:
// - Add Like-function

function getAuthor(array $post): array {
  // Returns author-array for existing author
  return $post['author'];
}

function sortByDate($firstPost, $secondPost) {
  // Sorts posts by date published
  return $firstPost['date'] < $secondPost['date'];
}

function newAuthor(string $authorName, array $posts):array {
  // Checks new author name against existing authors
  // If author exists, returns author, else returns new ID and default profile picture
  $newId = 0;
  foreach($posts as $post){
    if ($post['author']['id'] > $newId){
      // ID-counter
      $newId = $post['author']['id'];
    }
    if ($authorName === $post['author']['name']){
      return $post['author'];
    }
  }
  return ['name' => $authorName, 'id' => ++$newId,'picture' => 'images/default.png'];
}
