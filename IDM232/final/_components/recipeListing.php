<?php

if (isset($results)){
    //Display recipes on user side
    $site_url = site_url();
    while ($recipe_row = mysqli_fetch_array($results)) {
        echo "
    <a class='resizeListItem' href='{$site_url}/detail.php?id={$recipe_row['id']}' alt='Listed Recipe Preview'>
        <div class='recipeListContainer'>
            <div class='recipePreviewImgContainer'>
                <img class='categoryItemImg' src='{$site_url}/dist/images/{$recipe_row['image']}' alt='Recipe Image'>
            </div>
            <div class='recipePreviewTextContainer'>
                <h2 class='changeTitleText'>{$recipe_row['title']}</h2>
                <h3 class='changePrepTimeText'>Time to Prep: <span class='rCPrepTime'>{$recipe_row['prep_time']}</span>min Time to Cook: <span class='rCookTime'>{$recipe_row['cook_time']}</span>min</h3>
                <p class='changePreviewText'></p>
            </div>
        </div>
    </a>
    ";
    }
}
?>
