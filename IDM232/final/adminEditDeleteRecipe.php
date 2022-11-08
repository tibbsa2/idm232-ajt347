<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'REPLACE ME';
include_once __DIR__ . '/_components/header.php';
?>

<main>
        <form class="editRecipeContainer">
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="TitleInput">Title:</label>
            <input class="AdminInputBox" type="text" name="TitleInput" id="TitleInput">
            </div>
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="ImgInput">Image:</label>
            <input type="file" name="ImgInput" id="ImgInput"><!-- must be a png or jpg -->
            </div>
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="PrepTimeInput">Prep Time:</label>
            <input class="AdminInputBox" type="Text" name="PrepTimeInput" id="PrepTimeInput"><!-- Must be a number -->
            </div>
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="CookTimeInput">Cook Time:</label>
            <input class="AdminInputBox" type="Text" name="CookTimeInput" id="CookTimeInput"><!-- Must be a number -->
            </div>
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="OverviewDescriptionInput">Overview Description:</label>
            <input class="AdminInputBoxTwo" type="Text" name="OverviewDescriptionInput" id="OverviewDescriptionInput"><!-- Must be a number -->
            </div>
            <!-- Containers will front end outputs -->
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddIngredients">Ingredients:</label>
                <input class="AdminInputBox" type="Text" name="AddIngredients" id="AddIngredients">
                <button class="buttonChangePosition">Add Ingredients</button><!-- ensure this button is connected to the input-->
                </div>
                <div>
                    INGREDIENTS DISPLAY CONTAINER <!-- How to add this?-->
                </div>
            </div>
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddDirections">Directions:</label>
                <input class="AdminInputBoxTwo" type="Text" name="AddDirections" id="AddDirections">
                <button class="buttonChangePosition">Add Directions</button><!-- ensure this button is connected to the input-->
                </div>
                <div>
                DIRECTIONS DISPLAY CONTAINER
                </div>
            <!-- end of containers with front end outputs-->
            </div>
            <fieldset>
                <legend>Meal Type:</legend>
                    <div class="AdminInputStyling">
                        <input type="radio" name="breakfast" id="breakfast" value="breakfast">
                        <label for="breakfast">Breakfast</label>
                        <input type="radio" name="lunch" id="lunch" value="lunch">
                        <label for="lunch">Lunch</label>
                        <input type="radio" name="dinner" id="dinner" value="dinner">
                        <label for="dinner">Dinner</label>
                    </div>
            </fieldset>
        </form>
        <!-- END OF FORM/START OF SUBMIT BUTTONS-->
        <div class="buttonsContainerAddDelete">
            <a href="adminHome.php"><button class="adminDelete">Delete</button></a>
            <a href="adminHome.php"><button class="adminSubmit">Submit</button></a>
        </div>
</main>

<?php include_once __DIR__ . '/_components/footer.php';
