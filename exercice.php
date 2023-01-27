<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>
    <form action="contact.php" method="get">
        <label for="">Nom</label>
        <input type="text" name="nom" placeholder="Votre nom">
        <label for="">Prénom</label>
        <input type="text" name="prenom" placeholder="Votre prénom">
        <label for="">Mail</label>
        <input type="mail" name="mail" id="" placeholder="Votre mail">
        <label for="">Téléphone</label>
        <input type="tel" name="telephone" placeholder="Votre téléphone">
        <label for="">Adresse</label>
        <input type="text" name="adresse" placeholder="Votre adresse">
        <div class="buttons">
            <button type="submit">Envoyer</button>
            <button type="reset">Annuler</button>
        </div>
    </form>
</body>
</html>