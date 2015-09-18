<?php 
Class Storage
	implements Countable, Iterator
{
	public $date;
	
	public function __set($key, $val)
	{
		$this->date[$key] = $val;
	}
	
	public function __get($key)
	{
		return $this->date[$key];
	}
	
	public function count()
	{
		return count($this->date);
	}
	
	public function current()
	{
		return current($this->date);
	}
	
	public function next()
	{
		next($this->date);
	}
	
	public function key()
	{
		return key($this->date);
	}
	
	public function valid()
	{
		return null !== key($this->date);
	}
	
	public function rewind()
	{
		reset($this->date);
	}
}

/*
$obj = new Storage();

$obj->foo = '123';
$obj->bar = '567';
$obj->baz = [1,2,3];

assert('123' == $obj->foo);
assert(3 == count($obj));

foreach($obj as $key => $val){
	echo $key . '=' . $val;
	echo '<br />';
}
*/