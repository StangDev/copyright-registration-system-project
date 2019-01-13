<div class="site-content">
  <h2>แบบร่างฟอร์มยื่นคำร้อง</h2>
  <div class="card">
    <div style="padding:2rem;">
      <table id="myTable" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อผลงาน</th>
                    <th>ประเภท</th>
                    <th>สร้างเมื่อ</th>
                    <th>จัดการ</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $form_type = array('', 'จดสิทธิบัตร อนุสิทธิบัตร', 'จดลิขสิทธิ์', 'จดเครื่องหมายการค้า');
                $status_oper =   array('กำลังดำเนินการ','ส่งกลับแก้ไข' , 'ยกเลิกคำขอ','ดำเนินการในชั้นศาล','ไม่รับการจด','จดเรียบร้อยแล้ว','อนุมัติเอกสาร');
                  $post = $_POST;
                  $rowdata = $this->Controlpanel_model->get_list_form_draft($user['logged_user']);
                  $i = 0;
                  if(count($rowdata)>0):foreach ($rowdata as $key => $value):  $i++;?>
                  <tr>
                    <td><?=$i?></td>
                    <td><?=$value['name_oper']?></td>
                    <td><?=$form_type[$value['form_type']]?></td>
                    <td><?=$value['insert_time']?></td>
                    <td><a  class="btn btn-info" href="<?=URL_Site?>/controlpanel/document/form/draft/edit/<?=$value['id_form']?>" role="button">แก้ไข</a></td>
                  </tr>
                <?php endforeach; else: ?>
                    <td colspan="5" align="center">ไม่พบรายการแบบร่าง</td>
                  <?php endif;  ?>
              </tbody>
      </table>
  </div>
</div>
</div>
<!-- /.site-content -->
<?php   $this->load->view('template/footer');?>
