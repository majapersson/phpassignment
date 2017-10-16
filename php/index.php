<?php require __DIR__.'\data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php foreach ($posts as $post): ?>

    <div>
      <h1>
        <?php echo $post['title'] ?>
      </h1>
      <h2>
        <?php echo $post['author']['fullName'] ?>
      </h2>
      <time>
        <?php echo $post['date'] ?>
      </time>
      <p>
        <?php echo $post['content'] ?>
      </p>
      <p>Likes:
        <?php echo $post['likes'] ?>
      </p>

    </div>

  <?php endforeach; ?>
</body>
</html>
