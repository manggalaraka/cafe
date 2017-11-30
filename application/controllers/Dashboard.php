<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		// if ($this->session->userdata('SESS_AKUN_IS_LOGIN') && $this->session->userdata('SESS_AKUN_USER_PRIV') === 1) {
		// 	redirect(base_url('akun/dashboard'));
		// }
		
		$this->output->set_header('Last-Modified:'.gmdate('D,d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control:no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control:post-check=0,pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
		$this->load->helper(array('form','url', 'text_helper','date','file'));
		$this->load->library(array('Pagination','image_lib','session'));
		$this->load->model('M_admin');
		$this->load->model('M_pesanan');
		$this->load->model('M_meja');
		$this->load->model('M_master_menu');
		$this->load->model('M_jenis_makanan');
		$this->load->model('M_menu');

		// $this->load->library('Userauth');
		
	}

	public function tes(){
		//$tes = $this->M_master_menu->all_menu_and_child();
		$data['allmenu'] = $this->M_master_menu->all_menu_and_child();
		$data['view'] = $this->tes_konten1();
		$this->load->view('v_manggala/v_example',$data);
	}


	public function tes_konten1(){
		$data['listKategori'] = $this->M_jenis_makanan->selectFoodOnly();
		$data['listMakanan'] = $this->M_menu->selectFoodOnly();
		// $this->load->view('superadmin/v_header.php',$data);
		$view = $this->load->view('v_manggala/content/v_add_makanan.php',$data,true);
		echo json_encode($view);
	}

	public function home($param=null){
		if($param == null || $param ==""){$param = "Dashboard";}
		$data['allmenu'] = $this->M_master_menu->all_menu_and_child();
		$data['param'] = $param;
		$this->load->view('v_manggala/v_example',$data);
	}

}
