<!doctype html>
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

    <ul>
        <?php foreach ($filteredBooks as $book): ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['release year'] ?>)- By <?= $book['author'];?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

    <h1>
        <?= $business['name']?>
    </h1>
    
    <ul>
        <?php foreach ($business['categories'] as $category): ?>
            <li><?= $category; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>