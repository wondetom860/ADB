<div class="container-fluid table-responsive" style="background-color: #8D0; padding: 10px;">
    <?php

    require '../includes/db/connect.php';
    
    $conn = new connect();
    
    $conn->connect_DB();
    
    if(!is_null($conn->connString)){
        $query = "SELECT * FROM user";

        $result = mysqli_query($conn->connString,$query);
        $c = mysqli_num_rows($result);
        $table = '';
        if (mysqli_num_rows($result) > 0) {
            $table .= "<table class='table table-hover table-sm table-striped table-bordered table-condensed' style='font-size:10pt;'>";
            $table .= "<caption>
                    <p class='bg-info' style='text-align:center;'>Registered Users Report<span style='float:right; font-style:italic' class='bg-default'>Total Count: <u>{$c}</u></span></p>
                </caption>";
            $table .= "<thead style='background-color:#ace;'>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Location</th>
                    <th>Date of Join</th>
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
                    <td>{$rs['first_name']} {$rs['last_name']}</td>
                    <td>{$rs['user_name']}</td>
                    <td>{$rs['location']}</td>
                    <td>".date_format(date_create($rs['date_of_registery']),'D, M d,Y')."</td>
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