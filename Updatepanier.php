<?php


class Updatepanier
{
public $tableauAncienneCommande=[];
public function __construct($ancienneCommande){
    $this->tableauAncienneCommande=$ancienneCommande;

}
    public function update($article_id, $quantiteAjoute){
        $this->tableauAncienneCommande[$article_id]=$this->tableauAncienneCommande[$article_id]+$quantiteAjoute;

    }
}