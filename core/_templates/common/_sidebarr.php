<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">


            <li class="menu">
                <a target="" href="https://<?=$domain?>/dashboard.php" <?php if (session::get("current_dir") == "dashboard") { ?> aria-expanded="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="#user" data-toggle="collapse" <?php if (session::get("current_dir") == "user") { ?> aria-expanded="true" data-active="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span>User</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"> </polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "user") { ?> show <?php }; ?>" id="user" data-parent="#accordionExample">
                    
                    <li>
                        <a href="https://<?=$domain?>/user/manage.php"> Manage user </a>
                    </li>
                    <li class="active">
                        <a href="https://<?=$domain?>/user/add.php"> Add user </a>
                    </li>
                </ul>
            </li>
            <!-- <li class="menu">
                <a href="#team" data-active="true" data-toggle="collapse"<?php if (session::get("current_dir") == "team") { ?> aria-expanded="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span>Team</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "team") { ?> show <?php }; ?>" id="team" data-parent="#accordionExample">
                    
                    <li>
                        <a href="https://<?=$domain?>/team/manage.php"> Manage team </a>
                    </li>
                    <li class="active">
                        <a href="https://<?=$domain?>/team/add.php"> Add team </a>
                    </li>
                </ul>
            </li> -->

            <li class="team">
                <a href="#team" <?php if (session::get("current_dir") == "team") { ?> data-active="true"  <?php }else {?>  data-active="false"  <?php } ?> data-toggle="collapse" <?php if (session::get("current_dir") == "team") { ?> aria-expanded="true" <?php }else {?>  aria-expanded="false" <?php } ?> class="dropdown-toggle coolapsed">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>Team</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "team") { ?> show <?php }; ?>" id="team" data-parent="#accordionExample">
                    
                    <li>
                        <a href="https://<?=$domain?>/team/manage.php"> Manage Team </a>
                    </li>
                    <li class="active">
                        <a href="https://<?=$domain?>/team/add.php"> Add Team </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#competition" data-active="true" data-toggle="collapse"<?php if (session::get("current_dir") == "competition") { ?> aria-expanded="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span>Competition</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "competition") { ?> show <?php }; ?>" id="competition" data-parent="#accordionExample">
                    
                    <li>
                        <a href="https://<?=$domain?>/competition/manage.php"> Manage Competition </a>
                    </li>
                    <li class="active">
                        <a href="https://<?=$domain?>/competition/add.php"> Add Competition </a>
                    </li>
                </ul>
            </li>

             <li class="menu">
                <a href="#patent" data-active="true" data-toggle="collapse"<?php if (session::get("current_dir") == "patent") { ?> aria-expanded="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span>Patent</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "patent") { ?> show <?php }; ?>" id="patent" data-parent="#accordionExample">
                    
                    <li>
                        <a href="https://<?=$domain?>/patent/manage.php"> Manage Patent </a>
                    </li>
                    <li class="active">
                        <a href="https://<?=$domain?>/patent/add.php"> Add Patent </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#journal" data-active="true" data-toggle="collapse"<?php if (session::get("current_dir") == "journal") { ?> aria-expanded="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span>Journal</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "journal") { ?> show <?php }; ?>" id="journal" data-parent="#accordionExample">
                    
                    <li>
                        <a href="https://<?=$domain?>/journal/manage.php"> Manage Journal </a>
                    </li>
                    <li class="active">
                        <a href="https://<?=$domain?>/journal/add.php"> Add Journal </a>
                    </li>
                </ul>
            </li>

        </ul>

    </nav>

</div>
<!--  END SIDEBAR  -->