<?php 
Class DBConnection 
{
	static function config()
	{
		return include __DIR__ . '/../config.php';
	}

	public function getConnection()
	{
		$config = static::config();
		$dsn = 'mysql:dbname='.$config['db']['dbname'].';host='.$config['db']['host'].'';
		return new PDO($dsn, $config['db']['user'], $config['db']['password']);
	}

	public function Query($sql)
	{
		$dbh = self::getConnection();
		$sth = $dbh->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$sth->execute([':id' => $id]);
		return $sth->fetchAll();
	}
	
		public function QueryByPk($sql, $id)
	{
		$dbh = self::getConnection();
		$sth = $dbh->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$sth->execute([':id' => $id]);
		return $sth->fetch();
	}

}




