<?php

declare(strict_types=1);

$file = file_get_contents(__DIR__.'/posts.json');

$posts = json_decode($file, true);
