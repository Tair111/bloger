<?php 
include __DIR__ . '/../functions/DBConnection.php';

abstract Class AbstractModel
	extends DBConnection
{
	static protected $table;
	static protected $columns;
	
	static function findAll()
	{
		$sql = 'SELECT * FROM ' . static::$table;
		return self::Query($sql);
	}

		static function findByPk($id)
	{
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
		return self::QueryByPk($sql, $id);
	}
	
	public function save()
	{	
		$dbh = DBConnection::getConnection();
		
		$tokens = [];
		$values = [];
		foreach(static::$columns as $column)
		{
			$tokens[] = ':' . $column;
			$values[':' . $column] = $this->$column; 
		}
		if(!isset($this->id)){
		$sql = 'INSERT INTO ' . static::$table . ' 
		('. implode(', ', static::$columns) .') 
		VALUES 
		('. implode(', ', $tokens) .')';
		$sth = $dbh->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$sth->execute($values);
		$this->id = $dbh->lastInsertId();
		}else{
			$columns = [];
			foreach(static::$columns as $column)
			{
				$columns[] = $column . '=:' . $column;
			}
			$sql = 'UPDATE ' . static::$table . '
			SET ' . implode(', ', $columns). '
			WHERE id=:id';
			$sth = $dbh->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
			$sth->execute([':id'=>$this->id] + $values);
		}
		
	}
	
	public function delete()
	{
		if(isset($this->id)){
		$sql = 'DELETE FROM ' .static::$table. ' WHERE id=:id';
		var_dump($sql);
		$dbh = DBConnection::getConnection();
		$sth = $dbh->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$sth->execute(['id'=>$this->id]);
			}
	}
}
