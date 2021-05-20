<?php
$products=["briquet","cigarettes","tabac à rouler"];
sort($products);
print_r($products);

$first_item=reset($products);
$last_item=end($products);
echo $first_item ."<br/>". $last_item;
?>