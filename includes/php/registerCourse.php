<?php


if (isset($_POST['submit'])) {

		$code = $_POST['code'];
		$title = $_POST['course_title'];
		$lecture_hr = $_POST['lecture_hr'];
		$credit_hr = $_POST['credit_hr'];
		$tutorial_hr = $_POST['tutorial_hr'];
		$lab_hr = $_POST['lab_hr'];
		$lab_hr = $_POST['lab_hr'];
		$description = $_POST['description'];
		$grade_type = $_POST['grade_type'];

		$model = new registerCourse();

		$model->code = $code;
		$model->title = $title;
		$model->credit_hr = $credit_hr;
		$model->lab_hr = $lab_hr;
		$model->lecture_hr = $lecture_hr;
		$model->tutorial_hr = $tutorial_hr;
		$model->description = $description;
		$model->grade_type = $grade_type;

		// var_dump($model);die();

		if ($model->save()) {
			echo "<p class='bg-success'>Course Information Registration successfull. New course information registered with the following details.<br><b><Title:</b> <i>{$model->title}</i><br><b>Code:</b><i><code>{$model->code}</code></i><br><br></p>";
			die();
		}else{
			echo "ERRROR:";
			var_dump($model->errors);die();
		}
	}

class registerCourse
{
    public string $code;
    public string $title;
    public int $credit_hr;
    public int $lecture_hr;
    public int $lab_hr;
    public int $tutorial_hr;
    public string $description;
    public string $grade_type;
    public string $errors;

    public function getCourseList(){
        try{
            // require './includes/db/connect.php';

            $conn = new connect();

            $connnn = $conn->connect_DB();

            if (!is_null($conn->connString)) {
                $query = "SELECT * FROM `course`";

                $result = mysqli_query($conn->connString,$query);
                if (mysqli_num_rows($result) > 0) {
                    return mysqli_fetch_all($result,MYSQLI_ASSOC);
                }else{
                    $this->errors = mysqli_error($conn->connString);
                }
            }else{
                $this->errors = "Error while connecting to the database.";
            }
        }catch(Exception $e){
            $this->errors = $e;
        
            }
   }
public function save(){
        try{
            require '../db/connect.php';

            $conn = new connect();

            $connnn = $conn->connect_DB();

            if (!is_null($conn->connString)) {
                $query = "INSERT INTO `course`(`code`, `title`, `credit_hr`, `lecture_hr`, `lab_hr`, `tutorial_hr`, `grade_type`,`description`) VALUES(
                    '$this->code',
                    '$this->title',
                    $this->credit_hr,
                    $this->lecture_hr,
                    $this->lab_hr,
                    $this->tutorial_hr,
                    '$this->grade_type',
                    '$this->description'
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
}