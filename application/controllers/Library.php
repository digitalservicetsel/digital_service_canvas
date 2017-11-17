<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Library extends CI_Controller{

  function __construct(){
      parent:: __construct();
      $this->load->model('library_model');
  }

  public function index(){
    $model ['model'] = $this->library_model->get_all();
    $data ['content'] = $this->load->view('library_view',$model,TRUE);
		$this->load->view('template', $data);
  }

  function add_library(){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $tes = array(
      'id_lib' => ($this->db->count_all('library')+1),
      'service' => '',
      'detail_library' => ''
    );
    $this->form_validation->set_error_delimiters('<span class="text-danger">,</span>');
    $this->form_validation->set_rules('id_lib','id_lib','required|numeric');
    $this->form_validation->set_rules('service','service','required');
    $this->form_validation->set_rules('detail_library','detail_library','required');
    if($this->form_validation->run()==FALSE){
      $data ['content'] = $this->load->view('add_library',$tes,TRUE);
      $this->load->view('template', $data);
    }else{
      $save = array(
        'id_lib' => $this->input->post('id_lib'),
        'service' => $this->input->post('service'),
        'detail_library' => $this->input->post('detail_library')
      );
      $this->api_model->save_library($save);
      redirect('library');
    }
  }

  function update_library($id){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $get['get'] = $this->library_model->get_by($id);
    $this->form_validation->set_error_delimiters('<span class="text-danger">,</span>');
    $this->form_validation->set_rules('id_lib','id_lib','required|numeric');
    $this->form_validation->set_rules('service','service','required');
    $this->form_validation->set_rules('detail_library','detail_library','required');
    if($this->form_validation->run()==FALSE){
      $data['content']=$this->load->view('update_library',$get,TRUE);
      $this->load->view('template',$data);
    }else{
      $save = array(
        'id_lib' => $this->input->post('id_lib'),
        'service' => $this->input->post('service'),
        'detail_library' => $this->input->post('detail_library')
      );
      $this->library_model->update_library($save);
      redirect('library');
    }
  }

  function delete_library($id){
    $this->library_model->delete_library($id);
    redirect('library');
  }
}
