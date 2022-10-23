<!-- Create By Syahrul Firdaus -->
<?php

class m_data extends CI_Model
{

	public function tampil_Datalatih()
	{
		return $this->db->get('nutech')->result_array();
	}

	function tampil_data()
	{
		return $this->db->get('daftar_harga');
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function del($id)
	{
		$this->db->delete('daftar_harga', ['id_barang' => $id]);
	}
	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
