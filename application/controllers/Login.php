<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('MLogin');
		$this->load->model('MSudi');
	}

	public function index()
	{
		
			
         $this->load->view('VLogin');
    }

    public function Auth()
    {
    	$username = $_POST['username'];
			$password = $_POST['password'];
			
			// get all data in tbl_akses



			 $cek_staf=$this->MLogin->auth_staf($username,$password);
			 $cek_guru=$this->MLogin->auth_dosen($username,$password);
			 $cek_mahasiswa=$this->MLogin->auth_mahasiswa($username,$password);
			 $cekstap=$this->MLogin->bawahanstaf($username,$password);

			 
        if($cek_staf->num_rows() > 0){ //jika login sebagai dosen
						$data=$cek_staf->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level_akses']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$cek_staf);
		            $this->session->set_userdata('waktu', time());
		            $this->session->set_userdata('ses_nama',$data['nama_staf']);
		            redirect('Welcome');

		         }
		         else if($data['level_akses']=='4'){ //Akses admin
		            $this->session->set_userdata('akses','4');
		            $this->session->set_userdata('ses_id',$cek_staf);
		            $this->session->set_userdata('ses_nama',$data['nama_staf']);
		            redirect('Welcome');

		         }
		         else if($data['level_akses']=='5'){ //Akses admin
		            $this->session->set_userdata('akses','5');
		            $this->session->set_userdata('ses_id',$cek_staf);
		            $this->session->set_userdata('ses_nama',$data['nama_staf']);
		            redirect('Welcome');

		         }
		         else{ //akses dosen
		            $this->session->set_userdata('akses','6');
					$this->session->set_userdata('ses_id',$cek_staf);
		            $this->session->set_userdata('ses_nama',$data['nama_staf']);
		            redirect('Welcome');
		         }

        }
        
        else if($cek_guru->num_rows() > 0){ 
        
					
				$data=$cek_guru->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level_akses']=='2'){ //Akses admin
		            $this->session->set_userdata('akses','2');
		            $this->session->set_userdata('ses_nid',$data['nid']);
		            $this->session->set_userdata('ses_nama',$data['nama_guru']);
		            $this->session->set_userdata('ses_kd',$data['kd_guru']);
		            redirect('Welcome/Dataguru/Profile');

		         }
        
    }

    else if($cekstap->num_rows() > 0){ 
         
					
				$data=$cekstap->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         
		            $this->session->set_userdata('akses','7');
		            $this->session->set_userdata('ses_nama',$data['nama_staf']);
		            $this->session->set_userdata('ses_nip',$data['nip']);
		            // $this->session->set_userdata('ses_kd',$data['kd_guru']);
		            redirect('Welcome/DataStafBawah/Profile');

		         
        
    }

        else
        { //jika login sebagai mahasiswa
					
					if($cek_mahasiswa->num_rows() > 0){
							$data=$cek_mahasiswa->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id', $data['nis']);
							// $this->session->set_userdata('ses_id',$data['jurusan_siswa']);
							$this->session->set_userdata('ses_nama',$data['nama_siswa']);

							redirect('Welcome/DataSiswa/Profile');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                 <a class="alert-link" href="#">Salah SIA</a>.
                            </div>');
							redirect('Login');
					}
        }
    }
   
}

			
				
			// if($notif)
			// {
			// 	$this->load->library('session');
				
			// 	// data for notification
			// 	$tempdata = array('Login' => $akses, 
			// 					  'ID' => $notif,
			// 					  'Page' => $page_akses);
				
			// 	$this->session->set_userdata($tempdata);

			// 	redirect(site_url('Welcome'));
			// }			
			
			// else
			// {
			// 	$this->load->library('session');
			// 	$this->session->unset_userdata('Login');
			// 	redirect(site_url('Login'));
			// }
		
		
	

?>