<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Monolithic extends CI_Controller{

  function __construct(){
      parent:: __construct();
      $this->load->model('monolithic_model');
  }

  public function index(){
    $model ['model'] = $this->monolithic_model->get_all();
    $data ['content'] = $this->load->view('monolithic_view',$model,TRUE);
		$this->load->view('template', $data);
  }

  function add_monolithic(){
	  $data ['content'] = $this->load->view('add_monolithic','',TRUE);
	  $this->load->view('template', $data);
    #$this->load->helper('form');
    #$this->load->library('form_validation');
    #$tes = array(
    #  'id_list' => ($this->db->count_all('api_category')+1),
    #  'category' => '',
    #  'detail' => ''
    #);
    #$this->form_validation->set_error_delimiters('<span class="text-danger">,</span>');
    #$this->form_validation->set_rules('id_list','id_list','required|numeric');
    #$this->form_validation->set_rules('category','category','required');
    #$this->form_validation->set_rules('detail','detail','required');
    #if($this->form_validation->run()==FALSE){
    #  $data ['content'] = $this->load->view('add_monolithic',$tes,TRUE);
    #  $this->load->view('template', $data);
    #}else{
    #  $save = array(
    #    'id_list' => $this->input->post('id_list'),
    #    'category' => $this->input->post('category'),
    #    'detail' => $this->input->post('detail')
    #  );
    #  $this->monolithic_model->save_monolithic($save);
    #  redirect('monolithic');
    #}
  }

}
