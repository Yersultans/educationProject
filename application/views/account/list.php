<!-- Preloader -->
    <!-- <div id="preloader">
        <div class="spinner"></div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html" <>PROENT</h3></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index-login.html">Главная</a></li>
                                <li><a href="#">Предметы</a>
                                    <ul class="dropdown">
                                        <li><a href="phys.html">Физика</a></li>
                                        <li><a href="math.html">Математика</a></li>
                                        <li><a href="history.html">История</a></li>



                                    </ul>
                                </li>
                                <li><a href="courses.html">Вебинар</a></li>
                                <li><a href="instructors.html">Учителя</a></li>

                                <li><a href="contact.html">Мы оффлайн</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Megan Fox</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="#">Account Info</a>
                                            <a class="dropdown-item" href="/educationProject/account/logout">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="/educationProject/public/img/bg-img/t1.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <div class="row">
      <?php foreach($list as $val):?>
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/blog-img/1.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="/educationProject/account/post/<?php echo $val['id'];?>" class="blog-headline">
                                <h4><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Сила&amp;Динамика</a>
                            </div>
                              
                        </div>
                    </div>
                </div>
    <?php endforeach; ?>
  </div>
