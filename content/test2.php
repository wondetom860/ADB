<div class="container-fluid" style="background-color: #8D0; padding: 10px;">
    <h4>New User Registration Form</h4>
    <form class="form" method="post" action="includes/php/registerUser.php" onsubmit="validateInput()">
        <div class="form-group">
            <label for="firstNmae">First Name</label>
            <input required="" type="text" name="first_name" placeholder="First Name" class="form-control"
                id="firstNmae" />

            <label for="lastName">Last Name</label>
            <input required="" type="text" name="last_name" placeholder="Last Name" class="form-control"
                id="lastName" />

            <label for="gender">Gender</label>
            <select id="gender" class="form-control" name="gender" id="gender">
                <option>Male</option>
                <option>Female</option>
                <option>Unknown</option>
            </select>

            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" required=""
                placeholder="+2519..." />
            <label for="location ">Address</label>
            <input type="text" placeholder="Location" name="location" class="form-control" id="location" />

            <br>
            <button class="form-control btn btn-success" type="submit" name="submit"
                onclick="return validateInput() || true;">Register</button>
        </div>
    </form>
</div>