
  <div class="site-content">
    <h2>ติดตามกระบวนของคุณ ,<?=@$user['logged_user']?></h2>

      <div class="card">
        <div style="padding:1rem;">
        <table id="myTable" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr class="border-b-2">
              <th>ชื่อผลงาน</th>
              <th>การดำเนินการ</th>
              <th>ประเภท</th>
              <th>ผู้ยื่นคำร้อง</th>
              <th>สถานะ</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
              $rowdata = $this->Controlpanel_model->get_forms_oper_user_detail($user['logged_user']);
              if(count($rowdata)>0):?>
            <?php
              $form_type =  array('','จดเครื่องหมายการค้า' , 'จดลิขสิทธิ์','จดสิทธิบัตรการประดิษฐ์','จดสิทธิบัตรการออกแบบผลิตภัณฑ์','จดอนุสิทธิบัตร');
              $status_oper =  array('กำลังดำเนินการ','ส่งกลับแก้ไข' , 'ยกเลิกคำขอ','ดำเนินการในชั้นศาล','ไม่รับการจด','จดเรียบร้อยแล้ว','อนุมัติเอกสาร');
              $color_status = array('badge-primary','badge-warning','badge-danger','badge-info','badge-default','badge-success','badge-success');
              foreach ($rowdata as $key => $value):
              ?>
            <tr>
              <td><?=@$value['name_oper']?></td>
              <td>
                <div class="progress progress-xs"  title="<?=@$value['progress_oper']?>%" data-toggle="progressbar">
                  <div class="progress-bar" role="progressbar" style="width: <?=@$value['progress_oper']?>%" aria-valuenow="<?=@$value['progress_oper']?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td><span class="dash1-tasks-peitycharts"><?=@$form_type[$value['form_type']]?></span></td>
              <td><?=@$value['first_name']?> <?=@$value['last_name']?></td>
              <td><span class="badge <?=@$color_status[$value['status_oper']]?> p-2"><?=@$status_oper[$value['status_oper']]?></span></td>
              <td width="10%">
                <a href="<?=URL_Site?>/controlpanel/process/detail/<?=@$value['id_form']?>" class="btn btn-light btn-sm ml-2">รายละเอียด</a>
              </td>
            </tr>
          <?php endforeach;endif;?>
        </tbody>
        </table>
      </div>
      </div>
  </div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');
echo js_asset('vendor/bower_components/jquery.dataTables.js/jquery.dataTables.min.js');
echo js_asset('vendor/bower_components/jquery.dataTables.js/dataTables.bootstrap4.min.js');?>

<script>
$(document).ready(function(){
    $('[data-toggle="progressbar"]').tooltip();
    $('#myTable').DataTable( {
      responsive: true,
      searching: false,
      deferRender:    true,
      scroller:  true
    } );
});

</script>
