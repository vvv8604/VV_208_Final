<?php
// модель для работы с книгами
require 'DBConnect.php';

class Books
{
	/**
	 * метод для получения всего списка книг
	 */
	public static function getBooksList(){
		$pdo = DBConnect::getConnection();

		$query = "SELECT book_id,author,book_name,cat_id,category,short_text,full_text_file,book_image
							FROM book
							;";
		return $pdo->query($query)->fetchAll();
	}
	
	/**
	 * Метод получения данных об одной книге по ID
	 */
	public static function getBooksById($id){
		$pdo = DBConnect::getConnection();

		$query = "SELECT book_id,author,book_name,cat_id,category,short_text,full_text_file,book_image
							FROM book
							WHERE book_id = $id
							;";
		//$result = $pdo->prepare($query);
		//$result->execute([$id]);

		//return $result->fetch();

		return $pdo->query($query)->fetchAll();		
	}

	/**
	 * Метод получения данных об одной книге по категории
	 */
	public static function getBooksByCategory($cat_id){
		$pdo = DBConnect::getConnection();
		
		$query = "SELECT book_id,author,book_name,cat_id,category,short_text,full_text_file,book_image
							FROM book
							WHERE cat_id = $cat_id
							;";
		return $pdo->query($query)->fetchAll();		
	}


}
