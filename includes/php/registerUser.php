<?php
	
	if (isset($_POST['submit'])) {

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$location = $_POST['location'];

		$model = new User();

		$model->first_name = $first_name;
		$model->last_name = $last_name;
		$model->user_name = $model->getUserName();
		$model->location = $location;
		$model->gender = $gender;
		$model->phone_number = $_POST['phone_number'];

		$model->password = $model->getpassword();

		// var_dump($model);die();

		if ($model->save()) {
			echo "<p class='bg-success'>User account creation successfull. New user user account created with the following login credentials.<br><b><User Name:</b> <i>{$model->user_name}</i><br><b>Password:</b><i>{$model->password}</i><br><br><span class='bg-warning'>Please record the login credentials before you close this window.</span></p>";
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
		public $first_name;
		public $last_name;
		public $location;
		public $gender;
		public $user_name;
		public $password;
		public $phone_number;

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
					$query = "INSERT INTO `user`(`first_name`, `last_name`, `gender`, `user_name`, `password`, `date_of_registery`, `location`,`phone_number`) VALUES(
						'$this->first_name',
						'$this->last_name',
						'$this->gender',
						'$this->user_name',
						md5('$this->password'),
						now(),
						'$this->location',
						'$this->phone_number'
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