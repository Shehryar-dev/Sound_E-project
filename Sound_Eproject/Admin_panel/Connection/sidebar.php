<div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">

                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a href="mus-user.php">
                                <img src="data/profile/<?php echo $_SESSION['ADMIN_IMAGE']  ?> " alt="./data/us-icon.png" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                                <a href="./mus-user.php"><?php echo $_SESSION['ADMIN_NAME'] ?></a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Music Artist</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>	


                        <li class="open"> 
                            <a href="index-music.php">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-music"></i>
                                <span class="title">Genres</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mus-genre-add.php" >Add Genre</a>
                                </li>
                                <li>
                                    <a class="" href="mus-genres.php" >All Genres</a>
                                </li>
                               
                            </ul>
                        </li>
                        
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span class="title">Artists</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mus-artist-add.php" >Add Artist</a>
                                </li>
                                <li>
                                    <a class="" href="mus-artists.php" >All Artists</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-microphone"></i>
                                <span class="title">Albums</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mus-album-add.php" >Add Album</a>
                                </li>
                                <li>
                                    <a class="" href="mus-albums.php" >All Albums</a>
                                </li>
                               
                            </ul>
                        </li>
                        
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-music"></i>
                                <span class="title">Songs</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mus-song-add.php" >Add Song</a>
                                </li>
                                <li>
                                    <a class="" href="mus-song.php" >All Song</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-file-video-o"></i>
                                <span class="title">Songs Videos</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mus-video-add.php" >Add Video Song</a>
                                </li>
                                <li>
                                    <a class="" href="mus-video-all.php" >All Video Song</a>
                                </li>
                               
                            </ul>
                        </li>
                        
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-pencil-square-o"></i>
                                <span class="title">Roles</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                
                                <li>
                                    <a class="" href="mus-role-add.php" >Add Role</a>
                                </li>
                                <li>
                                    <a class="" href="mus-role.php" >Show Roles</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span class="title">User</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                
                                <li>
                                    <a class="" href="mus-user-add.php" >Add User</a>
                                </li>
                                <li>
                                    <a class="" href="mus-user.php" >Show Users</a>
                                </li>
                               
                            </ul>
                        </li>
                        
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Reports</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mus-timeline.php" >Visitors</a>
                                </li>
                               
                            </ul>
                        </li>
                      
                        

                    </ul>

                </div>
                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>New Songs</span>
                            <span class='total'>4247</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2">
                        <div class="data">
                            <span class='title'>Visitors</span>
                            <span class='total'>3146</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>

                </div>



            </div>