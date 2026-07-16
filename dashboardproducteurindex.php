<?php
session_start();

if(!isset($_SESSION['id'])){

header("Location: ../../login.php");
exit();

}

if($_SESSION['role']!="producteur"){

header("Location: ../../login.php");
exit();

}

?>

<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Dashboard Producteur</title>

<link rel="stylesheet" href="../../assets/css/dashboard.css">

</head>

<body>

<div class="sidebar">

<h2>AGROWASTE</h2>

<ul>

<li><a href="#">Tableau de bord</a></li>

<li><a href="recoltes.php">Mes récoltes</a></li>

<li><a href="stock.php">Mon stock</a></li>

<li><a href="commandes.php">Commandes</a></li>

<li><a href="../../logout.php">Déconnexion</a></li>

</ul>

</div>

<div class="content">

<h1>

Bienvenue

<?php echo $_SESSION['nom']; ?>

</h1>

<div class="cards">

<div class="card">

<h2>25</h2>

<p>Récoltes</p>

</div>

<div class="card">

<h2>180T</h2>

<p>Stock</p>

</div>

<div class="card">

<h2>14</h2>

<p>Commandes</p>

</div>

</div>

</div>

</body>

</html>