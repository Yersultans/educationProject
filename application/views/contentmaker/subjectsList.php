<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                      <?php if (empty($list)): ?>
                           <p>Список предметов пуст</p>
                       <?php else: ?>
                           <table class="table">
                               <tr>
                                   <th>Название</th>
                                   <th>Редактировать</th>
                                   <th>Удалить</th>
                               </tr>

                      <?php foreach ($list as $val): ?>
                          <tr>
                              <td><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                              <td><a href="/educationProject/contentmaker/subjectEdit/<?php echo $val['id']; ?>" class="btn btn-primary">Редактировать</a></td>
                              <td><a href="/educationProject/contentmaker/subjectDelete/<?php echo $val['id']; ?>" class="btn btn-danger">Удалить</a></td>
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
