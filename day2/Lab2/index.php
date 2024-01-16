<!doctype html>
<html>

<head>

  <title>PHP and Creating Output</title>

</head>

<body>

  <!-- Notes -->

  <!-- You can also discard the ending closing tag and also have the option to use the semi-colon at the end of a code line. -->

  <!-- The modification was made in the php.ini folder of the php folder version 8.1.0 for the display_error option. It was already On. -->

  <?php echo '<h1>PHP and Creating Output</h1>'; ?>

  <?php echo '<p>The PHP echo command can be used to create output.</p>'; ?>

  <?php echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>'; ?>

  <?php echo '<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>';
  ?>

  <?php echo '<h2>More HTML to Convert</h2>'; ?>

  <?php echo '<p>PHP says "Hello World!"</p>'; ?>

  <?php echo '<p>Can you display a sentence with \' and "?</p>'; ?>

  <?php echo '<img src="./images/php-logo.png">'; ?>

  <!-- To use an image link in php -->
  <img src="<?php echo 'https://placehold.co/600x400' ?>" alt="">


  <!-- Variables -->

  <?php
  $linkName = 'Codecademy';
  $linkURL = 'https://www.codecademy.com/';
  $linkImage = 'codecademy.png';
  $linkDescription = 'Learn to code interactively, for free';
  ?>

  <?php echo $linkName; ?>

  <!-- Concatenation in php -->

  <!-- Use of anchor tag -->
  <a href="<?php echo $linkURL ?>">
    <?php echo '<p>' . $linkName . '</p>' ?>
  </a>

  <img src="./images/<?php echo $linkImage ?>" alt="Logo Image">

  <?php echo '<p>' . $linkDescription . '</p>'; ?>


  <!-- PHP arrays -->

  <!-- First method -->
  <?php
  $person['first'] = "Ashim";
  $person["second"] = "Shrestha";

  echo '<p>Hello, ' . $person["first"] . ' ' . $person["second"] . '.</p>';
  ?>


  <!-- Second method -->
  <?php
  $languages = array('English', 'Nepali', 'Hindi', 'Tagalog');

  echo '<p>I am from Nepal so, I speak ' . $languages[1] . ' language.</p>';
  ?>

  <!-- Third method -->
  <?php
  $person['name'] = "Steve";
  $person['age'] = 23;
  $person['address'] = "Pefferlaw Circle";

  echo '<p>His name is ' . $person['name'] . ' and is ' . $person['age'] . ' years old. He lives in ' . $person['address'] . '.</p>';
  ?>

</body>

</html>