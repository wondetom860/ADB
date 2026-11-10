<?php

if (!isset($_POST['akaId'])) {
    return "Invalid Requiest, Pleae Select Institute first";
}

require '../includes/db/connect.php';
    
$conn = new connect();

$conn->connect_DB();

if(!is_null($conn->connString)){
    $id = intval($_POST['akaId']);
    $query = "SELECT * FROM aka WHERE id = {$id}";

    $result = mysqli_query($conn->connString,$query);
    $c = mysqli_num_rows($result);

    $akaObj = mysqli_fetch_assoc($result);
    // var_dump($akaObj['aka_instituteName']);die();
}else{
    return "Sucn Record not found.";
}
?>

<div class="container-fluid" style="background-color: #FFF; padding: 10px; border:2px dashed black;">
    <h4>New License Generate Form</h4>
    <form class="form" method="post" action="includes/php/registerlicense.php" onsubmit="validateInput()">
        <div class="form-group">
            <input required="" readonly="" type="hidden" name="aka_id" value="<?php echo $akaObj['id'] ?>" class="form-control" />
            <label for="aka_instituteName">Institute Name</label>
            <input required="" readonly="" type="text" name="aka_instituteName" value="<?php echo $akaObj['aka_instituteName'] ?>" class="form-control" id="aka_instituteName" />

            <label for="aka_RISAcronyme">Acronyme</label>
            <input required="" readonly="" type="text" name="aka_RISAcronyme" value="<?php echo  $akaObj['aka_RISAcronyme'] ?>" class="form-control" id="aka_RISAcronyme" />

            <label for="aka_version">RIS Version</label>
            <input type="text" name="aka_version" id="aka_version" class="form-control"  required="" value="<?php echo $akaObj['aka_version'] ?>" />

            <label for="aka_client">Client Name</label>
            <input type="text" name="aka_client" id="aka_client" class="form-control"  required="" value="<?php echo $akaObj['aka_client'] ?>" />

            <label for="aka_college">College Name</label>
            <input type="text" name="aka_college" id="aka_college" class="form-control"  required="" value="<?php echo $akaObj['aka_college'] ?>" />

            <label for="aka_project">Project Title</label>
            <input type="text" name="aka_project" id="aka_project" class="form-control"  required="" value="<?php echo $akaObj['aka_project'] ?>" />

            <div class="container-fluid" style="background-color: gold;">
                <label for="aka_validFrom">Valid From (Date)</label>
                <input type="date" name="aka_validFrom" id="aka_validFrom" class="form-control"  required="" placeholder="23-04-1993" />

                <label for="aka_validTo ">Valid T0(Date)</label>
                <input type="date" placeholder="Location" name="aka_validTo" class="form-control" id="aka_validTo" />

                <label for="aka_licText">License Text</label>
                <input type="text" name="aka_licText" id="aka_licText" class="form-control"  required="" placeholder="------" />
            </div>
            <span style="font-style: italic; color: red; cursor: pointer;" onclick="generateKey(<?php echo "{$akaObj['id']}"; ?>)">Get Key</span>

            <br>
            <button class="form-control btn btn-success" type="submit" name="submit_lic" onclick="return validateInput() || true;">Register</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    window.generateKey = function(akaId){
        dateFrom = $('#aka_validFrom').val();
        dateTo = $('#aka_validTo').val();
        version = $('#aka_version').val();

        $.post('content/generateLic.php',
            {
                akaId:akaId,
                dateFrom:dateFrom,
                dateTo:dateTo,
                version:version
            }).done(function(data){ 
                if (data == 1) {
                    // generate key
                    $.post('content/genAK.php', {p:1}).done(function(data) {
                        $('#aka_licText').val(data);
                    });
                }else{
                    $("#aka_licText").val(data); 
                }
                
        });
    }
</script>