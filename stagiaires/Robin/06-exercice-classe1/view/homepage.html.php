<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Ma passion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="top">

<header class="site-header">
    <h1>Ma passion</h1>

    <button class="burger" id="burger">☰</button>

    <nav class="nav" id="nav">
        <a href="./">Accueil</a>
        <a href="?page=comments">Commentaires</a>
        <a href="?page=addcomments">Ajouter un commentaire</a>
    </nav>
</header>

<main>
    <section>
        <h2>La peinture</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque unde tenetur deserunt blanditiis placeat tempora eos soluta rem, perferendis dolorum molestias aut saepe? Alias neque excepturi laborum. Ipsa cupiditate esse explicabo odit, laboriosam repellendus beatae in eligendi, magnam harum culpa ex a animi doloribus laudantium enim eaque omnis libero debitis!
        </p>

        <div class="photos">
            <img src="img/" alt="Peinture_1">
            <img src="img/" alt="Peinture_2">
            <img src="img/" alt="Peinture_3">
        </div>
    </section>

    <section>
        <a href="?page=comments">
            <?php
                if($nbCommentaires === 0):
            ?>
                Voir les commentaires (pas encore de commentaire)
            <?php
                elseif($nbCommentaires === 1):
            ?>
                Voir les commentaires (1 commentaire)
            <?php
                else:
            ?>
                Voir les commentaires (<?= $nbCommentaires ?> commentaires)
            <?php
                endif;
            ?>
        </a>
        <a href="?page=addcomments">Ajouter un commentaire</a>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>