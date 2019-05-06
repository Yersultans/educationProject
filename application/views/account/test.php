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
                                <li><a href="/educationProject/account/subject">Предметы</a>
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
    <!-- ##### Header Area End ##### -->



 <div class="regular-page-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content">
<form action = "/educationProject/account/result" method="post">
<?php foreach($question as $id_question => $item): // получаем каждый конкретный вопрос + ответы ?>
    <?=$item['question']?>
    <input type="hidden" name = "questions[<?=$id_question?>][id]" value = <?=$item['question_id']?> >
    <?php foreach($item['options'] as $id_answer => $answer): // проходимся по массиву вопрос/ответы ?>
        <?php if( $item['many_questions'] ): // выводим вопрос ?>
         
                        
                         <input type="checkbox" name="questions[<?=$id_question?>][answer_id][]" id="answer" class="agree-term" value = <?=$answer['id']?> >
                        <label for="answer" class=""><span><span></span></span><?=$answer['option']?></label></br>
          
        
        <?php else:?>
            
                          <input type="radio" name="questions[<?=$id_question?>][answer_id][]" id="answer" class="answer" value = <?=$answer['id']?>>
                        <label for="answer" class="label-agree-term"><span><span></span></span><?=$answer['option']?></label></br>
         
        <?php endif; // $id_answer ?>






    <?php endforeach; // $item ?>
    
<?php endforeach; // $test_data ?>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Закончить"/>
                    </div>
</form>
        </div>
                </div>
            </div>
        </div>
    </div>




