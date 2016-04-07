<?php 

	/**
	* DATABASE CONNECTION
	*/
	class Database
	{
		protected $host			= "localhost";
		protected $username		= "root";
		protected $password		= "null";
		protected $db 			= "sms";
		public $conn;

		function __construct()
		{
			$this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);			

			if($this->conn->connect_error)
			{
				die("Error: " . $this->conn->connect_error);
			}
		}
	}

	/**
	* ASSIGNMENTS CLASS
	*/
	class Assignment extends Database
	{
		public $data = [];
		
		function __construct($connection)
		{
			$this->conn = $connection;
		}

		public function getAllAssignments()
		{
			if(count(func_get_args())>0){
				$id = func_get_arg(0);
				$sql = "SELECT * FROM assignments WHERE student_id=$id";
			}else{
				$sql = "SELECT * FROM assignments";
			}
		
			$result = $this->conn->query($sql);

			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					array_push($this->data, $row);
				}
			}
			else{
				return "No any assignment";
			}

			return $this->data;
		}
	}

	class Class extends Database{
		public $class_name;
		public $student_id;
		public $teacher_id;

		public function addClass($c_name,$std_id,$t_id){
			$sql = "INSERT INTO class (class_name,student_id, teacher_id) VALUES ('$c_name','$std_id','$t_id')";
			$this->conn->query($sql);
		}

	}