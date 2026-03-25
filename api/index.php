<?php

// 1. Tampilkan Error Langsung ke Layar (Biar gak putih doang)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Paksa Laravel Pakai Folder /tmp (Satu-satunya folder yang bisa ditulis di Vercel)
$tmpDir = '/tmp/storage/framework';
$dirs = ['/views', '/sessions', '/cache'];
foreach ($dirs as $dir) {
    if (!is_dir($tmpDir . $dir)) {
        mkdir($tmpDir . $dir, 0755, true);
    }
}

putenv("VIEW_COMPILED_PATH=$tmpDir/views");
putenv("SESSION_DRIVER=array"); // Paksa session ke RAM aja, jangan ke file
putenv("LOG_CHANNEL=errorlog"); // Log ke console Vercel, jangan ke file

require __DIR__ . '/../public/index.php';