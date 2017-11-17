<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Auth_model extends CI_Model{
	function check_data(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->db->get_where('admin', array('username'=>$username, 'password'=>$password));
		if($result->num_rows() > 0){
			$session = array_merge(array('logged_id'=>TRUE), $result->row_array());
			return $session;
		}else{
			return FALSE;
		}
	}

	function update_password($data){
		$this->db->update('admin', $data, array('email' => $data['email']));
		$this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dirubah</div>');
	}

	function get_by($id){
		return $this->db->get_where('admin', array('id' => $id))->row();
	}
}
