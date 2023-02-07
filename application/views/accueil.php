<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h3>Liste des objet :</h3></p>
    <p>User mail : <h4><?php echo $mail; ?></h4></p>
    <p>
        <?php foreach($listObjet as $objet) { ?>
            <p><?php echo $objet['nom']; ?></p>
        <?php } ?>
    </p>
</body>
</html>