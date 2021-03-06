<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Blog extends CI_Model {

	public function get_artikel($limit = FALSE, $offset = FALSE){
		if ( $limit ) {
 			$this->db->limit($limit, $offset);
 		}

		$query = $this->db->get('biodata');
		return $query->result();
	}

	public function get_total(){
		return $this->db->count_all("biodata");
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from biodata where id_blog='.$id);
		return $query->result();
	}

	public function get_default($id)
	{
		$data = array();
  		$options = array('id_blog' => $id);
  		$Q = $this->db->get_where('biodata',$options,1);
    		if ($Q->num_rows() > 0){
      			$data = $Q->row_array();
   			}
  		$Q->free_result();
 		return $data;
	}

	public function upload(){
		$config['upload_path'] = './gambar/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('gambar_blog')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'id_blog' => $this->input->post('null'),
			'judul_blog' => $this->input->post('judul_blog'),
			'tanggal_blog' => $this->input->post('tanggal_blog'),
			'konten' => $this->input->post('konten'),
			'penulis' => $this->input->post('penulis'),
			'email' => $this->input->post('email'),
			'genre' => $this->input->post('genre'),
			'gambar_blog' => $upload['file']['file_name'],
			'cat_id' => $this->input->post('cat_id')		
		);
		
		$this->db->insert('biodata', $data);
	}
 
	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$judul_blog = $this->db->escape($post['judul_blog']);
		$tanggal_blog = $this->db->escape($post['tanggal_blog']);
		$konten = $this->db->escape($post['konten']);
		$penulis = $this->db->escape($post['penulis']);
		$email = $this->db->escape($post['email']);
		$genre = $this->db->escape($post['genre']);
		$cat_id = $this->db->escape($post['cat_id']);

		$sql = $this->db->query("UPDATE biodata SET judul_blog = $judul_blog, tanggal_blog = $tanggal_blog, konten = $konten, penulis = $penulis, email = $email, genre = $genre, cat_id = $cat_id WHERE id_blog = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE from biodata WHERE id_blog = ".intval($id));
	}
}