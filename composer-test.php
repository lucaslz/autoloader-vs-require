<?php

$classes = $argv[1];

$start = microtime(true);

require __DIR__ . "/vendor/autoload.php";

for ($i = 0; $i < $classes; $i++) {
    $class = 'files\Test' . $i;
    new $class;
}

$end = microtime(true);

echo "Completed in " . ($end - $start) . " seconds\n";
