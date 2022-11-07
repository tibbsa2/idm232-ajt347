<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/generalStyles.css">
   <link rel="stylesheet" href="css/adminHomeStyles.css">
    <title>Document</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <section>
        <div class="addRecipeContainer">
            <button class="generalButton">Add Recipe</button>
        </div>
        <div class="adminRecipeListContainer">
        <?php include_once "sectionSnippets/adminRecipeListItems.php"; ?>
            <p>The name of the Dish</p>
            <p>The name of the Dish</p>
            <p>The name of the Dish</p>
            <p>The name of the Dish</p>
            <!-- PHP TEMPLATE -->
        </div>

    </section>
    <?php include_once "footer.php"; ?>
</body>
</html>