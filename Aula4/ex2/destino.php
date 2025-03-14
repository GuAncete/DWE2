<?php

extract($_POST);

echo "<pre>";
var_dump($_POST);
echo "</pre>";

sort($checkbox); 

$limit = 3; 

echo "<ul>";
for ($i = 0; $i < min(count($checkbox), $limit); $i++) {
    echo "<li>{$checkbox[$i]}</li>";
}
if (count($checkbox) > $limit) {
    echo "<li>...</li>";
}
echo "</ul>";
?>
