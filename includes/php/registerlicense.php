<?php
	
	if (isset($_POST['submit_lic'])) {

		$aka_version = $_POST['aka_version'];
		$aka_validFrom = $_POST['aka_validFrom'];

		$aka_validTo = $_POST['aka_validTo'];
		$lic_text = $_POST['aka_licText'];

		$model = new License();

		$model->lic_aka_relId = intval($_POST['aka_id']);
		$model->lic_text = $lic_text;
		$model->lic_validFrom = $aka_validFrom;
		$model->lic_validTo = $aka_validTo;
		$model->lic_version = $aka_version;
		

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
	class License
	{
		
		public $lic_validFrom;
		public $lic_validTo;
		public $lic_text;
		public $lic_version;
		public $lic_aka_relId;
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
					$query = "INSERT INTO `licences`(`lic_aka_relId`, `lic_version`, `lic_text`, `lic_validFrom`, `lic_validTo`, `lic_created_at`) VALUES(
						$this->lic_aka_relId,
						'$this->lic_version',
						'$this->lic_text',
						'$this->lic_validFrom',
						'$this->lic_validTo',
						now()
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