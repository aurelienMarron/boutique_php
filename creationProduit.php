<?php
include 'database.php';

?>

<html lang="fr">

<form method="post" action="nouveauProduit.php">

    <ul><label>
       <li> <input type="text" name="name" placeholder="name"></li>
            <li><input type="text" name="description" placeholder="description"></li>
            <li> <input type="number" name="price"  placeholder="price" min="0"></li>
            <li> <input type="number" name="weight"  placeholder="weight" min="0"></li>
            <li> <input type="text" name="image" placeholder="image"></li>
            <li><input type="number" name="quantity" placeholder="quantity" min="0"></li>
            <li><input type="number" name="available" placeholder="available" min="0" max="1"></li>
            <li> <input type="number" name="categorie_id" placeholder="categorie_id" min="0"></li>
    </label> </ul>
    <button type="submit" class="btn btn-dark btn-outline-light">Create product</button>
</form>



</html>
