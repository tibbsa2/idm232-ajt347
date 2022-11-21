<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'REPLACE ME';
include_once __DIR__ . '/_components/header.php';
?>
<!-- DO I need the php code at that is in the starter file? -->
<main>
        <form class="editRecipeContainer" action="<?php echo site_url(); ?>/_includes/create-recipe.php" method="POST">
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="TitleInput">Title:</label>
                <input class="AdminInputBox" type="text" name="title" id="TitleInput">
            </div>
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="ImgInput">Image:</label>
                <input type="file" name="ImgInput" id="ImgInput"><!-- must be a png or jpg -->
            </div>
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="PrepTimeInput">Prep Time:</label>
                <input class="AdminInputBox" type="number" name="prep_time" id="PrepTimeInput"><!-- Must be a number -->
            </div>
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="CookTimeInput">Cook Time:</label>
                <input class="AdminInputBox" type="number" name="cook_time" id="CookTimeInput"><!-- Must be a number -->
            </div>
            <div class="AdminInputStyling">
                <label class="inputLabelStyles" for="OverviewDescriptionInput">Overview Description:</label>
                <textarea id="overview" name="overview" rows="3" cols="50" class="textarea">
                Add recipe overview description
                </textarea>
            </div>
            <!-- Containers will front end outputs -->
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddIngredients">Ingredients:</label>
                <!-- <input class="AdminInputBox" type="Text" name="AddIngredients" id="AddIngredients"> -->
                <textarea id="ingredients" name="ingredients" rows="3" cols="50" class="textarea">
                Make a list of ingredients
                </textarea>
                <!-- <button class="buttonChangePosition">Add Ingredients</button> -->
                </div>
            </div>
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddDirections">Directions:</label>
                <textarea id="directions" name="directions" rows="3" cols="50" class="textarea">
                Add directions with steps 
                </textarea>
                </div>
            </div>
            <fieldset> <!-- Style this field set to look nice-->
                <legend>Meal Type:</legend>
                    <div class="AdminInputStyling">
                        <input type="radio" name="meal_type" id="breakfast" value="breakfast">
                        <label for="breakfast">Breakfast</label>
                        <input type="radio" name="meal_type" id="lunch" value="lunch">
                        <label for="lunch">Lunch</label>
                        <input type="radio" name="meal_type" id="dinner" value="dinner">
                        <label for="dinner">Dinner</label>
                    </div>
            </fieldset>
            <div class="buttonsContainerAddDelete">
            <!-- Why is this not working?-->
            <button class="adminDelete"><a href="<?php echo site_url() . '/_includes/delete-recipe.php' ?>">Delete</a></button> 
            <button class="adminSubmit">Submit</button>
            </div>
        </form>
        <!-- END OF FORM/START OF SUBMIT BUTTONS-->
</main>



<?php include_once __DIR__ . '/_components/footer.php';
