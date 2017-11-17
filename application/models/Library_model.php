<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Library_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  function get_all(){
    return $this->db->get('library')->result();
  }

  function save_api($data){
    $this->db->insert('library', $data);
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah ditambah</div>');
  }

  function update_api($data){
    $this->db->update('library', $data, array('id_lib' => $data['id_lib']));
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dirubah</div>');
  }

  function delete_api($id){
    $this->db->delete('library', array('id_lib' => $id));
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dihapus</div>');
  }

  function get_by($id){
    return $this->db->get_where('library', array('id_lib' => $id))->row();
  }
}
