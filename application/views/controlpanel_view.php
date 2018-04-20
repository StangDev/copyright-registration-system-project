
  <div class="site-content">
    <h2>homepage</h2>
    <p>หน้าหลักการแสดงผล</p>
    <?php $rowdata = $this->Controlpanel_model->get_count_oper_home();
    ?>

    <div class="row">
    	<div class="col-lg-3 col-sm-6">
    		<div class="card">
    			<header class="card-header">
    				<h6 class="card-heading">รอการอนุมัติ</h6>
    			</header>
    			<div class="card-body d-flex px-3">
    				<div class="mr-auto text-primary">
    					<h5><span data-plugin="counterUp"><?=@$rowdata[0]?></span></h5></div>
    				<div><a href="#" class="btn btn-sm btn-primary">คำร้อง</a>
    				</div>
    			</div>
    			<!-- /.card-body -->
    		</div>
    		<!-- /.card -->
    	</div>
    	<!-- /.col -->
    	<div class="col-lg-3 col-sm-6">
    		<div class="card">
    			<header class="card-header">
    				<h6 class="card-heading">จดทะเบียนเรียบร้อย</h6>
    			</header>
    			<div class="card-body d-flex px-3">
    				<div class="mr-auto text-primary">
    					<h5 data-plugin="counterUp"><?=@$rowdata[1]?></h5></div>
    				<div><a href="#" class="btn btn-sm btn-success">คำร้อง</a>
    				</div>
    			</div>
    			<!-- /.card-body -->
    		</div>
    		<!-- /.card -->
    	</div>
    	<!-- /.col -->
      <!-- /.col -->
      <div class="col-lg-3 col-sm-6">
        <div class="card">
          <header class="card-header">
            <h5 class="card-heading">กำลังดำเนินการ</h5>
            <!-- /.card-toolbar -->
          </header>
          <div class="card-body d-flex px-3">
            <div class="mr-auto text-primary">
              <h5><span data-plugin="counterUp"><?=@$rowdata[2]?></span></h5></div>
            <div><a href="#" class="btn btn-sm btn-warning">คำร้อง</a>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    	<div class="col-lg-3 col-sm-6">
    		<div class="card">
    			<header class="card-header">
    				<h6 class="card-heading">ยกเลิก / ไม่รับจด</h6>
    				<!-- /.card-toolbar -->
    			</header>
    			<div class="card-body d-flex px-3">
    				<div class="mr-auto text-primary">
    					<h5><span data-plugin="counterUp"><?=@$rowdata[3]?></span></h5></div>
    				<div><a href="#" class="btn btn-sm btn-danger">คำร้อง</a>
    				</div>
    			</div>
    			<!-- /.card-body -->
    		</div>
    		<!-- /.card -->
    	</div>

    </div>
  </div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');?>
