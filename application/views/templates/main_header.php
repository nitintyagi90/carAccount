<?php
$query = $this->db->get_where('users', array('user_id' => $this->session->userdata['id']));
$result = $query->row();
?>

<body class="nav-medium">

<div class="container body">
    <div class="main_container">
        <a href="javascript:" id="scroll" style="display: none;"><span></span></a>
        <div class="col-md-3 left_color">
            <div class="left_color scroll-view">
                <div class="navbar nav_title">
                    <a href="<?php echo base_url('dashboard');?>" class="medium-logo">
                        <img src="<?php echo base_url('assets/');?>global/images/logo.png" alt="medium-logo">
                    </a>
                    <a href="<?php echo base_url('dashboard');?>" class="small-logo">
                        <img src="<?php echo base_url('assets/');?>global/images/logo.png" alt="medium-logo">
                    </a>
                </div>

                <div class="clearfix"></div>
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="fa fa-cog" aria-hidden="true"></span>
                    </a>
                    <a class="toggle-fullscreen" data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="fa fa-arrows-alt" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                        <span class="fa fa-power-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        <div class="responsive-logo">
                            <a href="<?php echo base_url('dashboard');?>">
                                <img src="<?php echo base_url('assets/');?>global/images/logo.png" alt="main-logo">
                            </a>
                        </div>
                    </div>
                    <div class="pull-left">
                        <h4 class="owner-name">My Car Account</h4>
                    </div>

                    <div class="topbar-right">
                        <div class="nav navbar-nav navbar-right">
                            <div class="pull-left">
                                <h4 class="owner-name">
                                    <?php
                                    if(!empty($result)){
                                        echo $result->user_name;
                                    }
                                    ?>
                                </h4>
                            </div>
                            <div class="dropdown user-profile right-icon">
                                <a href="javascript:" class="dropdown-toggle waves-effect waves-light"
                                   data-toggle="dropdown"
                                   aria-expanded="false">
                                    <?php if($result->user_profile!==null){?>
                                        <img src="<?php echo $result->user_profile ?>" alt="user">
                                    <?php }else{ ?>
                                        <img src="<?php echo base_url('assets/');?>global/images/user10.jpg" alt="user">

                                    <?php } ?>

                                </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                                <a href="<?php echo base_url('users/profile/');?>" class="waves-effect waves-light">

                                                    <i class="fa fa-user" aria-hidden="true"></i>Profile
                                                </a>

                                        </li>
                                        <li>


                                                <a href="<?php echo base_url('users/setting/');?>" class="waves-effect waves-light">
                                                    <i class="fa fa-cog" aria-hidden="true"></i>Settings
                                                </a>


                                        </li>

                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?php echo base_url('auth/logout') ?>" class="waves-effect waves-light">
                                                <i class="fa fa-power-off text-danger" aria-hidden="true"></i> Logout</a>
                                        </li>
                                    </ul>




                            </div>

                        </div>

                    </div>
                </nav>
            </div>
        </div>
        <div class="clearfix"></div>
