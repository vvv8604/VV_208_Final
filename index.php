
<?php
// контроллер главной страницы

require 'models/Books.php';

$limit = 6;
$title = 'Электронная библиотека';

$books_list = Books::getBooksList();
//DBConnect::d($books_list);

require 'views/books_list.php';