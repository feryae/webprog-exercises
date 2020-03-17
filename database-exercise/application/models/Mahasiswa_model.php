<?php
 // write your name and student id here
class Mahasiswa_model extends CI_model
{

	public function getAllMahasiswa()
	{
		//use query builder to get data table "mahasiswa"

		$query = $this->db->get('mahasiswa')	;
		return $query->result_array();
	}

	public function tambahDataMahasiswa()
	{
		$data = [
			"id" => ($this->db->query('SELECT * FROM mahasiswa')->num_rows() + 1),
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		return $this->db->insert('mahasiswa',$data);
	}

	public function hapusDataMahasiswa($id)
	{
		//use query builder to delete data based on id
		return $this->db->delete('mahasiswa', array('id' => $id));
	}

	public function getMahasiswaById($id)
	{
		//get data mahasiswa based on id
		$this->db->where('id',$id)->get();
		return $this->result_array();

	}

	public function ubahDataMahasiswa($id)
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];
		//use query builder class to update data mahasiswa based on id
			$this->db->where('id' ,'1');
			$this->db->update('mahasiswa',$data);

	}

	public function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"




		//return data mahasiswa that has been searched
	}
}
