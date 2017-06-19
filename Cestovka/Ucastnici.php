<html>
    <head>
        <meta charset="UTF-8">
        <title>Cestovní kancelář</title>

    </head>
    <body>
        <div id="">
             <a href="index.php">
            <h1 id="howlong">Seznam účastníků</h1>
            </a>
        </div>
         <div id="menu">
            <a href="zajezdy.php">Zájezdy</a> <br>
            <a href="Ucastnici.php">Účastníci</a> <br>
            <a href="popis.php">Popis</a><br>
          
        </div>
        <div id="mid">
                <?php
                require_once 'connectdb.php';

                   $sql = "SELECT * FROM ucastnici";
                   $result = $conn->query($sql);

                    echo "Počet účastníků: ". $result->rowCount() . "<br>";
                    echo "<div>Jména účastníků:</div>";
                    if($result->rowCount() > 0) {
                        while($row = $result->fetch()) {

                            echo '<a href="ucastnik.php?site=user&id='.
                                    $row["ID"].'">'.$row["name"].
                                    '</a>';
                            echo "<br>";
                        }
                    }
                ?>
        </div>
        
       
           
        
        
    </body>
</html>
