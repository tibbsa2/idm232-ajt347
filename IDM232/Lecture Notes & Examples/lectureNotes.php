WEEK 3

Topics
1.LOOPS (upload the recipes that were saved)
2.IF/SWITCH STATEMENTS (search engine stuff)
3.FUNCTIONS 

1. LOOPS

while, infinite loop of stuff until soemthing happens... 
while recipe loads is less than total recipes 
keep loading the recipes...else

for the total number of recipes upload.. load them all in the 'list'

everytime add is clicked, add a new object to the list... 

admin add recipes... 
submit a form to the storage place... 
total number of items in the list 
delete item to the list.... 
update values... 



<h1>Loops</h1>

    <h2>While Loops</h2>

    <p class="example">Example:</p>
    <?php

  $count = 0;
    // The while loop loops through a block of code as long as a specified condition is true.
    while ($count <= 10) {
        echo $count;
        echo '<br>';
        $count++; // increment by 1
    }
    ?>

    <p class="example">Example:</p>
    <?php
    $count = 0;
    while ($count <= 10) {
        if ($count == 5) {
            echo 'FIVE, ';
        } else {
            echo $count . ', ';
        }
        $count++; // increment by 1
    }
    ?>

    <p class="example">Example:</p>
    <ul>
        <?php
        $number = 0;
    while ($number <= 10) {
        echo "<li>{$number}: ";
        $number_is_even = $number % 2 == 0;
        if ($number_is_even) {
            echo 'is even';
        } else {
            echo 'is odd';
        }

        echo '</li>';
        $number++;
    }
    ?>
    </ul>

    <hr>

    <h2>For Loops</h2>

    <p class="example">Example:</p>
    <?php
    /**
     * The for statement creates a loop with 3 optional expressions:
     * Expression 1 is executed (one time) before the execution of the code block.
     * Expression 2 defines the condition for executing the code block.
     * Expression 3 is executed (every time) after the code block has been executed.
     */
    for (
        $count = 0; // Runs once
        $count <= 10; // defines the condition for executing the code block.
        $count++ // is executed (every time) after the code block has been executed.
    ) {
        echo $count . ', ';
    }
    ?>

    <p class="example">Example:</p>
    <ul>
        <?php
    for ($count = 0; $count <= 10; $count++) {
        echo '<li>';
        if ($count % 2 == 0) {
            echo "{$count} is even";
        } else {
            echo "{$count} is odd";
        }
        echo '</li>';
    }
    ?>
    </ul>

    <hr>

    USED OFTEN IN THE WILD BY THE PROFESSOR 
    <h2>Foreach Loops</h2>

    <p class="example">Example:</p>
    <?php
    $ages = [
        4, 8, 15, 16, 23, 42
    ];
    // This would have the data objects and it would print all of them, this makes things very easy....
    // has to be an array for the first like shown in the examples... 

    foreach ([4, 8, 15, 16, 23, 42] as $age) {
        echo "Age: {$age}<br>";
    }
    foreach ($ages as $age) {
        echo "Age: {$age}<br>";
    }

    foreach ($ages as $age) {
        if ($age >= 16) {
            echo "You can drive at $age <br>";
        } else {
            echo "You can't drive at $age <br>";
        }
    }
    ?>

    <hr>

    <h2>Review Loops (so far)</h2>

    <p class="example">Example:</p>
    <?php
    $ages = [4, 8, 15, 16, 23, 42];
    $i = 0;
    while ($i < count($ages)) {
        echo "Age: {$ages[$i]}<br>";
        $i++;
    }

    echo '<br>';

    for ($i = 0; $i < count($ages); $i++) {
        echo "Age: {$ages[$i]}<br>";
    }

    echo '<br>';

    foreach ($ages as $age) {
        echo "Age: {$age}<br>";
    }
    ?>

    <hr>

    <h2>Foreach Associative Arrays</h2>

    <p class="example">Example:</p>
    <?php
    $person = [
        'first_name' => 'Homer',
        'last_name' => 'Simpson',
        'address' => '742 Evergreen Terrace',
        'city' => 'Springfield'
    ];

    foreach ($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace('_', ' ', $attribute));
        echo "<b>{$attr_nice}</b>: {$data}<br>";
    }
    ?>

    <p class="example">Example:</p>
    <?php
    $prices = [
        'Brand New Computer' => 2000,
        '1 month of music' => 10,
        'Learning PHP' => null
    ];

    foreach ($prices as $item => $price) {
        echo "{$item}: ";
        if (is_int($price)) {
            echo '$' . $price;
        } else {
            echo 'priceless';
        }
        echo '<br>';
    }
    ?>

    <hr>

    <h2>Continue</h2>

    <p>Example:</p>
    <?php
    for ($count = 0; $count <= 10; $count++) {
        if ($count == 5) {
            continue;
        }
        echo $count . ', ';
    }
    ?>

    <hr>

    <h2>Break</h2>

    <p>Example:</p>
    <?php
    for ($count = 0; $count <= 10; $count++) {
        if ($count == 5) {
            break;
        }
        echo $count . ', ';
        // 1, 2, 3, 4
    }
    ?>


2. If Else 
(where to use if in project? maybe for the direction section piece to check for duplicates, echo out duplicate is found in
or for the serach forms as well... 
for the breakfast, lunch and dinner piece)

use switch if you go beyond 2 else ifs

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>If / Else</title>
</head>

<body>
    <?php
    $a = 3;
    $b = 4;

    if ($a > $b) {
        echo 'a is larger than b';
    } elseif ($a < $b) {
        echo 'a is smaller than b';
    } else {
        echo 'a is equal to b';
    }

    $a = 4;
    $b = 4;
    if ($a >= $b) {
        echo 'a is larger than b';
    } elseif ($a < $b) {
        echo 'a is smaller than b';
    } elseif ($a == $b) {
        echo 'a is equal than b';
    } else {
        echo 'other';
    }

    $user_logged_in = false;
    if ($user_logged_in) {
        echo 'Hello, user';
    } else {
        echo 'Hello, guest';
    }

    $user_logged_in = true;
    if (!$user_logged_in) {
        echo 'You can not access this page. Please go to home page';
    }

    if ($a >= $b) {
        echo 'a is larger than b';
    } elseif ($a < $b) {
        echo 'a is larger than b';
    } elseif ($a === 0) {
        echo 'a is smaller than b';
    } else {
        echo 'a is equal to b';
    }
    ?>



SWITCH STATEMENTS: not used often 
Make sure to break so it doesn't echo everything line after it 
<?php
    $a = 2;
    switch ($a) { // 3 pass in variable 
        case 0:
            echo 'a equals 0';
            // no break
        case 1:
            echo 'a equals 1';
            // no break
        case 2:
            echo 'a equals 2';
            // no break
        case 3:
            echo 'a equals 3';
            // no break
        case 4:
            echo 'a equals 4';
            // no break
        case 5:
            echo 'a equals 5';
    }
    ?>

    <hr>

    <?php
    $staff_role = 'teacher';

    switch ($staff_role) {
        case 'student':
            echo 'Hello, admin';
            break;
        case 'teacher':
        case 'school staff':
        case 'district leader':
            echo 'Show admin view';
            break;
        default:
            echo 'Hello, guest';
    }

    $month = 5;
    switch ($month) {
        case 0:
            $zodiac = 'Rat';
            break;
        case 1:
            $zodiac = 'Ox';
            break;
        case 2:
            $zodiac = 'Tiger';
            break;
        case 3:
            $zodiac = 'Rabbit';
            break;
        case 4:
            $zodiac = 'Dragon';
            break;
        case 5:
            $zodiac = 'Snake';
            break;
        case 6:
            $zodiac = 'Horse';
            break;
        case 7:
            $zodiac = 'Goat';
            break;
        case 8:
            $zodiac = 'Monkey';
            break;
        case 9:
            $zodiac = 'Rooster';
            break;
        case 10:
            $zodiac = 'Dog';
            break;
        case 11:
            $zodiac = 'Pig';
            break;
    }
    echo "$zodiac";
    ?>

    <hr>

    <?php
      $user_type = 'customer';

    switch ($user_type) {
        case 'student':
            echo 'Welcome!';
            break;
        case 'press':
        case 'customer':
        case 'admin':
            echo 'Hello!';
            break;
    }
    ?>
</body>

</html>