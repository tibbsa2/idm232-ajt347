<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>
<section class="welcome">
    <h1 class="directionHeader">Welcome to Sugar Food</h1>
    <p>All our dishes are sweet and savory and can be enjoyed at any time of the day</p>
    <button class="generalButton"><a class="black" href="listing.php" >View Recipes</a></button>
</section>

</main>
<?php include  __DIR__ . '/_components/footer.php';?>