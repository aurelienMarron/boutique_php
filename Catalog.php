<?php
require_once __DIR__. '/Article.php';
require_once __DIR__. '/Animaux.php';
require_once __DIR__. '/database.php';
class Catalog
{
    public $articleArray = [];


    public function __construct()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=boutique_ilot_3;charset=utf8', 'Aurelien', 'Calambrit14');
        $articleArray = $bdd->query('SELECT * FROM products');


        foreach ($articleArray as $article) {
            if($article['vaccin']==='oui' or $article['vaccin']==='non') {
                $a = new Animaux($article['name'], $article['description'], $article['price'], $article['image'], $article['weight'], $article['quantity'], $article['available'], $article['vaccin'], $article['sterile']);
                array_push($this->articleArray, $a);
            } else {
                $a = new Article($article['name'], $article['description'], $article['price'], $article['image'], $article['weight'], $article['quantity'], $article['available']);
                array_push($this->articleArray, $a);
            }
        }
        $articleArray->fetchAll(Pdo::FETCH_ASSOC);
    }

    public function displayCat()
    {
        foreach ($this->articleArray as $article) {
            if ($article instanceof Animaux) {
                $article->displayAnimaux();?>
                <html lang="fr">
        <form method="post" action="affichagePanier.php">
            <label>
                <input type="hidden" name="info_produit" value="<?php echo info_produit();?>">
            </label>
            <button type="submit" class="btn btn-dark btn-outline-light">Ajouter au panier</button>
        </form>
        </html>
            <?php } else {
                $article->displayArticle();?>
                <html lang="fr">
        <form method="post" action="affichagePanier.php">
            <label>
                <input type="hidden" name="info_produit" value="<?php echo info_produit();?>">
            </label>
            <button type="submit" class="btn btn-dark btn-outline-light">Ajouter au panier</button>
        </form>
        </html>
            <?php }
        }
     }
}?>