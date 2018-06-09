<div class="site-content">
  <h2>เอกสารตัวอย่างที่ผ่านการอนุมัติ</h2>
  <div class="col-lg-7 mt-3">
    <div class="row">
      <?php $rowdata = $this->Controlpanel_model->get_form_bynumoper(5); ?>
      <?php foreach ($rowdata as $key => $value): ?>
      <div class="col-lg-12 col-md-6">
        <a href="<?=$value['file_url']?>" download>
        <div class="card p-1 bg-faded">
          <div class="media bg-white p-3"><img class="avatar avatar-circle avatar-md" src="<?=URL_Site?>/assets/flow/pdf.png" alt="">
            <div class="media-body">
              <h6><?=$value['name_oper']?></h6>
              <div>เอกสารของคุณ : <?=$value['first_name']?> <?=$value['last_name']?></div>
            </div>
          </div>
        </div>
        <!-- /.card -->
        </a>
      </div>
    <?php endforeach; ?>
    </div>
    <!-- .row -->
  </div>
</div>
<!-- /.site-content -->

<?php   $this->load->view('template/footer');?>
