<?php

// Tampilkan error biar gak tebak-tebakan
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Trik buat folder storage biar gak White Screen
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0755, true);
}

require __DIR__ . '/../public/index.php';