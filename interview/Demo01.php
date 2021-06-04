<?php
$a = range(0, 5555);
var_dump(memory_get_usage());
$b = &$a;
var_dump(memory_get_usage());
$a = range(0, 5555);
var_dump(memory_get_usage());
