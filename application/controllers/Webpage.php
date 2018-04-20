<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webpage extends CI_Controller {

	function __construct()
  {
         // this is your constructor
         parent::__construct();
         $this->load->helper('form');
         $this->load->helper('url');
         $this->load->helper('asset_url');
         $this->load->model('controlpanel_model');
	}
	public function index()
	{
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
					redirect(URL_Site."/controlpanel");
		}
		$this->load->view('index_view');
	}
	public function login()
	{
    $post = $_POST;
		$rowdata = $this->controlpanel_model->check_user_login($post);

    if (count($rowdata)>0) {
      $key = $this->rand_code(16);
			$array =	 array('logged_in' => true,
											'logged_key' => $key,
											'logged_user' => $rowdata[0]['user_name'],
											'logged_type' => $rowdata[0]['user_type']);
			$this->session->set_userdata($array);
      echo "login";
    }else {
      echo "user or pass is empty";
    }
	}
  public function logout()
  {
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
      redirect(URL_Site);
		} else {

			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect(URL_Site);

		}
  }

	//////// ฟังชั่นการ genkey /////////
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
