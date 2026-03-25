<?php

// Paksa folder temporary buat Laravel di Vercel
putenv('APP_STORAGE=/tmp');
putenv('VIEW_COMPILED_PATH=/tmp');

// Tampilkan error (biar gak putih doang kalau ada masalah)
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../public/index.php';