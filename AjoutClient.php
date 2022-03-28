<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    if( isset($_POST['NCIN']) and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Tel'])){
        $NCIN = $_POST['NCIN'];
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Tel = $_POST['Tel'];
    }
    else{
        $NCIN = "";
        $Nom = "";
        $Prenom = "";
        $Tel = "";
    }
    $c = mysql_connect("localhost","root","");
    $b = mysql_select_db('location');
    $req = "SELECT * FROM `client` WHERE Ncin = $NCIN";
    $res = mysql_query($req);
    if(mysql_num_rows($res) == 1)
        echo('Client existant');
    else
        $req2 = "INSERT INTO `client` ( `Ncin` , `Nom` , `Prenom` , `Tel` ) VALUES ('$NCIN', '$Nom', '$Prenom', '$Tel');";
        $res2 = mysql_query($req2);
        echo('client ajouter avec success')
    ?>
</body>
</html>