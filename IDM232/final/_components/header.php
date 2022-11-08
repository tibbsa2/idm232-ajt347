<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'JAWN Clips';
$document_title = $page_title . ' | ' . $site_title; // Home | JAWN Clips

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/css/generalStyles.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/css/headerStyles.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/css/footerStyles.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/css/adminHomeStyles.css"> 
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/css/iRecipeDetails.css"> 
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/css/recipeCategoryPage.css"> 
  <title><?php echo $document_title ; ?></title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navBar sugarPink">
    <div class="leftNav">
      <a href="index.php"><div class="logo">
        <div>
          <img class="navLogoResize" src="<?php echo site_url(); ?>/dist/images/sugarLogo.png" alt="Sugar Logo">
        </div>
        <div class="sugarText sugarTextLogo">Sugar Food</div>
      </div>
      </a>
      <div class="navOptions"> 
          <ul id="navOptions">
            <li class="linkText"><a href="adminHome.php">Login</a></li>
            <li class="linkText"><a href="index.php">Recipe</a></li>
          </ul>
      </div>
    </div>
    <div class="rightNav"> 
      <form> 
        <input class="navSearch" type="search" id="site-search" name="q" placeholder="Search for receipe...">
      </form>
    </div>
</nav>
<!-- HEADER Banner -->
<header class="realSugarHeader">
  <h1 class="sugarHeader sugarText">Find your recipe</h1>
</header>
  <!-- Main Content Begins -->