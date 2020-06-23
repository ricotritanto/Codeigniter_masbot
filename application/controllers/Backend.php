<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class backend extends CI_Controller {

	public function __construct() {
	parent::__construct();		
		$this->load->library('session');
		$this->load->model('admin_model');
		$this->load->helper(array('url','form'));
	}

	public function index()
	{
		$this->load->view('Backend/template/header');
		$this->load->view('Backend/index');
		$this->load->view('Backend/template/footer');
	}

	function contact()
	{
		if ($this->session->userdata("logged_in")!=="") 
		{

			$abc = $this->admin_model->GetContact();
			foreach ($abc->result_array() as $tampil) 
				{
					$data['id_contact'] = $tampil['id_contact'];
					$data['alamat'] = $tampil['alamat'];
					$data['phone1'] = $tampil['phone1'];
					$data['phone2'] = $tampil['phone2'];
					$data['phone3'] = $tampil['phone3'];
					$data['fax'] = $tampil['fax'];
					$data['email'] = $tampil['email'];
						}
				
			$this->load->view('Backend/template/header');
			$this->load->view('Backend/contact/index', $data);
			$this->load->view('Backend/template/footer');
		}
		else
		{
			redirect('backend');
		}
	}

	public function contact_update() {	
		$data = array('alamat' => $this->input->post('alamat'),
					  'phone1' => $this->input->post('phone1'),
					  'phone2' => $this->input->post('phone2'),
					  'phone3' => $this->input->post('phone3'), 
					  'fax' => $this->input->post('fax'),
					  'email' => $this->input->post('email'));
		$id= $this->input->post("id_contact");
		$this->admin_model->update_contact($id,$data); //akses model untuk menyimpan ke database
	    redirect('backend/contact');
	}

	function delete_contact($id)
	{
		$this->admin_model->delete_contact($id);
		redirect('backend/contact');
	}

	function about()
	{
		if ($this->session->userdata("logged_in")!=="") 
		{

			$abc = $this->admin_model->GetAbout();
			foreach ($abc->result_array() as $tampil) 
				{
					$data['id_about']=$tampil['id_about'];
					$data['title']=$tampil['title'];
					$data['deskripsi']=$tampil['deskripsi'];
				}
				
			$this->load->view('Backend/template/header');
			$this->load->view('Backend/about/index', $data);
			$this->load->view('Backend/template/footer');
		}
		else
		{
			redirect('backend');
		}
	}

	function about_update()
	{
		$data = array('title' => $this->input->post('title'),
					  'deskripsi' => $this->input->post('deskripsi'));
		$id= $this->input->post("id_about");
		$this->admin_model->update_about($id,$data); //akses model untuk menyimpan ke database
	    redirect('backend/about');
	}

	function work()
	{
		$data['work'] = $this->admin_model->Getwork();
		$this->load->view('Backend/template/header');
		$this->load->view('Backend/work/index', $data);
		$this->load->view('Backend/template/footer');
	}

	function add_work()
	{
		$this->load->view('Backend/template/header');
		$this->load->view('Backend/work/add');
		$this->load->view('Backend/template/footer');
	}

	function save_work()
	{
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

		if ($this->form_validation->run() == FALSE)
			{
				
				redirect('backend/add_work');
			}
			else {

				if(empty($_FILES['userfile']['name']))
				{
					
						$in_data['title'] = $this->input->post('title');
						$in_data['deskripsi'] = $this->input->post('deskripsi');
						$this->db->insert("tbl_work",$in_data);

					$this->session->set_flashdata('berhasil','Portofolio Berhasil Disimpan');
					redirect("backend/work");
				}
				else
				{
					$config['upload_path'] = './assets/images/work/';
					$config['allowed_types']= 'gif|jpg|png|jpeg';
					$config['encrypt_name']	= TRUE;
					$config['remove_spaces']	= TRUE;	
					$config['max_size']     = '3000';
					$config['max_width']  	= '125';
					$config['max_height']  	= '200';
					
			 
					$this->load->library('upload', $config);
	 
					if ($this->upload->do_upload("userfile")) {
						$data	 	= $this->upload->data();
			 
						/* PATH */
						$source             = "./assets/images/work/".$data['file_name'] ;
						$destination_thumb	= "./assets/images/work/thumb/" ;
						$destination_medium	= "./assets/images/work/medium/" ;
						// Permission Configuration
						chmod($source, 0777) ;
			 
						/* Resizing Processing */
						// Configuration Of Image Manipulation :: Static
						$this->load->library('image_lib') ;
						$img['image_library'] = 'GD2';
						$img['create_thumb']  = TRUE;
						$img['maintain_ratio']= TRUE;
			 
						/// Limit Width Resize
						$limit_medium   = 800 ;
						$limit_thumb    = 270 ;
			 
						// Size Image Limit was using (LIMIT TOP)
						$limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;
			 
						// Percentase Resize
						if ($limit_use > $limit_thumb) {
							$percent_medium = $limit_medium/$limit_use ;
							$percent_thumb  = $limit_thumb/$limit_use ;
						}
			 
						//// Making THUMBNAIL ///////
						$img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
						$img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;
			 
						// Configuration Of Image Manipulation :: Dynamic
						$img['thumb_marker'] = '';
						$img['quality']      = '100%' ;
						$img['source_image'] = $source ;
						$img['new_image']    = $destination_thumb ;
			 
						// Do Resizing
						$this->image_lib->initialize($img);
						$this->image_lib->resize();
						$this->image_lib->clear() ;

						$img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
						$img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;
			 
			 			// Configuration Of Image Manipulation :: Dynamic
						$img['thumb_marker'] = '';
						$img['quality']      = '100%' ;
						$img['source_image'] = $source ;
						$img['new_image']    = $destination_medium ;
			 
						// Do Resizing
						$this->image_lib->initialize($img);
						$this->image_lib->resize();
						$this->image_lib->clear() ;
						
						$in_data['title'] = $this->input->post('title');
						$in_data['deskripsi'] = $this->input->post('deskripsi');
						$in_data['gambar'] = $data['file_name'];
						
						
						$this->db->insert("tbl_work",$in_data);

				
						
						$this->session->set_flashdata('berhasil','Input Berhasil Disimpan');
						redirect("backend/work");
						
					}
					else 
					{
						$this->load->view('Backend/template/header');
						$this->load->view('Backend/error404');
						$this->load->view('Backend/template/footer');
					}
				}
				
			}
	}

	function edit_work()
	{
		$id_work = $this->uri->segment(3);
		$query = $this->admin_model->Getworkid($id_work);
		foreach ($query->result_array() as $tampil) {
			$data['id_work'] = $tampil['id_work'];
			$data['title'] = $tampil['title'];
			$data['deskripsi'] = $tampil['deskripsi'];
			$data['gambar'] = $tampil['gambar'];
		}
			$this->load->view('Backend/template/header');
			$this->load->view('Backend/work/edit', $data);
			$this->load->view('Backend/template/footer');
					
	}

	function update_work()
	{
		$id['id_work'] = $this->input->post("id_work");

		if(empty($_FILES['userfile']['name']))
				{
					
						$in_data['title'] = $this->input->post('title');
						$in_data['deskripsi'] = $this->input->post('deskripsi');
						$this->db->update("tbl_work",$in_data,$id);

					$this->session->set_flashdata('berhasil','update berhasil');
					redirect("backend/work");
				}
				else
				{
					$config['upload_path'] = './assets/images/work/';
					$config['allowed_types']= 'gif|jpg|png|jpeg';
					$config['encrypt_name']	= TRUE;
					$config['remove_spaces']	= TRUE;	
					$config['max_size']     = '3000';
					$config['max_width']  	= '125';
					$config['max_height']  	= '200';
					
			 
					$this->load->library('upload', $config);
	 
					if ($this->upload->do_upload("userfile")) {
						$data	 	= $this->upload->data();
			 
						/* PATH */
						$source             = "./assets/images/work/".$data['file_name'] ;
						$destination_thumb	= "./assets/images/work/thumb/" ;
						$destination_medium	= "./assets/images/work/medium/" ;
						// Permission Configuration
						chmod($source, 0777) ;
			 
						/* Resizing Processing */
						// Configuration Of Image Manipulation :: Static
						$this->load->library('image_lib') ;
						$img['image_library'] = 'GD2';
						$img['create_thumb']  = TRUE;
						$img['maintain_ratio']= TRUE;
			 
						/// Limit Width Resize
						$limit_medium   = 800 ;
						$limit_thumb    = 270 ;
			 
						// Size Image Limit was using (LIMIT TOP)
						$limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;
			 
						// Percentase Resize
						if ($limit_use > $limit_thumb) {
							$percent_medium = $limit_medium/$limit_use ;
							$percent_thumb  = $limit_thumb/$limit_use ;
						}
			 
						//// Making THUMBNAIL ///////
						$img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
						$img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;
			 
						// Configuration Of Image Manipulation :: Dynamic
						$img['thumb_marker'] = '';
						$img['quality']      = '100%' ;
						$img['source_image'] = $source ;
						$img['new_image']    = $destination_thumb ;
			 
						// Do Resizing
						$this->image_lib->initialize($img);
						$this->image_lib->resize();
						$this->image_lib->clear() ;

						$img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
						$img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;
			 
			 			// Configuration Of Image Manipulation :: Dynamic
						$img['thumb_marker'] = '';
						$img['quality']      = '100%' ;
						$img['source_image'] = $source ;
						$img['new_image']    = $destination_medium ;
			 
						// Do Resizing
						$this->image_lib->initialize($img);
						$this->image_lib->resize();
						$this->image_lib->clear() ;
						
						$in_data['title'] = $this->input->post('title');
						$in_data['deskripsi'] = $this->input->post('deskripsi');
						$in_data['gambar'] = $data['file_name'];
						
						
						$this->db->update("tbl_work",$in_data,$id);

				
						
						$this->session->set_flashdata('berhasil','update Berhasil');
						redirect("backend/work");
						
					}
					else 
					{
						$this->load->view('Backend/template/header');
						$this->load->view('Backend/error404');
						$this->load->view('Backend/template/footer');
					}
				}
	}

	function delete_work($id)
	{
		$this->admin_model->delete_work($id);
		redirect('backend/work');
	}
	
}
