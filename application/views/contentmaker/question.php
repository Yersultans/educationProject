
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Добавить вопрос</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-7">
                        <form action="/educationProject/contentmaker/question" method="post">
                          <div class="form-group">
                              <label>Вопрос</label>
                              <textarea name="question" id="question" rows="10" cols="80"></textarea>
                          </div>
                          <!-- <div class="form-group">
                              <label>Несколько ответов</label>
                              <input name = "manyQuestions" type = "checkbox" value = "t">  
                          </div> -->
                          <div class="input_fields_wrap">
                            <button class="btn btn-success">Варианты</button>
                          <table class="table">

                              <tr>
                                  <th>Варианты ответа</th>
                                  <th>Ответ</th>
                                  <th>Удалить</th>
                              </tr>
                            </table>
                            </div>
                            <div class="form=group">
                              <label>Раздел</label>

                            <select class ="form-control"name = "subject_id" id = "subjects" size = "0">
                              <option value="">--- Выберите предметы ---</option>
                              <?php foreach ($subjects as $sub): ?>
                                <option value="<?php echo $sub['id'];?>"><?php echo $sub['name'];?></option>
                                <?php endforeach;?>
                            </select>
                            <div class="form=group">
                              <label>Предмет</label>

                            <select class ="form-control" name = "post_id" size = "0">

                            </select>
                          </div>
                            <button type="submit" onClick="CKupdate();" class="btn btn-primary btn-block" >Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
$("#subjects").on('change', function() {
       var subID = $(this).val();
       if(subID) {
           $.ajax({
               url: '/educationProject/contentmaker/getPost/'+subID,
               method: "GET",
               dataType: "json",
               success:function(data) {
                   $('select[name="post_id"]').empty();
                   $.each(data, function(key, value) {
                       $('select[name="post_id"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                   });
               }
           });
       }else{
           $('select[name="port_id"]').empty();
       }
   });
    });

 CKEDITOR.replace( 'question');
        function CKupdate(){
        for ( instance in CKEDITOR.instances )
        CKEDITOR.instances[instance].updateElement();
}

 </script>
