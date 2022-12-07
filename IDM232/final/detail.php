<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'recipe detail';
include_once __DIR__ . '/_components/header.php';
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
    <section class="sec1Intro">
        <div class="introContainer">
            <?php $site_url = site_url();?>
            <div class="introImg"><img src="<?php echo "{$site_url}/dist/images/{$recipe['image']}"?>" alt=''></div>
            <div class="introText">
                <div class="introHeaderInfo">
                    <h2>Overview: <span><?php echo $recipe['title']?></span></h2>
                    <h3>Time to Prep: <span><?php echo $recipe['prep_time']?></span> min Time to Cook: <span><?php echo $recipe['cook_time']?></span> min</h3>
                </div>
                <div class="dishIntro">
                    <div class="overviewDescription"><?php echo $recipe['overview']?>
                    </div>
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
                <div class="RecipeListItems"><?php echo $recipe['ingredients']?>
                </div>
            </ul>
        </div>
    </section>

    <!-- STEPS-->
    <h2 class="directionHeader">Directions</h2>
    <div class="recipeStepDescription"><?php echo $recipe['directions']?></div>

<?php include_once __DIR__ . '/_components/footer.php';
