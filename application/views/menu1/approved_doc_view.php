
  <div class="site-content">
    <h2>อนุมัติเอกสารคำร้อง</h2>
    <div class="card">
      <header class="card-header">
        <h6 class="card-heading"></h6>
        <ul class="card-toolbar">
          <li><a href="javascript:location.reload();"><i class="zmdi zmdi-refresh"></i></a></li>
        </ul>
        <!-- /.card-toolbar -->
      </header>
      <div class="card-body py-0">
        <div class="list-group list-group-flush">
          <?php
            $rowdata = $this->Controlpanel_model->get_forms();
            if(count($rowdata)>0):
            foreach ($rowdata as $key => $value):
            ?>
          <!-- /.list-group-item -->
          <div class="list-group-item justify-content-between">
            <div class="media">
              <div class="media-body">
                <h6 class="media-heading my-1"><a href="#"><?=@$value['first_name']?> <?=@$value['last_name']?></a></h6><small>(<?=@$value['location']?>)</small></div>
            </div>
            <!-- /.media -->
            <div class="section-2">
              <small class="text-muted mr-auto hidden-xs-down">(<?=@date("d/m/Y", strtotime($value['insert_time']))?>)</small>
              <a href="<?=@$value['file_url']?>" class="btn btn-light btn-sm ml-2" download><i class="fa fa-download" aria-hidden="true"></i> เอกสาร</a>
              <a href="<?=URL_Site?>/controlpanel/document/approved/form/edit/<?=@$value['id_form']?>" class="btn btn-success btn-sm ml-2">อนุมัติ</a>
              <a href="#" class="btn btn-danger btn-sm ml-2">ไม่อนุมัติ</a>
            </div>
          </div>
        <?php endforeach;else: ?>
          <div style="padding: 2em;">
            <p class="text-center">--- ไม่มีข้อมูลคำร้อง ---</p>
          </div>
        <?php endif;?>
          <!-- /.list-group-item -->
        </div>
        <!-- /.list-group -->
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');?>
