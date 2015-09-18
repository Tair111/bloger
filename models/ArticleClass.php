<?php 
include_once __DIR__ . '/AbstractClass.php';
include_once __DIR__ . '/../functions/db.php';

Class ArticleClass
	extends AbstractClass
{

	private $db;
	
	public function __construct()
	{
		$this->db = new DataBase();
	}
	
	public function getAll()
	{
		return  $this->db->DBQueryAll("
			SELECT * FROM bloger
			");
	}

	public function getOne($id)
	{
		return $this->db->DBQueryOne("
			SELECT * FROM bloger WHERE id = " . $id
			);
	}

	public function delArticle($id)
	{
		$this->db->DBQuery("
			DELETE FROM bloger WHERE id = " . $id
			);
	}

	public function setArticle($title, $text)
	{
		//$date = date('Y-m-d H:i:s');
		$this->db->DBQuery("
			INSERT INTO bloger (title, text) VALUES ('$title', '$text');
		");
	}

	public function updateArticle($title, $text, $id)
	{
		$this->db->DBQuery("
			UPDATE bloger SET title='$title', text='$text' WHERE id='$id';
		");
	}
}