<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Testando cogido php </h1>
    <p> Ola <?php echo 'Giovani' ?> bora nessa </p>

    <?php foreach ($filteredArray as $item) : ?>
        <li> 
            <a href="#">
                <?= $item['name']?> (<?= $item['age']?>) is happy: <?= $booleanToHappy($item['happy'])?>
            </a>
        </li>
    <?php endforeach ?>
</body>
</html>