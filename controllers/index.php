    <?php
    $books = [
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
    
    $filteredBooks = array_filter($books,function($book){
      return $book['release year'] >= 1950 && $book['release year']<=2020;
    });

    $business = [
      'name' => 'Laracasts',
      'cost' => 15,
      'categories' => ["Testing","PHP", "JavaScript"]
    ];

    function register($user) {
      // Create the user record in the db.
      // Log them in.
      // Send a welcome email.
      // Redirect to their new dashboard.
    }


    $heading = "Home";


  require "views/index.view.php";