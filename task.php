<?php
$x = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
$x = array_reverse($x);
$result = [];
$first = true;

foreach ($x as $element) {
    $array = [];
    if ($first) {
        $array[$element] = '';
        $first = false;
    } else {
        $array[$element] = $result;
    }
    $result = $array;
}

echo('<pre>');
print_r($result);


/*
Задание вывести массив в таком виде
Array
(
    [a] => Array
        (
            [b] => Array
                (
                    [c] => Array
                        (
                            [d] => Array
                                (
                                    [e] => Array
                                        (
                                            [f] => Array
                                                (
                                                    [g] => Array
                                                        (
                                                            [h] =>
                                                        )

                                                )

                                        )

                                )

                        )

                )

        )

)
*/

