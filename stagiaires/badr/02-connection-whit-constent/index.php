

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion à la base de données</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Connexion PDO</h1>

    <p class="success">
        <a href=""> Connexion réussie à la base de données</a>
    </p>

</div>
<style>

 {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background-color: #f4f6f8;
    margin: 0;
    padding: 0;
}

.container {
    width: 400px;
    margin: 100px auto;
    background: white;
    padding: 30px;
    text-align: center;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h1 {
    margin-bottom: 20px;
    color: #333;
}
a{
    list-style: none;
    color : black ;
}
.success {
    color: #2e7d32;
    background-color: #e8f5e9;
    padding: 15px;
    border-radius: 5px;
    border: 1px solid #2e7d32;
}

.error {
    color: #c62828;
    background-color: #fdecea;
    padding: 15px;
    border-radius: 5px;
    border: 1px solid #c62828;
}

<?php


require_once "config.dev.php";

try{
    $pdo = new PDO(
       dsn: DB_CONNECT_TYPE .
         ":host=" . DB_CONNECT_HOST . 
         ";port=" . DB_CONNECT_PORT . 
         ";dbname=" . DB_CONNECT_NAME . 
         ";charset=" . DB_CONNECT_CHARSET,
          username: DB_CONNECT_USER,
          password: DB_CONNECT_PWD
    );
} catch(PDOException $e){
     echo "Number : " . $e->getCode();
     echo "<br>Message de l'erreur :". $e->getMessage();
}
?>
</style>
</body>
</html>
``
