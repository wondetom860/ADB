<div class="container-fluid table-responsive" style="background-color: white; padding: 10px;">
    <?php
    require '../includes/db/connect.php';
    require '../content/genAK.php';
    $conn = new connect();
    $genak = new genAK();
    $conn->connect_DB();

    $id = intval($_POST['aka_lic_relId']);
    if(!is_null($conn->connString)){
        $query = "SELECT * FROM licences WHERE lic_aka_relId = $id";
        $result = mysqli_query($conn->connString,$query);

        // var_dump($result);die();
        $c = mysqli_num_rows($result);
        $table = ''; 
        if ($c > 0) {

            $table .= "<table class='table table-hover table-sm table-striped table-bordered table-condensed' style='font-size:8pt;'>";
            $table .= "<caption>
                    <p class='bg-info' style='text-align:center;'>Licences<span style='float:right; font-style:italic' class='bg-default'>Total Count: <u>{$c}</u></span></p>
                </caption>";
            $table .= "<thead style='background-color:#ace;'>
                    <th>#</th>
                    <th>RIS Version</th>
                    <th>Valid From</th>
                    <th>Valid To</th>
                    <th>Text</th>
                    <th>Generated At</th>
                    <th>Signature</th>
                    <th>SK</th>
                    <th>PK</th>
                    <th colspan=2>Option</th>
                </thead><tbody>";
                $count = 0;
            while ($rs = mysqli_fetch_assoc($result)) {
                // generate license signature for institution profile:
                // var_dump('fsjfsk');
                $updtd = $genak->sign($rs['id'],$conn->connString);
                $option1 = "
                    <button class='btn btn-primary btn-sm' onclick='update({$rs['id']})'>Update</button>
                    ";
                    $option2 = "
                    <button class='btn btn-danger btn-sm' onclick='deleteRecord({$rs['id']})'>Delete</button>
                    ";
                $table .= "<tr>
                    <td>".++$count."</td>
                    <td>{$rs['lic_version']}</td>
                    <td>".date_format(date_create($rs['lic_validFrom']),'D, M d,Y')."</td>
                    <td>".date_format(date_create($rs['lic_validTo']),'D, M d,Y')."</td>
                    <td>{$rs['lic_text']}</td>
                    <td>".date_format(date_create($rs['lic_created_at']),'D, M d,Y')."</td>
                    <td>{$rs['lic_signature']}</td>
                    <td>{$rs['lic_sk']}</td>
                    <td>{$rs['lic_pk']}</td>
                    <td>{$option1}</td>
                    <td>{$option2}</td>
                    </tr>";
            }
            $table .= "</tbody></table";

            echo $table;
        }else{
            echo "<p class='bg-danger'>No record found---.</p>";
        }
    }else{
        var_dump("Connect failed.");
    }
?>
</div>