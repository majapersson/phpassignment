<?php

declare(strict_types=1);

// This file is for all functions

// TO DO:
// - Open file
// - Read from file
// - Write to file
// - Add Like-function

function getAuthor(array $post): array {
  return $post['author'];
}

function sortByDate($firstPost, $secondPost) {
  return $firstPost['date'] < $secondPost['date'];
}
