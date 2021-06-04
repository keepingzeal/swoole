<?php
// echo 0.1 + 0.8;
$a = 0.1;
$b = 0.7;
if (bcadd($a, $b, 1) == 0.8) {
    echo '相等';
}
