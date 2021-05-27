<?php
$prix=0.00;

function formatPrice($prix){
    $prix_euro=$prix/100;
    echo "le prix est de ". number_format($prix_euro,2) . " euros";
}

function priceExludingVAT($prix){
    return (100*$prix)/(100+20);
}

function displayDicountedPrice($prix,$discount){
    return $prix-($prix/100 *$discount);}

function totalCommande($prix,$quantite){
    return $prix*$quantite;
}

function weightCommande($quantite,$weight){
    return $quantite*$weight;
}