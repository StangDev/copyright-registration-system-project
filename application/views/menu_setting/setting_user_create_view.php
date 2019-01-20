
  <div class="site-content">
    <h2>เพิ่มผู้ใช้งานระบบ</h2>
    <div class="card">
      <div style="padding: 50px;">
        <form action="" id="formdata" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="">
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
          <label for="example-text-input" class="col-2 col-form-label">อีเมล :</label>
          <div class="col-7">
              <input class="form-control" type="email" value="" placeholder="" name="email">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label" >ตำแหน่ง :</label>
          <div class="col-7">
            <select name="level" class="form-control" id="level">
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
              <select name="location" class="form-control col-8" id="location">
                <option value="">เลือก</option>
                <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                <option value="คณะการจัดการธุรกิจอาหาร">คณะการจัดการธุรกิจอาหาร</option>
                <option value="คณะศิลปศาสตร์">คณะศิลปศาสตร์</option>
                <option value="คณะวิศวกรรมศาสตร์และเทคโนโลยี">คณะวิศวกรรมศาสตร์และเทคโนโลยี</option>
                <option value="คณะนิเทศศาสตร์">คณะนิเทศศาสตร์</option>
                <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
                <option value="คณะนวัตกรรมการจัดการเกษตร">คณะนวัตกรรมการจัดการเกษตร</option>
                <option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
                <option value="คณะอุตสาหกรรมเกษตร">คณะอุตสาหกรรมเกษตร</option>
                <option value="คณะการจัดการโลจิสติกส์และการคมนาคมขนส่ง">คณะการจัดการโลจิสติกส์และการคมนาคมขนส่ง</option>
                <option value="วิทยาลัยนานาชาติ">วิทยาลัยนานาชาติ</option>
                <option value="วิทยาลัยบัณฑิตศึกษาจีน">วิทยาลัยบัณฑิตศึกษาจีน</option>
                <option value="สำนักอธิการบดี">สำนักอธิการบดี</option>
                <option value="สำนักส่งเสริมวิชาการ">สำนักส่งเสริมวิชาการ</option>
                <option value="สำนักกิจการนักศึกษา">สำนักกิจการนักศึกษา</option>
                <option value="สำนักพัฒนานักศึกษา">สำนักพัฒนานักศึกษา</option>
                <option value="สำนักส่งเสริมศิลปะและวัฒนธรรม">สำนักส่งเสริมศิลปะและวัฒนธรรม</option>
                <option value="สำนักบริการวิชาการ">สำนักบริการวิชาการ</option>
                <option value="สำนักวิจัยและพัฒนา">สำนักวิจัยและพัฒนา</option>
                <option value="สำนักการศึกษาทั่วไป">สำนักการศึกษาทั่วไป</option>
                <option value="สำนักสื่อสารองค์กร">สำนักสื่อสารองค์กร</option>
                <option value="สำนักบัญชีและการเงิน">สำนักบัญชีและการเงิน</option>
                <option value="สำนักเทคโนโลยีสารสนเทศ">สำนักเทคโนโลยีสารสนเทศ</option>
                <option value="สำนักทรัพยากรมนุษย์">สำนักทรัพยากรมนุษย์</option>
                <option value="สำนักบริหารอาคารและทรัพย์สิน">สำนักบริหารอาคารและทรัพย์สิน</option>
                <option value="งานบริการทรัพยากรสารสนเทศ (ห้องสมุด)">งานบริการทรัพยากรสารสนเทศ (ห้องสมุด)</option>
                <option value="งานจัดซื้อและพัสดุ">งานจัดซื้อและพัสดุ</option>
                <option value="สำนักประกันและพัฒนาคุณภาพการศึกษา">สำนักประกันและพัฒนาคุณภาพการศึกษา</option>
                <!-- <option value="1">จดเครื่องหมายการค้า</option>
                <option value="2">จดลิขสิทธิ์</option>
                <option value="3">จดสิทธิบัตรการประดิษฐ์</option>
                <option value="4">จดสิทธิบัตรการออกแบบผลิตภัณฑ์</option>
                <option value="5">จดอนุสิทธิบัตร</option> -->
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
    <?php if(@$rowdata['user_level'] !== '' && count($rowdata) >0):?>
    $("#level").val('<?=@$rowdata['user_level']?>');
    <?php endif;?>
    <?php if(@$rowdata['user_location'] !== '' && count($rowdata) >0):?>
    $("#location").val('<?=@$rowdata['user_location']?>');
    <?php endif;?>
function submit() {
  var forms=($('#formdata').serialize());
  var url ='<?=URL_Site?>/controlpanel/setting/user/insert';
  $("#formdata").attr('action', url);
  $("#formdata").submit();
}
</script>
