<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link rel="stylesheet" href="style/Css/add.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>
    <header>
    <div class="grid-container">
        <div id="hum_menu"class="menu-icon">
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
        <form method="GET" action="addOp.php" class="mainadd">
            <div class="flex">
                <label>Nom</label>
                <input type="text" placeholder="Enter le nom de votre produit " name="nom" id="name"  >
            </div >
            <div class="flex">
                <label>Type</label>
                    <input type="text" placeholder="Entrer la catégorie du produit " name="type" id="type">
                
            </div>
            <div class="flex" >
                <label>Quantité</label>
                    <input type="number" placeholder="Entrer la quantité de votre produit " name="quantite" id="Quantite" >
                
            </div>
            <div class="flex" >
                <label>Rayon</label>
                    <input type="text" placeholder="Entrer le rayon de votre produit " name="rayon" id="rayon" >
            </div>
            <div class="flex" >
                <label>Date d'expiration</label>
                    <input type="date" placeholder="Entrer le rayon de votre produit " name="dateEx" id="dateEx" >
            </div>
            <div class="flex">
                <label>Prix normal</label>
                    <input type="number" placeholder="Entrer la prix $ " name="prix" id="Prix" >
            </div>
            <div class="flex">
                <label>Prix a gros</label>
                    <input type="number" placeholder="Entrer la prix $ " name="prixGros" id="PrixGros" >
            </div>
            <div class="flex">
                <label>Prix liquidation</label>
                    <input type="number" placeholder="Entrer la prix $ " name="prixLi" id="PrixLi" >
            </div>
            <div class="flex">
                <label>Description</label>
        <textarea name="description" placeholder="Message..." id="description" ></textarea>
            </div>
            <div class="flex">
                <input type="submit" id="Ajouter-le-produit" value="Ajouter le produit">
            </div>
</form>
        

           <footer class="footer">
            <div class="footer__copyright">&copy; 2021 TOUTI/OUASMINE</div>
            <div class="footer__signature">2022-2023 Youcode-teams | All rights reserved .</div>
        </footer>
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
   