<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>
<body>
    <h1>Page d'accueil</h1>
    <a href="./?page=addcomment.html.php">test</a>
    <a href="./?page=comment.html.php"></a>

    <div class="container">
        <header>
            <h1>Livre d'or</h1>
            <p>Laissez-nous un message !</p>
        </header>

        <main>
            <?php
                if (isset($insert)):
                if($insert=== false):
                ?>
                <div class="not-insert-message">
                    Échec lors de l'insertion <a href="javascript:history.go(-1);">Vérifiez votre formulaire</a>
                </div>
                <?php
                else:
                ?>
                <div class="insert-message">
                   Merci pour votre message, vous allez être redirigé
                   <script>
                    setTimeout(
                        function() {
                            window.location.href ="./";
                        }, 2500
                    )
                   </script>
                </div>
                <?php
                     endif;
                endif;
                ?>
            <!-- Formulaire d'ajout -->
            <section class="form-section">
                <form id="guestbook-form" method="POST">
                    <div class="form-group">
                        <label for="email_message">Votre email</label>
                        <input type="text" id="email_message" name="email_message" placeholder="Ex: JeanDupont@cf2.be">
                    </div>
                    
                    <div class="form-group">
                        <label for="texte_message">Votre message</label>
                        <textarea id="texte_message" name="texte_message" rows="4" placeholder="Ce que vous avez pensé de votre visite..."></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Publier le message</button>
                </form>
            </section>
          </main>
    </div>
</body>
</html>