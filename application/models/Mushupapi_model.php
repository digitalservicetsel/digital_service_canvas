<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mashupapi_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  function get_all(){
    return $this->db->get('mashup_api')->result();
  }

  function save_api($data){
    $this->db->insert('mashup_api', $data);
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah ditambah</div>');
  }

  function update_api($data){
    $this->db->update('mashup_api', $data, array('id_api' => $data['id_composite']));
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dirubah</div>');
  }

  function delete_api($id){
    $this->db->delete('mashup_api', array('id_composite' => $id));
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dihapus</div>');
  }

  function get_by($id){
    return $this->db->get_where('mashup_api', array('id_composite' => $id))->row();
  }
}
