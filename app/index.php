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

    <?php 
        $boolean = false;

        if ($boolean) {
            $message = 'Verdadeiro';
        }

        $people = [
            [
                'name' => 'irineu',
                'age' => 12,
                'happy' => true
            ],
            [
                'name' => 'giovani',
                'age' => 19,
                'happy' => false
            ],
            [
                'name' => 'guilherme',
                'age' => 16,
                'happy' => true
            ]
        ];

        function filterArray(array $array) {
            foreach ($array as $person) {
                if ($person['happy'] === true) {
                    echo "<li>" . $person['name'] . "</li>";
                };
            }
        }

        filterArray($people);

    ?>

    

</body>
</html>