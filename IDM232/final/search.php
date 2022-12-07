<?php
include_once __DIR__ . '/app.php';
$page_title = 'Search';
include_once __DIR__ . '/_components/header.php';

// Check if search exist in query
if (isset($_GET['search'])) {
    $recipe_search = $_GET['search'];
} else {
    $recipe_search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE title LIKE '%{$recipe_search}%'";
$query .= " OR prep_time LIKE '%{$recipe_search}%'";
$query .= " OR cook_time LIKE '%{$recipe_search}%'";
$query .= " OR ingredients LIKE '%{$recipe_search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipe_results = true;
} else {
    $recipe_results = false;
}
?>
 <?php
        // If no results, echo no results
        if (!$recipe_results) {
            echo '<p>No results found</p>';
        }
?>

<?php

    // If we have results, show them
      if ($recipe_results) {
           include __DIR__ . '/_components/recipeListing.php';
      }
?>
<?php include  __DIR__ . '/_components/footer.php';?>