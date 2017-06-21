
<html>
   <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
         body {
             color: darkgrey;
             background-position: 30% -6000%; 
             background-repeat: no-repeat;
             background-image: url("map.jpg")  
         }
    </style>
</head>

<body>

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
                
                <h1>Detaily</h1>
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
                require_once './connectdb.php';
                if(isset($_GET["id"])) {

                     $id = $_GET["id"];
                    $sql = "SELECT * FROM zajezd WHERE ID=?";
                    $query = $conn->prepare($sql);
                    $query->bindParam(1, $id, PDO::PARAM_INT);
                    $result = $query->execute();
                    if($query->rowCount() > 0) {

                        while($row = $query->fetch()) {
                            echo "Název: " . $row["name"] . "<br>";
                            echo "Kdy: " . $row["datum"] . "<br>";
                            echo "Cena: " . $row["cena"] . "Kč" . "<br>";
                            echo "Hodnocení(0-10): " . $row["hodnoceni"] . "<br>";

                        }
                    }
                    else {
                        echo "<br>Žádné informace<br>";
                    }
                } 
?>
        </div> 
    </body>
</html>
