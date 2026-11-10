<!DOCTYPE html>
<html>
    <?php
    include 'includes/head.php'
    ?>
    <body>
        <header>
            <?php
            require 'content/header.php'
            ?>
        </header>
        <br><br>

    <main class="wrap container-fluid" style="padding: 40px;">

        <div class="container-fluid">
            <!-- Modal - pop up window -->

            <div id="modal" class="modal fade" role="dialog" tabindex="-1" style="display: none; z-index: 10000;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h5 id="modelHeader"> Offer course for a group, Assign inst.and/or TA. </h5>
                        </div>
                        <div class="modal-body">
                            <div id="modalContent" class=""><p class="alert alert-success">All courses for this semester are successfully offered.</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              
            </div>
          </div>
          

     <!-- End of Mddal div. -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5" style="" id="div_1">
                    <div class="card bg-default">
                        <div class="card-header" style='text-align: center;'>
                            <h3>Register New Institution</h3>
                        </div>
                        <div class="card-body" style="border: 1px solid black;">
                            <p class="bg-info" id="workingArea1">Register New Institute</p>
                            <div class="col-md-12" id="queryForm">
                                <button class="btn btn-success btn-sm" title="cleck here to connect to databse" onclick="loadForm()">
                                    Load Registration Form
                                </button>
                                <button class="btn btn-xs btn-warning pull-right" onclick="$('#resultView_form_01').toggle('display')">v</button>
                            </div><hr>
                            <div class="col-md-12" id="resultView_form_01">

                            </div>

                        </div>
                        <div class="card-footer">
                            @WONDE TOM
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card bg-default">
                        <div class="card-header" style='text-align: center;'>
                            <h3>List Institutions</h3>
                        </div>
                        <div class="card-body" style="background-color: white;">
                            <div class="col-md-12" id="queryForm">
                                <button class="btn btn-success btn-sm" title="cleck here to connect to databse" onclick="listInstuts()">
                                    List Institutes
                                </button>
                                <button class="btn btn-xs btn-warning pull-right" onclick="$('#resultView_list_01').toggle('display')">v</button>
                            </div>
                            <div class="col-md-12" id="resultView_list_01">

                            </div>
                        </div>
                        <div class="card-footer">
                            @WONDE TOM
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card bg-default">
                        <div class="card-header" style='text-align: center;'>
                            <h3>Generate key</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12" id="queryForm3">
                                <button class="btn btn-success btn-sm" onclick="genAK_2();return false;">
                                    Generate Activate License
                                </button>
                            </div><br>
                            <div class="col-md-12 table-responsive" id="resultView_key_01">

                            </div>
                            <div class="col-md-12 table-responsive" id="genNewLic_form_container">
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            @WONDE TOM
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card bg-default">
                        <div class="card-header" style='text-align: center;'>
                            <h3>Working Area 4</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 table-responsive" id="___genLic_form_container2">
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            @WONDE TOM
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card bg-default">
                        <div class="card-header" style='text-align: center;'>
                            <h3>Working Area GEN_AK</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12" id="queryForm4">
                                <button class="btn btn-success btn-sm" onclick="generateAPK();return false;">
                                    Generate APK__2021
                                </button>
                            </div><br>
                            <div class="col-md-12" id="resultView5">

                            </div>
                        </div>
                        <div class="card-footer">
                            @WONDE TOM
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php
        include 'includes/footer.php';
        ?>
    </footer>
</body>

<!-- ___genLic_form_container -->
<!-- genNewLic_form_container -->

<script>
    
    $('#btn').click(function(){
        $('#div_1').css({
            'backgroundColor':'red',
            'padding':'10px'
        });
    });

    window.genAK_new = function(akaId){
        // load form
        $('#genNewLic_form_container').html('Loading registration form....');
        $.post('content/form_new_license.php', {akaId:akaId}).done(function(data) {
            $('#genNewLic_form_container').html(data);
        });

    }

    window.genLic = function(instId){
        // alert(instId);
        // list licenses of instId

        $('#___genLic_form_container2').html('Loading registration form....');
        $.post('content/list_licenses.php', {aka_lic_relId:instId}).done(function(data) {
            $('#___genLic_form_container2').html(data);
            // genAK_new(instId);
        });

    }
    window.update = function(id){

        console.log('Displaying modal...');
        // jQuery.noConflict(); 
        $('#myModal').modal().css({'padding':'20px','backgroundColor':'#333'});

        $('#modelHeader').html('Updaing User information');

        $('#modalContent p').html('Loading User information....');
    }

    window.listInstuts = function(){
    	$('#resultView_list_01').html('Loading registered Inst. List....');
        $.post('content/list_insts.php', {}).done(function(data) {
            $('#resultView_list_01').html(data);
        });
    }

    window.loadForm = function(){
        $('#resultView_form_01').html('Loading registration form....');
        $.post('content/form_new_institute.php', {}).done(function(data) {
            $('#resultView_form_01').html(data);
        });
    }

    window.generateAPK = function(){
        $('#resultView5').html('Generating APK...');
        $.post('content/genAK.php', {p:1}).done(function(data) {
            $('#resultView5').html(data);
        });
    }

    window.genAK_2 = function(){
        $('#resultView_key_01').html('Generating Activation Licence...');
        $.post('content/list_insts.php', {listMode:1}).done(function(data) {
            $('#resultView_key_01').html(data);
        });
    }

    window.validateInput = function() {
        return true;
    };

    
    window.registerUser = function() {
        $('#resultView3').html('Loading User registration Form....');
        $.post('content/test2.php', {}).done(function(data) {
            $('#resultView3').html(data);
        });
    };


    window.connectDb = function() {
        $('#resultView').html('Connecting to database...');

        $.post('content/test1.php', 
            {}).done(function(data) {
            $('#resultView').html(data);
        });
    };
</script>
</html>

