<?php

$request = $_SERVER['REQUEST_URI'];
$result = preg_split('/\W/', $request, 0, PREG_SPLIT_NO_EMPTY);

switch ($result [1]) {
    case 'home' :
        require __DIR__ . '/App/view/home.phtml';
        break;
    case '' :
        require __DIR__ . '/App/view/home.phtml';
        break;
    case 'about' :
        $id_news = $result[2];
        require __DIR__ . '/App/view/about.phtml';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/App/view/Errors/error404.phtml';
        break;
}
?>