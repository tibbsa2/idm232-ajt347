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
  <script src="https://cdn.tiny.cloud/1/v67ll55h4y28idnitbz6ay4x2jxk60qtyc0hg54tws51bmfu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
            <li class="linkText"><a href="listing.php">Recipe Listing</a></li>
          </ul>
      </div>
    </div>
    <div class="rightNav"> 
<?php // Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}
?>


      <form class="navSearch" action="<?php echo site_url(); ?>/search.php" method="GET"> 
        <input class="navSearch" type="search" id="site-search" name="search" placeholder="Search for receipe..." value="<?php echo $search; ?>">
      </form>
    </div>
</nav>
<!-- HEADER Banner -->
<header class="realSugarHeader">
  <h1 class="sugarHeader sugarText">Find your recipe</h1>
</header>
  <!-- Main Content Begins -->