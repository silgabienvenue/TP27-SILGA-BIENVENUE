<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" type=text/css href="bootstrap.css">
    <link rel="stylesheet" type=text/css href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <title>site touristique</title>
</head>
<?php include("config.php")?>
<?php include("navbar.php")?>

    <!-- Acceui -->
    <section class="home">
        <h2>voyagez en toute securite</h2>
        <h4>
            <marquee behavior="" direction="left">Bienvenue dans la Belle cite de SYA!!!</marquee>
        </h4>
        <h4 class="bob">
            <marquee behavior="" direction="right">Bobo Dioulasso, Capitale econonique et culturel du Burkina Faso
            </marquee>
        </h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Autem cupiditate accusamus incidunt maiores distinctio eos!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, recusandae?</p>
        <a href="#" class="btn home-btn">Hatez-Vous</a>
        <div class="find">
            <form action="" method="post">
                <div>
                    <label for="city">ville</label>
                    <input type="text" placeholder="Entrez une ville">
                </div>
                <div>
                    <label for="village">village</label>
                    <input type="text" placeholder="Entrez un village">
                </div>
                <div>
                    <label for="site">site</label>
                    <input type="text" placeholder="Entrez un site">
                </div>
                <input type="submit" value="voir">
            </form>
        </div>
    </section>

    <!-- About -->
    <section class="about">
        <h1 class="title">A Propos de Nous</h1>
        <div class="img-desc">
            <div class="left">
                <img src="image/us.png" alt="">
            </div>
            <div class="right">
                <h3>Evadez vous!</h3>
                <p>Vous etes passionnes de la Nature, des art, de la Culture; notre compagnie est la votre.
                    Voyagez pour decouvrir de nouvelles horizons de nouveaux mondes de nouvelles cultures</p>
                <a href="#">Lire Plus</a>
            </div>
        </div>
    </section>

    <!-- sites -->
    <section class="sites">
        <h1>Les Localites Attractives de SYA</h1>
        <div class="content">
                            <?php
                $reponse = $bdd->query('SELECT * FROM localite');
                while($donnees = $reponse->fetch()){
                ?>

            <!-- box -->
            <div class="box">
                <img src="image/<?php echo $donnees['image']; ?>" alt="">
                <div class="content">
                    <div>
                        <h4>
                            <?php echo $donnees['titre']; ?>
                        </h4>
                        <p>
                            <?php echo $donnees['contenu']; ?>
                        </p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            
            <?php } ?>
        </div>
    </section>

    <!-- contact -->
    <section class="contact">
        <h1>Contact</h1>
        <form action="config.php" method="post">
            <div class="left-right">
                <div class="left">
                    <label for="name">Nom</label>
                    <input type="text" name="nom">
                    <label for="objecct">Objet</label>
                    <input type="text" name="prenom">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                    <label for="message">Message</label>
                    <textarea name="" id="" cols="30" rows="10"  name="commentaire"></textarea>
                </div>
                <div class="right">
                    <label for="name">Numero</label>
                    <input type="number"  name="numero">
                    <label for="object">date</label>
                    <input type="number"  name="dat">
                    <label for="name">Autres Details</label>
                    <input type="text"  name="details">
                    <label for="name">Adresse</label>
                    <img src="image/maps.png " alt="">
                    <!-- <iframe src="" frame border="0"></iframe> -->
                </div>
            </div>
            <button type="submit">Envoyer</button>
        </form>
        
    </section>

    <footer>
        <div class="logo">
            <a href="index.php"> <span>VIP</span>Tavel</a>
        </div>
        <div class="visit">
        <h5>Nous Visiter</h5>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Actualites</a></li>
            <li><a href="#">Connexion </a></li>
        </div>
        <div class="help">
            <h5>support</h5>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">Aide </a></li>
        </div>
        <div class="media">
            <h5>Retrouvez-Nous</h5>
            <!-- <li><a href="#"><i class="fa-solid fa-map-marker-alt"></a></li>
            <li><a href="#"><i class="fa-solid fa-phone"></a></li>
            <li><a href="#"><i class="fa-solid fa-envelope"> </a></li> -->
        </div>
        <div class="icons">
            <h5>Suivez-Nous</h5>
            <!--  -->
        </div>
    </footer>
</body>

</html>