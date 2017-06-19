<html>
    <head>
       
        <meta charset="UTF-8">
        <title>Cestovní kancelář</title>
        </style>
    </head>
    <body>
        
        <div id="">
            <a href="index.php">
            <h1 id="">Cestovní kancelář</h1>
            </a>
            
        </div>
        
        <div id="">
            <a href="zajezdy.php">Zájezdy</a> <br>
            <a href="Ucastnici.php">Účastníci</a> <br>
            <a href="popis.php">Popis</a><br>
        </div>
    </body>
</html>
<?php
require_once './connectdb.php';

$id_g = filter_var($_POST["id_g"], FILTER_SANITIZE_STRING);
$id_p = filter_var($_POST["id_p"], FILTER_SANITIZE_STRING);
$comment = filter_var($_POST["Comm"], FILTER_SANITIZE_STRING);
                
                $query = $conn->prepare("INSERT INTO komentare VALUES (NULL, ?, ?, ?, ?)");
                $query->bindParam(1, $id_p, PDO::PARAM_STR);
                $query->bindParam(2, $id_g, PDO::PARAM_INT);
                $query->bindParam(4, $comment, PDO::PARAM_STR);
                if($query->execute() == 1) {
                    echo "Supr. Problém byl nahlášen. \"\"<br>";
                }
                else {
                    echo "Problém se nepodařilo uložit<br>";
                }  

