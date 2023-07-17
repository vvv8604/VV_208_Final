<?php
chdir('../');
require 'components/header.php';?>
<?php
// контроллер страницы чтения книги

require 'models\Books.php';

$id = (int)$_GET['books_id'];// получаем ID книги


$books_item = Books::getBooksById($id);// получаем новость по ID



$pathToFile=$books_item[0]['full_text_file'];

$GetContentFile = file_get_contents($pathToFile);
    echo $GetContentFile;
    
if (file_exists($pathToFile)) {
    echo $books_item[0]['full_text_file'];
    $GetContentFile = file_get_contents($pathToFile);
    echo $GetContentFile;
}
else echo 'файл не найден';

require 'components/footer.php';?>
