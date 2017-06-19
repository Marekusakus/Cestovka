<html>
    <head>
        <meta charset="UTF-8">
        <title>HowLongToBeat</title>
    </head>
    <body>
        <div id="">
            <a href="index.php">
            <h1 id="howlong">Cestovní kancelář</h1>
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
                if(isset($_GET["id"])) {

                     $id = $_GET["id"];
                    $sql = "SELECT * FROM ucastnici WHERE ID=?";
                    $query = $conn->prepare($sql);
                    $query->bindParam(1, $id, PDO::PARAM_INT);
                    $result = $query->execute();
                    if($query->rowCount() > 0) {

                        while($row = $query->fetch()) {
                            echo "Jméno: " . $row["name"] . "<br>";
                            echo "Název zájezdu: " . $row["nazev"] . "<br>";

                        }
                    }
                    else {
                        echo "<br>Bezproblémový jedinec<br>";
                    }
                } ?>
        </div>
        
        
    </body>
</html>

