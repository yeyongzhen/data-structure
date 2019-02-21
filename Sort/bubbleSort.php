<?php
/*
 * 冒泡排序
 *
 */
function bubbleSort($arr) {
    $len = count($arr);

    if ($len > 0) {
        for ($i=1; $i<$len; $i++) {
            for ($j=0; $j< $len-$i; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
        }
    }

    return $arr;
}

$numbers = [33, 23, 1, 55, 24];
print_r(bubbleSort($numbers));

/*
 * 结果
 * - - - - - - - - - -
 *
    Array
    (
        [0] => 1
        [1] => 23
        [2] => 24
        [3] => 33
        [4] => 55
    )
 */