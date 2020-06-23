<?php 

class Ganti_bahasa{
	function Ganti_bahasa()
	{
		$this->ci =& get_instance();
	}
	function ganti_ina()
	{
		$ganti['bahasa']='indonesia';
		$this->ci->config->set_item('language','indonesia');
		$this->ci->session->set_userdata($ganti);
	}
	function ganti_english()
	{
		$this->ci->session->unset_userdata('bahasa');
	}
}