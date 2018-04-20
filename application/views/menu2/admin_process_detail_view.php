<?php
  $val = $this->uri->segment(4);
  $rowdata = $this->Controlpanel_model->get_forms_oper_detail($val);
  $form_type =  array('','จดเครื่องหมายการค้า' , 'จดลิขสิทธิ์','จดสิทธิบัตรการประดิษฐ์','จดสิทธิบัตรการออกแบบผลิตภัณฑ์','จดอนุสิทธิบัตร');
  $status_oper =  array('กำลังดำเนินการ','ส่งกลับแก้ไข' , 'ยกเลิกคำขอ','ดำเนินการในชั้นศาล','ไม่รับการจด','จดเรียบร้อยแล้ว');
  foreach ($rowdata as $key => $value):
  ?>
  <div class="site-content">
    <h2>รายละเอียดการติดตาม</h2>
<div class="row">
    <div class="col-sm-12">
      <?php if($user['logged_type'] == 'admin'): ?>
      <a href="<?=URL_Site?>/controlpanel/process/detail/insert/<?=@$val?>" style="float: right;margin-top:2rem;margin-right:1rem;" class="col-2 btn btn-success "><i class="fa fa-plus-square" aria-hidden="true"></i> เพิ่มเหตุการณ์</a>
      <?php endif; ?>
    </div>
<div  class="card col-sm-12" style="margin-top: 30px;">
  <div style="padding: 50px;">
    <form action="" id="formdata" method="post" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="example-text-input" class="col-3 col-form-label">ชื่อผลงาน :</label>
        <div class="col-7">
            <input class="form-control" type="text" value="<?=@$value['name_oper']?>" placeholder="" name="name_oper" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-3 col-form-label">ผู้ยื่นคำร้อง :</label>
        <div class="col-7">
            <input class="form-control" type="text" value="<?=@$value['first_name']?> <?=@$value['last_name']?>" placeholder="" name="name" disabled>
        </div>
      </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">เลขที่คำขอ :</label>
      <div class="col-7">
          <input class="form-control" type="text" value="<?=@$value['num_form']?>" placeholder="" name="num_form" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">ประเภท :</label>
      <div class="col-7">
          <input class="form-control" type="text" value="<?=@$form_type[$value['form_type']]?>" placeholder="" name="num_form" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">สถานะ :</label>
      <div class="col-7">
          <input class="form-control" type="text" value="<?=@$status_oper[$value['status_oper']]?>" placeholder="" name="status_oper" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label"> </label>
      <div class="col-7">
        <div class="progress progress-xs"  title="<?=@$value['progress_oper']?>%" data-toggle="progressbar">
          <div class="progress-bar" role="progressbar" style="width: <?=@$value['progress_oper']?>%" aria-valuenow="<?=@$value['progress_oper']?>" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
    </form>
  </div>
  </div>
<?php endforeach;?>
<div class="timeline-wrapper col-sm-12">
	<div class="pk-timeline">
    <?php
    $rowtimeline = $this->Controlpanel_model->get_flow_byid($rowdata[0]['id_oper']);
    $color_status = array('mediumturquoise','khaki','sienna','darkcyan','sienna','limegreen');
    foreach ($rowtimeline as $key => $value):?>
		<div class="pk-tl-block">
			<div class="pk-tl-icon" style="background:<?=@$color_status[$value['status_flow']]?>"><i class="fa <?=@$value['icon_flow']?>"></i></div>
			<div class="pk-tl-info"><strong><?=@$value['create_date']?></strong><br>บันทึกเข้าระบบ</div>
			<div class="pk-tl-content">
				<div class="pk-tl-content-text">
					<h5><?=@$value['name_flow']?></h5>
					<p><?=@$value['detail_flow']?></p>
				</div>
			</div>
			<!-- /.pk-tl-content -->
		</div>
		<!-- /.pk-tl-block -->
      <?php endforeach;?>
	</div>

	<!-- /.pk-timeline -->
</div>
</div>
  </div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');?>
