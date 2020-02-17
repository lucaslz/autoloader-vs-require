<?php

$classes = $argv[1];

spl_autoload_register(function ($class) {
    require __DIR__ . '/files/' . $class . '.php';
});

$start = microtime(true);
for ($i = 0; $i < $classes; $i++) {
    $class = 'Test' . $i;
    new $class;
}
$end = microtime(true);

echo "Completed in " . ($end - $start) . " seconds\n";