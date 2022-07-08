<?php
class m_wisata extends CI_Model{
    public function get_data(){
        return $this->db->get('tempat_wisata')->result_array();
    }
    
    public function get_all(){
        return $this->db->query('SELECT tempat_wisata.*,jenis_wisata.nama as jenis, kecamatan.nama as kecamatan FROM tempat_wisata INNER JOIN jenis_wisata ON tempat_wisata.jenis_id = jenis_wisata.id INNER JOIN kecamatan ON tempat_wisata.kecamatan_id = kecamatan.id;')->result();
    }
    
    public function detail_data($id = 1){
        return $this->db->query('SELECT tempat_wisata.*,jenis_wisata.nama as jenis, kecamatan.nama as kecamatan FROM tempat_wisata INNER JOIN jenis_wisata ON tempat_wisata.jenis_id = jenis_wisata.id INNER JOIN kecamatan ON tempat_wisata.kecamatan_id = kecamatan.id WHERE tempat_wisata.id ='. $id)->result();
    }
    
    public function save($data, $table){
        return $this->db->insert($table, $data);
    }
    
    public function get_jenis(){
        return $this->db->query('select * from jenis_wisata')->result();
    }
    
    public function get_kec(){
        return $this->db->query('select * from kecamatan')->result();
    }
    
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function edit_data($where, $table){
        return $this->db->get_where($table, $where);
        
    }
    
    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
    public function update_skor($skor, $id){
        return $this->db->query("update tempat_wisata set skor_rating =$skor where id = $id");
        
    }
}
