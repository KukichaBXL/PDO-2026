
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des pays</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f5dc, #eae0c8);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 600px;
            margin: 80px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        .countries {
            text-align: center;
            line-height: 1.8;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Badr Dakir</h1>

        <div class="countries">
            <!-- Le contenu PHP s'affichera ici -->
            <?php
            # Conexion a la base MariaDB
            # LISTEPAYS SUR 3307
            #

            $connectionDB = new PDO(
                "mysql:host=localhost;dbname=listepays;port=3307;charset=utf8mb4",
                "root",
                ""
            );

            $request = $connectionDB->query("SELECT * FROM `countries`;");

            var_dump($connectionDB, $request);

            while ($badr = $request->fetch(PDO::FETCH_ASSOC)) {
                echo $badr['nom'] . " | ";
            }
            $request->closeCursor();

            $connectionDB = null;
            ?>
        </div>
    </div>

</body>
</html>
