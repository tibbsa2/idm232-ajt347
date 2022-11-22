<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Recipes';
include_once __DIR__ . '/../../_components/header.php';
$services = get_recipes();

// Check if search exist in query
if (isset($_GET['search'])) {
    $recipe_search = $_GET['search'];
} else {
    $recipe_search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE title LIKE '%{$search}%'";
$query .= " OR prep_time LIKE '%{$search}%'";
$query .= " OR cook_time LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipe_results = true;
} else {
    $recipe_results = false;
}
