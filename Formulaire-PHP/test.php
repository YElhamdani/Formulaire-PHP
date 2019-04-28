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
       class etudiant{

        public $nom;
        public $age;
        public $note;

        public function __construct ($nom, $age, $note){
            
            $this -> nom = $nom;
            $this -> age = $age;
            $this -> note = $note;

        }
    
       }

       $noteYounes = array("math" => 9, "francais" => 11, "histoire" => 12);
       $younes = new etudiant ("younes", "19", $noteYounes);
    ?>
</body>
</html>
