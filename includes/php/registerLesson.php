<?php

if (isset($_POST['submit'])) {

		$course_id = $_POST['course_id'];
		$user_id = $_POST['user_id'];
		$date = $_POST['date'];
		$time_start = $_POST['time_start'];
		$time_end = $_POST['time_end'];
		$session_type = $_POST['session_type'];
		$duration = $_POST['duration'];
		$description = $_POST['description'];
		// $grade_type = $_POST['grade_type'];

		$model = new registerLesson();

		$model->course_id = $course_id;
		$model->user_id = $user_id;
		$model->date = $date;
		$model->time_end = $time_end;
		$model->time_start = $time_start;
		$model->duration = $duration;
		$model->session_type = $session_type;
		$model->description = $description;
		// $model->grade_type = $grade_type;

		// var_dump($model);die();

		if ($model->save()) {
			echo "<p class='bg-success'>Lesson Information Registration successfull. Lesson information registered with the following details.<br><b><Title:</b> <i>{$model->courseTitle()}</i><br><b>Date:</b><i><code>{$model->date}</code></i><br><br></p>";
			die();
		}else{
			echo "ERRROR:";
			var_dump($model->errors);die();
		}
	}

class registerLesson
{
    public int $id;
    public int $course_id;
    public int $user_id;
    public string $date;
    public string $time_start;
    public string $time_end;
    public float $duration;
    public string $session_type;
    public string $description;
    public string $errors;

    public function courseTitle(){
        try{
            require_once '../db/connect.php';

            $conn = new connect();

            $connnn = $conn->connect_DB();

            if (!is_null($conn->connString)) {
                $query = "SELECT * FROM `course` WHERE id=$this->course_id";

                $result = mysqli_query($conn->connString,$query);
                if (mysqli_num_rows($result) > 0) {
                    $rs = mysqli_fetch_assoc($result);
                    return $rs['title'];
                }else{
                    $this->errors = "No course found with the given course id.";
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
            require_once '../db/connect.php';

            $conn = new connect();

            $connnn = $conn->connect_DB();
            $ddate = strtotime($this->date);

            // check if the course and user exist
            if($this->alreadyRegistered()){
                $this->errors = "The lesson is already registered for the given course and user.";
                return FALSE;
            }

            if (!is_null($conn->connString)) {
                $query = "INSERT INTO `lesson`(`course_id`, `user_id`, `date`, `time_start`, `time_end`, `duration`, `session_type`,`description`) VALUES(
                    $this->course_id,
                    $this->user_id,
                    $ddate,
                    '$this->time_start',
                    '$this->time_end',
                    $this->duration,
                    '$this->session_type',
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

    public function alreadyRegistered(){
        try{
            require_once '../db/connect.php';

            $conn = new connect();

            $connnn = $conn->connect_DB();
            $ddate = strtotime(date('Y-m-d',strtotime($this->date)));

            if (!is_null($conn->connString)) {
                $query = "SELECT * FROM `lesson` WHERE course_id=$this->course_id AND user_id=$this->user_id AND date=$ddate";

                $result = mysqli_query($conn->connString,$query);
                if (mysqli_num_rows($result) > 0) {
                    return TRUE;
                }else{
                    return FALSE;
                }
            }else{
                $this->errors = "Error while connecting to the database.";
            }
        }catch(Exception $e){
            $this->errors = $e;
        }
    }
}

// id	int	NO	PRI		
// course_id	int	NO	MUL		
// user_id	int	NO	MUL		
// date	int	NO			
// time_start	int	NO			
// time_end	int	NO			
// duration	decimal(5,2)	YES			
// session_type	enum('LECTURE','LAB','TUTORIAL')	NO		LECTURE	
// description	text	YES			