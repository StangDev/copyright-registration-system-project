
  <div class="site-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#cer1" role="tab" aria-controls="cer1" aria-selected="true">สิทธิบัตร</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cer2" role="tab" aria-controls="cer2" aria-selected="false">อนุสิทธิบัตร</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#cer3" role="tab" aria-controls="cer3" aria-selected="false">ลิขสิทธิ์</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#cer4" role="tab" aria-controls="cer4" aria-selected="false">เครื่องหมายการค้า</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="cer1" role="tabpanel" aria-labelledby="cer1-tab">
    <div class="card mb-3">
      <div class="card-body">
        <?php $cer1 = $this->Controlpanel_model->get_setting_viewuser(1); ?>
        <p class="font-weight-bold">ชื่อหัวข้อที่เลือก :  <span class="pl-3"><?=@$cer1[0]['name']?></span></p>
        <p class="font-weight-bold">ความหมาย :</p>
        <div>
          <?=@$cer1[0]['remark']?>
        </div>
        <p class="font-weight-bold">ค่าธรรมเนียม :</p>
        <div>
            <?=@$cer1[0]['price']?>
        </div>
      </div>
    </div>
    <div class="card ">
      <div class="card-header">
        กระบวนการจดสิทธิบัตรการประดิษฐ์
      </div>
      <div class="">
          <iframe src="<?= base_url()?>/assets/js/vendor/pdfjs-1.9.426-dist/web/viewer.html?file=<?= base_url() ?>/assets/flow/Patented%20process%20of%20invention.pdf" width="100%" height="650px"></iframe>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="cer2" role="tabpanel" aria-labelledby="cer2-tab">
    <div class="card mb-3">
      <div class="card-body">
        <?php $cer2 = $this->Controlpanel_model->get_setting_viewuser(2); ?>
        <p class="font-weight-bold">ชื่อหัวข้อที่เลือก :  <span class="pl-3"><?=@$cer2[0]['name']?></span></p>
        <p class="font-weight-bold">ความหมาย :</p>
        <div>
          <?=@$cer2[0]['remark']?>
        </div>
        <p class="font-weight-bold">ค่าธรรมเนียม :</p>
        <div>
            <?=@$cer2[0]['price']?>
        </div>
      </div>
    </div>
    <div class="card ">
      <div class="card-header">
        กระบวนการจดอนุสิทธิบัตร
      </div>
      <div class="">
          <iframe src="<?= base_url()?>/assets/js/vendor/pdfjs-1.9.426-dist/web/viewer.html?file=<?= base_url() ?>/assets/flow/Petty%20patent%20process.pdf" width="100%" height="650px"></iframe>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="cer3" role="tabpanel" aria-labelledby="cer3-tab">
    <div class="card mb-3">
      <div class="card-body">
        <?php $cer3 = $this->Controlpanel_model->get_setting_viewuser(3); ?>
      <p class="font-weight-bold">ชื่อหัวข้อที่เลือก :  <span class="pl-3"><?=@$cer3[0]['name']?></span></p>
        <p class="font-weight-bold">ความหมาย :</p>
        <div>
          <?=@$cer3[0]['remark']?>
        </div>
        <p class="font-weight-bold">ค่าธรรมเนียม :</p>
        <div>
            <?=@$cer3[0]['price']?>
        </div>
      </div>
    </div>
    <div class="card ">
      <div class="card-header">
        กระบวนการจดลิขสิทธิ์
      </div>
      <div class="">
          <iframe src="<?= base_url()?>/assets/js/vendor/pdfjs-1.9.426-dist/web/viewer.html?file=<?= base_url() ?>/assets/flow/Copyright%20process.pdf" width="100%" height="650px"></iframe>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="cer4" role="tabpanel" aria-labelledby="cer4-tab">
    <div class="card mb-3">
      <div class="card-body">
        <?php $cer4 = $this->Controlpanel_model->get_setting_viewuser(4); ?>
        <p class="font-weight-bold">ชื่อหัวข้อที่เลือก :  <span class="pl-3"><?=@$cer4[0]['name']?></span></p>
        <p class="font-weight-bold">ความหมาย :</p>
        <div>
          <?=@$cer4[0]['remark']?>
        </div>
        <p class="font-weight-bold">ค่าธรรมเนียม :</p>
        <div>
            <?=@$cer4[0]['price']?>
        </div>
      </div>
    </div>
    <div class="card ">
      <div class="card-header">
        กระบวนการจดเครื่องหมายการค้า
      </div>
      <div class="">
          <iframe src="<?= base_url()?>/assets/js/vendor/pdfjs-1.9.426-dist/web/viewer.html?file=<?= base_url() ?>/assets/flow/Trademark%20registration%20process.pdf" width="100%" height="650px"></iframe>
      </div>
    </div>
  </div>
</div>
  </div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');
echo js_asset('vendor/bower_components/jquery.dataTables.js/jquery.dataTables.min.js');
echo js_asset('vendor/bower_components/jquery.dataTables.js/dataTables.bootstrap4.min.js');?>
