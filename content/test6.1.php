<div class="container-fluid table-responsive" style="background-color: #8D0; padding: 10px;">
    <?php

    require '../includes/db/connect.php';
    
    $conn = new connect();
    
    $conn->connect_DB();
    
    if(!is_null($conn->connString)){
        $query = "SELECT * FROM lesson";

        $result = mysqli_query($conn->connString,$query);
        $c = mysqli_num_rows($result);
        $table = '';
        if (mysqli_num_rows($result) > 0) {
            $table .= "<table class='table table-hover table-sm table-striped table-bordered table-condensed' style='font-size:10pt;'>";
            $table .= "<caption>
                    <p class='bg-info' style='text-align:center;'>Registered Lessons<span style='float:right; font-style:italic' class='bg-default'>Total Count: <u>{$c}</u></span></p>
                </caption>";
            $table .= "<thead style='background-color:#ace;'>
                    <th>#</th>
                    <th>Student</th>
                    <th>Course</th>
                    <th>Date</th>
                    <th>Session Type</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Duration</th>
                    <th colspan=2>Option</th>
                </thead><tbody>";
                $count = 0;
            while ($rs = mysqli_fetch_assoc($result)) {
                $course = $conn->getCouseById($rs['course_id']);
                $user = $conn->getUserById($rs['user_id']);

                $option1 = "
                    <button class='btn btn-primary btn-sm' onclick='updateCourse({$rs['id']})'>Update</button>
                    ";
                    $option2 = "
                    <button class='btn btn-danger btn-sm' onclick='deleteCourseRecord({$rs['id']})'>Delete</button>
                    ";
                    $course = "{$course['code']}: {$course['title']}";
                    $user = "{$user['first_name']} {$user['last_name']}";
                    $ddate = date('dMY',$rs['date']);
                    $sessType = ucfirst(strtolower($rs['session_type']));
                $table .= "<tr>
                    <td>".++$count."</td>
                    <td>{$user}</td>
                    <td>{$course}</td>
                    <td>{$ddate}</td>
                    <td>{$sessType}</td>
                    <td>{$rs['time_start']}</td>
                    <td>{$rs['time_end']}</td>
                    <td>{$rs['duration']}</td>
                    <td>{$option1}</td>
                    <td>{$option2}</td>
                    </tr>";
            }
            $table .= "</tbody></table";

            echo $table;
        }else{
            echo "<p class='bg-danger'>No record found.</p>";
        }
    }
?>
</div>