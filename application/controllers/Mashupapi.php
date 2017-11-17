<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mashupapi extends CI_Controller{
  public function index(){
	$data ['content'] = $this->load->view('mashupapi_view','',TRUE);
	$this->load->view('template', $data);
  }
}
