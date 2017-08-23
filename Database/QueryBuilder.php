<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	/* 
		$table - table name
	*/

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	/*
		$table - table name
		$id - id which we search for in database
	*/

	public function selectByID($table, $id)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE id LIKE {$id}");

		$statement->execute();

		return $statement->fetch();
	}
}