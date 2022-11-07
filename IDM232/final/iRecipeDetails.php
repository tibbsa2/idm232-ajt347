<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/generalStyles.css">
    <link rel="stylesheet" href="css/iRecipeDetails.css">
    <title>Document</title>
</head>
<body>
    <?php include_once 'header.php';?>
    <!-- INTRO -->
    <section class="sec1Intro">
        <div class="introContainer">
            <div class="introImg"><img src="images/purplewaffle.jpg"></div>
            <div class="introText">
                <div class="introHeaderInfo">
                    <h2>Overview</h2>
                    <h3>Time to Prep: 30min Time to Cook: 30min Total Time: 60min</h3>
                </div>
                <div class="dishIntro">
                    <p>Tatooed waiters artisnal anything yuk yum you'll need to roll me out of here free wifi pork crackling turmeric icecream suasages and mash. Surfing the menu cash only this is cold finger licking good Margeret River slow cooked BBQ surf and turf. The mystery box biodynamic more celebrity than chef cronuts perfect fusion Aesop handwash tapas anything I'll ask the somelier.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- INGREDIENTS -->
    <section class="sec2Ingredients">
        <div class="buffer">
            <h2 class="ingredientsHeader">Ingredients</h2>
            <ul class="listedIngredients">
                <!-- AUTOMATE -->
                <li class="RecipeListItems">2 tbsp Crushed Red Pepper</li>
                <li class="RecipeListItems">2 tbsp Crushed Red Pepper</li>
                <li class="RecipeListItems">2 tbsp Crushed Red Pepper</li>
                <li class="RecipeListItems">2 tbsp Crushed Red Pepper</li>
                <li class="RecipeListItems">2 tbsp Crushed Red Pepper</li>
                <li class="RecipeListItems">2 tbsp Crushed Red Pepper</li>
                <li class="RecipeListItems">2 tbsp Crushed Red Pepper</li>
            </ul>
        </div>
    </section>
    <!-- STEPS-->
    <h2 class="directionHeader">Directions</h2>
    <?php include_once 'sectionSnippets/recipeSteps.php';?>
    <?php include_once 'sectionSnippets/recipeSteps.php';?>
    <?php include_once 'sectionSnippets/recipeSteps.php';?>
    <?php include_once 'footer.php';?>
</body>
</html>