<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../app.php';
$page_title = 'REPLACE ME';
include_once __DIR__ . '/../_components/header.php';
?>
<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'User does not exist';
    redirect_to('/adminHome.php?error=' . $error_message);
}

?>

<main>
        <form class="editRecipeContainer" action="<?php echo site_url(); ?>/_includes/process-edit-recipe.php" method="POST">
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="TitleInput">Title:</label>
                <input value="<?php echo $recipe['title']?>" class="AdminInputBox" type="text" name="title" id="TitleInput">
            </div>
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="ImgInput">Image:</label>
                <input type="file" name="ImgInput" id="ImgInput"><!-- must be a png or jpg -->
            </div>
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="PrepTimeInput">Prep Time:</label>
                <input value="<?php echo $recipe['prep_time']?>" class="AdminInputBox" type="number" name="prep_time" id="PrepTimeInput"><!-- Must be a number -->
            </div>
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="CookTimeInput">Cook Time:</label>
                <input value="<?php echo $recipe['cook_time']?>" class="AdminInputBox" type="number" name="cook_time" id="CookTimeInput"><!-- Must be a number -->
            </div>
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="OverviewDescriptionInput">Overview Description:</label>
                <textarea id="overview" name="overview" rows="3" cols="50" class="textarea">
                <?php echo $recipe['overview']?>
                </textarea>
            </div>
            <!-- Containers will front end outputs -->
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddIngredients">Ingredients:</label>
                <!-- <input class="AdminInputBox" type="Text" name="AddIngredients" id="AddIngredients"> -->
                <textarea id="ingredients" name="ingredients" rows="3" cols="50" class="textarea">
                <?php echo $recipe['ingredients']?>
                </textarea>
                <!-- <button class="buttonChangePosition">Add Ingredients</button> -->
                </div>
            </div>
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddDirections">Directions:</label>
                <textarea id="directions" name="directions" rows="3" cols="50" class="textarea">
                <?php echo $recipe['directions']?>
                </textarea>
                </div>
            </div>
            <fieldset> <!-- Style this field set to look nice-->
                <legend>Meal Type:</legend>
                    <div class="AdminInputStyling">
                        <input type="radio" name="meal_type" <?php echo $recipe['meal_type'] === 'breakfast' ? 'checked' : ''; ?> id="breakfast" value="breakfast">
                        <label for="breakfast">Breakfast</label>
                        <input type="radio" name="meal_type" <?php echo $recipe['meal_type'] === 'lunch' ? 'checked' : ''; ?> id="lunch" value="lunch">
                        <label for="lunch">Lunch</label>
                        <input type="radio" name="meal_type" <?php echo $recipe['meal_type'] === 'dinner' ? 'checked' : ''; ?> id="dinner" value="dinner">
                        <label for="dinner">Dinner</label>
                    </div>
            </fieldset>
            <div class="buttonsContainerAddDelete">
            <button class="adminDelete"><a href="<?php echo site_url() . "/_includes/delete-recipe.php?id={$recipe['id']}"; ?>">Delete</a></button>
            <input type="hidden" name="id" value="<?php echo $recipe['id']; ?>">
            <button class="adminSubmit">Update</button>
            </div>
        </form>
        <!-- END OF FORM/START OF SUBMIT BUTTONS-->
</main>



<?php include_once __DIR__ . '/../_components/footer.php';