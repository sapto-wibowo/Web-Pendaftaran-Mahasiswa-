<?php
    class M_login extends CI_Model{
        function cek_login($table, $where){
            return $this->db->get_where($table, $where);
        }

        public function isNotLogin(){
            if($this->session->userdata('status') != "login"){
                redirect(base_url("index.php/admin/Login"));        
            }

        }
    }

?>