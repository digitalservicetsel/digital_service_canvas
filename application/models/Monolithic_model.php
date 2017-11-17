<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Monolithic_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  function get_all(){
    return $this->db->get('api_category')->result();
  }

  function save_monolithic($data){
    $this->db->insert('api_category', $data);
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah ditambah</div>');
  }

  function update_monolithic($data){
    $this->db->update('api_category', $data, array('id_list' => $data['id_list']));
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dirubah</div>');
  }

  function delete_monolithic($id){
    $this->db->delete('api_category', array('id_list' => $id));
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dihapus</div>');
  }

  function get_by($id){
    return $this->db->get_where('api_category', array('id_list' => $id))->row();
  }
}
