<?php

// Indexed Array
$colors = [     // COUNT     INDEX
    'red',      //  [1]       [0]
    'blue',     //  [2]       [1]
    'green',    //  [3]       [2]
    'black',    //  [4]       [3] <---- #
    'white',    //  [5] <---- [4] ------+- #
];                                      #  |
                                        #  |
// Accessed using Index No.             #  |
echo $colors[3];                        #  |
             #---------------------------  |
echo count($colors); // output: 5 #---------

echo '<hr>';


// Assosiative Arrays
$scores = [         //   COUNT      INDEX
    'reza'  => 20,  //    [1]       [reza]
    'ali'   => 18,  //    [2]       [ali]
    'qolam' => 19,  //    [3]       [qolam]
    'jafar' => 19,  //    [4]       [jafar]
];

echo $scores['qolam'];
echo '<br>';
echo count($scores); // output: 4

echo '<hr>';


// Nested Arrays
$nested = [
    'data-1' => [
        1, // 0
        2, // 1
        3,
        4,
    ],
    'data-2' => [
        ['ali', 'reza', 'qolam'],                   // [0]
        ['ali' => 20, 'reza' => 18, 'qolam' => 19], // [1]
        [                                           // [2]
            [           // [0]
                [       // [0]
                    'flag' => [
                        'score' => [
                            10,
                            20
                        ]
                    ],
                ]
            ]
        ]
    ],
];

echo $nested['data-1'][1]; // output: 2
echo '<br>';
echo $nested['data-2'][2][0][0]['flag']['score'][1]; // output: 20


echo '<hr>';

echo $_SERVER['REQUEST_URI'];