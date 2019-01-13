
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
            <div class="section-1">
                <h6 class=""><h5><span class="badge badge-secondary" style="font-size:18px;"> ชื่อผลงาน: <?=@$value['name_oper']?></span></h5>  โดยคุณ:  <a href="javascript:;"><?=@$value['first_name']?> <?=@$value['last_name']?></a></h6><small>(<?=@$value['location']?>)</small>
            </div>
            <!-- /.media -->
            <div class="section-2">
              <small class="text-muted mr-auto hidden-xs-down">(<?=@date("d/m/Y", strtotime($value['insert_time']))?>)</small>
              <button type="button" class="btn btn-light btn-sm ml-2" data-toggle="modal" data-target="#exampleModal" onclick="getDoc('<?=@$value['id_form']?>');"><i class="fa fa-download" aria-hidden="true"></i> รายการเอกสาร </button >
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
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">รายการเอกสาร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="list-document">
        ...
      </div>
    </div>
  </div>
</div>
  </div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');?>
<script>
function getDoc(id) {
  var dataName = {
      "1":[{
        "Document":[
          "เอกสารคำร้อง <font color='red'>**</font>",
          "1.เอกสารแสดงสิทธิในการขอรับสิทธิบัตร/อนุสิทธิบัตร <font color='red'>**</font>",
          "2.หนังสือรับรองการแสดงการประดิษฐ์/การออกแบบผลิตภัณฑ์ <font color='red'>**</font>",
          "3.หนังสือมอบอำนาจ <font color='red'>**</font>",
          "4.เอกสารรายละเอียดเกี่ยวกับจุลชีพ <font color='red'>**</font>",
          "5.เอกสารการขอนับวันยื่นคำขอในต่างประเทศเป็นวันยื่นคำขอในประเทศไทย  <font color='red'>**</font>",
          "6.เอกสารขอเปลี่ยนแปลงประเภทของสิทธิ (ถ้ามี) ",
          "7.เอกสารอื่น ๆ (ถ้ามี)"
        ]

      }],
      "2":[{
        "Document":[
          "สำเนาคำขอ ลข.01 <font color='red'>**</font>",
          "1.หนังสือรับรองความเป็นเจ้าของลิขสิทธิ์ <font color='red'>**</font>",
          "2.ผลงานหรือภาพถ่าย <font color='red'>**</font>",
          "3.สำเนาบัตรประจำตัวหรือหนังสือรับรองนิติบุคคล <font color='red'>**</font>",
          "4.หนังสือมอบอำนาจ (ถ้ามี)",
          "5.เอกสารอื่น ๆ (ถ้ามี)"
        ]

      }],
      "3":[{
        "Document":[
          "เอกสารคำร้อง <font color='red'>**</font>",
          "1.สำเนาบัตรประจำตัวหรือสำเนาหนังสือรับรองนิติบุคคลที่ออกให้ไม่เกิน 6 เดือน ของเจ้าของ <font color='red'>**</font>",
          "2.สำเนาหนังสือมอบอำนาจ (ก.18) และสำเนาบัตรประจำตัวของผู้รับมอบอำนาจ (ถ้ำมี)",
          "3.หนังสือแสดงกำรปฏิเสธ (ก.12) (ถ้ำมี)",
          "4.รายชื่อและเอกสารหลักฐานหรือคำชี้แจงแสดงความสัมพันธ์ของผู้มีสิทธิใช้เครื่องหมายร่วม(กรณีเครื่องหมายร่วม)",
          "5.ข้อบังคับหรือข้อกำหนดหลักเกณฑ์การใช้เครื่องหมายรับรอง (กรณีเครื่องหมายรับรอง) ",
          "6.เอกสารหลักฐานการนำสืบลักษณะบ่งเฉพาะที่เกิดจากการใช้เครื่องหมายตามข้อ 9. ",
          "7.คำขอถือสิทธิวันที่ยื่นคำขอในต่างประเทศครั้งแรกหรือวันที่นำสินค้าออกแสดง (ก.10) (ถ้ำมี) ",
          "8.เอกสำรหลักฐำนประกอบกำรยื่นคำขอจดทะเบียนเครื่องหมำยเสียง (ถ้ำมี) ",
          "9.หนังสือยินยอมจำกผู้โอนหรือผู้รับโอนตำมมำตรำ 51/1  ",
          "10.หนังสืออนุญำตให้ใช้ลำยมือชื่อหรือภำพของบุคคลอื่นเป็นเครื่องหมำยกำรค้ำ ",
          "11.หนังสือขอผ่อนผันกำรส่งเอกสำรหลักฐำน (ก.19) "

        ]

      }]

    };
    $.get( "<?=URL_Site?>/controlpanel/document/getListDoc/"+id, function( data ) {
      var obj = JSON.parse(data);
      console.log(obj);
      var html='<ul class="list-group">';
      var i = 0;
      $.each(obj, function( index, value ) {
                  html+= '<a href="'+value.url+'" class="list-group-item list-group-item-action" download>'+dataName[value.form_type][0]['Document'][i]+'</a>';
                  i++;
      });
      html+='</ul>';
      $('#list-document').html(html);
  });
}

</script>
