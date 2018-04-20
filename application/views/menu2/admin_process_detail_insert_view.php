
  <div class="site-content">
    <h2>เพิ่มเหตุการณ์</h2>
    <div class="card">
  <div style="padding: 50px;">
    <form action="" id="formdata" method="post" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">หัวข้อ :</label>
        <div class="col-7">
            <input class="form-control" type="text" value="" placeholder="" name="name_flow">
        </div>
      </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">รายละเอียด :</label>
      <div class="col-7">
        <textarea class="form-control" rows="5" name="detail_flow"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">สถานะ :</label>
      <div class="col-7">
        <select class="form-control" name="status_flow">
          <option value="0">กำลังดำเนินการ</option>
          <option value="1">ส่งกลับแก้ไข</option>
          <option value="2">ยกเลิกคำขอ</option>
          <option value="3">ดำเนินการในชั้นศาล</option>
          <option value="4">ไม่รับการจด</option>
          <option value="5">จดเรียบร้อยแล้ว</option>
        </select>
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
  var url ='<?=URL_Site?>/controlpanel/process/detail/insert/<?=@$this->uri->segment(5)?>';
  $("#formdata").attr('action', url);
  $("#formdata").submit();
}
</script>
