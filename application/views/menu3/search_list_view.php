<?php
$post =$_POST;
 ?>
  <div class="site-content">
    <h2>Search</h2>
    <p>หน้าค้าหาข้อมูล</p>
    <div class="card">
      <div style="padding:2rem;">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label class="col-2 col-form-label" for="exampleInputEmail1">ชื่อ</label>
            <div class="col-2" >
             <input class="form-control" name="first_name"  value="<?=@$post['first_name']?>" placeholder="" type="text">
            </div>
            <label class="col-1 col-form-label" for="exampleInputEmail1">นามสกุล</label>
            <div class="col-2" >
             <input class="form-control" name="last_name" value="<?=@$post['last_name']?>" placeholder="" type="text">
            </div>
            <label class="col-1 col-form-label" for="exampleInputEmail1">ประเภท</label>
            <div class="col-4 type_form" >
              <select name="type_form" class="form-control">
                <option value=""></option>
                <option value="1">จดสิทธิบัตร อนุสิทธิบัตร</option>
                <option value="2">จดลิขสิทธิ์</option>
                <option value="3">จดเครื่องหมายการค้า</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label" for="exampleInputEmail1">ชื่อผลงาน</label>
            <div class="col-5" >
             <input class="form-control" name="name_oper" value="<?=@$post['name_oper']?>" placeholder="" type="text">
            </div>
            <label class="col-1 col-form-label" for="exampleInputEmail1">สถานะ</label>
            <div class="col-4 status_oper"  >
              <select class="form-control" name="status_oper">
                <option value=""></option>
                <option value="0">กำลังดำเนินการ</option>
                <option value="1">ส่งกลับแก้ไข</option>
                <option value="2">ยกเลิกคำขอ</option>
                <option value="3">ดำเนินการในชั้นศาล</option>
                <option value="4">ไม่รับการจด</option>
                <option value="5">จดเรียบร้อยแล้ว</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label" >ชื่อคณะ/สำนัก :</label>
            <div class="col-7 location">
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
      </div>

           <div class="text-center">
             <div class="col" style="padding-bottom:2rem;">
             <button class="btn btn-primary" type="submit">ค้นหา</button>
             <a class="btn btn-light" onclick="location.href='<?=URL_Site?>/controlpanel/search'" type="">ยกเลิก</a>
           </div>
        </form>
      </div>
    </div>
    <div class="card">
      <div style="padding:2rem;">
        <table id="myTable" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ปีการศึกษา</th>
                        <th>ชื่อผลงาน</th>
                        <th>ชื่อผู้ร้องขอ</th>
                        <th>คณะ/สำนัก</th>
                        <th>ทรัพย์สินทางปัญญา</th>
                        <th>ประเภท</th>
                        <th>เลขที่คำขอ</th>
                        <th>ทะเบียนข้อมูลเลขที่</th>
                        <th>ผลการดำเนินงาน</th>
                        <th>ค่าใช้จ่าย</th>
                        <th>วันที่รับเอกสารครบ</th>
                        <th>วันที่ยื่นเอกสาร CP ALL</th>
                        <th>วันที่ยื่นกรม/รับจด</th>
                        <th>วันที่จดเสร็จ</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $form_type = array('', 'จดสิทธิบัตร อนุสิทธิบัตร', 'จดลิขสิทธิ์', 'จดเครื่องหมายการค้า');
                  $status_oper =   array('กำลังดำเนินการ','ส่งกลับแก้ไข' , 'ยกเลิกคำขอ','ดำเนินการในชั้นศาล','ไม่รับการจด','จดเรียบร้อยแล้ว','อนุมัติเอกสาร');
                    $post = $_POST;
                    $rowdata = $this->Controlpanel_model->get_search_list($post);
                    if(count($rowdata)>0):foreach ($rowdata as $key => $value):?>
                    <tr>
                      <td><?=$value['id_oper']?></td>
                      <td><?=$value['course_year']?></td>
                      <td><?=$value['name_oper']?></td>
                      <td><?=$value['first_name']?> <?=$value['last_name']?></td>
                      <td><?=$value['location']?></td>
                      <td><?=$form_type[$value['form_type']]?></td>
                      <td><?=$value['type_oper']?></td>
                      <td><?=$value['num_form']?></td>
                      <td><?=$value['num_register']?></td>
                      <td><?=@$status_oper[@$value['status_oper']]?></td>
                      <td><?=$value['price_oper']?></td>
                      <td><?php if($value['date_receipt']!='0000-00-00'){echo $value['date_receipt'];}else { echo "-";}?></td>
                      <td><?php if($value['date_receipt_cpall']!='0000-00-00'){echo $value['date_receipt_cpall'];}else { echo "-";}?></td>
                      <td><?php if($value['date_receipt_agency']!='0000-00-00'){echo $value['date_receipt_agency'];}else { echo "-";}?></td>
                      <td><?php if($value['date_complete']!='0000-00-00'){echo $value['date_complete'];}else { echo "-";}?></td>
                    </tr>
                    <?php endforeach;endif; ?>
                </tbody>
        </table>
    </div>
  </div>
  </div>
  <!-- /.site-content -->
<?php $this->load->view('template/footer');?>

<script>
<?php if(@$post['location'] !== '' && count($post) >0):?>
$("#location").val('<?=@$post['location']?>');
<?php endif;?>

$( document ).ready(function() {
  $("div.type_form select").val("<?=@$post['type_form']?>");
  $("div.status_oper select").val("<?=@$post['status_oper']?>");
  $('#myTable').DataTable( {
    scrollX: true,
    responsive: true,
    searching: false,
    deferRender:    true,
    dom: 'Bfrtip',
    buttons: [
          'excelHtml5'
      ]
} );
});
</script>
