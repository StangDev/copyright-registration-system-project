<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller {

  function __construct()
  {
         // this is your constructor
         parent::__construct();
         $this->load->helper('form');
         $this->load->helper('url');
         $this->load->helper('asset_url');
         $this->load->model('Controlpanel_model');
         $this->load->helper("file");
         $this->load->library('session');
         $this->load->helper('path');

         if (!isset($_SESSION['logged_in'])){

           redirect(URL_Site);
           exit(0);
         }

  }

	public function index()
	{
    $title = $this->uri->segment(1);
		$data  = array('title' => $title.' / document',
										'user'=>$_SESSION);
		$this->load->view('template/header',$data);
		$this->load->view('controlpanel_view');

	}
  public function form()
  {
    $userid = $this->session->userdata('logged_user_id');
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / document / form',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $rowdata =  $this->Controlpanel_model->get_account_userById($userid);
    $data  = array('rowdata' =>$rowdata[0]);
    $this->load->view('menu1/user_form_file_view',$data);
  }
  public function form_insert()
  {
    $post = $_POST;
    $path = "assets/uploads/".$post['user_id']."/";
    $path = iconv("UTF-8","Windows-1252",$path);

    if(!is_dir($path)) //create the folder if it's not already exists
    {
      mkdir($path,0755,TRUE);
    }

    $config['upload_path']          =  $path;
    $config['allowed_types']        = 'xlsx|csv|xls|doc|pdf|docx';
    $config['max_size']             = 5000;
    $this->load->library('upload', $config);
    $file = array();
    foreach($_FILES as $key=>$val){
      if ($val['size']>0){
        if(!$this->upload->do_upload($key)){
            $file[$key]['massge'] = $this->upload->display_errors();
        }else{
            $file[$key] = $this->upload->data();
            $post['file'][$key]['url'] =  base_url().'assets/uploads/temp/'. $this->upload->data('file_name');
            $post['file'][$key]['data'] = $this->upload->data();
        }
      }
    }

  $title = $this->uri->segment(1);
  $data  = array('title' => $title.' / document / form',
                  'user'=>$_SESSION);
  $this->load->view('template/header',$data);
  $this->Controlpanel_model->form_insert($post);
  $this->load->view('loader/user_form_success_view');
  //$post = $_POST;
  //$this->do_upload($post);
  }
  public function form_update()
  {
    $post = $_POST;
    $path = "assets/uploads/".$post['user_id']."/";
    $path = iconv("UTF-8","Windows-1252",$path);

    if(!is_dir($path)) //create the folder if it's not already exists
    {
      mkdir($path,0755,TRUE);
    }

    $config['upload_path']          =  $path;
    $config['allowed_types']        = 'xlsx|csv|xls|doc|pdf|docx';
    $config['max_size']             = 5000;
    $this->load->library('upload', $config);
    $file = array();
    foreach($_FILES as $key=>$val){
      if ($val['size']>0){
        if(!$this->upload->do_upload($key)){
            $file[$key]['massge'] = $this->upload->display_errors();
        }else{
            $file[$key] = $this->upload->data();
            $post['file'][$key]['url'] =  base_url().$path. $this->upload->data('file_name');
            $post['file'][$key]['data'] = $this->upload->data();
        }
      }else {
        $post['file'][$key]  = null;
      }
    }

  $title = $this->uri->segment(1);
  $data  = array('title' => $title.' / document / form',
                  'user'=>$_SESSION);
  $this->load->view('template/header',$data);
  $this->Controlpanel_model->form_update($post);
  $this->load->view('loader/user_form_success_view');
  }
  public function form_draft()
  {
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / document / form / draft',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu1/user_form_draft_view');
  }
  public function form_draft_update()
  {
    $post = $_POST;
    $path = "assets/uploads/".$post['user_id']."/";
    $path = iconv("UTF-8","Windows-1252",$path);

    if(!is_dir($path)) //create the folder if it's not already exists
    {
      mkdir($path,0755,TRUE);
    }

    $config['upload_path']          =  $path;
    $config['allowed_types']        = 'xlsx|csv|xls|doc|pdf|docx';
    $config['max_size']             = 5000;
    $this->load->library('upload', $config);
    $file = array();
    foreach($_FILES as $key=>$val){
      if ($val['size']>0){
        if(!$this->upload->do_upload($key)){
            $file[$key]['massge'] = $this->upload->display_errors();
        }else{
            $file[$key] = $this->upload->data();
            $post['file'][$key]['url'] =  base_url().$path. $this->upload->data('file_name');
            $post['file'][$key]['data'] = $this->upload->data();
        }
      }else {
        $post['file'][$key]  = null;
      }
    }
    $this->Controlpanel_model->form_draft_update($post);
    redirect(URL_Site."/controlpanel/document/form/draft");
  }
  public function form_draft_insert()
  {
    $post = $_POST;
    $path = "assets/uploads/".$post['user_id']."/";
    $path = iconv("UTF-8","Windows-1252",$path);

    if(!is_dir($path)) //create the folder if it's not already exists
    {
      mkdir($path,0755,TRUE);
    }

    $config['upload_path']          =  $path;
    $config['allowed_types']        = 'xlsx|csv|xls|doc|pdf|docx';
    $config['max_size']             = 5000;
    $this->load->library('upload', $config);
    $file = array();
    foreach($_FILES as $key=>$val){
      if ($val['size']>0){
        if(!$this->upload->do_upload($key)){
            $file[$key]['massge'] = $this->upload->display_errors();
        }else{
            $file[$key] = $this->upload->data();
            $post['file'][$key]['url'] =  base_url().$path. $this->upload->data('file_name');
            $post['file'][$key]['data'] = $this->upload->data();
        }
      }
    }
    $this->Controlpanel_model->form_draft_insert($post);
    redirect(URL_Site."/controlpanel/document/form/draft");
  }
  public function form_draft_edit()
  {
    $id =   $this->uri->segment(6);
    $rowdata = $this->Controlpanel_model->get_form_draft($id);
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / document / form / draft / edit',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $data  = array('rowdata' =>$rowdata['data'][0],
                    'filedata' => json_encode($rowdata['file']));
    $this->load->view('menu1/user_form_file_edit_view',$data);

  }
  public function approved()
  {
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / document / approved',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu1/approved_doc_view');
  }
  public function approved_form_edit()
  {

    date_default_timezone_set('Asia/Bangkok');
    $title = $this->uri->segment(1);
    $id_form =$this->uri->segment(6);
    $data  = array('title' => $title.' / document / form / edit',
                    'user'=>$_SESSION,
                    'id_form'=>$id_form);
    $this->load->view('template/header',$data);
    $this->load->view('menu1/approved_form_edit_view');
  }
  public function approved_oper_edit()
  {

    date_default_timezone_set('Asia/Bangkok');
    $title = $this->uri->segment(1);
    $id_form =$this->uri->segment(6);
    $data  = array('title' => $title.' / document / oper / edit',
                    'user'=>$_SESSION,
                    'id_form'=>$id_form);
    $this->load->view('template/header',$data);
    $this->load->view('menu1/approved_oper_edit_view');
  }
  public function approved_form_insert()
  {
    $post = $_POST;
    $config['upload_path']          =  'assets/uploads/temp/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 1000;
    $this->load->library('upload', $config);
    $file = array();

    foreach($_FILES as $key=>$val){
      if(!$this->upload->do_upload($key)){
          $file[$key] = $this->upload->display_errors();
      }else{
          $file[$key] = $this->upload->data();
          $post[$key] =  base_url().'assets/uploads/temp/'. $this->upload->data('file_name');
      }
    }

    $this->Controlpanel_model->approved_form_insert($post);
    redirect(URL_Site."/controlpanel/document/approved");
    exit(0);
  }
  public function approved_form_update()
  {
    $post = $_POST;
    $config['upload_path']          =  'assets/uploads/temp/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 1000;
    $this->load->library('upload', $config);
    $file = array();
    foreach($_FILES as $key=>$val){

      if ($val['size']>0){
        if(!$this->upload->do_upload($key)){
            $file[$key] = $this->upload->display_errors();
        }else{
            $file[$key] = $this->upload->data();
            $post[$key] =  base_url().'assets/uploads/temp/'. $this->upload->data('file_name');
        }
      }
    }

    $this->Controlpanel_model->approved_form_oper_update($post);
    redirect(URL_Site."/controlpanel/process");
    exit(0);
  }
  public function do_upload($post)
      {
        //header('Content-Type: text/html; charset=utf-8');
        $path = "assets/uploads/".$post['user_id']."/";
        $path = iconv("UTF-8","Windows-1252",$path);

        if(!is_dir($path)) //create the folder if it's not already exists
        {
          mkdir($path,0755,TRUE);
        }
              $config['upload_path']          = $path;
              $config['allowed_types']        = 'xls|xlsx|doc|pdf|docx';
              $config['max_size']             = 5000;
              $config['file_name']            = "file_".date("Y_m_d");

              $this->load->library('upload', $config);

              if ( ! $this->upload->do_upload('userfile'))
              {
                      $error = array('error' => $this->upload->display_errors());
              } else {
                  $data = $this->upload->data();
                  $post['file_url'] = URL_Site . '/' . $path . $data['file_name'];
                  $post['file_path'] = $data['full_path'];

                }
              if(!$this->upload->do_upload('RegisForm'))
              {
                      $error = array('error' => $this->upload->display_errors());
                      echo "<pre>";
                      print_r($error);
              }
              else
              {
                      $data = $this->upload->data();
                      // echo "<pre>";
                      // print_r($data);
                      $post['file_regis_url']  = URL_Site.'/'.$path.$data['file_name'];
                      $post['file_regis_path'] = $data['full_path'];
                      //print_r($post);
                      $title = $this->uri->segment(1);
                      $data  = array('title' => $title.' / document / form',
                                      'user'=>$_SESSION);
                      $this->load->view('template/header',$data);
                      $this->Controlpanel_model->form_insert($post);
                      $this->load->view('loader/user_form_success_view');
              }


      }
  public function get_list_document()
  {
    $id = $this->uri->segment(4);
    $rowdata = $this->Controlpanel_model->get_list_document($id);
    echo json_encode($rowdata);
  }


}

?>
