<?php
$paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis nihil iusto delectus, et animi exercitationem expedita facilis nam commodi minus, porro quisquam veritatis molestiae quae eaque. Sint similique quaerat eligendi.';
$nuovo_paragrafo = str_replace($_GET["badword"], "***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo $paragrafo . ' ' . 'lunghezza: ' . strlen($paragrafo); ?>
    </p>
    <p>
        <?php echo $nuovo_paragrafo . ' ' . 'lunghezza: ' . strlen($nuovo_paragrafo); ?>
    </p>
</body>
</html>
<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->