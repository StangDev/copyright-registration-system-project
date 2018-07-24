<?php
$post =$_POST;
 ?>
  <div class="site-content">
    <h2>Search</h2>
    <p>หน้าค้าหาข้อมูลตัวอย่างเอกสาร</p>
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
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label" for="exampleInputEmail1">คณะ/สำหนัก</label>
            <div class="col-5" >
             <input class="form-control" name="location" value="<?=@$post['location']?>" placeholder="" type="text">
            </div>
          </div>
      </div>

           <div class="text-center">
             <div class="col" style="padding-bottom:2rem;">
             <button class="btn btn-primary" type="submit">ค้นหา</button>
             <a class="btn btn-light" onclick="location.href='<?=URL_Site?>/controlpanel/download/success'" type="">ยกเลิก</a>
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
                        <th>ชื่อผลงาน</th>
                        <th>ชื่อผู้ร้องขอ</th>
                        <th>คณะ/สำนัก</th>
                        <th>เอกสาร</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $form_type =  array('','จดเครื่องหมายการค้า' , 'จดลิขสิทธิ์','จดสิทธิบัตรการประดิษฐ์','จดสิทธิบัตรการออกแบบผลิตภัณฑ์','จดอนุสิทธิบัตร');
                  $status_oper =   array('กำลังดำเนินการ','ส่งกลับแก้ไข' , 'ยกเลิกคำขอ','ดำเนินการในชั้นศาล','ไม่รับการจด','จดเรียบร้อยแล้ว','อนุมัติเอกสาร');
                    $post = $_POST;
                    $rowdata = $this->Controlpanel_model->get_form_bydowload($post);
                    if(count($rowdata)>0):foreach ($rowdata as $key => $value):?>
                    <tr>
                      <td><?=$value['id_oper']?></td>
                      <td><?=$value['name_oper']?></td>
                      <td><?=$value['first_name']?> <?=$value['last_name']?></td>
                      <td><?=$value['location']?></td>
                      <td><a href="<?=$value['file_url']?>" download><i class="fa fa-download"></i></a></td>

                    </tr>
                    <?php endforeach;endif; ?>
                </tbody>
        </table>
    </div>
  </div>
  </div>
  <!-- /.site-content -->
<?php
$this->load->view('template/footer');
echo js_asset('vendor/bower_components/jquery.dataTables.js/jquery.dataTables.min.js');
echo js_asset('vendor/bower_components/jquery.dataTables.js/dataTables.bootstrap4.min.js');?>

<script>

$( document ).ready(function() {
  $("div.type_form select").val("<?=@$post['type_form']?>");
  $("div.status_oper select").val("<?=@$post['status_oper']?>");
  $('#myTable').DataTable( {
    responsive: true,
    searching: false,
    deferRender:    true,
    scroller:  true
} );
});
</script>
