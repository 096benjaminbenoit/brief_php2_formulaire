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
}