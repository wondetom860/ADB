<div class="container-fluid" style="background-color: #FFF; padding: 10px;">
    <h4>New Institute Registration Form</h4>
    <form class="form" method="post" action="includes/php/registerInstitute.php" onsubmit="validateInput()">
        <div class="form-group">
            <label for="aka_instituteName">Institute Name</label>
            <input required="" type="text" name="aka_instituteName" placeholder="Institute Name" class="form-control" id="aka_instituteName" />

            <label for="aka_RISAcronyme">Acronyme</label>
            <input required="" type="text" name="aka_RISAcronyme" placeholder="..RIS" class="form-control" id="aka_RISAcronyme" />

            <label for="aka_version">RIS Version</label>
            <input type="text" name="aka_version" id="aka_version" class="form-control"  required="" placeholder="v-001" />

            <label for="aka_client">Client Name</label>
            <input type="text" name="aka_client" id="aka_client" class="form-control"  required="" placeholder="Defence University" />

            <label for="aka_college">College Name</label>
            <input type="text" name="aka_college" id="aka_college" class="form-control"  required="" placeholder="College of Resource Management" />

            <label for="aka_project">Project Title</label>
            <input type="text" name="aka_project" id="aka_project" class="form-control"  required="" placeholder="Registrar Information System" />

            <label for="aka_validFrom">Valid From (Date)</label>
            <input type="date" name="aka_validFrom" id="aka_validFrom" class="form-control"  required="" placeholder="23-04-1993" />

            <label for="aka_validTo ">Valid T0(Date)</label>
            <input type="date" placeholder="Location" name="aka_validTo" class="form-control" id="aka_validTo" />

            <br>
            <button class="form-control btn btn-success" type="submit" name="submit" onclick="return validateInput() || true;">Register</button>
        </div>
    </form>
</div>