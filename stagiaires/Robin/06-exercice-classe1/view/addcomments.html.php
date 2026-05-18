<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un commentaire - Ma passion</title>
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
        // affiché seulement si l'insertion a échoué (sinon on est déjà redirigé)
        if(isset($insert) && $insert === false):
    ?>
    <p class="erreur">Échec de l'envoi, vérifiez votre formulaire.</p>
    <?php
        endif;
    ?>

    <h2>Ajouter un commentaire</h2>

    <form id="commentForm" method="POST" action="?page=addcomments">

        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <span id="emailError"></span>
        </div>

        <div>
            <label for="full_name">Nom complet</label>
            <input type="text" id="full_name" name="full_name">
            <span id="fullNameError"></span>
        </div>

        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title">
            <span id="titleError"></span>
        </div>

        <div>
            <label for="text_comment">Commentaire</label>
            <textarea id="text_comment" name="text_comment" rows="6"></textarea>
            <span id="textCommentError"></span>
        </div>

        <button type="submit">Publier</button>
    </form>

</main>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>