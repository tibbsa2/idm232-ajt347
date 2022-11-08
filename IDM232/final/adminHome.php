<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'REPLACE ME';
include_once __DIR__ . '/_components/header.php';
?>

<section>
        <div class="addRecipeContainer">
            <a href="adminEditDeleteRecipe.php"><button class="generalButton">Add Recipe</button></a>
        </div>
        <div class="adminRecipeListContainer">
        <?php include  __DIR__ . '/_components/adminRecipeListItems.php'; ?>
        <?php include  __DIR__ . '/_components/adminRecipeListItems.php'; ?>
        <?php include  __DIR__ . '/_components/adminRecipeListItems.php'; ?>
        <?php include  __DIR__ . '/_components/adminRecipeListItems.php'; ?>
        </div>

</section>

<?php include_once __DIR__ . '/_components/footer.php';
