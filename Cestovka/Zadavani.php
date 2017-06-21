<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Logo Nav - Start Bootstrap Template</title>
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
            <h1>Komentář úspěšně přidán</h1>
            <form method="get" action="popis.php">
    <button class="btn" type="submit">Zpět</button>
</form>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php
require_once './connectdb.php';

$id_g = filter_var($_POST["id_g"], FILTER_SANITIZE_STRING);
$id_p = filter_var($_POST["id_p"], FILTER_SANITIZE_STRING);
$comment = filter_var($_POST["Comm"], FILTER_SANITIZE_STRING);
                
                $query = $conn->prepare("INSERT INTO komentare VALUES (NULL, ?, ?, ?)");
                $query->bindParam(1, $id_p, PDO::PARAM_STR);
                $query->bindParam(2, $id_g, PDO::PARAM_INT);
                $query->bindParam(3, $comment, PDO::PARAM_STR);
                if($query->execute() == 1) {
                    echo "\"\"<br>";
                }
                else {
                    echo "<br>";
                }  

