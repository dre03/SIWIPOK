<?php

use LDAP\Result;

    class M_Komentar extends CI_Model{
        public function get_data(){
           return $this->db->get('komentar')->result_array();
        }
        
        public function get_all(){
            return $this->db->query('SELECT komentar.*,tempat_wisata.nama as nama_tempat, users.username, nilai_rating.nama as rating FROM komentar INNER JOIN tempat_wisata ON komentar.wisata_id = tempat_wisata.id INNER JOIN users ON komentar.users_id = users.id INNER JOIN nilai_rating ON komentar.nilai_rating_id = nilai_rating.id;')->result();
        }

        public function detail_data($id){
            return $this->db->query('SELECT komentar.*,tempat_wisata.nama as nama_tempat, users.username, nilai_rating.nama as rating FROM komentar INNER JOIN tempat_wisata ON komentar.wisata_id = tempat_wisata.id INNER JOIN users ON komentar.users_id = users.id INNER JOIN nilai_rating ON komentar.nilai_rating_id = nilai_rating.id WHERE komentar.id ='. $id)->result();
        }

        public function hapus_data($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function save($data, $table){
            return $this->db->insert($table, $data);
        }

        public function getByWisataId($wisata_id){
            return $this->db->query("select komentar.*,users.username from komentar inner join users on komentar.users_id = users.id where wisata_id = $wisata_id")->result();
        }

    }
