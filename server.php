<?php

$todoList = [
    [
        'title' => 'Comprare il latte',
        'description' => 'Andare al supermercato e comprare il latte',
        'completed' => false
    ],
    [
        'title' => 'Pulire la casa',
        'description' => 'Aspirare, spolverare e lavare i pavimenti',
        'completed' => true
    ],
    [
        'title' => 'Preparare la cena',
        'description' => 'Cucinare un pasto sano per la famiglia',
        'completed' => false
    ],
    [
        'title' => 'Fare esercizio fisico',
        'description' => 'Fare una corsa di 30 minuti',
        'completed' => true
    ],
    [
        'title' => 'Leggere un libro',
        'description' => 'Leggere almeno 50 pagine del libro attuale',
        'completed' => false
    ]
];

header("Content-type: application/json");

echo json_encode($todoList);

?>
