
<?php

//Display recipes on admin side
$site_url = site_url();
while ($recipe_row = mysqli_fetch_array($recipe_result)) {
    echo "
    <section class='adminPinkRecipeContainer'>
    <div class='adminRecipeImg'><img  class='adminImgResize' src='<?php echo site_url(); ?>/../dist/images/purplewaffle.jpg' alt='recipe dish image'></div>
    <h3 class='adminDishName'>{$recipe_row['title']}</h3>
    <div class='adminEditButtonContainer'>
            <button class='adminEditButton'>
                <a href='{$site_url}../edit-recipe.php?id={$recipe_row['id']}'>Edit/Delete</a> 
            </button>
    </div>
</section>";
// Why is this not working? button <a> is not linking to the correct page</a>
}
?>