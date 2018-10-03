
  <div class="site-content">
    <h2>ตั้งค่าแสดงผลหน้าหลักผู้ใช้</h2>
      <div class="card">
        <div style="padding:2rem;">
          <table id="myTable" class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%">

                  <tbody>
                    <tr>
                      <td>สิทธิบัตร</td>
                      <td width="10%"><a class="btn btn-primary" href="<?= base_url() ?>controlpanel/setting/viewuser/edit/1" role="button">แก้ไข</a></td>
                    </tr>
                    <tr>
                      <td>อนุสิทธิบัตร</td>
                      <td width="10%"><a class="btn btn-primary" href="<?= base_url() ?>controlpanel/setting/viewuser/edit/2" role="button">แก้ไข</a></td>
                    </tr>
                    <tr>
                      <td>ลิขสิทธิ์</td>
                      <td width="10%"><a class="btn btn-primary" href="<?= base_url() ?>controlpanel/setting/viewuser/edit/3" role="button">แก้ไข</a></td>
                    </tr>
                    <tr>
                      <td>เครื่องหมายการค้า</td>
                      <td width="10%"><a class="btn btn-primary" href="<?= base_url() ?>controlpanel/setting/viewuser/edit/4" role="button">แก้ไข</a></td>
                    </tr>

                  </tbody>
          </table>
      </div>
    </div>
  </div>
  <!-- /.site-content -->
<?php
$this->load->view('template/footer');
?>
