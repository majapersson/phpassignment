<?php

declare(strict_types=1);

// This file is for all functions

function getAuthor(array $post): array {
  return $post['author'];
}

function sortByDate($firstPost, $secondPost) {
  return $firstPost['date'] < $secondPost['date'];
}

usort($posts, 'sortByDate');
