<?php

  declare(strict_types=1);

  require __DIR__.'/php/data.php';
  require __DIR__.'/php/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/master.css">
  <title>The best blog ever!</title>
</head>
<body>
  <main>
    <section>
      <h1>Blog of Ricks</h1>

      <form action="/php/post.php" method="post">
        <input type="text" name="author" placeholder="Your name" />
        <input type="text" name="title" placeholder="Title" />
        <textarea name="content" rows="8" cols="80"></textarea>
        <input type="submit" name="post" value="POST" class="button" />
        <input type="reset" name="reset" value="RESET"class="button" />
      </form>
    </section>

    <?php
    usort($posts, 'sortByDate');

    foreach ($posts as $post): ?>

    <article>
      <h2>
        <?php echo $post['title'] ?>
      </h2>
      <img src="<?php echo $post['author']['picture'] ?>" class="profile">
      <h3>
        <?php echo getAuthor($post)['name'] ?>
      </h3>
      <time>
        <?php echo date('Y-m-d', $post['date']) ?>
      </time>
      <p>
        <?php echo $post['content'] ?>
      </p>
      <p>
        <img src="/images/like2.png">
        <?php echo $post['likes'] ?>
      </p>
    </article>

    <?php endforeach; ?>
  </main>
</body>
</html>
