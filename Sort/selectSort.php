<?php
/*
 * 选择排序
 * - - - - - - - - - - - - -
 * 该算法的实现思想为：对于具有 n 个记录的无序表遍历 n-1 次，第 i 次从无序表中第 i 个记录开始，找出后序关键字中最小的记录，然后放置在第 i 的位置上
 */

function selectSort($arr)
{
    $count = count($arr);

    for ($i = 0; $i<$count; $i++) {
        $k = $i;

        for ($j = $i+1; $j < $count; $j++) {
            if ($arr[$j] < $arr[$k]) {
                $k = $j;
            }
        }

        if ($k != $i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$k];
            $arr[$k] = $tmp;
        }
    }

    return $arr;
}

$arr = [3, 12, 42, 1, 24, 5, 346, 7];
print_r(selectSort($arr));

/*
结果：
    Array
    (
        [0] => 1
        [1] => 3
        [2] => 5
        [3] => 7
        [4] => 12
        [5] => 24
        [6] => 42
        [7] => 346
    )
*/