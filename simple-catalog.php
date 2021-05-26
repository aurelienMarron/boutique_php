<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'header.php';
include 'my-functions.php';

$products=["briquet","cigarettes","tabac à rouler"];
sort($products);
print_r($products);

$first_item=reset($products);
$last_item=end($products);
echo $first_item ."<br/>". $last_item . '<br/>';
echo "$products[0]\n" . "<br/>";

echo "<h2>debut while</h2>" . "<br/>";
$index=0;
while($index < count($products))
{
    $product = $products[$index];
    $index++;

    echo "$product" . "<br/>". "<br/>";
}

echo "<h2>debut do while</h2>" . "<br/>";
$index=0;
do{
    $product = $products[$index];
    $index++;
    echo $product . $index. count($products) . "<br/>". "<br/>";
}
while($index < count($products));

echo "<h2>debut for</h2>" . "<br/>";
for($i=0; $i<count ($products); $i++)
{
    echo "$products[$i]" . "<br/>". "<br/>";}

echo "<h2>debut for each</h2>" . "<br/>";
foreach($products as $product){
    echo $product . "<br/>". "<br/>";
}

include 'footer.php';
