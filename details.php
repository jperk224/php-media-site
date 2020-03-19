<?php 

include("inc/data.php");
include("inc/functions.php");

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    if(isset($catalog[$id])) {
        $item = $catalog[$id];
    }
}

    if(!isset($item)) {
        header("location:catalog.php");
        exit;
    }

$pageTitle = $item["title"];    
$section = null;                

include("inc/header.php"); ?>

<div class="section page">
    <div class="wrapper">
    <div class="media-picture">
        <span>
            <img src="<?php echo($item["img"]); ?>" alt="<?php echo($item["title"]); ?>">    
        </span>
    </div>  <!-- end media-picture -->

    <div class="media-details">
        <h1><?php echo $item["title"];?></h1>
        <table>
            <tr>
                <th>Category</th>
                <td><?php echo($item["category"]); ?></td>
            </tr>
            <tr>
                <th>Genre</th>
                <td><?php echo($item["genre"]); ?></td>
            </tr>
            <tr>
                <th>Format</th>
                <td><?php echo($item["format"]); ?></td>
            </tr>
            <tr>
                <th>Year</th>
                <td><?php echo($item["year"]); ?></td>
            </tr>
            <?php  
                if(strtolower($item["category"]) == strtolower("books")) {
            ?>
            <tr>
                <th>Author(s)</th>
                <td><?php echo(implode(", ", $item["authors"])); ?></td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td><?php echo($item["publisher"]); ?></td>
            </tr>
            <tr>
                <th>ISBN</th>
                <td><?php echo($item["isbn"]); ?></td>
            </tr>
            <?php } else if(strtolower($item["category"]) == strtolower("movies")) {
            ?>
            <tr>
                <th>Director</th>
                <td><?php echo($item["director"]); ?></td>
            </tr>
            <tr>
                <th>Writer(s)</th>
                <td><?php echo(implode(", ", $item["writers"])); ?></td>
            </tr>
            <tr>
                <th>Star(s)</th>
                <td><?php echo(implode(", ", $item["stars"])); ?></td>
            </tr>
            <?php } else if(strtolower($item["category"]) == strtolower("music")) { 
            ?>
            <tr>
                <th>Artist</th>
                <td><?php echo($item["artist"]); ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>  <!-- end media-details" -->
    </div>  <!-- end wrapper div -->
</div>  <!-- end section page div -->