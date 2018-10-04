
  <div class="site-content">
    <a class="btn btn-primary mb-2" href="<?= base_url() ?>controlpanel/setting/viewuser/" role="button">กลับ</a>
      <div class="card">
        <div style="padding:2rem;">
          <form action="./<?=$cer_id?>" method="post">
            <input type="hidden" name="id" value="<?=$cer_id?>"/>
            <div class="form-group">
              <label for="name">ชื่อ</label>
              <input type="text" class="form-control" id="name" name="name" value="<?=@$rowdata[0]['name']?>" placeholder="">
            </div>
            <div class="form-group">
              <label for="remark">ความหมาย</label>

              <textarea id="remark" name="remark"><?=@$rowdata[0]['remark']?></textarea>
            </div>
            <div class="form-group">
              <label for="price">ค่าใช้จ่าย</label>
              <textarea id="price"  name="price"><?=@$rowdata[0]['price']?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">บันทึก</button>
          </form>
      </div>
    </div>
  </div>
  <!-- /.site-content -->
<?php
$this->load->view('template/footer');
echo js_asset('vendor/froala_editor_2.8.5/js/froala_editor.min.js');
echo js_asset('vendor/froala_editor_2.8.5/js/froala_editor.pkgd.min.js');
?>

<script>
  $(function() {
    $('textarea#remark').froalaEditor({
      toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'fontFamily', 'fontSize', '|', 'color', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertTable', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
    }).on('froalaEditor.contentChanged', function (e, editor) {
      // var htmlData = editor.html.get()
      // $('#remark_input').val(htmlData);
    });
    $('textarea#price').froalaEditor({
      toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'fontFamily', 'fontSize', '|', 'color', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertTable', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
    }).on('froalaEditor.contentChanged', function (e, editor) {
      // var htmlData = editor.html.get()
      // $('#price_input').val(htmlData);
    });
  });

</script>
