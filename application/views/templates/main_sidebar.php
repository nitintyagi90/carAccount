<div class="col-md-3 left_color">
    <div class="left_color scroll-view">
        <div class="clearfix"></div>
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <?php if($user_permission){ ?>
            <div class="menu_section">
                <h3>Client Name</h3>
                <ul class="nav side-menu">
                    <li><a class="waves-effect waves-light" href="<?php echo base_url('dashboard');?>"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a class="waves-effect waves-light"><i class="fa fa-desktop"></i>Group <span
                                    class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">
                            <?php if(in_array('createGroup', $user_permission)){ ?>
                                <li> <a class="waves-effect waves-light" href="<?php echo base_url('groups/create');?>">Add Group</a></li>
                            <?php }
                            if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)){ ?>
                                <li> <a class="waves-effect waves-light" href="<?php echo base_url('groups/');?>">Manage Group</a></li>
                            <?php }?>
                        </ul>
                    </li>

                    <li>
                        <a class="waves-effect waves-light"><i class="fa fa-desktop"></i>Users <span
                                    class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">
                            <?php if(in_array('createUser', $user_permission)){ ?>
                                <li> <a class="waves-effect waves-light" href="<?php echo base_url('users/create');?>">Add User</a></li>
                            <?php }
                            if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)){ ?>
                                <li> <a class="waves-effect waves-light" href="<?php echo base_url('users/manage');?>">Manage User</a></li>
                            <?php }?>
                        </ul>
                    </li>

                    <li>
                        <a class="waves-effect waves-light"><i class="fa fa-desktop"></i>Purchase <span
                                    class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">
                            <?php if(in_array('createPurchase', $user_permission)){ ?>
                                <li> <a class="waves-effect waves-light" href="<?php echo base_url('purchase/create');?>">Purchase Entry</a></li>
                            <?php }
                            if(in_array('updatePurchase', $user_permission) || in_array('viewPurchase', $user_permission) || in_array('deletePurchase', $user_permission)){ ?>
                                <li> <a class="waves-effect waves-light" href="<?php echo base_url('purchase/manage');?>">Purchase Car</a></li>
                            <?php }?>
                        </ul>
                    </li>

                    <li><a class="waves-effect waves-light"><i class="fa fa-recycle"></i>Refurbishment <span
                                    class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">
                            <li> <a class="waves-effect waves-light" href="refurbishment_entry.php">Refurbishment Entry</a></li>
                            <li> <a class="waves-effect waves-light" href="refurbishment_car.php">Refurbished Car</a></li>
                        </ul>
                    </li>
                    <li><a class="waves-effect waves-light"><i class="fa fa-shopping-cart"></i>Sale <span class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">
                            <li> <a class="waves-effect waves-light" href="#">Sale Entry</a></li>
                            <li> <a class="waves-effect waves-light" href="#">Sale Car</a></li>
                        </ul>
                    </li>
                    <li><a class="waves-effect waves-light"><i class="fa fa-money"></i>Payment <span
                                    class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">
                            <li> <a class="waves-effect waves-light" href="purchase_payment_entry.php">Purchase Payment Entry</a></li>
                            <li> <a class="waves-effect waves-light" href="#">Purchase Payment</a></li>
                            <li> <a class="waves-effect waves-light" href="refurbishment_payment_entry.php">Refurbishment Payment Entry</a></li>
                            <li> <a class="waves-effect waves-light" href="refurbishment_payment_car.php">Refurbished Payment</a></li>
                            <li> <a class="waves-effect waves-light" href="#">Sale Payment Entry</a></li>
                            <li> <a class="waves-effect waves-light" href="#">Sale Payment</a></li>
                            <li> <a class="waves-effect waves-light" href="on_hole.php">On Hold</a></li>
                            <li> <a class="waves-effect waves-light" href="rc_security.php">RC Security</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php } ?>
        </div>
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
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('auth/logout') ?>">
                <span class="fa fa-power-off" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
