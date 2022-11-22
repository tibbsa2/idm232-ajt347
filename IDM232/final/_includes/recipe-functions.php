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
function edit_recipes($title, $prep_time, $cook_time, $overview, $ingredients, $directions, $meal_type, $id)
{
    global $db_connection;
    $query = 'UPDATE recipes';
    $query .= " SET title = '{$title}', prep_time = '{$prep_time}', cook_time = '{$cook_time}', overview = '{$overview}', ingredients = '{$ingredients}', directions = '{$directions}', meal_type = '{$meal_type}'";
    $query .= " WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

// DELETE RECIPE 
function delete_recipes_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM recipes WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

// GET RECIPE
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes';
    $result = mysqli_query($db_connection, $query);
    return $result;
}