<?php 

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

    $filteredArray = array_filter($people, function($item){
        return $item['happy'] === true;
    });

    $booleanToHappy = function ($bool){
        if ($bool){
            return 'Yeah';
        } else {
            return 'No';
        }
    };

    require 'view/view.php';

?>