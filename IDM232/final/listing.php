<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>
<main class="CategoryListMain">
        <div>
            <div class="recipeFilter"> 
                <h2 class="filterBy">Filter By</h2>
                <div>
                    <h3 class="biryanna">Meal Type</h3>
                    <div class="categoryMealTypeButtons">
                        <button>Breakfast</button>
                        <button>Lunch</button>
                        <button>Dinner</button>
                    </div>
                </div>
                <div>
                    <h3 class="biryanna">Special Ingredients</h3>
                    <form class="filterForm" action="<?php echo site_url(); ?>/search.php" method="GET">
                        <input class="navSearch ingredientSearch" type="text" id="site-search" name="search" placeholder="Search for ingredients...">
                        <!-- Something will pop here when things are typed in-->
                        <button class="filterSubmitButton" >Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Container holding recipes-->
        <section class="centerCatLM">
            <div class="recipeListBody" >
                <div class="filteredRecipeText sugarText">Filtered Recipes<!-- STATE CHANGE--></div>
                <!-- LOOP and display based on number of inputs-->
                <?php include  __DIR__ . '/search.php'; ?>
            </div>  
        </section>
</main>
<?php include  __DIR__ . '/_components/footer.php';?>