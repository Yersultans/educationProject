<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Посты</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if (empty($contentmakers)): ?>
                            <p>Список контентмекеров пуст</p>
                        <?php else: ?>
                            <table class="table">
                                <tr>
                                    <th>Название</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                                <?php foreach ($contentmakers as $val): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($val['login'], ENT_QUOTES); ?></td>
                                        <td><a href="/educationProject/admin/contentmakerEdit/<?php echo $val['id']; ?>" class="btn btn-primary">Редактировать</a></td>
                                        <td><a href="/educationProject/admin/contenmakerDelete/<?php echo $val['id']; ?>" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
