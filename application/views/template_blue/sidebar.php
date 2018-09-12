<body style="" cz-shortcut-listen="true">
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <!-- <li class="active"><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>
                    <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                    <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/signup.html"><i class="fa fa-list-ol"></i> SignUp</a></li>
                    <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/register.html"><i class="fa fa-font"></i> Register</a></li>
                    <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/timeline.html"><i class="fa fa-font"></i> Timeline</a></li>
                    <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/typography.html"><i class="fa fa-font"></i> Typography</a></li>
                    <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li><a href="http://www.prepbootstrap.com/bootstrap-theme/deepblue-admin/preview/bootstrap-grid.html"><i class="fa fa-table"></i> Bootstrap Grid</a></li> -->
                    <?php if(!$this->session->userdata('is_login')){?>
                    <li class="item-213 current <?php if(!isset($link) || $link == 'dashboard'){ echo 'active'; }?>">
                        <a href="<?=base_url()?>dashboard/pendaftaran"><img src="<?=base_url()?>assets/register.png" alt="Buat Akun Pendaftaran"><span class="image-title">Pendaftaran</span></a>
                    </li>
                    <li class="item-214 <?php if($link == 'dashboard_login'){ echo 'active'; }?>">
                        <a href="<?=base_url()?>dashboard/dasboard_login"><img src="<?=base_url()?>assets/login.png" alt="Daftar/Login"><span class="image-title">Login</span></a>
                    </li>
                    <?php }else if($this->session->userdata('is_login') && $this->session->userdata('level') == 'siswa'){?>
                    <li class="item-213 current <?php if(!isset($link) || $link == 'profil_siswa'){ echo 'active'; }?>">
                        <a href="<?=base_url()?>profil"><img src="<?=base_url()?>assets/login.png" alt="Buat Akun Pendaftaran"><span class="image-title">Profil</span></a>
                    </li>
                    <li class="item-213 current <?php if(!isset($link) || $link == 'pendaftaran'){ echo 'active'; }?>">
                        <a href="<?=base_url()?>profil/pendaftaran"><img src="<?=base_url()?>assets/register.png" alt="Buat Akun Pendaftaran"><span class="image-title">Pendaftaran </span></a>
                    </li>
                    <li class="item-213 current <?php if(!isset($link) || $link == 'pendaftaran_anda'){ echo 'active'; }?>">
                        <a href="<?=base_url()?>profil/pendaftaran_anda"><img src="<?=base_url()?>assets/pampleticon.png" alt="Buat Akun Pendaftaran"><span class="image-title">Data Pendaftaran Anda </span></a>
                    </li>
                    <?php }else if($this->session->userdata('is_login') && $this->session->userdata('level') == 'admin'){?>
                    <li class="item-213 current <?php if(!isset($link) || $link == 'admin'){ echo 'active'; }?>">
                        <a href="<?=base_url()?>admin"><img src="<?=base_url()?>assets/login.png" alt="Buat Akun Pendaftaran"><span class="image-title">Dashboard</span></a>
                    </li>
                    <li class="item-213 current <?php if($link == 'periode'){ echo 'active'; }?>">
                        <a href="<?=base_url()?>admin/periode"><img src="<?=base_url()?>assets/pampleticon.png" alt="Buat Akun Pendaftaran"><span class="image-title">Periode </span></a>
                    </li>
                    <?php }?>
                </ul>