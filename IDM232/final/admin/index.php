<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home';
include_once __DIR__ . '/../_components/header.php';
?>

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
                <textarea id="overview" name="overview" rows="3" cols="50">
                Add recipe overview description
                </textarea>
            </div>
            <!-- Containers will front end outputs -->
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddIngredients">Ingredients:</label>
                <!-- <input class="AdminInputBox" type="Text" name="AddIngredients" id="AddIngredients"> -->
                <textarea id="ingredients" name="ingredients" rows="3" cols="50">
                Make a list of ingredients
                </textarea>
                <!-- <button class="buttonChangePosition">Add Ingredients</button> -->
                </div>
            </div>
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddDirections">Directions:</label>
                <textarea id="directions" name="directions" rows="3" cols="50">
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
            <button class="adminDelete"><a href="<?php echo site_url() . '/_includes/delete-recipe.php' ?>">Delete</a></button>
            <button class="adminSubmit">Submit</button>
            </div>
        </form>
        <!-- END OF FORM/START OF SUBMIT BUTTONS-->
</main>


<?php include_once __DIR__ . '/../_components/footer.php';

// EXTRA CODE
// <a href="detail.php" alt="Listed Recipe Preview">
//     <div class="recipeListContainer">
//         <div class="recipePreviewImgContainer">
//             <img class="categoryItemImg" src="<?php echo site_url(); ?VVV/dist/images/purplewaffle.jpg" alt="Recipe Image">
//         </div> 
//         <div class="recipePreviewTextContainer">
//             <h2 class="changeTitleText">Dripping Purple Waffles</h2>
//             <h3 class="changePrepTimeText">Time to Prep: <span class="rCPrepTime">30</span>min  Time to Cook: <span class="rCookTime">30</span>min   Total Time: <span class="rTotalTime">60</span>min</h3>
//             <p class="changePreviewText">Tatooed waiters artisnal anything yuk yum you'll need to roll me out of here free wifi pork crackling turmeric icecream suasages and ...</p>
//         </div>
//     </div>
// </a>
