<?php

if (isset($results)){
    //Display recipes on user side
    $site_url = site_url();
    while ($recipe_row = mysqli_fetch_array($results)) {
        echo "
    <a class='resizeListItem' href='detail.php' alt='Listed Recipe Preview'>
        <div class='recipeListContainer'>
            <div class='recipePreviewImgContainer'>
                <img class='categoryItemImg' src='{$site_url}/dist/images/purplewaffle.jpg' alt='Recipe Image'>
            </div> <!-- FIX HOW IMGS FIT IN CONTAINER -->
            <div class='recipePreviewTextContainer'>
                <h2 class='changeTitleText'>{$recipe_row['title']}</h2>
                <h3 class='changePrepTimeText'>Time to Prep: <span class='rCPrepTime'>{$recipe_row['prep_time']}</span>min Time to Cook: <span class='rCookTime'>{$recipe_row['cook_time']}</span>min</h3>
                <p class='changePreviewText'></p>
        </div>
    </a>
    ";
    }
}
?>
