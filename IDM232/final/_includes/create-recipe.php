<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title = $_POST['title'];
$prep_time = (int)$_POST['prep_time'];
$cook_time = (int)$_POST['cook_time'];
$overview = $_POST['overview'];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];
$meal_type = $_POST['meal_type'];


$result = add_recipes($title, $prep_time, $cook_time, $overview, $ingredients, $directions, $meal_type);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/adminHome.php');
} else {
    $error_message = 'Sorry there was an error creating the user';
    redirect_to('/admin/services?error=' . $error_message);
} // redirect to the main page where all the recipes are listed. 