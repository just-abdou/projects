<?php
require_once("../../Metier/client.php");
require_once("../../Metier/produit.php");
require_once("../../Metier/categorie.php");
require_once("../../Metier/fournisseur.php");
require_once("../../Metier/commande.php");
require_once("../../Metier/ligneCmd.php");
require_once("../../Metier/approvisionnement.php");
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: http://localhost/Mini/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - Mini-Projet</title>

    <link rel="stylesheet" href="../../assets/css/main/app.css">
    <link rel="stylesheet" href="../../assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/png">

</head>

<body>
    <!-- ----------------------------------------------------------------------------------------- -->
    <!--                                          Sidebar                                          -->
    <!-- ----------------------------------------------------------------------------------------- -->


    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active" style="left:0; background-color: #f5faff;">
                
                <div class="sidebar-menu">
                    
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item  ">
                            <a href="../dashboard.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Clients</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../Client/ajouterClient.php">Ajout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../Client/afficherClients.php">Liste</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-truck"></i>
                                <span>Fournisseurs</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../Fournisseur/ajouterFournisseur.php">Ajout</a>
                                </li>       
                                <li class="submenu-item ">
                                    <a href="../Fournisseur/afficherFournisseurs.php">Liste</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pentagon-fill"></i>
                                <span>Produits</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../Produit/ajouterProduit.php">Ajout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../Produit/afficherProduits.php">Liste</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-list-ul"></i>
                                <span>Categories</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../Categorie/ajouterCategorie.php">Ajout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../Categorie/afficherCategories.php">Liste</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-cart-fill"></i>
                                <span>Commandes</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../Caisse/caisse.php">Ajout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../Commande/afficherCommandes.php">Liste</a>
                                </li>
                            </ul>
                        </li>
                      


                    </ul>
                </div>
            </div>
        </div>
</div>
</body>
</html>