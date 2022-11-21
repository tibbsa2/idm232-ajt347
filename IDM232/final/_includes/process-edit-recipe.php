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
$id = $_POST['id'];


// Create a SQL statement to insert the data into the database
$result = edit_recipes($title, $prep_time, $cook_time, $overview, $ingredients, $directions, $meal_type, $id);
// var_dump($query);
// die;
// Run the SQL statement

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/adminHome.php');
} else {
    $error_message = 'User was not updated';
    redirect_to('/adminHome.php?error=' . $error_message);
}