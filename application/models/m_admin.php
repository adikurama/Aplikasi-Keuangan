<?php
class M_admin extends CI_Model{
public function insert_kategori($table,$data)
{
	return $this->db->insert($table,$data);
}
public function get_kategori($table)
{
	return $this->db->get($table);
}
public function insert_detail($table,$data)
{
	return $this->db->insert($table,$data);
}
public function edit_data($where,$table)
{
	return $this->db->get_where($table,$where);
}
public function update_data($where,$data,$table)
{
	$this->db->where($where);
	$this->db->update($table,$data);
}
public function hapus_data($where,$table)
{
	$this->db->where($where);
	$this->db->delete($table);
}
public function get_detail($table)
{
	return $this->db->get($table);
}
public function insert_transaksi($table,$data)
{
	return $this->db->insert($table,$data);
}
public function show_transaksi()
{
	$this->db->select('*');
	$this->db->from('transaksi');
	$this->db->join('detail_kategori','detail_kategori.id_detail_kategori=transaksi.id_detail_kategori');
	$query = $this->db->get();
	return $query->result();
}
public function edit_transaksi($where)
{
	$this->db->select('*');
	$this->db->from('transaksi');
	$this->db->join('detail_kategori','detail_kategori.id_detail_kategori=transaksi.id_detail_kategori');
	$this->db->where($where);
	$query = $this->db->get();

	return $query->result();
}
public function update_transaksi($where,$data,$table)
{
	$this->db->where($where);
	$this->db->update($table,$data);
}
public function hapus_transaksi($where,$table)
{
	$this->db->where($where);
	$this->db->delete($table);
}
public function tampil_transaksi($table)
{
	return $this->db->get($table);
}
}