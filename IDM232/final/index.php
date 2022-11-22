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
<?php include_once __DIR__ . '/_components/footer.php';
?>

<!--
    My section for notes
    Search for exact text. 
    search box, form tag, name and id 

    how to do search box by entering instead of clicking a button? 

    this is an admin side example. 
    how to make the search bar work for one area, so when you enter it will redirect to one page and not 

    15:12 zoom screen screening: sending to a file 
    Make the method a GET method instead of POST for search.. 

    in adming there's a search folder with index.php

    Up till 22:00 added the value we search against when form is submitted (var is called $search
    22:00 < syntax weird % syntax & LIKE Key word 

    How to get multiple images to pop up instead of just one image in the directory like sort through a list
    

 -->