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
        $c = mysql_connect("localhost","root","");
        $b = mysql_select_db('location');
        $req = "SELECT * FROM `voiture` WHERE Disponible = 'D'";
        $res = mysql_query($req);
    ?>
    
    <table border="1">
        <tr>
            <td>Matricule voiture</td>
            <td>modele voiture</td>
            <td>prix location</td>
        </tr>
    <?
        while($e = mysql_fetch_array($res)){
    ?>
        <tr>
            <td><?echo($e[0])?></td>
            <td><?echo($e[1])?></td>
            <td><?echo($e[2])?></td>
        </tr>
    <?
        }
    ?>
    </table>
    
</body>
</html>