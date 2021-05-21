<?php

include 'header.php';

$products=["briquet","cigarettes","tabac à rouler"];
sort($products);
print_r($products);

$first_item=reset($products);
$last_item=end($products);
echo $first_item ."<br/>". $last_item . '<br/>';
echo "$products[0]\n" . "<br/>";

echo "debut while" . "<br/>";
$index=0;
while($index < count($products))
{
    $product = $products[$index];
    $index++;

    echo "$product" . "<br/>". "<br/>";
}

echo "debut do while" . "<br/>";
$index=0;
do{
    $product = $products[$index];
    $index++;
    echo $product . "<br/>". "<br/>";
}
while($index < count($products));

echo "debut for" . "<br/>";
for($i=0; $i<count ($products); $i++)
{
    echo "$products[$i]" . "<br/>". "<br/>";}

echo "debut for each" . "<br/>";
foreach($products as $product){
    echo $product . "<br/>". "<br/>";
}

include 'footer.php';
