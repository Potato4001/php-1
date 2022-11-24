<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>

    body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }


  </style>
</head>
<body>

	<h1> 
    <?php 
    $greeting = "Hello";
    echo $greeting . " " .  "World"; ?> </h1>

    <?php

      // Variablen
      $name = "Dark Matter";
      $read = true;

      // Conditionals and Booleans
      if ($read)
      {
        $message = "You have read $name";
      } else {
        $message = "You have NOT read $name";
      }
    ?>
  </h1>  

  <h1>

    <?= $message?>

  </h1>

  <!--Arrays -->
  <h1>
    Recommended Books
  </h1>

  <?php
    $books = [
      "Do Androids Dream of Electric Sheep",
      "The Langoliers",
      "Hail Mary"
    ];
  ?>

  <ul>

    <!-- loop-->
    <?php foreach($books as $book) {
      echo "<li>{$book}€</li>";
    }
    ?>

    <?php foreach($books as $book) : ?>
      <li><?= $book ?></li>
    <?php endforeach; ?>
  </ul>

  <!-- Associative Arrays-->
  <p>
    <?= $books[2] ?>
  </p>

  <?php
    $buch = [
      [
        'name' => 'Do Androids Dream of Electric Sheep',
        'release year' => 2010,
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'http://example.com'
      ],

      [
        'name' => 'Project Hail Mary',
        'release year' => 2020,
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com'
      ]

    ];
    //function
    function filterByAuthor($buch, $author)
    {
      $filteredBooks = [];

      foreach ($buch as $book)
      {
        if ($book['author'] === $author)
        {
          $filteredBooks[] = $book;
        }
      }
      return $filteredBooks;
    }
  ?>

  <ul>

    <?php foreach ($buch as $book): ?>
    <li>
      <a href = "<?= $book['purchaseUrl']?>">
        <?= $book['name']; /* (<?= $book['release year'] ?>*/?>
        <?= $book['release year']; ?>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>

  <!-- Conditional-->
  

  <ul>
    <?php foreach (filterByAuthor($buch,'Andy Weir') as $book): ?>
      <li>
        <a href = "<?= $book['purchaseUrl']?>">
          <?= $book['name']; /* (<?= $book['release year'] ?>*/?>
          <?= $book['release year']; ?>- By <?= $book['author'];?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <?php
    $filme = [
      [
        'name' => 'Star Wars: Die dunkle Bedrohung',
        'release year' => 2001
      ],

      [
        'name' => 'Star Wars: Eine neue Hoffnung',
        'release year' => 1976
      ]


    ];

    // function
    function filterByName($filme, $name)
    {
      $filteredFilme = [];

      foreach ($filme as $films)
      {
        if($films['name'] === $name)
        {
          $filteredFilme [] = $films;
        }
      }
      return $filteredFilme;
    }
  ?>
  <ul>
    <?php foreach (filterByName($filme,'Star Wars: Die dunkle Bedrohung') as $films): ?>
      <li>
          <?= $films['release year']; ?>- called <?= $films['name'];?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <!-- lambda functions-->

  <?php
    $pleb = [
      [
        'name' => 'Square',
        'year' => 1342,
        'regional' => 'yes'
      ]


    ];

    function filter($items, $key,$value)
    {
      $filtereditems = [];

      foreach ($items as $item)
      {
        if($item[$key] === $value){
          $filtereditems[] = $item;
        }
      }

      return $filtereditems;
    }

    $filtereditems = filter($pleb, 'year', 1342);
  ?>  
  

</body>
</html>