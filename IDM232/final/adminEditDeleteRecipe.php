<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/generalStyles.css">
   <link rel="stylesheet" href="css/adminHomeStyles.css">
    <title>Document</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <main>
        <form class="editRecipeContainer">
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="TitleInput">Title:</label>
            <input type="text" name="TitleInput" id="TitleInput">
            </div>
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="ImgInput">Image:</label>
            <input type="file" name="ImgInput" id="ImgInput"><!-- must be a png or jpg -->
            </div>
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="PrepTimeInput">Prep Time:</label>
            <input type="Text" name="PrepTimeInput" id="PrepTimeInput"><!-- Must be a number -->
            </div>
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="CookTimeInput">Cook Time:</label>
            <input type="Text" name="CookTimeInput" id="CookTimeInput"><!-- Must be a number -->
            </div>
            <div class="AdminInputStyling"><label class="inputLabelStyles" for="OverviewDescriptionInput">Cook Time:</label>
            <input type="Text" name="OverviewDescriptionInput" id="OverviewDescriptionInput"><!-- Must be a number -->
            </div>
            <!-- Containers will front end outputs -->
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddIngredients">Ingredients:</label>
                <input type="Text" name="AddIngredients" id="AddIngredients">
                <button>Add Ingredients</button><!-- ensure this button is connected to the input-->
                </div>
                <div>
                    INGREDIENTS DISPLAY CONTAINER <!-- How to add this?-->
                </div>
            </div>
            <div>
                <div class="AdminInputStyling"><label class="inputLabelStyles" for="AddDirections">Directions:</label>
                <input type="Text" name="AddDirections" id="AddDirections">
                <button>Add Directions</button><!-- ensure this button is connected to the input-->
                </div>
                <div>
                DIRECTIONS DISPLAY CONTAINER
                </div>
            <!-- end of containers with front end outputs-->
            </div>
            <div class="AdminInputStyling"><label for="MealType">MealType:</label>
                <input type="radio" name="MealType" id="MealType">
            </div>
        </form>
        <!-- END OF FORM/START OF SUBMIT BUTTONS-->
        <div class="buttonsContainerAddDelete">
            <button class="adminDelete">Delete</button>
            <button class="adminSubmit">Submit</button>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
</body>
</html>