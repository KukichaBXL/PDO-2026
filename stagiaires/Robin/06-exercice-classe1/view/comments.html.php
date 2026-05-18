<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires - Ma passion</title>
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

    <?php
        // message de remerciement après redirection depuis le formulaire
        if(isset($_GET['merci'])):
    ?>
    <p class="merci">Merci pour votre commentaire !</p>
    <?php
        endif;
    ?>

    <?php
        if($nbCommentaires === 0):
    ?>
        <h2>Pas encore de commentaire</h2>
    <?php
        elseif($nbCommentaires === 1):
    ?>
        <h2>Il y a 1 commentaire</h2>
    <?php
        else:
    ?>
        <h2>Il y a <?= $nbCommentaires ?> commentaires</h2>
    <?php
        endif;
    ?>

    <section>
        <?php foreach($commentaires as $commentaire): ?>
        <article>
            <h3><?= $commentaire['title'] ?></h3>
            <p>Par <?= $commentaire['full_name'] ?> (<?= $commentaire['email'] ?>) le <?= $commentaire['post_date'] ?></p>
            <p><?= nl2br($commentaire['text_comment']) ?></p>
        </article>
        <?php endforeach; ?>
    </section>

    <p>
        <a href="#top">Retour en haut</a>
        |
        <a href="?page=addcomments">Ajouter un commentaire</a>
    </p>

</main>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>