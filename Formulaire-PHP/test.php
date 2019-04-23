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
       
     define("MON_URL","google.com");

     function myfunction(){
        echo "Le site ". MON_URL . " c'est de la balle !";
     }

     myfunction();
    ?>
</body>
</html>
