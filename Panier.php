<?php


class Panier
{
    public $quantiteCommande=0;
   public $tableauPanier=[];


public function add($article_id)
{
    /*if(!isset($tableauPanier[$article_id])){
        $quantiteCommande=1;
       $this->>tableauPanier=[$article_id=>$quantiteCommande];
    }
    else{
        */$this->quantiteCommande=$this->quantiteCommande+1;
       $this->tableauPanier[$article_id]=$this->quantiteCommande;


    //}
    //return $tableauPanier;
}

public function update($article_id,$quantiteAjoute){
     $tableauPanier[$article_id]=$this->quantiteCommande+$quantiteAjoute;
     return $tableauPanier;
}

public function delete($article_id){
    unset($this->tableauPanier[$article_id]);
}


public function displayPanier(){
    foreach($this->tableauPanier as $produit_id=>$quantite){
        echo 'Commande de ' . $quantite . ' produit numéro '. $produit_id . '<br>';

    }
}


}