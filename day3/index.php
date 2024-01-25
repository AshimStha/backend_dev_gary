<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3</title>
</head>

<body>

    <h1>PHP If Statements</h1>

    <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything
        outputs correctly:</p>

    <?php
    
    // Generate a random number (1, 2, or 3)
    $randomNumber = ceil(rand(1, 3));

    // Display the random number
    echo '<p>The random number is ' . $randomNumber . '.</p>';

    // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
    
    // The random number is 1, so use Codecademy
    if ($randomNumber == 1) {

        $linkName = 'Codecademy';
        $linkURL = 'https://www.codecademy.com/';
        $linkCTA = 'Codecademy';
        $linkImage = '';
        $linkDescription = 'Learn to code interactively, for free.';

    }

    // The random number is 2, so use W3Schools
    elseif ($randomNumber == 2) {

        $linkName = 'W3School';
        $linkURL = 'https://www.w3schools.com/';
        $linkCTA = 'W3Schools';
        $linkImage = 'images/w3schools.png';
        $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

    }

    // The random number is 3, so use MDN
    else {

        $linkName = 'Mozilla Developer Network';
        $linkURL = 'https://www.codecademy.com/';
        $linkCTA = 'Mozilla';
        $linkImage = 'images/mozilla.png';
        $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

    }

    // **************************************************
    
    // Beginning of the exercise, place all of your PHP code here
    // Upload this page (or use your localhost) and refresh the page, the h2 below will change
    echo "<h2>" . $linkName . "</h2>";
    //echo "<p>".$linkURL."</p>";
    if ($linkURL !== '') {
        echo "<a href=" . $linkURL . ">" . $linkURL . "</a>";
    } else {
        echo "<p>" . $linkCTA . "</p>";
    }
    echo "<img height=\"200px\" width=\"300px\" src=" . $linkImage . " alt-text=testing />";
    echo "<p>" . $linkDescription . "</p>";


    /**************************************************/
    // To mark students based on their random grades

    // Generate the grade between 0 and 100
    $random_grade = ceil(rand(0, 100));
    // Output the generated grade
    echo "<p><b>Your grade: " . $random_grade . "</b></p>";

    if ($random_grade <= 60) {
        echo "<p> FAILED : <strong>F</strong>, You need to focus on your studies!</p>";
    } else if ($random_grade <= 70) {
        echo "<p> PASS : <strong>D-</strong>, Still some room for improvements!</p>";
    } else if ($random_grade <= 75) {
        echo "<p> PASS : <strong>D</strong>, You are getting there, don't stop now!</p>";
    } else if ($random_grade <= 80) {
        echo "<p> PASS : <strong>C</strong>, You got this. It makes no sense stopping now!</p>";
    } else if ($random_grade <= 85) {
        echo "<p> PASS : <strong>B</strong>, You are going off well!</p>";
    } else if ($random_grade <= 90) {
        echo "<p> PASS : <strong>A</strong>, What to say? You had the potential.</p>";
    } else {
        echo "<p> PASS : <strong>A+</strong>, No words. Marvellous!</p>";
    }

    // ***************************************************

    // Generating a random number between 1 and 7
    $random_day = ceil(rand(1, 7));
    // Using switch for control
    switch ($random_day) {
        case 1:
            echo "<p> MONDAY : Time to work.</p>";
            break;
        case 2:
            echo "<p> TUESDAY : Not thinking about the weekend.</p>";
            break;
        case 3:
            echo "<p> WEDNESDAY : Halfway through!</p>";
            break;
        case 4:
            echo "<p> THURSDAY : Weekend, come to papa.</p>";
            break;
        case 5:
            echo "<p> FRIDAY : Mamma Miaaaa!</p>";
            break;
        case 6:
            echo "<p> SATURDAY : The club can't even handle me rn!</p>";
            break;
        case 7:
            echo "<p> SUNDAY : ohh s***, here we go again.</p>";
            break;
    }
    ?>

</body>

</html>