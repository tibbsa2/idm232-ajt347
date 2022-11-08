<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'recipe detail';
include_once __DIR__ . '/_components/header.php';
?>

<section class="sec1Intro">
        <div class="introContainer">
            <div class="introImg"><img src="<?php echo site_url(); ?>/dist/images/purplewaffle.jpg"></div>
            <div class="introText">
                <div class="introHeaderInfo">
                    <h2>Overview</h2>
                    <h3>Time to Prep: 30min Time to Cook: 30min Total Time: 60min</h3>
                </div>
                <div class="dishIntro">
                    <p class="overviewDescription">Tatooed waiters artisnal anything yuk yum you'll need to roll me out of here free wifi pork crackling turmeric icecream suasages and mash. Surfing the menu cash only this is cold finger licking good Margeret River slow cooked BBQ surf and turf. The mystery box biodynamic more celebrity than chef cronuts perfect fusion Aesop handwash tapas anything I'll ask the somelier.</p>
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
    <?php include __DIR__ . '/_components/recipeSteps.php';?>
    <?php include __DIR__ . '/_components/recipeSteps.php';?>
    <?php include __DIR__ . '/_components/recipeSteps.php';?>

<?php include_once __DIR__ . '/_components/footer.php';
