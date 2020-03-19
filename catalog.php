<?php 

include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";    // default page title if legit category is not passed in query string
$section = null;                // by default show nothing underlined

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

<div class="section catalog page">
    <div class="wrapper">
        <h1><?php
                if($section != null) {
                    echo("<a href=\"catalog.php\">View Full Catalog</a><br>");
                } 
            echo $pageTitle 
            ?></h1>
        <ul class="items">
            <?php 
            $categories = arrayCategory($catalog, $section);
            foreach($categories as $id) {        // loop trough $catalog and print each item w/ li tags
                echo(getItemHtml($id, $catalog[$id]));
            }
            ?>
        </ul>
    </div> <!-- end wrapper div -->
</div> <!-- end <div class="section catalog page"> -->

<?php include("inc/footer.php"); ?>