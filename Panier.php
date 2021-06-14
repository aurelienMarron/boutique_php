<?php


class Panier
{
    public $quantiteCommande;
   public $tableauPanier=[];


public function add($article_id)
{
    if(isset( $this->tableauPanier[$article_id])){
        $this->tableauPanier[$article_id]=$this->quantiteCommande+1;
    }
    else{
        $this->quantiteCommande=1;
        $this->tableauPanier[$article_id]=$this->quantiteCommande;
    }

}

public function update($article_id,int $quantiteAjoute){
     $this->tableauPanier[$article_id]=$this->tableauPanier[$article_id]+$quantiteAjoute;

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