<!doctype html>
<html>

<head>
  <title>PHP and For Loops</title>
</head>

<body>

  <h1>PHP and For Loops</h1>

  <p>Use PHP echo, if statements, and loops to output all three links.</p>


  <?php

  // **************************************************
  // Do not edit this code
  
  // Define a multi dimensional array to store all of the links
  $links = array(
    0 => array(
      'name' => 'Codecademy',
      'url' => 'https://www.codecademy.com/',
      'image' => '',
      'description' => 'Learn to code interactively, for free.'
    ),
    1 => array(
      'name' => '',
      'url' => 'https://www.w3schools.com/',
      'image' => 'w3schools.png',
      'description' => 'W3Schools is optimized for learning, testing, and training.'
    ),
    2 => array(
      'name' => 'Mozilla Developer Network',
      'url' => 'https://www.codecademy.com/',
      'image' => 'mozilla.png',
      'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.'
    )
  );

  // **************************************************
  
  // Loop through the array and display the link information
  for ($i = 0; $i < count($links); $i++) {
    if ($links[$i]['name'] !== '' ) {
      echo '<h1>Name: ' . $links[$i]['name'] . '</h1>';
    }
    else {
      echo '<h1>Name: <p style="color:red;">Name doesn\'t exist!</p></h1>';
    }

    echo '<h2>URL: ' . $links[$i]['url'] . '</h2>';

    if($links[$i]['image'] !== '') {
      echo '<img src=' . $links[$i]['image'] .' height=\'200px\' width=\'200px\' <br/>';
    }
    else {
      echo '<h3 style="color:red;">Image doesn\'t exist!</h3> <br/>';
    }
    echo '<p>Description: ' . $links[$i]['description'] . '<p>';
  }

  // Use the print_r function to view the contents of the array
  // echo '<pre>';
  // print_r($links);
  // echo '</pre>';

  ?>

</body>

</html>