
<?php

require('quiz_db_credentials.php');
class quiz_connections
{
	public $db = null;
	public $results = null;

	function db_connect(){
		//connection
		$this->db = mysqli_connect(servername,username,password,dbname);
		//test the connection
		if (mysqli_connect_errno()) {
			return false;
		}else{
			return true;
		}
	}

	function quiz_query($sqlQuery){
		if (!$this->db_connect()) {
			return false;
		}
		elseif ($this->db==null) {
			return false;
		}


		$this->results = mysqli_query($this->db,$sqlQuery);
		if ($this->results == false) {
			return false;
		}else{
			return true;
		}

	}


	function quiz_fetch(){
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}

		return mysqli_fetch_assoc($this->results);

	}
}
?>