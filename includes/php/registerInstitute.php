<?php
	
	if (isset($_POST['submit'])) {

		$aka_instituteName = $_POST['aka_instituteName'];
		$aka_RISAcronyme = $_POST['aka_RISAcronyme'];
		$aka_version = $_POST['aka_version'];
		$aka_validFrom = $_POST['aka_validFrom'];

		$aka_validTo = $_POST['aka_validTo'];
		$aka_client = $_POST['aka_client'];
		$aka_college = $_POST['aka_college'];
		$aka_project = $_POST['aka_project'];

		$model = new User();

		$model->aka_instituteName = $aka_instituteName;
		$model->aka_RISAcronyme = $aka_RISAcronyme;
		$model->aka_fingerPrint = md5(getrandmax());
		$model->aka_validFrom = $aka_validFrom;
		$model->aka_validTo = $aka_validTo;
		$model->aka_version = $aka_version;

		$model->aka_client = $aka_client;
		$model->aka_college = $aka_college;
		$model->aka_project = $aka_project;
		

		// var_dump($model);die();

		if ($model->save()) {
			echo "<p class='bg-success'>New Institute <b>{$model->aka_instituteName}</b> creation successfull.</p>";
			die();
		}else{
			echo "ERRROR:";
			var_dump($model->errors);die();
		}
	}

	/**
	 * 
	 */
	class User
	{
		public $aka_instituteName;
		public $aka_RISAcronyme;
		public $aka_validFrom;
		public $aka_validTo;
		public $aka_fingerPrint;
		public $aka_version;

		public $aka_client;
		public $aka_college;
		public $aka_project;

		public $errors;
		
		function __construct()
		{
			
		}

		public function save(){
			try{
				require '../db/connect.php';

				$conn = new connect();

				$connnn = $conn->connect_DB();

				if (!is_null($conn->connString)) {
					$query = "INSERT INTO `aka`(`aka_instituteName`, `aka_RISAcronyme`, `aka_version`, `aka_validFrom`, `aka_validTo`, `aka_fingerPrint`, `aka_client`, `aka_college`, `aka_project`) VALUES(
						'$this->aka_instituteName',
						'$this->aka_RISAcronyme',
						'$this->aka_version',
						'$this->aka_validFrom',
						'$this->aka_validTo',
						'$this->aka_fingerPrint',
						'$this->aka_client',
						'$this->aka_college',
						'$this->aka_project'
					)";


					$result = mysqli_query($conn->connString,$query);
					if (mysqli_affected_rows($conn->connString) > 0) {
						return TRUE;
					}else{
						$this->errors = mysqli_error($conn->connString);
					}
				}else{
					$this->errors = "Error while connecting to the database.";
				}
			}catch(Exception $e){
				$this->errors = $e;
			}
		return FALSE;
		}

		public function getpassword(){
			return 'wt_0000';
		}

		public function getUserName(){
			return 'wt_dec_'.rand(999,10000).date('i_s');
		}
	}
?>