<?php
require("../DAO/DAO.php");
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:./Mini/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques - Mini-Projet</title>

   
    <link rel="shortcut icon" href="../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="../assets/css/shared/iconly.css">

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
                            <a href="./dashboard.php" class='sidebar-link'>
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
                                    <a href="./Client/ajouterClient.php">Ajout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="./Client/afficherClients.php">Liste</a>
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
                                    <a href="./Fournisseur/ajouterFournisseur.php">Ajout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="./Fournisseur/afficherFournisseurs.php">Liste</a>
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
                                    <a href="./Produit/ajouterProduit.php">Ajout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="./Produit/afficherProduits.php">Liste</a>
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
                                    <a href="./Categorie/ajouterCategorie.php">Ajout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="./Categorie/afficherCategories.php">Liste</a>
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
                                    <a href="./Caisse/caisse.php">Ajout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="./Commande/afficherCommandes.php">Liste</a>
                                </li>
                            </ul>
                        </li>
                        


                    </ul>
                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------------------------------------------- -->
        <!--                                          Container                                        -->
        <!-- ----------------------------------------------------------------------------------------- -->

        
    </div>
    <!-- <script src="../assets/extensions/chart.js/Chart.min.js"></script> -->
    <script src="../assets/js/chartjs.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <!-- <script src="../assets/js/extensions/ui-chartjs.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" integrity="sha512-a+mx2C3JS6qqBZMZhSI5LpWv8/4UK21XihyLKaFoSbiKQs/3yRdtqCwGuWZGwHKc5amlNN8Y7JlqnWQ6N/MYgA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="../assets/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

<script src="../../assets/js/functions.js"></script>
<?php
$stmt = DAO::Stats();
$dh = "Dh";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $month[] = $row['month'];
    $prix[] = $row['prix'];
}
?>
<script>
    var ctx = document.getElementById("chart1").getContext("2d");

    var data = {

        labels: <?php echo json_encode($month); ?>,
        datasets: [{
            label: 'incomes',
            data: <?php echo json_encode($prix); ?>,
            backgroundColor: "rgba(50, 69, 209,.6)",
            borderWidth: 3,
            borderColor: 'rgba(63,82,227,1)',
            pointBorderWidth: 1,
            pointBorderColor: 'rgba(63,82,227,1)',
            pointRadius: 3,
            pointBackgroundColor: 'rgba(63,82,227,1)    ',
            pointHoverBackgroundColor: 'rgba(63,82,227,1)',
        }],


    }


    var config = {
        type: 'line',
        data: data,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    };

    var chart1 = new Chart(ctx, config);
</script>

</html>