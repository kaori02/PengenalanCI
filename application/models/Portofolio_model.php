<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio_model extends CI_Model
{
	private $_table = "portofolios";

	public $portofolio_id;
	public $portofolio_name;
	public $portofolio_date;
	public $portofolio_desc;
	public $portofolio_pic = "default.jpg";

	public function rules()
	{
		return [
			['field' => 'portofolio_name',
			'label' => 'portofolio_name',
			'rules' => 'required'],
			
			['field' => 'portofolio_date',
			'label' => 'portofolio_date',
			'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->order_by('portofolio_date','ASC')->get($this->_table)->result();
	}
	
	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["portofolio_id" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->portofolio_id = uniqid();
		$this->portofolio_name = $post["portofolio_name"];
		$this->portofolio_date = $post["portofolio_date"];
		$this->portofolio_desc = $post["portofolio_desc"];
		$this->portofolio_pic = $this->_uploadImage();
		return $this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->portofolio_id = $post["portofolio_id"];
		$this->portofolio_name = $post["portofolio_name"];
		$this->portofolio_date = $post["portofolio_date"];
		$this->portofolio_desc = $post["portofolio_desc"];

		if (!empty($_FILES["portofolio_pic"]["name"]))
		{
			$this->portofolio_pic = $this->_uploadImage();
		} 
		else
		{
			$this->portofolio_pic = $post["old_image"];
		}
		return $this->db->update($this->_table, $this, array('portofolio_id' => $post['portofolio_id']));
	}

	public function delete($id)
	{
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array("portofolio_id" => $id));
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './public/upload/portofolio/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->portofolio_id;
		$config['overwrite']            = true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('portofolio_pic'))
		{
			return $this->upload->data("file_name");
		}
		return "default.jpg";
	}

	private function _deleteImage($id)
	{
		$portofolio = $this->getById($id);
		if ($portofolio->portofolio_pic != "default.jpg")
		{
			$filename = explode(".", $portofolio->portofolio_pic)[0];
			return array_map('unlink', glob(FCPATH."public/upload/portofolio/$filename.*"));
		}
	}
}
