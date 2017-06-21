<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Přidej účastníka</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/logo-nav.css" rel="stylesheet">
    <style>
         body {
             color: darkgrey;
             background-position: 30% -6000%; 
             background-repeat: no-repeat;
             background-image: url("map.jpg")  
         }
    </style>
</head>

<body text="white">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="zajezdy.php">Zájezdy</a>
                    </li>
                    <li>
                        <a href="ucastnici.php">Účastníci</a>
                    </li>
                    <li>
                        <a href="popis.php">Komentáře</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="">
                <h1>Účastníci</h1>
                <br>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
            <?php
            require_once 'connectdb.php';

            $sql = "SELECT * FROM ucastnici";
            $result = $conn->query($sql);

            echo "Počet účastníků: " . $result->rowCount() . "<br>";
            echo "<div>Jména účastníků:</div>";
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch()) {

                    echo '<a href="ucastnik.php?site=user&id=' .
                    $row["ID"] . '">' . $row["name"] .
                    '</a>';
                    echo "<br>";
                }
            }
            if (!isset($_GET["name"])) {
                if (isset($_POST["submit"])) {
                    if (isset($_POST["ucastnici"]) && strlen($_POST["name"]) > 0) {
                        $ucastnik = filter_var($_POST["ucastnik"], FILTER_SANITIZE_STRING);
                        $query = $conn->prepare("INSERT INTO ucastnici VALUES (NULL, ?)");
                        $query->bindParam(1, $ucastnik, PDO::PARAM_STR);
                        if ($query->execute() == 1) {
                            echo "Účastník přidán \"\"<br>";
                        } else {
                            echo "Nepřidán<br>";
                        }
                    }
                }
            }
            
            ?>
    <br>
            <h4>Přidat účastníka</h4>
    <form method="POST">
        <textarea name="ucastnik"></textarea>
        <br>
        <input style="color:black;" type="submit" value="Odeslat" name="submit">
    </form>
        </div>





    </body>
</html>
