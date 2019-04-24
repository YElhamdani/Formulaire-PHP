<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        function maFunction($message, $time){
            for ($i = 0; $i < $time; $i++) { 
                echo "$message <br>";
            }
        }
      maFunction("Avec les San'Shyuums, les Sangheilis fondèrent l'Alliance Covenante à l'issue de la War of Beginnings. Après plus d'un millénaire de domination militaire, l'autorité des Sangheilis fut contestée à partir de 2525 par les Jiralhanaes, selon les plans du Haut Prophète de la Vérité de les remplacer par des guerriers plus manipulables <br>", 5);
    ?>
</body>
</html>
