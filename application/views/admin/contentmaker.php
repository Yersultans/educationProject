

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <form action="/educationProject/admin/contentmaker" method="post">
                            <div class="form-group">
                                <label>Имя</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Фамилия</label>
                                <input class="form-control" type="text" name="surname">
                            </div>
                            <div class="form-group">
                                <label>Логин</label>
                                <input class="form-control" type="text" name="login">
                            </div>
                            <div class="form-group">
                                <label>Пароль</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <!-- <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" name="description">
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" rows="3" name="text"></textarea>
                            </div>
                          -->
                          <button type="submit" class="btn btn-primary btn-block">Добавить</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
