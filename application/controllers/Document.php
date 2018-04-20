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
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / document / form',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu1/user_form_file_view');
  }
  public function form_insert()
  {
  $post = $_POST;
  $this->do_upload($post);
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
    $this->Controlpanel_model->approved_form_insert($post);
    redirect(URL_Site."/controlpanel/document/approved");
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
              $config['allowed_types']        = 'xls|xlsx|doc|pdf';
              $config['max_size']             = 5000;
              $config['file_name']            = "file_".date("Y_m_d");

              $this->load->library('upload', $config);

              if ( ! $this->upload->do_upload('userfile'))
              {
                      $error = array('error' => $this->upload->display_errors());
                      echo "<pre>";
                      print_r($error);
              }
              else
              {
                      $data = $this->upload->data();
                      //echo "<pre>";
                      //print_r($data);
                      $post['file_url']  = URL_Site.'/'.$path.$data['file_name'];
                      $post['file_path'] = $data['full_path'];
                      //print_r($post);
                      $title = $this->uri->segment(1);
                      $data  = array('title' => $title.' / document / form',
                                      'user'=>$_SESSION);
                      $this->load->view('template/header',$data);
                      $this->Controlpanel_model->form_insert($post);
                      $this->load->view('loader/user_form_success_view');
              }
      }


}

?>
