<?php
class Controlpanel_model extends CI_Model {
    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    public function create_account_admin($post=array())
    {
      $data = array(
        'user_name' => $post['username'],
        'user_pass' => $post['password'],
        'user_first_name' => $post['first_name'],
        'user_last_name' => $post['last_name'],
        'user_level' => $post['level'],
        'user_location' => $post['location'],
        'user_type' => 'admin',
        'user_status' => 1,
        'create_date' => date('Y-m-d')
      );
      $this->db->insert('user', $data);
      //$sql = $this->db->last_query(); แสดง query
    }
    public function update_account($post=array())
    {
      $data = array(
        'user_name' => $post['username'],
        'user_first_name' => $post['first_name'],
        'user_last_name' => $post['last_name'],
        'user_level' => $post['level'],
        'user_location' => $post['location']
      );
      $this->db->where('user_id',$post['id']);
      $this->db->update('user', $data);
      //$sql = $this->db->last_query(); //แสดง query
    }
    public function create_account_user($post=array())
    {
      $data = array(
        'user_name' => $post['username'],
        'user_pass' => $post['password'],
        'user_first_name' => $post['first_name'],
        'user_last_name' => $post['last_name'],
        'user_level' => $post['level'],
        'user_location' => $post['location'],
        'user_type' => 'user',
        'user_status' => 1,
        'create_date' => date('Y-m-d')
      );
      $this->db->insert('user', $data);
    }
    public function update_status_user($id)
    {
      $data = array('user_status' => 0);
      $this->db->where('user_id',$id);
      $this->db->update('user', $data);
    }
    public function check_user_login($post=array())
    {
        $this->db->select('*')
                ->from('user')
                ->where('user_name',$post['username'])
                ->where('user_pass',$post['password']);
        $rowdata =  $this->db->get();

        return $rowdata->result_array();
    }
    public function get_account_user($type)
    {
      $this->db->select('*')
              ->from('user')
              ->where('user_status',1)
              ->where('user_type',$type);
      $rowdata =  $this->db->get();

      return $rowdata->result_array();
    }
    public function get_account_userById($id)
    {
      $this->db->select('*')
              ->from('user')
              ->where('user_status',1)
              ->where('user_id',$id);
      $rowdata =  $this->db->get();

      return $rowdata->result_array();
    }
    public function get_forms()
    {
      $this->db->select('operations.name_oper,
                        user_forms.form_type,
                          user_forms.first_name,
                            user_forms.last_name,
                              user_forms.location,
                                user_forms.id_form,
                                  user_forms.level');
      $this->db->from('operations');
      $this->db->where('user_forms.form_status',0);
      $this->db->join('user_forms','user_forms.id_form=operations.id_form', 'left');
      $rowdata = $this->db->get();

      return $rowdata->result_array();
    }
    public function get_forms_byid($id)
    {
      $this->db->select('*')
              ->from('user_forms')
              ->where('id_form',$id);
      $rowdata =  $this->db->get();

      return $rowdata->result_array();
    }
    public function get_flow_byid($val)
    {
      $this->db->select('*')
              ->from('flow')
              ->where('id_oper',$val);
      $rowdata =  $this->db->get();

      return $rowdata->result_array();
    }
    public function get_flow_byid_num($val)
    {
      $this->db->select('*')
              ->from('flow')
              ->where('id_oper',$val);
      $rowdata =  $this->db->get();

      return $rowcount = $rowdata->num_rows();
    }
    public function form_insert($post=array())
    {

      $data = array(
        'user_id'     => $post['user_id'],
        'first_name'  => $post['first_name'],
        'last_name'   => $post['last_name'],
        'level'       => $post['level'],
        'form_type'   => $post['type_form'],
        'location'    => $post['location'],
        'form_status'   => 0,
        'insert_time' => date('Y-m-d')
      );

      $id_form = $this->add_form($data);

      foreach($post['file'] as $key=>$val){
         $form_file = array(
                       'id_form' => $id_form ,
                       'name' => $val['data']['file_name'],
                       'url' => $val['url'],
                       'path' => $val['data']['full_path'],
                       'type' => $key,
                       'create_date'=> date('Y-m-d')
                     );
        $this->db->insert('user_form_files', $form_file);
      }

      $data_oper = array(
        'id_form' => $id_form,
        'name_oper' => $post['name_oper'],
      );

      $this->db->insert('operations', $data_oper);
    }
    public function form_draft_insert($post=array())
    {

      $data = array(
        'user_id'     => $post['user_id'],
        'first_name'  => $post['first_name'],
        'last_name'   => $post['last_name'],
        'level'       => $post['level'],
        'form_type'   => $post['type_form'],
        'location'    => $post['location'],
        'form_status'   => 2,
        'insert_time' => date('Y-m-d')
      );

      $id_form = $this->add_form($data);

      foreach($post['file'] as $key=>$val){
         $form_file = array(
                       'id_form' => $id_form ,
                       'name' => $val['data']['file_name'],
                       'url' => $val['url'],
                       'path' => $val['data']['full_path'],
                       'type' => $key,
                       'create_date'=> date('Y-m-d')
                     );
        $this->db->insert('user_form_files', $form_file);
      }

      $data_oper = array(
        'id_form' => $id_form,
        'name_oper' => $post['name_oper'],
      );

      $this->db->insert('operations', $data_oper);
    }
    public function form_update($post=array())
    {

      $data = array(
        'user_id'     => $post['user_id'],
        'first_name'  => $post['first_name'],
        'last_name'   => $post['last_name'],
        'level'       => $post['level'],
        'form_type'   => $post['type_form'],
        'location'    => $post['location'],
        'form_status'   => 0,
        'insert_time' => date('Y-m-d')
      );
      $this->db->where('id_form',$post['id_form']);
      $this->db->update('user_forms', $data);
        foreach($post['file'] as $key=>$val){
          if ($post['file'][$key]) {
            $this->db->select('type')
                    ->from('user_form_files')
                    ->where('id_form',$post['id_form'])
                    ->where('type',$key);
            $rowdata =  $this->db->get()->result_array();
            if (count($rowdata)>0) {
              $form_file = array(
                            'name' => $val['data']['file_name'],
                            'url' => $val['url'],
                            'path' => $val['data']['full_path']
                          );
                          $this->db->where('id_form',$post['id_form']);
                          $this->db->where('type',$key);
                          $this->db->update('user_form_files', $form_file);
            } else {
              $form_file = array(
                            'id_form' => $post['id_form'] ,
                            'name' => $val['data']['file_name'],
                            'url' => $val['url'],
                            'path' => $val['data']['full_path'],
                            'type' => $key,
                            'create_date'=> date('Y-m-d')
                          );
            $this->db->insert('user_form_files', $form_file);
            }
          }
        }
      $data_oper = array(
        'name_oper' => $post['name_oper'],
      );
      $this->db->where('id_form',$post['id_form']);
      $this->db->update('operations', $data_oper);
    }
    public function form_draft_update($post=array())
    {

      $data = array(
        'user_id'     => $post['user_id'],
        'first_name'  => $post['first_name'],
        'last_name'   => $post['last_name'],
        'level'       => $post['level'],
        'form_type'   => $post['type_form'],
        'location'    => $post['location'],
        'form_status'   => 2,
        'insert_time' => date('Y-m-d')
      );
      $this->db->where('id_form',$post['id_form']);
      $this->db->update('user_forms', $data);
        foreach($post['file'] as $key=>$val){
              if ($post['file'][$key]) {
                $this->db->select('type')
                        ->from('user_form_files')
                        ->where('id_form',$post['id_form'])
                        ->where('type',$key);
                $rowdata =  $this->db->get()->result_array();
                if (count($rowdata)>0) {
                  $form_file = array(
                                'name' => $val['data']['file_name'],
                                'url' => $val['url'],
                                'path' => $val['data']['full_path']
                              );
                              $this->db->where('id_form',$post['id_form']);
                              $this->db->where('type',$key);
                              $this->db->update('user_form_files', $form_file);
                } else {
                  $form_file = array(
                                'id_form' => $post['id_form'] ,
                                'name' => $val['data']['file_name'],
                                'url' => $val['url'],
                                'path' => $val['data']['full_path'],
                                'type' => $key,
                                'create_date'=> date('Y-m-d')
                              );
                $this->db->insert('user_form_files', $form_file);
                }
              }
        }

      $data_oper = array(
        'name_oper' => $post['name_oper'],
      );
      $this->db->where('id_form',$post['id_form']);
      $this->db->update('operations', $data_oper);
    }
    function add_form($post_data)
    {
      $this->db->insert('user_forms', $post_data);
      $insert_id = $this->db->insert_id();

      return $insert_id;
   }
    public function approved_form_insert($post=array())
    {

      $data = array(
        'name_oper'           => $post['name_oper'],
        'course_year'         => $post['course_year'],
        'type_oper'           => $post['type_oper'],
        'num_form'            => $post['num_form'],
        'num_register'        => $post['num_register'],
        'status_oper'         => $post['status_oper'],
        'price_oper'          => $post['price_oper'],
        'date_receipt'        => $post['date_receipt'],
        'date_receipt_cpall'  => $post['date_receipt_cpall'],
        'date_receipt_agency' => $post['date_receipt_agency'],
        'date_complete'       => $post['date_complete'],
        'image1'              => $post['image1'],
        'image2'              => $post['image2'],
        'image3'              => $post['image3'],
        'image4'              => $post['image4'],
        'image5'              => $post['image5'],
        'Subdetail_oper'      => $post['Subdetail_oper'],
        'progress_oper'       => 0
      );
      $this->db->where('id_form',$post['id_form']);
      $this->db->update('operations', $data);
      $this->update_status_form($post['id_form'],1);

      $oper = $this->get_forms_oper_detail($post['id_form']);
      $post_flow = array(
      'id_oper'       => $oper[0]['id_oper'],
      'name_flow'     => 'อนุมัติเอกสาร',
      'detail_flow'   => 'ผ่านการตรวจสอบเอกสารโดยผู้รับผิดชอบ',
      'status_flow'   => 6
     );
      $this->process_detail_insert($post_flow);
    }
    public function approved_form_oper_update($post=array())
    {

      $data = array(
        'name_oper'           => $post['name_oper'],
        'course_year'         => $post['course_year'],
        'type_oper'           => $post['type_oper'],
        'num_form'            => $post['num_form'],
        'num_register'        => $post['num_register'],
        'price_oper'          => $post['price_oper'],
        'date_receipt'        => $post['date_receipt'],
        'date_receipt_cpall'  => $post['date_receipt_cpall'],
        'date_receipt_agency' => $post['date_receipt_agency'],
        'date_complete'       => $post['date_complete'],
        'image1'              => $post['image1'],
        'image2'              => $post['image2'],
        'image3'              => $post['image3'],
        'image4'              => $post['image4'],
        'image5'              => $post['image5'],
        'Subdetail_oper'      => $post['Subdetail_oper'],
      );
      $this->db->where('id_form',$post['id_form']);
      $this->db->update('operations', $data);
    }
    public function update_status_form($id,$value)
    {
      $data = array('form_status' => $value);
      $this->db->where('id_form',$id);
      $this->db->update('user_forms', $data);
    }
    public function get_forms_oper($post=array())
    {
      if (count($post)>0) {
        if ($post['type_form']!="") {
        $this->db->where('form_type',$post['type_form']);
        }
        if ($post['status_oper']!="") {
        $this->db->where('status_oper',$post['status_oper']);
        }
        if ($post['name_oper']!="") {
        $this->db->like('name_oper',$post['name_oper']);
        }
      }
      $this->db->select('operations.id_oper,
                          operations.name_oper,
                            operations.status_oper,
                              operations.progress_oper,
                        user_forms.form_type,
                          user_forms.id_form,
                            user_forms.first_name,
                              user_forms.last_name,');
      $this->db->where('operations.status_oper>=','0');
      $this->db->from('operations');
      $this->db->join('user_forms','user_forms.id_form=operations.id_form');
      $query=$this->db->get();
      $data = array();
      if($query !== FALSE && $query->num_rows() > 0){
          $data = $query->result_array();
      }

      return $data;
    }
    public function get_forms_oper_detail($val)
    {
      $this->db->select('operations.id_oper,
                          operations.name_oper,
                            operations.status_oper,
                              operations.progress_oper,
                                operations.num_form,
                                  operations.type_oper,
                                   operations.num_register,
                                    operations.price_oper,
                                      operations.date_receipt,
                                        operations.date_receipt_cpall,
                                          operations.date_receipt_agency,
                                            operations.date_complete,
                                            operations.image1,
                                              operations.image2,
                                                operations.image3,
                                                  operations.image4,
                                                    operations.image5,
                                                      operations.Subdetail_oper,
                    user_forms.form_type,
                        user_forms.form_type,
                          user_forms.id_form,
                            user_forms.first_name,
                              user_forms.last_name,
                                user_forms.location');
      $this->db->from('operations');
      $this->db->where('operations.id_form',$val);
      $this->db->join('user_forms','user_forms.id_form=operations.id_form');
      $query=$this->db->get();
      return $query->result_array();
    }
    public function get_forms_oper_byid_oper($val)
    {
      $this->db->select('operations.id_oper,
                          operations.name_oper,
                            operations.status_oper,
                              operations.progress_oper,
                                operations.num_form,
                                  operations.type_oper,
                                   operations.num_register,
                                    operations.price_oper,
                                      operations.date_receipt,
                                        operations.date_receipt_cpall,
                                          operations.date_receipt_agency,
                                            operations.date_complete,
                        user_forms.form_type,
                          user_forms.id_form,
                            user_forms.first_name,
                              user_forms.last_name,
                                user_forms.location');
      $this->db->from('operations');
      $this->db->where('operations.id_oper',$val);
      $this->db->join('user_forms','user_forms.id_form=operations.id_form');
      $query=$this->db->get();
      return $query->result_array();
    }
    public function get_forms_oper_user_detail($username)
    {
      $this->db->select('operations.id_oper,
                          operations.name_oper,
                            operations.status_oper,
                              operations.progress_oper,
                                operations.num_form,
                        user_forms.form_type,
                          user_forms.id_form,
                            user_forms.first_name,
                              user_forms.last_name,
                                user_forms.user_id');
      $this->db->from('operations');
      $this->db->where('user_forms.user_id',$username);
      $this->db->join('user_forms','user_forms.id_form=operations.id_form');
      $query=$this->db->get();
      return $query->result_array();

    }
    public function get_search_list($post=array())
    {
      if (count($post)>0) {
        if ($post['first_name']!="") {
        $this->db->like('first_name',trim($post['first_name']," "));
        }
        if ($post['last_name']!="") {
        $this->db->like('last_name',trim($post['last_name']," "));
        }
        if ($post['type_form']!="") {
        $this->db->where('form_type',$post['type_form']);
        }
        if ($post['status_oper']!="") {
        $this->db->where('status_oper',$post['status_oper']);
        }
        if ($post['name_oper']!="") {
        $this->db->like('name_oper',$post['name_oper']);
        }
      }
      $this->db->select('operations.id_oper,
                          operations.course_year,
                            operations.name_oper,
                              operations.type_oper,
                                operations.num_form,
                                  operations.num_register,
                                    operations.status_oper,
                                      operations.price_oper,
                                        operations.date_receipt,
                                          operations.date_receipt_cpall,
                                            operations.date_receipt_agency,
                                              operations.date_complete,
                        user_forms.form_type,
                          user_forms.first_name,
                            user_forms.last_name,
                              user_forms.location,');
      $this->db->from('operations');
      $this->db->join('user_forms','user_forms.id_form=operations.id_form');
      $query=$this->db->get();
    //$this->output->enable_profiler(true);
      //echo $this->db->last_query();
      return $query->result_array();

    }
    public function process_detail_insert($post=array())
    {
      if ($post['status_flow'] == 5) {
        $progress_count = 100;
      }else {
        $form_type_count = array('','10' , '10','15','15','12');
        $data_forms = $this->get_forms_oper_byid_oper($post['id_oper']);
        $form_count     = $form_type_count[$data_forms[0]['form_type']];
        $form_progress  = $this->get_flow_byid_num($post['id_oper']);
        $progress_count = ($form_progress/ $form_count)*100;
        $progress_count = round( $progress_count);
      }

      $icon = array('fa-hourglass-3','fa-mail-reply','fa-times','fa-legal','fa-exclamation','fa-check','fa-file-text-o');
      $data = array(
        'id_oper'       => $post['id_oper'],
        'name_flow'     => $post['name_flow'],
        'detail_flow'   => $post['detail_flow'],
        'status_flow'   => $post['status_flow'],
        'icon_flow'     => $icon[$post['status_flow']],
        'create_date'   => date('Y-m-d')
      );
      $this->db->insert('flow', $data);
      $this->update_status_oper($post['status_flow'],$post['id_oper']);
      $this->update_process_oper($progress_count,$post['id_oper']);
    }
    public function update_status_oper($val,$id)
    {
      $data = array('status_oper' => $val);
      $this->db->where('id_oper',$id);
      $this->db->update('operations', $data);
    }
    public function update_process_oper($val,$id)
    {
      $data = array('progress_oper' => $val);
      $this->db->where('id_oper',$id);
      $this->db->update('operations', $data);
    }
    public function get_count_oper_home()
    {
      $s1 = $this->get_forms_num();
      $s2 = $this->get_oper_num(5);
      $s3 = $this->get_oper_num(0);
      $s4_1 = $this->get_oper_num(2);
      $s4_2 = $this->get_oper_num(4);
      $s4 = $s4_1+$s4_2;
      $data = array($s1,$s2,$s3,$s4);
      return $data;
    }
    public function get_oper_num($type)
    {
      $this->db->select('id_oper')
              ->from('operations')
              ->where('status_oper',$type);
      $rowdata =  $this->db->get();
      return $rowdata->num_rows();
    }
    public function get_form_bydowload($post=array())
    {

      if (count($post)>0) {
        if ($post['first_name']!="") {
        $this->db->like('first_name',$post['first_name']);
        }
        if ($post['last_name']!="") {
        $this->db->like('last_name',$post['last_name']);
        }
        if ($post['type_form']!="") {
        $this->db->where('form_type',$post['type_form']);
        }
        if ($post['location']!="") {
        $this->db->like('location',$post['location']);
        }
        if ($post['name_oper']!="") {
        $this->db->like('name_oper',$post['name_oper']);
        }

      }
      $this->db->select('operations.id_oper,
                          operations.course_year,
                            operations.name_oper,
                              operations.type_oper,
                                operations.num_form,
                                  operations.num_register,
                                    operations.status_oper,
                                      operations.price_oper,
                                        operations.date_receipt,
                                          operations.date_receipt_cpall,
                                            operations.date_receipt_agency,
                                              operations.date_complete,
                        user_forms.form_type,
                          user_forms.first_name,
                            user_forms.last_name,
                              user_forms.location,');
      $this->db->from('operations');
      $this->db->where('status_oper',5);
      $this->db->join('user_forms','user_forms.id_form=operations.id_form');
      $query = $this->db->get();

      return $query->result_array();
    }
    public function get_form_bydownloadByid($id)
    {
      $this->db->select('operations.id_oper,
                          operations.course_year,
                            operations.name_oper,
                              operations.type_oper,
                                operations.num_form,
                                  operations.num_register,
                                    operations.status_oper,
                                      operations.price_oper,
                                        operations.date_receipt,
                                          operations.date_receipt_cpall,
                                            operations.date_receipt_agency,
                                              operations.date_complete,
                                                operations.image1,
                                                  operations.image2,
                                                    operations.image3,
                                                      operations.image4,
                                                        operations.image5,
                                                          operations.Subdetail_oper,
                        user_forms.form_type,
                          user_forms.first_name,
                            user_forms.last_name,
                              user_forms.location,');
      $this->db->from('operations');
      $this->db->where('status_oper',5);
      $this->db->where('id_oper',$id);
      $this->db->join('user_forms','user_forms.id_form=operations.id_form');
      $query = $this->db->get();

      return $query->result_array();
    }
    public function get_forms_num()
    {
      $this->db->select('*')
              ->from('user_forms')
              ->where('form_status',0);
      $rowdata =  $this->db->get();

      return $rowdata->num_rows();
    }
    public function create_setting_viewuser($post=array())
    {
      $post['create_date'] =  date('Y-m-d');
      $this->db->insert('user_view_edit', $post);
    }
    public function update_setting_viewuser($post=array())
    {
      $data = array(
        'name' => $post['name'],
        'remark' => $post['remark'],
        'price' => $post['price'],
      );
      $this->db->where('id',$post['id']);
      $this->db->update('user_view_edit', $data);
    }
    public function get_count_setting_viewuser($id)
    {
      $this->db->select('*')
              ->from('user_view_edit')
              ->where('id',$id);
      $rowdata =  $this->db->get();

      return $rowdata->num_rows();
    }
    public function get_setting_viewuser($id)
    {
      $this->db->select('*')
              ->from('user_view_edit')
              ->where('id',$id);
      $rowdata =  $this->db->get();

      return $rowdata->result_array();
    }
    public function get_form_draft($id)
    {
      $rowdata = array();
      $this->db->select('operations.course_year,
                            operations.name_oper,
                        user_forms.form_type,
                          user_forms.first_name,
                            user_forms.last_name,
                              user_forms.location,
                                user_forms.id_form,
                                  user_forms.level');
      $this->db->from('operations');
      $this->db->where('user_forms.id_form',$id);
      $this->db->join('user_forms','user_forms.id_form=operations.id_form', 'left');
      $query = $this->db->get();
      $rowdata['data'] = $query->result_array();
      $this->db->select('id,
                          name,
                            url,
                              path,
                                type');
      $this->db->from('user_form_files');
      $this->db->where('id_form',$id);
      $query2 = $this->db->get();
      $rowdata['file'] = $query2->result_array();

      return $rowdata;
    }
    public function get_list_form_draft($user)
    {
      $this->db->select('operations.course_year,
                            operations.name_oper,
                        user_forms.form_type,
                          user_forms.first_name,
                            user_forms.last_name,
                              user_forms.location,
                                user_forms.insert_time,
                                  user_forms.id_form');
      $this->db->from('operations');
      $this->db->where('user_forms.user_id',$user);
      $this->db->where('user_forms.form_status',2);
      $this->db->join('user_forms','user_forms.id_form=operations.id_form', 'left');
      $query = $this->db->get();

      return $query->result_array();
    }
    public function get_list_document($id)
    {
      $this->db->select('user_forms.id_form,
                          user_forms.form_type,
                            user_form_files.name,
                              user_form_files.url,
                                user_form_files.type');
      $this->db->from('user_form_files');
      $this->db->where('user_form_files.id_form',$id);
      $this->db->join('user_forms','user_forms.id_form=user_form_files.id_form', 'left');
      $this->db->order_by("user_form_files.type", "asc");
      $query = $this->db->get();

      return $query->result_array();
    }

}
 ?>
