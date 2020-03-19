<?php

// Return the item's html needed to display the item in a list view in the UI
function randomArray($arr, $numberOfElements) {
    $randomArray = array_rand($arr, $numberOfElements);
    return $randomArray;
}

function getItemHtml($id, $item) {
    $output =  "<li><a href=\"#\"><img src=\"" 
                . $item["img"] . "\" alt=\"" 
                . $item["title"] . "\">" 
                . "<p>View Details</p>"
                ."</a></li>";
    return $output;
}

function arrayCategory($catalog, $category) {
    $output = [];
    foreach($catalog as $id => $item) {
        if(($category == null) || (strtolower($item["category"]) == strtolower($category))) {
            $sort = $item["title"];
            $sort = ltrim($sort, "The ");
            $sort = ltrim($sort, "A ");
            $sort = ltrim($sort, "An ");
            $output[$id] = $sort;
        }
    }
    asort($output);
    return array_keys($output);
}
