<?php 

class admin_model extends CI_Model{


	function GetContact() {
		return $this->db->query("select * from tbl_contact");
	}

	// function GetContactid($id)
	// {
	// 	return $this->db->query("select * from tbl_contact where id_contact='$id' ");
	// }

	function update_contact($id,$data)
	{
		$this->db->where('id_contact',$id);
		$this->db->update('tbl_contact',$data);
	}
	// function delete_contact($id)
	// {
	// 	$this->db->where('id_contact',$id);
	// 	$this->db->delete('tbl_contact');	
	// }

	function GetAbout()
	{
		return $this->db->query("select * from tbl_about");
	}

	function update_about($id,$data)
	{
		$this->db->where('id_about',$id);
		$this->db->update('tbl_about',$data);
	}

	function Getwork() 
	{
		return $this->db->query("select * from tbl_work order by id_work desc");
	}

	function Getworkid($id_work)
	{
		return $this->db->query("select * from tbl_work where id_work='$id_work' ");
	}

	function delete_work($id)
	{
		$this->db->where('id_work',$id);
		$this->db->delete('tbl_work');
	}
}

