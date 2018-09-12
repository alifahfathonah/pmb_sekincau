                <ul class="nav navbar-nav navbar-right navbar-user">
                    <!-- <li class="dropdown messages-dropdown">
                        <a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html#"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li> -->
                    <li class="menu-item first"><a href="<?=base_url()?>" class="menu-item first"><span class="menu"><span class="menu-title">Home</span></span></a></li>
                    <?php if($this->session->userdata('is_login')){ ?>
                    <li class="menu-item first"><a href="<?=base_url()?>dashboard/logout" class="menu-item first"><span class="menu"><span class="menu-title">Keluar</span></span></a></li>
                    <?php }?>
                </ul>
            </div>
        </nav>