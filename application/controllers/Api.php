<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Api extends CI_Controller{

  function __construct(){
      parent:: __construct();
      $this->load->model('api_model');
  }

  public function index(){
    $model ['model'] = $this->api_model->get_all();
    $data ['content'] = $this->load->view('api_list',$model,TRUE);
		$this->load->view('template', $data);
  }
  
  function compose_api(){
	 $data ['content'] = $this->load->view('compose_api_view','',TRUE);
	$this->load->view('template', $data);
  }

  function add_api(){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $tes = array(
      'id_api' => ($this->db->count_all('api')+1),
      'url' => '',
      'description' => '',
      'status' => '',
      'last_update' => ''
    );
    $this->form_validation->set_error_delimiters('<span class="text-danger">,</span>');
    $this->form_validation->set_rules('id_api','id_api','required|numeric');
    $this->form_validation->set_rules('url','url','required');
    $this->form_validation->set_rules('description','description','required');
    $this->form_validation->set_rules('status','status','required|numeric');
    $this->form_validation->set_rules('las_update','last_update','required|date');
    if($this->form_validation->run()==FALSE){
      $data ['content'] = $this->load->view('add_api',$tes,TRUE);
      $this->load->view('template', $data);
    }else{
      $save = array(
        'id_api' => $this->input->post('id_api'),
        'url' => $this->input->post('url'),
        'description' => $this->input->post('description'),
        'status' => $this->input->post('status'),
        'last_update' => $this->input->post('last_update')
      );
      $this->api_model->save_api($save);
      redirect('api');
    }
  }

  function update_api($id){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $get['get'] = $this->api_model->get_by($id);
    $this->form_validation->set_error_delimiters('<span class="text-danger">,</span>');
    $this->form_validation->set_rules('id_api','id_api','required|numeric');
    $this->form_validation->set_rules('url','url','required');
    $this->form_validation->set_rules('description','description','required');
    $this->form_validation->set_rules('status','status','required|numeric');
    $this->form_validation->set_rules('las_update','last_update','required|date');
    if($this->form_validation->run()==FALSE){
      $data['content']=$this->load->view('update_api',$get,TRUE);
      $this->load->view('template',$data);
    }else{
      $save = array(
        'id_api' => $this->input->post('id_api'),
        'url' => $this->input->post('url'),
        'description' => $this->input->post('description'),
        'status' => $this->input->post('status'),
        'last_update' => $this->input->post('last_update')
      );
      $this->api_model->update_api($save);
      redirect('api');
    }
  }

  function delete_api($id){
    $this->api_model->delete_api($id);
    redirect('api');
  }
}
