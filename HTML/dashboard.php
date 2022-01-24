<?php
$con = mysqli_connect("localhost", "root", "", "shopNow");

$sql = "SELECT * FROM produit";

$produits = mysqli_query($con, $sql);
$check = mysqli_num_rows($produits);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/Css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--load all styles -->

</head>

<body>
    <header>
    <div class="grid-container">
        <div  id="hum_menu" class="menu-icon">
            <i class="fas fa-bars header__menu"></i>
        </div>
        <aside class="sidenav">
            <div class="sidenav__close-icon">
                <i class="fas fa-times sidenav__brand-close"></i>
            </div>
            <ul class="sidenav__list">
                <li class="sidenav__list-item">
                    <i class="fas fa-home"></i>
                    <a href="dashboard.php">Accueil</a>
                </li>
                <li class="sidenav__list-item"><i class="fas fa-plus-circle"></i><a href="add.php">Ajouter</a></li>
                <!-- <li class="sidenav__list-item"><i class="fas fa-edit"></i><a href="modifier.php">Modifier</a></li> -->
            </ul>
        </aside>
    </header>
     <main class="main">
            <div class="recherch">

                <div class="header__avatar">
                    <img src="style/img/LOGO.png" alt="">
                </div>
                <div class="header__search"><input type="search" placeholder="Search ..."><i class="fas fa-search"></i></div>
            </div>
            <div class="main-cards">
                <div class="card">
                    <table>
                        <tbody>
                            <tr class="linecolr">
                                <th class="id">IDENTIFIANT</th>
                                <th class="nom">Nom</th>
                                <th class="Prix">Prix</th>
                                <th class="Catégorie">Catégorie</th>
                                <th class="Quantité">Quantité</th>
                                <th class="Quantité">Edit</th>
                                <th class="Voir" >remove</th>
                            </tr> 
                           
                            <?php 
                            
                             
                            if($check > 0):
                                while($ligne = mysqli_fetch_assoc($produits)):?>

                                
                                    <tr class="linecolr">
                                        <th class="id">#<?= $ligne["id"] ?></th>
                                        <th class="nom"><?= $ligne["nom"] ?></th>
                                        <th class="Prix"><?= $ligne["prixNormal"] ?> DH</th>
                                        <th class="Catégorie"><?= $ligne["type"] ?></th>
                                        <th class="Quantité"><?= $ligne["quantite"] ?></th>
                                        <th class="Quantité"> <a href="modifier.php?id=<?= $ligne["id"] ?>"><i  class="fas fa-edit" ></i></a></th>
                                        <th class="voir">
                                                <!-- <button class="voir" type="submit" name="remove">remove</button> -->
                                                <a href="./remove.php?delete=<?php echo $ligne['id'];?>">remove</a>
                                        </th>
                                        
                                    </tr>  


                                <?php endwhile; endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
                 
            <footer class="footer">
                <div class="footer__copyright">&copy; 2021 TOUTI/OUASMINE</div>
                <div class="footer__signature">2022-2023 Youcode-teams | All rights reserved .</div>
            </footer>
    </main>
        
   
    </div>
  <script>
              var humber = document.querySelector('#hum_menu')
        var menu = document.querySelector('.sidenav__list')
        var close = document.querySelector('.sidenav__close-icon')

       
        humber.addEventListener('click',()=>{
            humber.style.display = "none"
            close.style.display = "block"
            menu.style.display = "block"
        })

        close.addEventListener('click',()=>{
            close.style.display = "none"
            humber.style.display = "block"
            menu.style.display = "none"

        })
  </script>
      

</body>

</html>