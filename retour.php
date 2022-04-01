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
    $time = date("Y") . "-" . date("m") . "-" . date("d") . " " . date("H:i:s");
    if (isset($_POST['n']) and isset($_POST['TU'])) {
        $n = $_POST['n'];
        $TU = $_POST['TU'];
        $mat = $n . "TU" . $TU;
    } else {
        $n = "";
        $TU = "";
        $mat = "";
    }
    $c = mysql_connect("localhost", "root", "");
    $b = mysql_select_db('location');
    $req = "SELECT * FROM voiture WHERE Imat = $mat";
    $res = mysql_query($req);
    if (mysql_num_rows($res) >= 1)
        echo ('Voiture existante');
    else {
        $req2 = "SELECT Disponible FROM voiture WHERE  Imat = '$mat' and Disponible = 'D'";
        $res2 = mysql_query($req2);
        if (mysql_num_rows($res2) == 1)
            echo ("Attention ! Verifier le numero d'immatriculation");
        else {
            $req3 = " UPDATE voiture SET Disponible = 'D' WHERE Imat = '$mat'  ;";
            $res3 = mysql_query($req3);
            $req4 = " UPDATE louer SET DateRet = '$time' WHERE Imat  = '$mat' ";
            $res4 = mysql_query($req4);
            echo ('retour enregistrer avec succsess');
        }
    }


    ?>
</body>

</html>