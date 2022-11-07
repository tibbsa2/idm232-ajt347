<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/generalStyles.css">
    <link rel="stylesheet" href="css/headerStyles.css">
    <link rel="stylesheet" href="css/footerStyles.css">
    <link rel="stylesheet" href="css/adminHomeStyles.css">
    <title>Document</title>
</head>
<body>
    <?php include_once 'phpUISnippets/header.php'?>
    <section>
        <div class="addRecipeContainer">
            <a href="adminEditDeleteRecipe.php"><button class="generalButton">Add Recipe</button></a>
        </div>
        <div class="adminRecipeListContainer">
        <?php include "phpUISnippets/adminRecipeListItems.php"; ?>
        <?php include "phpUISnippets/adminRecipeListItems.php"; ?>
        <?php include "phpUISnippets/adminRecipeListItems.php"; ?>
        <?php include "phpUISnippets/adminRecipeListItems.php"; ?>
        <?php include "phpUISnippets/adminRecipeListItems.php"; ?>
        <?php include "phpUISnippets/adminRecipeListItems.php"; ?>
        </div>

    </section>
    <?php include_once 'phpUISnippets/footer.php';?>
</body>
</html>