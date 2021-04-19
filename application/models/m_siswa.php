<?php defined('BASEPATH') OR exit ('No direct script access allowe');

    class M_siswa extends CI_Model{
        private $_table = "mahasiswaku";

        public $id ;
        public $no_daftar ;
        public $nama;
        public $nim;
        public $sex;
        public $tempat;
        public $tgl_lahir;
        public $foto;
        public $alamat;
        public $email;
        public $telp;
    
        public function rules(){
            return[
                ['field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'],
                
                ['field' => 'nim',
                'label' => 'NIM',
                'rules' => 'required'],
                
                ['field' => 'sex',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'],
                
                ['field' => 'tempat',
                'label' => 'Tempat Lahir',
                'rules' => 'required'],
    
                ['field' => 'tgl_lahir',
                'label' => 'Tanggal lahir',
                'rules' => 'date'],
    
                ['field' => 'email',
                'label' => 'Email',
                'rules' => 'required']
            ];
        }
        public function getAll(){
            return $this->db->get($this->_table)->result();
        }
    
        public function getById($id){
            return $this->db->get_where($this->_table, ["id"=>$id])->row();
        }
    
        public function simpan(){
            $post = $this->input->post();
            $this->id = uniqid();
            $this->no_daftar = $post['no_daftar'];
            $this->nama = $post['nama'];
            $this->nim = $post['nim'];
            $this->sex = $post['sex'];
            $this->tempat = $post['tempat'];
            $this->tgl_lahir = $post['tgl_lahir'];
            $this->foto = $this->uploadfoto();
            $this->alamat = $post['alamat'];
            $this->email = $post['email'];
            $this->telp = $post['telp'];
            return $this->db->insert($this->_table,$this);
        }
    
        public function edit(){
            $post = $this->input->post();
            $this->id = $post["id"];
            $this->no_daftar = $post['no_daftar'];
            $this->nama = $post['nama'];
            $this->nim = $post['nim'];
            $this->sex = $post['sex'];
            $this->tempat = $post['tempat'];
            $this->tgl_lahir = $post['tgl_lahir'];
            if (!empty($_FILES['foto']['name'])){
                $this->foto = $this->uploadfoto();
            }else{
                $this->foto = $post['old_image'];
            }
            $this->alamat = $post['alamat'];
            $this->email = $post['email'];
            $this->telp = $post['telp'];
            return $this->db->update($this->_table, $this, array('id' => $post['id']));
            redirect('admin/adminku');
        }

        public function delete($id){
            $this->hapus_foto($id);
            return $this->db->delete($this->_table, array('id' => $id));
        }
    
        private function uploadfoto(){
            $config['upload_path'] = './upload_image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = $this->id;
            $config['overwrite'] = true;
            $config['max_size'] = 2048;//2mb
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('foto')){
                return $this->upload->data("file_name");
            }
            
            return "default.jpg";
        }

        private function hapus_foto($id){
            $siswa = $this->getById($id);
            if($siswa->foto != "default.jpg"){
                $filename = explode(".", $siswa->foto)[0];
                return array_map('unlink', glob(FCPATH. "./upload_image/$filename.*"));
            }
        }
        
    }

?>