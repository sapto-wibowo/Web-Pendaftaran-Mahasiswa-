<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Adminku extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('m_siswa');
        $this->load->library('form_validation');
        $this->load->model('m_login');
        if($this->m_login->isNotLogin()) redirect(site_url('admin/Login'));
    }

    public function index(){
        $data['mahasiswaku'] = $this->m_siswa->getAll();
        $this->load->view('admin/view_table', $data);
    }

    public function tambah(){
        $siswa = $this->m_siswa;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if($validation->run()){
            $siswa->simpan();
        }
        $this->load->view("admin/view_add");
    }

    public function ubah($id=null){
        if(!isset($id)) redirect('admin/adminku');

        $siswa = $this->m_siswa;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if($validation->run()){
            $siswa->edit();
        }
        $data["siswa"] = $siswa->getById($id);
        $this->load->view("admin/view_edit", $data);
    }

    public function delete($id=null){
        if ($this->m_siswa->delete($id)) {
            redirect(site_url('admin/adminku'));
        }
    }
}