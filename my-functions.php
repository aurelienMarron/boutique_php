<?php
$prix=0.00;

function formatPrice($prix){
    echo "le prix est de ". number_format($prix,2) . " euros";
}

function priceExludingVAT($prix){
    return (100*$prix)/(100+20);
}

function displayDicountedPrice($prix,$discount){
    return $prix-($prix/100 *$discount);}

