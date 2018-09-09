<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function index()
	{
		$data = array(
			'page' => 'admin',
			'link' => 'admin',
			'script' => 'script/script_dashboard' 
		);
		$this->load->view('template/wrapper', $data);
	}

	public function periode(){
		$get = $this->db->get('periode');
		$data = array(
			'page' => 'periode',
			'link' => 'periode',
			'script' => 'script/script_dashboard',
			'data' => $get 
		);
		$this->load->view('template/wrapper', $data);
	}

	public function detail_periode($idperiode){
		$get = $this->db->get_where('periode', array('idperiode' => $idperiode));
		$data = array(
			'page' => 'detail_periode',
			'link' => 'periode',
			'script' => 'script/script_dashboard',
			'data' => $get, 
			'idperiode' => $idperiode
		);
		$this->load->view('template/wrapper', $data);
	}

	public function proses_update_periode(){
		$data = array(
			'ta' => $this->input->post('ta', true),
			'ket' =>  $this->input->post('keterangan', true),
			'status' => $this->input->post('status', true),
		);
		$idperiode = $this->input->post('id_periode', true);
		$this->db->where(array('idperiode' => $this->input->post('id_periode', true)));
		$simpan = $this->db->update('periode', $data);
		
		if($simpan){
			echo '<script>alert("Berhasil diupdate");window.location = "'.base_url().'admin/detail_periode/'.$idperiode.'";</script>';
			exit();
		}else{
			echo '<script>alert("Gagal diupdate");window.location = "'.base_url().'admin/detail_periode/'.$idperiode.'";</script>';
			exit();
		}
	}

	public function tambah_periode(){
	
		$data = array(
			'page' => 'tambah_periode',
			'link' => 'periode',
			'script' => 'script/script_dashboard',
		);
		$this->load->view('template/wrapper', $data);
	}

	public function proses_tambah_periode(){
		$data = array(
			'ta' => $this->input->post('ta', true),
			'ket' =>  $this->input->post('keterangan', true),
			'status' => $this->input->post('status', true),
		);
		
		$simpan = $this->db->insert('periode', $data);
		
		if($simpan){
			echo '<script>alert("Berhasil disimpan");window.location = "'.base_url().'admin/periode";</script>';
			exit();
		}else{
			echo '<script>alert("Gagal disimpan");window.location = "'.base_url().'admin/detail_periode/periode";</script>';
			exit();
		}
	}

	public function pendaftar_di_periode($idperiode){
		$get = $this->db->query("select * from pendaftaran left join siswa on siswa.email = pendaftaran.email where idperiode = '$idperiode'");
		$data = array(
			'page' => 'pendaftar_di_periode',
			'link' => 'periode',
			'script' => 'script/script_dashboard',
			'data' => $get
		);
		$this->load->view('template/wrapper', $data);
	}

	public function detail_pendaftar($idpendaftar){
		$get = $this->db->query("select * from pendaftaran left join siswa on siswa.email = pendaftaran.email where nodaftar = '$idpendaftar'");
		$data = array(
			'page' => 'admin_detail_pendaftar',
			'link' => 'periode',
			'script' => 'script/script_dashboard',
			'data' => $get,
			'idpendaftar' => $idpendaftar
		);
		$this->load->view('template/wrapper', $data);
	}

	public function bukti_bayar_pendaftar($idpendaftar){
		$get = $this->db->get_where('pembayaran', array('nodaftar' => $idpendaftar));
		$data = array(
			'page' => 'bukti_bayar_pendaftar',
			'link' => 'periode',
			'script' => 'script/script_dashboard',
			'idpendaftar' => $idpendaftar,
			'data' => $get
		);
		$this->load->view('template/wrapper', $data);
	}

	public function proses_verifikasi_pendaftar(){
		$data = array(
			'statusdaftar' => $this->input->post('verifikasi_pendaftar', true),
			'pemverifikasi' => $this->session->userdata('username'),
			'tglverifikasi' => date('Y-m-d H:i:s') 
		);
		$idpendaftar = $this->input->post('idpendaftar', true);
		$this->db->where(array('nodaftar' => $idpendaftar));
		$simpan = $this->db->update('pendaftaran', $data);
		if($simpan){
			echo '<script>alert("Berhasil disimpan");window.location = "'.base_url().'admin/detail_pendaftar/'.$idpendaftar.'";</script>';
			exit();
		}else{
			echo '<script>alert("Gagal disimpan");window.location = "'.base_url().'admin/detail_pendaftar/'.$idpendaftar.'";</script>';
			exit();
		}
	}

	public function proses_verifikasi_bukti_bayar(){
		$data = array(
			'status' => $this->input->post('verifikasi_bukti_bayar', true),
			'pemverifikasi' => $this->session->userdata('username'),
			'tglverifikasi' => date('Y-m-d H:i:s') 
		);
		$idpendaftar = $this->input->post('idpendaftar', true);
		$this->db->where(array('nodaftar' => $idpendaftar));
		$simpan = $this->db->update('pembayaran', $data);
		if($simpan){
			echo '<script>alert("Berhasil disimpan");window.location = "'.base_url().'admin/bukti_bayar_pendaftar/'.$idpendaftar.'";</script>';
			exit();
		}else{
			echo '<script>alert("Gagal disimpan");window.location = "'.base_url().'admin/bukti_bayar_pendaftar/'.$idpendaftar.'";</script>';
			exit();
		}
	}
}