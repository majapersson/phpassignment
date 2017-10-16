<?php require __DIR__.'\php\data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/master.css">
  <title>The best Rick and Morty Blog ever!</title>
</head>
<body>
  <main>
    <?php foreach ($posts as $post): ?>

      <article>
        <h2>
          <?php echo $post['title'] ?>
        </h2>
        <h3>
          <?php echo $post['author']['fullName'] ?>
        </h3>
        <time>
          <?php echo $post['date'] ?>
        </time>
        <p>
          <?php echo $post['content'] ?>
        </p>
        <p>Likes:
          <?php echo $post['likes'] ?>
        </p>

      </article>

    <?php endforeach; ?>
  </main>
</body>
</html>
