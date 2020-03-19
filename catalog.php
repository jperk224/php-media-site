<?php 
$pageTitle = "Full Catalog";    // default page title if legit category is not passed in query string
$section = NULL;                // by default show nothing underlined

if(isset($_GET["cat"])) {
    if ($_GET["cat"] == "books") {
        $pageTitle = "Books";
        $section = "books";
    }
    elseif($_GET["cat"] == "movies") {
        $pageTitle = "Movies";
        $section = "movies";
    }
    elseif($_GET["cat"] == "music") {
        $pageTitle = "Music";
        $section = "music";
    }
}

include("inc/header.php"); ?>

<div class="section page">
    <h1><?php echo $pageTitle ?></h1>
</div> <!-- end <div class="section page"> -->

<?php include("inc/footer.php"); ?>