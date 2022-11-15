<?php
function add_recipes($title, $prep_time, $cook_time, $overview, $ingredients, $directions, $meal_type)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (title, prep_time, cook_time, overview, ingredients, directions, meal_type )';
    $query .= " VALUES ('$title', '$prep_time', '$cook_time', '$overview', '$ingredients', '$directions', '$meal_type')";
    
    $result = mysqli_query($db_connection, $query);
    return $result;
}

// EDIT RECIPE 

// DELETE RECIPE 