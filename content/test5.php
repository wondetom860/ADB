<div class="container-fluid" style="background-color: #8D0; padding: 10px;">
    <h4>New Course Information Registration Form</h4>
    <form class="form" method="post" action="includes/php/registerCourse.php" onsubmit="validateInput()">
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="code">Course Code</label>
                    <input required="" type="text" name="code" placeholder="Course Code" class="form-control"
                        id="code" />

                </div>
                <div class="col-md-8">
                    <label for="course_title">Course Title</label>
                    <input required="" type="text" name="course_title" placeholder="Course Title" class="form-control"
                        id="course_title" />

                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="credit_hr">Credit Houtr</label>
                    <input required="" type="text" name="credit_hr" placeholder="Credit Hour" class="form-control"
                        id="credit_hr" />

                </div>
                <div class="col-md-3">
                    <label for="lecture_hr">Lecture Houtr</label>
                    <input required="" type="text" name="lecture_hr" placeholder="Lecture Hour" class="form-control"
                        id="lecture_hr" />

                </div>
                <div class="col-md-3">
                    <label for="lab_hr">Lab Hour</label>
                    <input required="" type="text" name="lab_hr" placeholder="Lab Hour" class="form-control"
                        id="lab_hr" />

                </div>
                <div class="col-md-3">
                    <label for="tutorial_hr">Tutorial Hour</label>
                    <input required="" type="text" name="tutorial_hr" placeholder="Titorial Hour" class="form-control"
                        id="tutorial_hr" />

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="grade_type">Grade Type</label>
                    <select id="grade_type" class="form-control" name="grade_type" id="grade_type">
                        <option value="LETTER_GRADE">Letter</option>
                        <option value="TOTAL_SUM">Total Sum</option>
                        <option value="PASS_FAIL">Pass/Fail</option>
                        <option value="THESIS_EVALUATION">THESIS EVALUATION</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="description">Course Description</label>
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