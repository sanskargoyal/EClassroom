 <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
								<?php 
						        if ($myavatar == NULL) {
						        print' <img class="img-circle img-responsive" src="../assets/images/'.$mygender.'.png" alt="'.$myfname.'">';
						        }else{
						        echo '<img src="data:image/jpeg;base64,'.base64_encode($myavatar).'" class="img-circle img-responsive"  alt="'.$myfname.'"/>';	
						        }
						
						        ?>
                       
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php echo "$myfname"; ?> <?php echo "$mylname"; ?><br><small>Super Administrator</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li class="active side_menu" id="dashboardA">
                            <a href="./" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a>
                        </li>
                        <li class="side_menu" id="studentA">
                            <a href="institute.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon glyphicon-user"></span><p>Institute</p></a>
                        </li>
                        
                        </li>
                    </ul>
                </div>
            </div>