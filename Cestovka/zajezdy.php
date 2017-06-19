
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cestovní kancelář</title>
    </head>
    <body>
        <div id="">
            <a href="index.php">
            <h1 id="howlong">Seznam zájezdů</h1>
            </a>
            
        </div>
        
        <div id="menu">
            <a href="zajezdy.php">Zájezdy</a> <br>
            <a href="Ucastnici.php">Účastníci</a> <br>
            <a href="popis.php">Popis</a><br>
          
        </div>
        <div id="mid">
                            <?php
                require_once './connectdb.php';
              
                   $sql = "SELECT * FROM zajezd";
                   $result = $conn->query($sql);

                    echo "Počet zájezdů :". $result->rowCount() . "<br>";
                    echo "<div>Seznam zájezdů:</div>";
                    if($result->rowCount() > 0) {
                        while($row = $result->fetch()) {

                            echo '<a href="komentare.php?site=user&id='.
                                    $row["ID"].'"> Název zájezdu: '.$row["name"]. "<br>ID: " . $row["ID"].
                                    '</a>';
                            echo "<br>";
                        }
                    } ?>
        </div>
        
        
    </body>
</html>
