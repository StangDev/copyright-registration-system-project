
  <div class="site-content">
    <h2>เพิ่มผู้ดูแลระบบ</h2>
    <div class="card">
  <div style="padding: 50px;">
    <form action="" id="formdata" method="post" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">ชื่อผู้ใช้:</label>
        <div class="col-7">
            <input class="form-control" type="text" value="" placeholder="" name="username">
        </div>
      </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">รหัสผ่าน:</label>
      <div class="col-7">
          <input class="form-control" type="password" value="" placeholder="" name="password">
      </div>
    </div>
    </form>
  </div>
</div>

<div class="mb-5 text-right" style="margin-right:3rem;margin-top:3rem;">
<button type="button" onclick="submit()" class="btn btn-primary btn-lg">บันทึก</button>
<button type="button" onclick="location.reload();" class="btn btn-light btn-lg">ยกเลิก</button>
</div>
  </div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');?>
<script>
function submit() {
  var forms=($('#formdata').serialize());
  var url ='<?=URL_Site?>/controlpanel/setting/admin/insert';
  $("#formdata").attr('action', url);
  $("#formdata").submit();
}
</script>
