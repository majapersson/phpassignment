<?php

declare(strict_types=1);

// This file is for all functions

function getUser(array $post): array {
  return $post['author'];
}

function getPublishDate(array $post): string {
  return $post['date'];
}
