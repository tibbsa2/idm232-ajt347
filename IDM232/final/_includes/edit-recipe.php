<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title = $_POST['title'];
$prep_time = $_POST['prep_time'];
$cook_time = $_POST['cook_time'];
$overview = $_POST['overview'];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];
$meal_type = $_POST['meal_type'];


// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET title = '{$title}', prep_time = '{$prep_time}', cook_time = '{$cook_time}', overview = '{$overview}' ingredients = '{$ingredients}', directions = '{$directions}', meal_type = '{$meal_type}' WHERE id = {$id}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin');
} else {
    $error_message = 'User was not updated';
    redirect_to('/admin/users?error=' . $error_message);
}