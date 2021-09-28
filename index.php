<?php

require_once __DIR__."/vendor/autoload.php";

use Lib\Database\Connection as Connection;
use App\Core\Core as Core;

$template = file_get_contents("app/Template/structure.html");

ob_start();

$core = new Core;
$core->start($_GET);

$out = ob_get_contents();

ob_end_clean();

$templateReady = str_replace("{{dynamic_content}}", $out, $template);

echo $templateReady;
