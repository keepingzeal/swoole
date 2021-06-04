<?php
// var_dump($_SERVER['SERVER_ADDR']);
// var_dump($_SERVER['REMOTE_ADDR']);


// echo (100 & 1);
// $a = NULL;
// --$a;
// echo $a;

// 递增递减
// $a = 1;
// echo $a++;
// $a += 1;
// $b = $a;
// echo $b;

// 逻辑运算符
// $a = false && true;
// $a1 = true and false;
// echo $a;    // false
// echo $a1;   // true

// $a = 0;
// $b = 0;

// if ($a = 3 > 0 || $b = 3 > 0) {
//     $a++;
//     $b++;
//     var_dump($a, $b);
//     die;
//     echo $a . "\n";
//     echo $b;
// }

// function &myFunc()
// {
//     static $b = 10;
//     return $b;
// }
// echo myFunc();
// $a = &myFunc();
// $a = 100;
// echo myFunc();

// $b = 'bar';
// $my_var = 10;
// echo $bar($my_var);

// $str = '<b>abc</b>';
// $pattern = '/<b>(.*)<\/b>/';
// echo preg_replace($pattern, '\\1', $str);

// $str = '<b>abc</b><b>bcd</b>';
// $pattern = '/<b>(.*?)<\/b>/';
// echo preg_replace($pattern, '\\1', $str);
// echo "\n";
// $pattern = '/<b>(.*)<\/b>/U';
// echo preg_replace($pattern, '\\1', $str);

$str = '<img alt="高清" id="aa" src="a.jpg" />';
$pattern = '/<img.*?src="(.*?)".*? \/?>/i';
// echo preg_replace($pattern, '\\1', $str);

// $file = 'hello.txt';
// $handle = fopen($file, 'r+');
// $content = fread($handle, filesize($file));
// $content = 'Hello World,' . $content;
// fclose($handle);
// $handle = fopen($file, 'w');
// fwrite($handle, $content);
// fclose($handle);

// function loopDir($dir)
// {
//     $handle = opendir($dir);
//     while (false !== ($file = readdir($handle))) {
//         if ($file != '.' && $file != '..') {

//             if (filetype($dir . '/' . $file) == 'dir') {
//                 echo $file . '/' . loopDir($dir . '/' . $file);
//             } else {
//                 echo $file . "\n";
//             }
//         }
//     }
// }
// $dir = 'test';
// loopDir($dir);

// 冒泡排序
// function bubble_sort($arr)
// {
//     $len = count($arr);
//     for ($i = 0; $i < $len - 1; $i++) { //循环对比的轮数
//         for ($j = 0; $j < $len - $i - 1; $j++) { //当前轮相邻元素循环对比
//             if ($arr[$j] > $arr[$j + 1]) { //如果前边的大于后边的
//                 $tmp = $arr[$j]; //交换数据
//                 $arr[$j] = $arr[$j + 1];
//                 $arr[$j + 1] = $tmp;
//             }
//         }
//     }
//     return $arr;
// }
// $arr = [5, 2, 7, 4];
// print_r(bubble_sort($arr));


echo implode('--', array(1, 2, 3));
