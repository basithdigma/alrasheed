<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$docRoot = __DIR__;

if ($uri !== '/' && file_exists($docRoot . $uri)) {
    return false;
}

if ($uri !== '/' && file_exists($docRoot . $uri . '.php')) {
    require $docRoot . $uri . '.php';
    return true;
}

if ($uri !== '/' && file_exists($docRoot . $uri . '.html')) {
    require $docRoot . $uri . '.html';
    return true;
}

require $docRoot . '/index.php';
