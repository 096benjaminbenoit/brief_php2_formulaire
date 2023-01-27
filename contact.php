<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<?php
$contacts = [
    "last_name" => $_GET["nom"],
    "firt_name" => $_GET["prenom"],
    "email" => $_GET["mail"],
    "phone" => $_GET["telephone"],
    "adress" => $_GET["adresse"]
];

if(empty($_GET["nom"])) {
    echo "Votre nom est vide";
    echo "<br>";
} if(empty($_GET["prenom"])) {
    echo "Votre prenom est vide";
    echo "<br>";
} if (empty($_GET["mail"])) {
    echo "Votre mail est vide";
    echo "<br>";
} if (empty($_GET["telephone"])) {
    echo "Votre telephone est vide";
    echo "<br>";
} if (empty($_GET["adresse"])) {
    echo "Votre adresse est vide";
    echo "<br>";
}

?>
<table class="table">
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>MAIL</th>
            <th>TELEPHONE</th>
            <th>ADRESSE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$_GET["nom"]?></td>
            <td><?=$_GET["prenom"]?></td>
            <td><?=$_GET["mail"]?></td>
            <td><?=$_GET["telephone"]?></td>
            <td><?=$_GET["adresse"]?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
