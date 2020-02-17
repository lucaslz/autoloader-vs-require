<?php

$classes = $argv[1];
$start = microtime(true);

require 'files/Test0.php';
require 'files/Test1.php';
require 'files/Test2.php';
require 'files/Test3.php';
require 'files/Test4.php';
require 'files/Test5.php';
require 'files/Test6.php';
require 'files/Test7.php';
require 'files/Test8.php';
require 'files/Test9.php';
require 'files/Test10.php';
require 'files/Test11.php';
require 'files/Test12.php';
require 'files/Test13.php';
require 'files/Test14.php';
require 'files/Test15.php';

for ($i = 0; $i < $classes; $i++) {
    $class = 'Test' . $i;
    new $class;
}

$end = microtime(true);

echo "Completed in " . ($end - $start) . " seconds\n";