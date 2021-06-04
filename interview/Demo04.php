<?php
$arr = ['a', 'b', 'c'];
foreach ($arr as $key => $val) {
    $val = &$arr[$key];
}
var_dump($arr);
