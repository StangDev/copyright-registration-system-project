<div class="site-content">
<div class="card" >
  <div style="padding: 50px;">
    <form action="" id="formdata" method="post" enctype="multipart/form-data">
      <input type="text" value="<?=@$_SESSION['logged_user']?>"  name="user_id" style="display: none;">
      <input type="text" value="<?=@$rowdata['id_form']?>"  name="id_form" style="display: none;">
       <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >ชื่อผลงาน :</label>
        <div class="col-6">
          <input class="form-control" type="text" value="<?=@$rowdata['name_oper']?>" placeholder="" name="name_oper">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >ชื่อ :</label>
        <div class="col-3">
          <input class="form-control" type="text" value="<?=@$rowdata['first_name']?>" placeholder="" name="first_name">
        </div>
        <label for="example-text-input" class="col-2 col-form-label" >นามสกุล :</label>
        <div class="col-3">
          <input class="form-control" type="text" value="<?=@$rowdata['last_name']?>" placeholder="" name="last_name">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >ตำแหน่ง :</label>
        <div class="col-7">
          <select name="level" class="form-control" id="level">
            <option value="">เลือก</option>
            <option value="0">นักศึกษา</option>
            <option value="1">อาจารย์</option>
            <option value="2">คณะ/สำนัก</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >ชื่อคณะ/สำนัก :</label>
        <div class="col-7">
            <select name="location" class="form-control col-8" id="location">
              <option value="">เลือก</option>
              <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
              <option value="คณะการจัดการธุรกิจอาหาร">คณะการจัดการธุรกิจอาหาร</option>
              <option value="คณะศิลปศาสตร์">คณะศิลปศาสตร์</option>
              <option value="คณะวิศวกรรมศาสตร์และเทคโนโลยี">คณะวิศวกรรมศาสตร์และเทคโนโลยี</option>
              <option value="คณะนิเทศศาสตร์">คณะนิเทศศาสตร์</option>
              <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
              <option value="คณะนวัตกรรมการจัดการเกษตร">คณะนวัตกรรมการจัดการเกษตร</option>
              <option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
              <option value="คณะอุตสาหกรรมเกษตร">คณะอุตสาหกรรมเกษตร</option>
              <option value="คณะการจัดการโลจิสติกส์และการคมนาคมขนส่ง">คณะการจัดการโลจิสติกส์และการคมนาคมขนส่ง</option>
              <option value="วิทยาลัยนานาชาติ">วิทยาลัยนานาชาติ</option>
              <option value="วิทยาลัยบัณฑิตศึกษาจีน">วิทยาลัยบัณฑิตศึกษาจีน</option>
              <option value="สำนักอธิการบดี">สำนักอธิการบดี</option>
              <option value="สำนักส่งเสริมวิชาการ">สำนักส่งเสริมวิชาการ</option>
              <option value="สำนักกิจการนักศึกษา">สำนักกิจการนักศึกษา</option>
              <option value="สำนักพัฒนานักศึกษา">สำนักพัฒนานักศึกษา</option>
              <option value="สำนักส่งเสริมศิลปะและวัฒนธรรม">สำนักส่งเสริมศิลปะและวัฒนธรรม</option>
              <option value="สำนักบริการวิชาการ">สำนักบริการวิชาการ</option>
              <option value="สำนักวิจัยและพัฒนา">สำนักวิจัยและพัฒนา</option>
              <option value="สำนักการศึกษาทั่วไป">สำนักการศึกษาทั่วไป</option>
              <option value="สำนักสื่อสารองค์กร">สำนักสื่อสารองค์กร</option>
              <option value="สำนักบัญชีและการเงิน">สำนักบัญชีและการเงิน</option>
              <option value="สำนักเทคโนโลยีสารสนเทศ">สำนักเทคโนโลยีสารสนเทศ</option>
              <option value="สำนักทรัพยากรมนุษย์">สำนักทรัพยากรมนุษย์</option>
              <option value="สำนักบริหารอาคารและทรัพย์สิน">สำนักบริหารอาคารและทรัพย์สิน</option>
              <option value="งานบริการทรัพยากรสารสนเทศ (ห้องสมุด)">งานบริการทรัพยากรสารสนเทศ (ห้องสมุด)</option>
              <option value="งานจัดซื้อและพัสดุ">งานจัดซื้อและพัสดุ</option>
              <option value="สำนักประกันและพัฒนาคุณภาพการศึกษา">สำนักประกันและพัฒนาคุณภาพการศึกษา</option>
              <!-- <option value="1">จดเครื่องหมายการค้า</option>
              <option value="2">จดลิขสิทธิ์</option>
              <option value="3">จดสิทธิบัตรการประดิษฐ์</option>
              <option value="4">จดสิทธิบัตรการออกแบบผลิตภัณฑ์</option>
              <option value="5">จดอนุสิทธิบัตร</option> -->
            </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >ประเภทคำร้อง :</label>
        <div class="col-10">
          <select name="type_form" class="form-control typeFormSelect col-8">
            <option value="">เลือก</option>
            <option value="1">จดสิทธิบัตร อนุสิทธิบัตร</option>
            <option value="2">จดลิขสิทธิ์</option>
            <option value="3">จดเครื่องหมายการค้า</option>
            <!-- <option value="1">จดเครื่องหมายการค้า</option>
            <option value="2">จดลิขสิทธิ์</option>
            <option value="3">จดสิทธิบัตรการประดิษฐ์</option>
            <option value="4">จดสิทธิบัตรการออกแบบผลิตภัณฑ์</option>
            <option value="5">จดอนุสิทธิบัตร</option> -->
          </select>
        </div>
        <div class="col-2"></div>
        <div class="col-7" id="fileDowload">
        </div>
      </div>
      <div id="lc">

      </div>
      <!-- <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >เอกสารคำร้อง :</label>
        <div class="col-7">
          <label class="custom-file col-7">
            <input type="file" id="image" class="custom-file-input" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/pdf,application/vnd.ms-excel" name="userfile" >
            <span class="custom-file-control" data-content="Choose file..."></span>
          </label>
        </div>
      </div>
       <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label" >เอกสารจดทะเบียน :</label>
        <div class="col-7">
          <label class="custom-file col-7">
            <input type="file" id="image" class="custom-file-input" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/pdf,application/vnd.ms-excel" name="RegisForm" >
            <span class="custom-file-control" data-content="Choose file..."></span>
          </label>
        </div>
      </div> -->
    </form>
  </div>
</div>
</div>
<div class="mb-5 text-right" style="margin-right:3rem;margin-top:3rem;">
  <button type="button" onclick="location.reload();" class="btn btn-danger btn-lg ">ยกเลิก</button>
  <button type="button" onclick="submit('draft')" class="btn btn-primary btn-lg mr-2 ml-2">บันทึก</button>
  <button type="button" onclick="submit('insert')" class="btn btn-success btn-lg">ส่งคำร้อง</button>

</div>
  <!-- /.site-content -->
<?php   $this->load->view('template/footer');?>
<script>
$( document ).ready(function() {

  <?php if(@$rowdata['level'] !== '' && count($rowdata) >0):?>
  $("#level").val('<?=@$rowdata['level']?>');
  <?php endif;?>
  <?php if(@$rowdata['location'] !== '' && count($rowdata) >0):?>
  $("#location").val('<?=@$rowdata['location']?>');
  <?php endif;?>
  <?php if(@$rowdata['location'] !== '' && count($rowdata) >0):?>
  $("#location").val('<?=@$rowdata['location']?>');
  <?php endif;?>
  <?php if(@$rowdata['form_type'] !== '' && count($rowdata) >0):?>
    $(".typeFormSelect").val('<?=@$rowdata['form_type']?>');
    insertfile('<?=@$rowdata['form_type']?>');
  <?php endif;?>

});
function submit(typeAdd) {
      var type = $('.typeFormSelect').val();
      var i;
      var ifi;
      var fileOk = true;
      if (type) {
        switch (type) {
          case "1":
            ifi = 6;
            break;
          case "2":
            ifi = 4;
              break;
          case "3":
            ifi = 2;
          break;
        }
        if (typeAdd == 'draft') {
          var url ='<?=URL_Site?>/controlpanel/document/form/draft/update';
          $("#formdata").attr('action', url);
          $("#formdata").submit();
        }else {
          for (i = 1; i <= ifi; i++) {
              var data = $('#file_'+i).next(".custom-file-control").attr('fileIs');
              var data_val = $('#file_'+i).val();
              console.log('data',data);
              console.log('data_val',data_val);
              if (data_val  || data ) {
                fileOk = true;
              }else {
                fileOk = false;
                swal ( "Oops" ,  "เอกสารประกอบการพิจารณาไม่ครบตามเงื่อนไข!" ,  "error" );
              }
          }
        }
        setTimeout(function(){
              if (fileOk) {
              //var forms=($('#formdata').serialize());
                if(typeAdd == 'insert'){
                  var url ='<?=URL_Site?>/controlpanel/document/form/update';
                  $("#formdata").attr('action', url);
                  $("#formdata").submit();
                }else {
                    swal ( "Oops" ,  "เกิดข้อผิดพลาด!" ,  "error" );
                }
              }

          }, 3000);

      } else {
          swal ( "Oops" ,  "กรุณาเลือกประเภทคำร้อง!" ,  "error" );
      }



}


$( ".typeFormSelect" ).change(function() {
  var data = $(".typeFormSelect").val();
 docInputupload(data);
});
function docInputupload(type) {
  $('#lc').html("");
  var data = {
      "1":[{
        "Petition": "เอกสารคำร้อง <font color='red'>**</font>",
        "Document":[
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
        "Petition": "สำเนาคำขอ ลข.01 <font color='red'>**</font>",
        "Document":[
          "1.หนังสือรับรองความเป็นเจ้าของลิขสิทธิ์ <font color='red'>**</font>",
          "2.ผลงานหรือภาพถ่าย <font color='red'>**</font>",
          "3.สำเนาบัตรประจำตัวหรือหนังสือรับรองนิติบุคคล <font color='red'>**</font>",
          "4.หนังสือมอบอำนาจ (ถ้ามี)",
          "5.เอกสารอื่น ๆ (ถ้ามี)"
        ]

      }],
      "3":[{
        "Petition": "เอกสารคำร้อง <font color='red'>**</font>",
        "Document":[
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
  //console.log("data",data);
  $(data[type]).each(function( ob , obj  ) {
    $(obj).each(function( key ,val ) {
      var numDoc = 1;
      elementCal(val.Petition,numDoc);
      var text = document.createElement("label");
          text.setAttribute("class","h5");
          text.innerHTML  = "เอกสารประกอบ<hr />"
          document.getElementById('lc').appendChild(text);
      $(val.Document).each(function( doc ,docname ) {
        numDoc++;
        elementCal(docname,numDoc);
      });
    });
  });

}
function elementCal(name,id) {
  var input = document.createElement("INPUT");
      input.setAttribute("type", "file");
      input.setAttribute("accept", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/pdf,application/vnd.ms-excel,.docx");
      input.setAttribute("name","file_"+id);
      input.setAttribute("id", "file_"+id);
      input.setAttribute("onchange","inputFileName(this);");
      input.setAttribute("class","custom-file-input");

  var span = document.createElement("span");
      span.setAttribute("class","custom-file-control");
      span.setAttribute("data-content","Choose file...");

  var labelInput = document.createElement("label");
      labelInput.setAttribute("class","custom-file col-4");
      labelInput.appendChild(input);
      labelInput.appendChild(span);


  var divInput  = document.createElement("div");
      divInput.setAttribute("class","col-4");
      divInput.appendChild(labelInput);

  var labelName = document.createElement("label");
      labelName.setAttribute("class","col-6 col-form-label");
      labelName.innerHTML  = name+" :"

  var element = document.createElement("div");
      element.setAttribute("class","form-group row");
      element.setAttribute("id", "Div_file_"+id);
      element.appendChild(labelName);
      element.appendChild(divInput);
      document.getElementById('lc').appendChild(element);
}
function inputFileName(id) {
  var fieldVal = $(id).val();
  if (fieldVal != undefined || fieldVal != "") {
    $(id).next(".custom-file-control").attr('data-content', fieldVal);

    var element = document.createElement("i");
        element.setAttribute("class","fa fa-check-circle fa-3x");
        element.setAttribute("aria-hidden","true");
        element.setAttribute("style","color: rgb(37, 174, 136); --darkreader-inline-color:#a7ffe4;");
        document.getElementById("Div_"+id.name).appendChild(element);
  }
}
function insertfile(type) {
  docInputupload(type);
  var jsondata;
  <?php if(!empty($filedata)):?>
      jsondata =<?=@$filedata?>;
  <?php endif;?>
  setTimeout(function(){
      console.log(jsondata);
      $(jsondata).each(function( key ,val ) {
          $('#'+val.type).next(".custom-file-control").attr('data-content', val.name);
          $('#'+val.type).next(".custom-file-control").attr('fileIs', true);
          var element = document.createElement("i");
              element.setAttribute("class","fa fa-check-circle fa-3x");
              element.setAttribute("aria-hidden","true");
              element.setAttribute("style","color: rgb(37, 174, 136); --darkreader-inline-color:#a7ffe4;");
              document.getElementById("Div_"+val.type).appendChild(element);
      });
    }, 1000);
}
</script>
