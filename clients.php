<?php
require_once __DIR__. '/Client.php';
require_once __DIR__. '/ListeClients.php';


$listeClients=new ListeClients();
$listeClients->displayListe();