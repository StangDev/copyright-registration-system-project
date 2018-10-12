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
                      <td align="center"><a href="javascript:openModel('<?=$value['id_oper']?>');" ><i class="fa fa-eye"></i></a></td>

                    </tr>
                    <?php endforeach;endif; ?>
                </tbody>
        </table>
    </div>
  </div>
  </div>
  <!-- /.site-content -->
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="title-c"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-header">
            รายละเอียด
            </div>
            <div class="card-body">
              <div id="body-c">

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
            รูปภาพ
            </div>
            <div class="card-body">
              <div id="img-c">

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
<?php
$this->load->view('template/footer');
echo js_asset('vendor/bower_components/jquery.dataTables.js/jquery.dataTables.min.js');
echo js_asset('vendor/bower_components/jquery.dataTables.js/dataTables.bootstrap4.min.js');?>

<script>
function openModel(id) {
  $.get( "<?=base_url()?>controlpanel/download/get_form_bydownloadByid/"+id, function( data ) {
    var res = JSON.parse(data)
    console.log(res);
    $.each(res, function( index, value ) {
      $('#title-c').html(value.name_oper);
        $('#body-c').html(value.Subdetail_oper);

        var img = '';
        if (value.image1) {
          img +='<p><img src="'+value.image1+'" height="300" width="auto"></p>'
        }
        if (value.image2) {
          img +='<p><img src="'+value.image2+'" height="300" width="auto"></p>'
        }
        if (value.image3) {
          img +='<p><img src="'+value.image3+'" height="300" width="auto"></p>'
        }
        if (value.image4) {
          img +='<p><img src="'+value.image4+'" height="300" width="auto"></p>'
        }
        if (value.image5) {
          img +='<p><img src="'+value.image5+'" height="300" width="auto"></p>'
        }
        $('#img-c').html(img);
});

    $('#myModal').modal('show');
});
}
$( document ).ready(function() {

  $("div.location select").val('<?=@$post['location']?>');
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
