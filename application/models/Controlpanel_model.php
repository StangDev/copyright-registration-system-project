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
        'user_type' => 'admin',
        'user_status' => 1,
        'create_date' => date('Y-m-d')
      );
      $this->db->insert('user', $data);
      //$sql = $this->db->last_query(); แสดง query
    }
    public function create_account_user($post=array())
    {
      $data = array(
        'user_name' => $post['username'],
        'user_pass' => $post['password'],
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
    public function get_forms()
    {
      $this->db->select('*')
              ->from('user_forms')
              ->where('form_status',0);
      $rowdata =  $this->db->get();

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
        'file_url'    => $post['file_url'],
        'file_path'   => $post['file_path'],
        'form_status'   => 0,
        'insert_time' => date('Y-m-d')
      );
      $this->db->insert('user_forms', $data);
    }
    public function approved_form_insert($post=array())
    {
      echo "<pre>";
      print_r($post);
      $data = array(
        'id_form'             => $post['id_form'],
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
        'progress_oper'       => 0
      );
      $this->db->insert('operations', $data);
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
        $this->db->where('operations.type_form',$post['type_form']);
        }
        if ($post['status_oper']!="") {
        $this->db->where('operations.status_oper',$post['status_oper']);
        }
        if ($post['name_oper']!="") {
        $this->db->like('operations.name_oper',$post['name_oper']);
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
        $this->db->like('first_name',$post['first_name']);
        }
        if ($post['last_name']!="") {
        $this->db->like('last_name',$post['last_name']);
        }
        if ($post['type_form']!="") {
        $this->db->where('type_form',$post['type_form']);
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
      return $query->result_array();
      //$this->output->enable_profiler(TRUE);
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
      $s2 = $this->get_oper_num(0);
      $s3 = $this->get_oper_num(5);
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
    public function get_forms_num()
    {
      $this->db->select('*')
              ->from('user_forms')
              ->where('form_status',0);
      $rowdata =  $this->db->get();

      return $rowdata->num_rows();
    }


}
 ?>
