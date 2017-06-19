

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cestovní kancelář</title>

    </head>
    <body>
        <div id="">
            <a href="index.php">
            <h1 id="">Přidej komentář</h1>
            </a>
            
        </div>
        
        
        <div id="">
            <a href="zajezdy.php">Zájezdy</a> <br>
            <a href="Ucastnici.php">Účastníci</a> <br>
            <a href="popis.php">Popis</a><br>
        </div>
        <div id="">
            <form action="Zadavani.php" method="post">
                <textarea name="id_g">Zadejte zájezd</textarea> <br>
                <textarea name="id_p">Zadejte vaše číslo</textarea> <br>
                <textarea name="Comm">Zadejte váš komentář</textarea> <br>
                <input type="submit">
</form></div>

    </body>
</html>

<?php
    require_once './connectdb.php';
     $sql = "SELECT * FROM komentare";
                   $result = $conn->query($sql);

                    echo "Celkové příspěvky: ". $result->rowCount() . "<br>";
                    echo "<div>Komentáře: </div>";
                    if($result->rowCount() > 0) {
                        while($row = $result->fetch()) {

                            echo '<a href="komentare.php?site=user&id='.
                                    $row["ID"].'"> Uživatel '.$row["id_ucastnik"]. "  Byl v " . $row["zajezd"]."  a říká:  " . $row["comment"] .
                                    '</a>';
                            echo "<br>";
                        }
                    }
   
   ?>

