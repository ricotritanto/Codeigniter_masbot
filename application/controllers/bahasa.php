<?php

class Bahasa extends CI_Controller
{
	function gantiBahasa()
	{
		$this->load->library('ganti_bahasa');
		$bahasa = $_POST['data'];
		if ($bahasa=='ina') 
		{
			$this->ganti_bahasa->ganti_ina();
		}else
		{
			$this->ganti_bahasa->ganti_english();
		}
	}
}