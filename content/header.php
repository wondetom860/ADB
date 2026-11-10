        <header>
            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark lighten-3 scrolling-navbar" >
              <div class="container-fluid" style="background-color: #07445C;">

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#leftSideBar"
                  aria-controls="leftSideBar" id="leftsiedbartoggle" aria-expanded="true" aria-label="Toggle sidebar">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="" style="border-right: 2px solid black;">
                  <strong class="blue-text">ADB - PHP - Server Scripting.</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                  <!-- Left -->
                  <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                      <a class="nav-link waves-effect" href="#">Home
                        <span class="sr-only">(current)</span>
                      </a>
                    </li> -->
                    <li class="nav-item dropdown" title="Online Users">
                      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-554" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Users <span id="activeUsers_count" style="background-color: red; border-radius: 50%; color: white; padding: 1px 4px;"><?php echo 0 ; ?></span>
                      </a>
                      <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-554" id="activeUsers">
                          Loading active users....
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link waves-effect" href="javascript:showActiveUsers()"
                        >Requsts</a>
                    </li>
                    <!-- <li class="nav-item dropdown" title="Unseen letters">
                      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Unread <span id="unread_count3" style="background-color: red; border-radius: 50%; padding: 1px 4px;"><?php echo $_SESSION['unread']; ?></span>
                      </a>
                      <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555" id="notices">
                      </div>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link waves-effect" href="javascript:takeFeedBack()"
                        >Feedback</a>
                    </li>
                  </ul>

                  <!-- Right -->
                </div>
                <ul class="navbar-nav nav-flex-icons" style="vertical-align: middle;">
                    <li class="nav-item" style="vertical-align: middle; margin-left: 20px;">
                        <form class="form-inline mt-2 mt-md-0 d-flex justify-content-center" style="">
                            <input type="text" aria-label="Search" class="form-control" placeholder="Search" style="" id="search_input">
                            <div id="searchOptions" style="display: none;" class="form-group">
                                 <!--List of serch options here [user, letter, notice]-->
                                 <select id="searchOptionsSelect" class="form-control" title="Search for [user, letter , or notice]">
                                     <option selected="" value="LETTER">Letter</option>
                                     <option value="ORDINARY_NOTICE">Public Notice</option>
                                     <option value="USER">User</option>
                                 </select>
                            </div>
                        </form>
                        <div class="container" style="display: none; border: 1px solid black;  width: auto; height: auto; position: absolute; top: 53px; left: 350px;" id="search_result">
                                
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="container">
                        	<img src="web/uploads/avatar.png" alt="profile image" height="40" width="50">
                        </div>
                    </li>
                  </ul>

              </div>
            </nav>
            <!-- Navbar -->

          </header>