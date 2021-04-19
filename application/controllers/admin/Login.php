<?php
    class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    function index(){
        $this->load->view('admin/view_login');
    }

    function aksi_login(){
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        $where = array(
            'username' =>$username,
            'password' =>md5($pass)
        );
        $cek = $this->m_login->cek_login("login",$where)->num_rows();
        if($cek>0){
            $data_session = array(
                'nama' =>$username,
                'status' =>"login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("index.php/admin/adminku"));
        }else{
            echo '<script language="javascript">
            window.alert("Username atau Password Salah.. Silahkan login kembali");
            window.location.href="./";
        </script>';
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/admin/Login'));
    }
}
?>