<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reuni extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('M_Reuni');		
		$this->load->helper(array('url'));
		if($this->session->userdata('status') != "login"){
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
		}
	}

	public function index(){
		$data['title'] = 'Reuni Alumni SMKN 1 Malang';
		$data['data'] = $this->M_Reuni->tampil_reuni();
		$this->load->view('widget/header', $data);
		$this->load->view('V_Reuni',$data);
		$this->load->view('widget/footer');
	}

	public function detail($id){
		$data['title'] = 'Detail Reuni';
		$data['data'] = $this->M_Reuni->detail_reuni($id);
		$this->load->view('widget/header',$data);
		$this->load->view('V_ReuniDetail',$data);
		$this->load->view('widget/footer');
	}
}
