    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- prealoader area end -->
    <!-- header area start -->
    <header>
        <div class="header-area h3-style">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="<?= $this->Url->build('/', true) ?>">
                                <img src="<?= $this->Url->build('/template_front/', true) ?>png/logo2.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="main-menu">
                            <nav>
                                <ul id="navigation">
                                    <li class="<?php if(isset($menu_active) && $menu_active == 1){echo 'active';} ?>">
                                        <a href="<?= $this->Url->build('/', true) ?>">Home</a>
                                    </li>
                                    <li class="<?php if(isset($menu_active) && $menu_active == 2){echo 'active';} ?>">
                                        <a href="<?= $this->Url->build('/skills', true) ?>">Skills</a>
                                    </li>
                                    <li class="<?php if(isset($menu_active) && $menu_active == 3){echo 'active';} ?>">
                                        <a href="<?= $this->Url->build('/educacion', true) ?>">Educación</a>
                                    </li>
                                    <!-- <li class="<?php if(isset($menu_active) && $menu_active == 4){echo 'active';} ?>">
                                        <a href="<?= $this->Url->build('/experiencia', true) ?>">Experiencia</a>
                                    </li> -->
                                    <!-- <li class="<?php if(isset($menu_active) && $menu_active == 5){echo 'active';} ?>">
                                        <a href="<?= $this->Url->build('/proyectos', true) ?>">Proyectos</a>
                                    </li>
                                    <li class="<?php if(isset($menu_active) && $menu_active == 6){echo 'active';} ?>">
                                        <a href="<?= $this->Url->build('/blog', true) ?>">Blog</a>
                                    </li> -->
                                    <li class="<?php if(isset($menu_active) && $menu_active == 7){echo 'active';} ?>">
                                        <a href="<?= $this->Url->build('/contacto', true) ?>">Contacto</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-2 d-none d-lg-block text-right">
                        <div class="humberger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- offset wrapper area start -->
    <div class="offset-wrapper">
        <div class="offset-closer">
            <div class="close-btn">
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="offset-inner">
            <div class="offset-menu fadein deley-0">
                <ul>
                    <li class="<?php if(isset($menu_active) && $menu_active == 1){echo 'active';} ?>">
                        <a href="<?= $this->Url->build('/', true) ?>">Home</a>
                    </li>
                    <li class="<?php if(isset($menu_active) && $menu_active == 2){echo 'active';} ?>">
                        <a href="<?= $this->Url->build('/skills', true) ?>">Skills</a>
                    </li>
                    <li class="<?php if(isset($menu_active) && $menu_active == 3){echo 'active';} ?>">
                        <a href="<?= $this->Url->build('/educacion', true) ?>">Educación</a>
                    </li>
                    <!-- <li class="<?php if(isset($menu_active) && $menu_active == 4){echo 'active';} ?>">
                        <a href="<?= $this->Url->build('/experiencia', true) ?>">Experiencia</a>
                    </li> -->
                    <!-- <li class="<?php if(isset($menu_active) && $menu_active == 5){echo 'active';} ?>">
                        <a href="<?= $this->Url->build('/proyectos', true) ?>">Proyectos</a>
                    </li> -->
                    <!-- <li class="<?php if(isset($menu_active) && $menu_active == 6){echo 'active';} ?>">
                        <a href="<?= $this->Url->build('/blog', true) ?>">Blog</a>
                    </li> -->
                    <li class="<?php if(isset($menu_active) && $menu_active == 7){echo 'active';} ?>">
                        <a href="<?= $this->Url->build('/contacto', true) ?>">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="offset-contact fadein deley-2">
                <ul>
                    <li>
                        <div class="offset-s-info">
                            <i class="fa fa-envelope"></i>
                            <div class="c_info">
                                <p>jorgepartal@gmail.com</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="offset-s-info">
                            <i class="fa fa-phone"></i>
                            <div class="c_info">
                                <p>+56 9 66868200</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="offset-social fadein deley-3">
                <ul class="hr-social">
                    <li>
                        <a href="https://www.linkedin.com/in/jorgepartal">Linkedin</a>
                    </li>
                    <li>
                        <a href="mailto:jorgepartal@gmail.com">jorgepartal@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- offset wrapper area end -->