<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$app->make(\App\Console\Kernel::class)->bootstrap();

/* ============== Write Codes Below ================= */

echo '>>> Start Laravel from CLI' . PHP_EOL;
