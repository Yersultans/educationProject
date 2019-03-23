<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <form action="/educationProject/admin/edit/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <!-- <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?>" name="description">
                            </div> -->
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" rows="3" name="content"><?php echo htmlspecialchars($data['content'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form=group">
                              <label>Предмет</label>
                              <select name = "subject_id" size = "0">
                                <?php foreach ($subjects as $sub): ?>
                                  <option value="<?php echo $sub['id'];?>"><?php echo $sub['name'];?></option>

                                <?php endforeach;?>
                              </select>

                            </div>
                            <!-- <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div> -->
                            <!-- <button type="submit" class="btn btn-primary btn-block">Сохранить</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/educationProject/public/scripts/ckeditor/ckeditor.js"></script>
<script>
               // Replace the <textarea id="editor1"> with a CKEditor
               // instance, using default configuration.
               CKEDITOR.replace( 'content' );
           </script>
