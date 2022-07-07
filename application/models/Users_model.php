<?php
    class Users_model extends CI_Model{
        private $tables = 'users';

        public function getAll(){
            $query = $this->db->get($this->tables);
            return $query->result();
        }

        public function findById($id){
            $this->db->where('id',$id);
            $query = $this->db->get($this->tables);
            return $query->row();
        }

        public function login($uname,$pass){
            $sql = "SELECT * FROM users WHERE username =? and password = md5(?);";
            $data=[$uname,$pass];
            $query = $this->db->query($sql,$data);
            return $query->row();
        }

        public function delete($id){
            $sql = "DELETE from users where id =?";
            $this->db->query($sql,array($id));
        }

        public function update($data){
            $sql= "UPDATE users SET username=?,password=md5(?),email=?,status=?,role=? where username=?";
            $this->db->query($sql,$data);
        }
    }
?>