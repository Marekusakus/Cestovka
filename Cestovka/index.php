 <!DOCTYPE html>
<?php require_once 'connectdb.php';
 
if(isset($_GET["site"])) {
        $request = $_GET["site"];
    }
 else {
   $request = "default.php";    
}
switch ($request){
case "games" : $result = "zajezdy.php";
        break;
}
$site="zajezdy.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cestovní kancelář</title>
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
        <div id=""></div>
        
        
    </body>
</html>
