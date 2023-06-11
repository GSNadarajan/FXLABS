<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
             <a href="https://<?=$domain?>/dashboard.php" <?php if (session::get("current_dir") == "dashboard") { ?> data-active="true"  <?php }else {?>  data-active="false"  <?php } ?> <?php if (session::get("current_dir") == "dashboard") { ?> aria-expanded="true" <?php }else {?>  aria-expanded="false" <?php } ?> class="dropdown-toggle coolapsed">

                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                    <!-- <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div> -->
                </a>

            </li>


           

            

            <li class="menu">
              <a href="#user" <?php if (session::get("current_dir") == "user") { ?> data-active="true"  <?php }else {?>  data-active="false"  <?php } ?> data-toggle="collapse" <?php if (session::get("current_dir") == "user") { ?> aria-expanded="true" <?php }else {?>  aria-expanded="false" <?php } ?> class="dropdown-toggle coolapsed">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>User</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "user") { ?> show <?php }; ?>"
                    id="user" data-parent="#accordionExample">

                    <li>
                        <a href="https://<?=$domain?>/user/manage.php"> Manage User </a>
                    </li>
                    <li class="">
                        <a href="https://<?=$domain?>/user/add.php"> Add User </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <!-- <a href="#team" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> -->
                <a href="#team" <?php if (session::get("current_dir") == "team") { ?> data-active="true"  <?php }else {?>  data-active="false"  <?php } ?> data-toggle="collapse" <?php if (session::get("current_dir") == "team") { ?> aria-expanded="true" <?php }else {?>  aria-expanded="false" <?php } ?> class="dropdown-toggle coolapsed">

                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Team</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "team") { ?> show <?php }; ?>"
                    id="team" data-parent="#accordionExample">

                    <li>
                        <a href="https://<?=$domain?>/team/manage.php"> Manage Team </a>
                    </li>
                    <li class="">
                        <a href="https://<?=$domain?>/team/add.php"> Add Team </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
             <a href="#competition" <?php if (session::get("current_dir") == "competition") { ?> data-active="true"  <?php }else {?>  data-active="false"  <?php } ?> data-toggle="collapse" <?php if (session::get("current_dir") == "competition") { ?> aria-expanded="true" <?php }else {?>  aria-expanded="false" <?php } ?> class="dropdown-toggle coolapsed">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>                                       

                                          <span>Competition</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "competition") { ?> show <?php }; ?>"
                    id="competition" data-parent="#accordionExample">

                    <li>
                        <a href="https://<?=$domain?>/competition/manage.php"> Manage Competition </a>
                    </li>
                    <li class="">
                        <a href="https://<?=$domain?>/competition/add.php"> Add Competition </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
             <a href="#journal" <?php if (session::get("current_dir") == "journal") { ?> data-active="true"  <?php }else {?>  data-active="false"  <?php } ?> data-toggle="collapse" <?php if (session::get("current_dir") == "journal") { ?> aria-expanded="true" <?php }else {?>  aria-expanded="false" <?php } ?> class="dropdown-toggle coolapsed">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>  
                    <span>Journal</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "journal") { ?> show <?php }; ?>"
                    id="journal" data-parent="#accordionExample">

                    <li>
                        <a href="https://<?=$domain?>/journal/manage.php"> Manage Journal </a>
                    </li>
                    <li class="">
                        <a href="https://<?=$domain?>/journal/add.php"> Add Journal </a>
                    </li>
                </ul>
            </li>


            <li class="menu">
             <a href="#patent" <?php if (session::get("current_dir") == "patent") { ?> data-active="true"  <?php }else {?>  data-active="false"  <?php } ?> data-toggle="collapse" <?php if (session::get("current_dir") == "patent") { ?> aria-expanded="true" <?php }else {?>  aria-expanded="false" <?php } ?> class="dropdown-toggle coolapsed">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <span>Patent</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "patent") { ?> show <?php }; ?>"
                    id="patent" data-parent="#accordionExample">

                    <li>
                        <a href="https://<?=$domain?>/patent/manage.php"> Manage Patent </a>
                    </li>
                    <li class="">
                        <a href="https://<?=$domain?>/patent/add.php"> Add Patent </a>
                    </li>
                </ul>
            </li>

         
           

           


            <!-- <li class="menu">
                <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <span>Authentication</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="authentication" data-parent="#accordionExample">
                    <li>
                        <a href="auth_login_boxed.html" target="_blank"> Login Boxed </a>
                    </li>
                    <li>
                        <a href="auth_register_boxed.html" target="_blank"> Register Boxed </a>
                    </li>
                    <li>
                        <a href="auth_lockscreen_boxed.html" target="_blank"> Unlock Boxed </a>
                    </li>
                    <li>
                        <a href="auth_pass_recovery_boxed.html" target="_blank"> Recover ID Boxed </a>
                    </li>
                    <li>
                        <a href="auth_login.html" target="_blank"> Login Cover </a>
                    </li>
                    <li>
                        <a href="auth_register.html" target="_blank"> Register Cover </a>
                    </li>
                    <li>
                        <a href="auth_lockscreen.html" target="_blank"> Unlock Cover </a>
                    </li>
                    <li>
                        <a href="auth_pass_recovery.html" target="_blank"> Recover ID Cover </a>
                    </li>
                </ul>
            </li> -->










        </ul>

    </nav>

</div>