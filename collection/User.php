<?php

	
	class User
	{
		
		private $db;
		public function __construct()
		{
			$this->db = new Database;

		}
		public function getRowCount($username){
			$this->db->query("SELECT * FROM users WHERE username =:username");
			$this->db->bind(':username', $username);
			$rows= $this->db->countRows();
			return $rows;
		}
		public function getUser($username){
			$this->db->query("SELECT * FROM users WHERE username =:username");
			$this->db->bind(':username', $username);
			$user_row = $this->db->singleRow();
			return $user_row;
		}
		public function signUpUser($userData){
			$this->db->query("INSERT users(username, password) VALUES(:username, :password)");
			$this->db->bind(':username', $userData['username']);
			$this->db->bind(':password', $userData['password']);

			if ($this->db->execute()) {
				return true;
			}
			else{
				return false;
			}
		}
		
		
		
	}



?>