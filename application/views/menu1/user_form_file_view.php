
  <div class="site-content">
    <h2>ฟอร์มยื่นคำร้อง</h2>
    <p>หน้ากรอกรายละเอียดผู้ยื่นขอและเอกสารคำร้อง</p>
<div class="card" >
  <div style="padding: 50px;">
    <form action="" id="formdata" method="post" enctype="multipart/form-data">
      <input type="text" value="<?=@$_SESSION['logged_user']?>"  name="user_id" style="display: none;">
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >ชื่อ :</label>
        <div class="col-3">
          <input class="form-control" type="text" value="" placeholder="" name="first_name">
        </div>
        <label for="example-text-input" class="col-2 col-form-label" >นามสกุล :</label>
        <div class="col-3">
          <input class="form-control" type="text" value="" placeholder="" name="last_name">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >ตำแหน่ง :</label>
        <div class="col-7">
          <select name="level" class="form-control">
            <option value="">เลือก</option>
            <option value="0">นักศึกษา</option>
            <option value="1">อาจารย์</option>
            <option value="2">คณะ/สำนัก</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >ชื่อคณะ/สำนัก :</label>
        <div class="col-7">
            <input class="form-control" type="text" value="" placeholder="" name="location">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >ประเภทคำร้อง :</label>
        <div class="col-7">
          <select name="type_form" class="form-control">
            <option value="">เลือก</option>
            <option value="1">จดเครื่องหมายการค้า</option>
            <option value="2">จดลิขสิทธิ์</option>
            <option value="3">จดสิทธิบัตรการประดิษฐ์</option>
            <option value="4">จดสิทธิบัตรการออกแบบผลิตภัณฑ์</option>
            <option value="5">จดอนุสิทธิบัตร</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >เอกสารคำร้อง :</label>
        <div class="col-7">
          <label class="custom-file col-7">
            <input type="file" id="image" class="custom-file-input" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/pdf,application/vnd.ms-excel" name="userfile" >
            <span class="custom-file-control" data-content="Choose file..."></span>
          </label>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<div class="mb-5 text-right" style="margin-right:3rem;margin-top:3rem;">
  <button type="button" onclick="submit()" class="btn btn-primary btn-lg">บันทึก</button>
  <button type="button" onclick="location.reload();" class="btn btn-light btn-lg">ยกเลิก</button>
</div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');?>
<script>
$( document ).ready(function() {

  $("input[type=file]").change(function () {
    var fieldVal = $(this).val();
    if (fieldVal != undefined || fieldVal != "") {
      $(this).next(".custom-file-control").attr('data-content', fieldVal);
    }
  });
  $("input[type=file]").change(function () {
    var fieldVal = $(this).val();
    if (fieldVal != undefined || fieldVal != "") {
      $(this).next(".custom-file-control").attr('data-content', fieldVal);
    }
  });
});

function submit() {
      var forms=($('#formdata').serialize());
      var url ='<?=URL_Site?>/controlpanel/document/form/insert';
      $("#formdata").attr('action', url);
      $("#formdata").submit();

}
</script>
