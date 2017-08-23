<?php

class Book
{
	public $title;
	public $year;
	public $author;
	public $genre;

	public function __construct($title, $year, $author, $genre)
	{
		$this->title  = $title;
		$this->year   = $year;
		$this->author = $author;
		$this->genre  = $genre;
	}

	
}