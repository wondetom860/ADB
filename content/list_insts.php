<div class="container-fluid table-responsive" style="background-color: white; padding: 10px;">
    <?php

    require '../includes/db/connect.php';
    
    $conn = new connect();
    
    $conn->connect_DB();
    
    if(!is_null($conn->connString)){
        $query = "SELECT * FROM aka";

        $result = mysqli_query($conn->connString,$query);
        $c = mysqli_num_rows($result);
        $table = '';
        if (mysqli_num_rows($result) > 0) {

            if (isset($_POST['listMode']) && $_POST['listMode'] == 1) {
                // return in drop down mode.
                $option = "<select class='form-control' onchange='genLic($(this).val())'>";
                $option .= "<option value=''>--- Select Inst ----</option>";
                while ($rs = mysqli_fetch_assoc($result)){
                    $option .= "<option value='{$rs['id']}'>{$rs['aka_instituteName']}</option>";
                }
                $option .= "</select>";

                $div = "<div class='col-md-12'>{$option}</div>
                        <div class='col-md-12' id='___genLic_form_container'></div>";
                echo "{$div}";
                die();
            }
            $table .= "<table class='table table-hover table-sm table-striped table-bordered table-condensed' style='font-size:8pt;'>";
            $table .= "<caption>
                    <p class='bg-info' style='text-align:center;'>Registered Insts Report<span style='float:right; font-style:italic' class='bg-default'>Total Count: <u>{$c}</u></span></p>
                </caption>";
            $table .= "<thead style='background-color:#ace;'>
                    <th>#</th>
                    <th>Institution Name</th>
                    <th>Acronyme</th>
                    <th>Client Name</th>
                    <th>College Name</th>
                    <th>Project</th>
                    <th>RIS Version</th>
                    <th>Valid From</th>
                    <th>Valid To</th>
                    <th colspan=2>Option</th>
                </thead><tbody>";
                $count = 0;
            while ($rs = mysqli_fetch_assoc($result)) {
                $option1 = "
                    <button class='btn btn-primary btn-sm' onclick='update({$rs['id']})'>Update</button>
                    ";
                    $option2 = "
                    <button class='btn btn-danger btn-sm' onclick='deleteRecord({$rs['id']})'>Delete</button>
                    ";
                $table .= "<tr>
                    <td>".++$count."</td>
                    <td>{$rs['aka_instituteName']}</td>
                    <td>{$rs['aka_RISAcronyme']}</td>
                    <td>{$rs['aka_client']}</td>
                    <td>{$rs['aka_college']}</td>
                    <td>{$rs['aka_project']}</td>
                    <td>{$rs['aka_version']}</td>
                    <td>".date_format(date_create($rs['aka_validFrom']),'D, M d,Y')."</td>
                    <td>".date_format(date_create($rs['aka_validTo']),'D, M d,Y')."</td>
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