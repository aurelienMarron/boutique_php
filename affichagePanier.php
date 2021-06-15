<?php
require_once __DIR__. '/Article.php';
require_once __DIR__. '/Animaux.php';
require_once __DIR__. '/Panier.php';
require_once __DIR__. '/Updatepanier.php';

if (isset($_POST['panier'])){
    $panier=new Updatepanier(json_decode($_POST['panier']));
}else{
$panier=new Panier();}

$test=json_decode($_POST['info_produit']);
//var_dump($test);
if (isset ($_POST['quantite'])){
    $panier->update($test->id,$_POST['quantite']);
}else{
$panier->add($test->id);}

?>


<html lang="fr">
<ul>
    <li>id: <?php echo $test->id ." "?></li>
    <li>Nom: <?php echo $test->name ." "?></li>
    <li>image: <img src='<?php echo $test->image ?>' alt="" width="200"';/></li>
</ul>


<?php $panier->displayPanier();?>
<form method="post" action="affichagePanier.php">
    <label>
        <input type="hidden" name="info_produit" value="<?php echo htmlspecialchars(json_encode($test),ENT_QUOTES);?>">
        <input type="hidden" name="panier" value="<?php echo htmlspecialchars(json_encode($panier),ENT_QUOTES);?>">
        <input type="number" name="quantite" placeholder="Combien t'en veux?" min="0" required>
    </label>
    <button type="submit" class="btn btn-dark btn-outline-light">Ajouter quantité</button>
</form>

</html>