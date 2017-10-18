<?php

declare(strict_types=1);

// This file is for all functions

// TO DO:
// - Open file
// - Read from file
// - Write to file
//   - If author exists, add existing ID and picture, else add new ID and default picture
// - Add Like-function

function getAuthor(array $post): array {
  return $post['author'];
}

function sortByDate($firstPost, $secondPost) {
  return $firstPost['date'] < $secondPost['date'];
}
