<?php
include_once __DIR__ . '/../app.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}

// $id = $_POST['id'];
// get users data from database
$result = delete_recipes_by_id($id);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/adminHome.php');
} else {
    $error_message = 'Could Not Delete Recipe';
    redirect_to('/adminHome.php?error=' . $error_message);
}