<?php 

class bot_model extends CI_Model{


	function GetContact() {
		return $this->db->query("select * from tbl_contact");
	}

	function GetAbout()
	{
		return $this->db->query("select * from tbl_about");
	}

	function Getwork() 
	{
		return $this->db->query("select * from tbl_work order by id_work Asc");
	}

}

