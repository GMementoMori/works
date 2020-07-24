<?php

require __DIR__."/vendor/autoload.php"; //require autoloader

$request = $_SERVER['REQUEST_URI'];

$result = preg_split('/\W/', $request, 0, PREG_SPLIT_NO_EMPTY);

switch ($result[0]) {
    case '' :
        require __DIR__ . '/App/view/home.php';
        break;
    case 'about' :
        $id_news = $result[1];
        require __DIR__ . '/App/view/about.php';
        break;
    case 'data_min_block' :
        require __DIR__ . '/App/view/home.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/App/view/Errors/error404.html';
        break;
}
