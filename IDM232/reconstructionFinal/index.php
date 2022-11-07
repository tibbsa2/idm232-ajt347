<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/generalStyles.css">
   <link rel="stylesheet" href="css/headerStyles.css">
   <link rel="stylesheet" href="css/footerStyles.css">
   <link rel="stylesheet" href="css/recipeCategoryPage.css">

    <title>Food for Thought</title>
</head>
<body>
    <!-- Assignment 1 Stuff-->
    <?php 
    include_once 'phpUISnippets/header.php';
    //$a1 = 'Assignment - 01' ?>
    <h1> <?php echo $a1; ?></h1>

    <!-- Entire Body for Recipe Category List-->
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
                    <form class="filterForm">
                        <input class="navSearch ingredientSearch" type="search" id="site-search" name="q" placeholder="Search for ingredients...">
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
                <?php include_once 'phpUISnippets/recipeCategoryListItem.php'; ?>
            </div>  
        </section>
    </main>
    <?php include_once 'phpUISnippets/footer.php';?>
</body>
</html>