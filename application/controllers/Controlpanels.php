<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlpanels extends CI_Controller {

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
		$data  = array('title' => $title.' / homepage',
										'user'=>$_SESSION);
		$this->load->view('template/header',$data);
    if ($_SESSION['logged_type'] == 'user') {

      $this->load->view('menu2/user_process_view');
    }else {
      $this->load->view('controlpanel_view');
    }

	}
  public function search()
  {
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / search',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu3/search_list_view');
  }
  public function user_process_view()
  {

    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / process',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu2/user_process_view');
  }
  public function process()
  {

    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / process',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu2/admin_process_view');
  }
  public function process_detail()
  {
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / process / detail',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu2/admin_process_detail_view');
  }
  public function process_detail_insert()
  {
    $post = $_POST;
    if (count($post)>0) {
      $val = $this->uri->segment(5);
      $rowdata = $this->Controlpanel_model->get_forms_oper_detail($val);
      $post['id_oper'] = $rowdata[0]['id_oper'];
      $this->Controlpanel_model->process_detail_insert($post);
      redirect(URL_Site."/controlpanel/process/detail/".$val);
      exit(0);
    }
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / process / detail / insert',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu2/admin_process_detail_insert_view');
  }
  public function download_document()
  {
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / download',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu4/download_document_view');
  }
  public function download_document_success()
  {
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / download / success ',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu4/download_document_success_view');
  }
  function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
  }
  public function setting_viewuser()
  {
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / setting / viewuser',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu_setting/setting_admin_viewuser');
  }
  public function setting_viewuser_edit()
  {
    $id = $this->uri->segment(5);
    $countrow = $this->Controlpanel_model->get_count_setting_viewuser($id);
    if ($_POST) {
      if ($countrow>0) {
        $this->Controlpanel_model->update_setting_viewuser($_POST);
      }else {
        $this->Controlpanel_model->create_setting_viewuser($_POST);
      }
      redirect(base_url().'controlpanel/setting/viewuser');
    }else {
      $rowdata = $this->Controlpanel_model->get_setting_viewuser($id);
      $title = $this->uri->segment(1);
      $data  = array('title' => $title.' / setting / viewuser / edit',
                      'user'=>$_SESSION);
      $this->load->view('template/header',$data);
      $data  = array('cer_id' => $id,'rowdata'=> $rowdata);
      $this->load->view('menu_setting/setting_admin_viewuser_edit',  $data );
    }

  }
  public function setting_admin()
  {
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / setting / admin',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu_setting/setting_admin_view');
  }
  public function setting_admin_insert()
  {
    $post = $_POST;
    if (count($post)>0) {
      $this->Controlpanel_model->create_account_admin($post);
      redirect(URL_Site."/controlpanel/setting/admin");
      exit(0);
    }
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / setting / admin / insert',
                    'user'=>$_SESSION);
    $data  = array('rowdata' =>[]);
    $this->load->view('menu_setting/setting_admin_create_view',$data);
  }
  public function setting_admin_edit()
  {
    $post = $_POST;
    if (count($post)>0) {
      $this->Controlpanel_model->update_account($post);
      redirect(URL_Site."/controlpanel/setting/admin");
      exit(0);
    }
    $title = $this->uri->segment(1);
    $id = $this->uri->segment(5);
    $data  = array('title' => $title.' / setting / admin / insert',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $rowdata =  $this->Controlpanel_model->get_account_userById($id);
    $data  = array('rowdata' =>$rowdata[0]);
    $this->load->view('menu_setting/setting_admin_create_view',$data);
  }
  public function setting_user()
  {
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / setting / user',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $this->load->view('menu_setting/setting_user_view');
  }
  public function setting_user_edit()
  {
    $post = $_POST;
    if (count($post)>0) {
      $this->Controlpanel_model->update_account($post);
      redirect(URL_Site."/controlpanel/setting/admin");
      exit(0);
    }
    $title = $this->uri->segment(1);
    $id = $this->uri->segment(5);
    $data  = array('title' => $title.' / setting / admin / insert',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $rowdata =  $this->Controlpanel_model->get_account_userById($id);
    $data  = array('rowdata' =>$rowdata[0]);
    $this->load->view('menu_setting/setting_user_create_view',$data);
  }
  public function setting_user_insert()
  {
    $post = $_POST;
    if (count($post)>0) {
      $this->Controlpanel_model->create_account_user($post);
      redirect(URL_Site."/controlpanel/setting/user");
      exit(0);
    }
    $title = $this->uri->segment(1);
    $data  = array('title' => $title.' / setting / user / insert',
                    'user'=>$_SESSION);
    $this->load->view('template/header',$data);
    $data  = array('rowdata' =>[]);
    $this->load->view('menu_setting/setting_user_create_view',$data);
  }
  public function delete_account_user()
  {
    $id = $this->uri->segment(5);
    $this->Controlpanel_model->update_status_user($id);
    redirect(URL_Site."/controlpanel/");
    exit(0);
  }
  function rand_code($len){
   $min_lenght= 0;
   $max_lenght = 100;
   $bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   $smallL = "abcdefghijklmnopqrstuvwxyz";
   $number = "0123456789";
   $bigB = str_shuffle($bigL);
   $smallS = str_shuffle($smallL);
   $numberS = str_shuffle($number);
   $subA = substr($bigB,0,5);
   $subB = substr($bigB,6,5);
   $subC = substr($bigB,10,5);
   $subD = substr($smallS,0,5);
   $subE = substr($smallS,6,5);
   $subF = substr($smallS,10,5);
   $subG = substr($numberS,0,5);
   $subH = substr($numberS,6,5);
   $subI = substr($numberS,10,5);
   $RandCode1 = str_shuffle($subA.$subD.$subB.$subF.$subC.$subE);
   $RandCode2 = str_shuffle($RandCode1);
   $RandCode = $RandCode1.$RandCode2;
   if ($len>$min_lenght && $len<$max_lenght)
   {
   $CodeEX = substr($RandCode,0,$len);
   }
   else
   {
   $CodeEX = $RandCode;
   }
   return $CodeEX;
  }



}

?>
