<?php 

function config()
{
	return include __DIR__ . '/../config.php';
}

function DBConnect()
{
	$config = config();
	mysql_connect (
		$config['db']['host'],
		$config['db']['user'],
		$config['db']['password']
	)or die('No connect with date base' . mysql_error());
		mysql_select_db($config['db']['dbname']) or die('No select date base'. mysql_error());
}

function DBQueryAll($sql)
{
	DBConnect();
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

function DBQueryOne($sql)
{
	DBConnect();

	$res = mysql_query($sql);
	if (!$res)
	die ("DB error: " . mysql_error());  
	
	$ret = array();
	$ret= mysql_fetch_assoc($res);
	return $ret;
}

function DBQuery($sql)
{
	DBConnect();
	$res = mysql_query($sql);
	if (!$res)
	die ("DB error: " . mysql_error());
}





