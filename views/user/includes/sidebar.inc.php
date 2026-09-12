 
        <!--<div class="preloader flex-column justify-content-center align-items-center">-->
        <!--    <img class="animation__shake" src="https://i.gifer.com/ZZ5H.gif" alt="Mizizi" height="60" width="60">-->
        <!--</div>-->

        <nav class="main-header navbar navbar-expand navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                
                <li class="nav-item">
                    <div class="theme-switch-wrapper nav-link">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round"></span>
                        </label>
                    </div>
                </li>

            </ul>


        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href='/'  class="brand-link logo-switch">
                <img src="/public/assets/uploads/<?= $this->_company['c_logo'] ?>" alt="<?= $this->_company['c_name'] ?>" class="brand-image-xl logo-xs">
                <img src="/public/assets/uploads/<?= $this->_company['c_logo'] ?>" alt="<?= $this->_company['c_name'] ?>" class="brand-image-xs logo-xl" style="left: 12px">
            </a>
            <div class="sidebar">
                <div class="form-inline mt-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="/<?= PROFILE_NAV ?>" class="nav-link  <?php echo $this->pid=='home'?'active':'' ?> " >
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard <span id='alert' class=''></span></span>
                                </p>
                            </a>
                        </li> 
                        <hr>
                        <?php foreach($this->email_heads as $row) { ?>
                      <li class='nav-item <?php echo $this->pid==$row['user_email'] ? 'active':'' ?> d-flex justify-content-between'>
                        <a href="/user/emails/<?= $row['user_email'] ?>" class="nav-link  <?php echo $this->pid=='email'?'active':'' ?> ">
                          <i class="fa fa-envelope"></i>
                          <span class="menu-text" title="<?= $row['user_email'] ?>"><?= str_replace('gmail.com', 'g*.com', CustomFunctions::maskEmail2($row['user_email'], 5)) ?></span>
                         
                         <i style="cursor:pointer; color:#82302f" rel='<?= $row['user_email'] ?>' class='fa fa-trash clearEmail'></i>
                         </a>
                      </li>
                      <?php } ?>
                        
                        
                        
                        
                         
                 
                         
                        <hr>
                    <li class="nav-item mt-4">
                            <a href="products" class="nav-link  <?php echo $this->pid=='settings'?'active':'' ?> " >
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Settings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                 
                                <li class="nav-item">
                                    <a href="/<?= PROFILE_NAV ?>/profile" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile Settings </p>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/<?= PROFILE_NAV ?>/company" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Company Settings </p>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/<?= PROFILE_NAV ?>/change-pass" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Change Password</p>
                                    </a>
                                </li> 
                                
                         <li class="nav-item">
                            <a href="/user/logout" class="nav-link   " >
                                <i class="nav-icon fas fa-sign-out"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li> 
                          
                            </ul>
                        </li> 
                   
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>