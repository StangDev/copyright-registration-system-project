
  <div class="site-content">
    <h2>ตั้งค่าผู้ใช้</h2>
    <div class="row">
      <div class="col-sm-12">
        <a  href="<?=URL_Site?>/controlpanel/setting/user/insert" style="float: right;margin-top:2rem;margin-right:1rem;" class="col-2 btn btn-success "><i class="fa fa-plus-square" aria-hidden="true"></i> เพิ่มชื่อผู้ใช้</a>
      </div>
      <div class="col-sm-12" style="padding:2rem;">
            <div class="card">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อผู้ใช้</th>
                  <th>วันที่เพิ่ม</th>
                  <th>จัดการ</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $rowdata = $this->Controlpanel_model->get_account_user('user');
                  if(count($rowdata)>0):?>
                  <?php foreach ($rowdata as $key => $value): ?>
                <tr>
                  <th>1</th>
                  <td><?=@$value['user_name']?></td>
                  <td><?=@$value['create_date']?></td>
                  <td><a href="#" class="btn btn-danger btn-sm ml-2">ลบ</a></td>
                </tr>
            <?php endforeach;else: ?>
              <tr style="padding: 2em;">
                <td colspan="4" class="text-center">--- ไม่มีข้อมูล ---</td>
              </tr>
          <?php endif;?>
          </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');?>
