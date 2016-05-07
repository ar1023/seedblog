<?php 
/**
* 
*/
class Blog{

	private $dbconnect = '';
	
	function __construct()
	{
		require('dbconnect.php');
		$this->dbconnect=$db;
	}
	public function index(){
		$sql = 'SELECT * FROM `blogs` WHERE `delete_flag` = 0';
		$results = mysqli_query($this->dbconnect,$sql) or die(mysqli_erroe($this->dbconnect));
		$rtn = array();
		while ($result = mysqli_fetch_assoc($results)) {
			$rtn[]=$result;
		}
		return $rtn;
	}

	public function show($id){
		$sql = 'SELECT * FROM `blogs` WHERE `id` ='.$id;
		$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect, $sql));
		$result = mysqli_fetch_assoc($results);
		return $result;
	}
	public function create($post){
		$sql = sprintf('INSERT INTO `blogs` SET `title`="%s", `body`="%s", `delete_flag`=0, `created`=NOW()',
			mysqli_real_escape_string($this->dbconnect, $post['title']),
			mysqli_real_escape_string($this->dbconnect, $post['body']))
		);
	
	public function update($id, $post){
		$sql = sprintf('UPDATE `blogs` SET `title` ="%s", `body`="%s" WHERE `id`=%d',
			mysqli_real_escape_string($this->dbconnect, $post['title']),
			mysqli_real_escape_string($this->dbconnect, $post['body']),
			$id
			);
		mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
	}
	public function delete($id){
		$sql = 'UPDATE `blogs` SET `delete_flag`=1 WHERE `id`='.$id;
		mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
	}

}


 ?>