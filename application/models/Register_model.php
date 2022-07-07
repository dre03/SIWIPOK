<?php
    class Register_model extends CI_Model{
        private $tables = 'users';
        public function save($data){
            $sql = "Insert INTO users (username, password, email, created_at,last_login,status,role)
            VALUES (?,md5(?),?,now(),now(),0,?)";
            $this->db->query($sql,$data);
        }
           
    }

?>