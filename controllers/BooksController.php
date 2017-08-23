<?php

require 'Database/Connection.php';
require 'Database/QueryBuilder.php';
require 'Database/Book.php';

class BooksController
{
	public function index()
	{
		$config = require 'config.php';

		$books = new QueryBuilder(Connection::make($config['database']));
		$books = $books->selectAll('books_table');

		require 'views/listofbooks.view.php';
	}

	public function about()
	{
		$config = require 'config.php';
		
		$books = new QueryBuilder(Connection::make($config['database']));

		$bookId = $_REQUEST['id'];

		$book = $books->selectByID('books_table', $bookId);

		require 'views/aboutbook.view.php';
	}
}