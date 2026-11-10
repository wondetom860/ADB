<?php
require_once '../includes/db/connect.php';
 require '../includes/php/registerUser.php';
 require '../includes/php/registerCourse.php';
?>
<div class="container-fluid" style="background-color: #8D0; padding: 10px;">
    <h4>Lesson Detail Registration Form</h4>
    <form class="form" method="post" action="includes/php/registerLesson.php" onsubmit="validateInput()">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="course_id">Course</label>
                    <select id="course_id" name="course_id" required class="form-control">
                        <?php
                        $courses = new registerCourse();
                        foreach($courses->getCourseList() as $user){
                            echo "<option value='{$user['id']}'>{$user['code']}: {$user['title']}</option>";
                        }
                        ?>
                    </select>

                </div>
                <div class="col-md-6">
                    <label for="user_id">User</label>
                    <select id="user_id" name="user_id" required class="form-control">
                        <?php
                        $users = new User();
                        foreach($users->getUserList() as $user){
                            echo "<option value='{$user['id']}'>{$user['first_name']} {$user['last_name']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="date">Date</label>
                    <input required="" type="date" name="date" placeholder="12/03/2026" class="form-control"
                        id="date" />

                </div>
                <div class="col-md-3">
                    <label for="time_start">Start Time</label>
                    <input required="" type="text" name="time_start" placeholder="8:30AM" class="form-control"
                        id="time_start" />

                </div>
                <div class="col-md-3">
                    <label for="time_end">End Time</label>
                    <input required="" type="text" name="time_end" placeholder="10:20AM" class="form-control"
                        id="time_end" />

                </div>
                <div class="col-md-3">
                    <label for="duration">Duration</label>
                    <input required="" type="text" name="duration" placeholder="2" class="form-control" id="duration" />

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="session_type">Session Type</label>
                    <select id="session_type" class="form-control" name="session_type" id="session_type">
                        <option value="LECTURE">Lecture</option>
                        <option value="LAB">Lab</option>
                        <option value="TUTORIAL">Tutorial</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="description">Description</label>
                    <input type="textarea" name="description" id="description" class="form-control" required=""
                        placeholder="" />
                    <br>
                    <button class="form-control btn btn-success" type="submit" name="submit"
                        onclick="return validateInput() || true;">Register</button>
                </div>
            </div>
        </div>
    </form>
</div>