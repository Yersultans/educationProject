<!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html">PROENT</h3></a>

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
                                <li><a href="/educationProject/account/subjects">Предметы</a>
                                    <ul class="dropdown">
                                        <?php foreach($subjects as $id_subjects => $subject):?>
                                        <li><a href="/educationProject/account/subject/<?=$subject['id']?>"><?=$subject['name']?></a></li>
                                    <?php endforeach;?>



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
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$user['login']?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="#">Профиль</a>
                                            <a class="dropdown-item" href="/educationProject/account/logout">Выход</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="/educationProject/public/img/t1.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->


						

    <!-- ##### Popular Course Area Start ##### -->
    <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single Popular Course -->
                <?php foreach($subjects as $subject) :?>
                <div class="col-12 col-md-6 col-lg-4">
                    
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?=$subject['img']?>" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4><?=$subject['name']?></h4>
                            <div class="meta d-flex align-items-center">

                            </div>
                            
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">


                            <div class="course-fee h-100">
                                <a href="/educationProject/account/subject/<?=$subject['id']?>" class="free">проверить</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php endforeach;?>
            </section>

								<!-- Blog -->
                                
