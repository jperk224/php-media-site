<?php

include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Personal Media Library";
$section = NULL;

include("inc/header.php"); ?>
		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
				<?php 
				// create a random array of 4 elements from the main array to loop through on the menu page
				$randomArray = randomArray($catalog, 4);
				//var_dump($randomArray);
            	foreach($randomArray as $id) {        // loop trough $catalog and print each item w/ li tags
                	echo(getItemHtml($id, $catalog[$id]));
            	} ?>
				</ul>

			</div>

		</div>
<?php include("inc/footer.php"); ?>
