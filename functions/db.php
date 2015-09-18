<?php 
Class DataBase
{
	private function config()
	{
		return include __DIR__ . '/../config.php';
	}

	public function __construct()
	{
		$config = $this->config();
		mysql_connect (
			$config['db']['host'],
			$config['db']['user'],
			$config['db']['password']
		)or die('No connect with date base' . mysql_error());
			mysql_select_db($config['db']['dbname']) or die('No select date base'. mysql_error());
	}

	public function DBQueryAll($sql)
	{
//		$this->DBConnect();
		$res = mysql_query($sql);
		if(!$res)
		{
			echo mysql_error();
			return [];
		}
	
		$ret = array();
	
		while ($row = mysql_fetch_assoc($res))
		{
			$ret[] = $row;
		};
		return $ret;
	}

	public function DBQueryOne($sql)
	{
//		DBConnect();

		$res = mysql_query($sql);
		if (!$res)
		die ("DB error: " . mysql_error());  
	
		$ret = array();
		$ret= mysql_fetch_assoc($res);
		return $ret;
	}

	public function DBQuery($sql)
	{
//		DBConnect();
		$res = mysql_query($sql);
		if (!$res)
		die ("DB error: " . mysql_error());
	}

}




