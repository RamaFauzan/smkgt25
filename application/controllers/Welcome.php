<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
    
    public $AK;
    public $NM;
    public $SS;
    public $SD;
    public $UD;
    public $THN;
    
    function __construct()
    {
        parent::__construct();
        
        // Load 'MSudi' script
        $this->load->model('MSudi');
        $this->load->model('MAbsenGuru');
        $this->load->library('pdf');
        
        // get ID from userdata
        $akses      = $this->session->userdata('akses');
        
        // $akses2 = $this->session->userdata('Log');
        $nama     = $this->session->userdata('ses_nama');
        $new_id = $this->session->userdata('ses_id');
        $new_ids = $this->session->userdata('ses_nid');
        
        // $menu       = $this->MSudi->GetData('tbl_menu');

            if ($akses == '3')
        {
            $user = $this->MSudi->GetDataWhere('tbl_siswa','nis',$new_id)->row();
            $level = 'Siswa';
            $this->UD   = $user;
        }

         else if ($akses == '2')
        {
            $user = $this->MSudi->GetDataWhere('tbl_guru','nid',$new_ids)->row();
            $level = 'Siswa';
            $this->UD   = $user;
        }

       
        
        
        
        $this->SS   = $new_id;
        $this->SD   = $new_ids;
        $this->AK   = $akses;
        $this->NM   = $nama;
        // $this->THN  = $this->MSudi->GetDataWhere('tbl_tahun_ajaran','kd',1)->row();
    }

    public function index()
    {
        // Check session data
        $akses      = $this->session->userdata('akses');
        if($this->session->userdata('masuk'))
        {

          
            $data['userData']   = $this->NM;
            
            // $data['pageAkses']  = $this->PG;
            
            $data['akses']  = $this->AK;
            
            // if ($akses == '1')
            // {
            //     // assigning content to display
            //     //$data['content']='VProfileSiswa';
            //     redirect(site_url('Welcome/Admin'));
            // }
            // else if ($akses == '4')
            // {
            //     // assigning content to display
            //     //$data['content']='VProfileGuru';
                
            //     redirect(site_url('Welcome/DataSiswa/Profile'));
            // }
            // else if ($akses == '2')
            // {
            //     // assigning content to display
            //     //$data['content']='VProfileGuru';
            //     redirect(site_url('Welcome/Dataguru/Profile'));
            // }
            // $kd_siswa=$this->uri->segment(3);
            // $tampil=$this->MSudi->GetDataWhere('tbl_tahun_ajaran', 'kd',1)->row();
            // $data['detail']['kd']= $tampil->kd;
            // $data['detail']['thn_ajaran']= $tampil->thn_ajaran;
            // $data['detail']['semester']= $tampil->semester;

            
             $data['content']='VDashSiswa';
            // CALL 'VBackend' in VIEW folder
            $this->load->view('VBackend',$data);
        }

      
        
        else
        {
            // RE-DIRECT to 'Login'
            redirect(site_url('Login'));
        }
    }

    
    public function Update()
    {
          if($this->uri->segment(2) == 'Update')
       {
         $tampil=$this->MSudi->GetDataWhere('tbl_tahun_ajaran', 'kd',1)->row();
            $data['detail']['kd']= $tampil->kd;
            $data['detail']['thn_ajaran']= $tampil->thn_ajaran;
            $data['detail']['semester']= $tampil->semester;
            $data['akses'] = $this->AK;
             $data['content']='VDashSiswa';
       }
       $this->load->view('VBackend',$data);
    }

    public function UpdateTA()
    {

    
    
     $update['thn_ajaran']= $this->input->post('thn_ajaran');
    
     $update['semester']= $this->input->post('semester');

       $this->MSudi->UpdateData('tbl_tahun_ajaran','kd',1,$update);

             redirect(site_url('Welcome/'));

    }

    public function Admin()
    {
    
        
        // $data['userData']   = $this->UD;
            
        //     $data['pageAkses']  = $this->PG;
        //     $data['Menu']   = $this->MN;
        //     $data['level']  = $this->LV;
        $data['akses']  = $this->AK;
        $data['content']='VDashSiswa';
        // CALL 'VBackend' in VIEW folder
        $this->load->view('VBackend',$data);

    }

	public function DataSiswa()
	{
        // if(time() - $this->session->userdata('waktu') > 05){

        //        redirect(site_url('Login'));
        //                   }
	// 	$akses      = $this->session->userdata('akses');
	// if($akses == '1'){
		
		if($this->uri->segment(4)=='view')
		{
			$kd_siswa=$this->uri->segment(3);
			$tampil=$this->MSudi->Get3($kd_siswa)->row();
			$data['detail']['kd_siswa']= $tampil->kd_siswa;
			$data['detail']['nis']= $tampil->nis;
    		$data['detail']['nisn']= $tampil->nisn;
    		$data['detail']['nama_siswa']= $tampil->nama_siswa;
    		$data['detail']['no_administrasi']= $tampil->no_administrasi;
         	$data['detail']['jenis_kelamin']= $tampil->jenis_kelamin;
    		$data['detail']['tempat_lahir']= $tampil->tempat_lahir;
            $data['detail']['kelas_siswa']= $tampil->kelas_siswa;
            $data['detail']['jurusan_siswa']= $tampil->jurusan_siswa;
            $data['detail']['sub_kelas_siswa']= $tampil->sub_kelas_siswa;
    		$data['detail']['tanggal_lahir']= $tampil->tanggal_lahir;
    		$data['detail']['keterangan']= $tampil->keterangan;
    		$data['DataMasterAdministrasi']=$this->MSudi->GetData('tbl_master_administrasi');
            $this->session->set_userdata('no_uangbangunan', $tampil->no_uangbangunan);
            $this->session->set_userdata('uangB', $tampil->uang_bangunan);
            
            $data['akses'] = $this->AK;
			$data['content']='VFormUpdateSiswa';

		}

        elseif($this->uri->segment(3) == 'Profile')
        {
            // $this->load->library('session');
            $data['akses']  = $this->AK;
            $kelas          = $this->UD->kelas_siswa;
            $jurusan        = $this->UD->jurusan_siswa;
            $sub_kelas      = $this->UD->sub_kelas_siswa;
            $kd             = $this->UD->nis;
            $thn_ajaran     = $this->THN->thn_ajaran;
                
                
            
            $data['Siswa']      = $this->MSudi->GetDataWhere('tbl_siswa','nis',$kd)->row();
           
            // Jadwal Mapel
            $data['JadwalPelajaran'] = $this->MSudi->GetDataWhere2('tbl_jadwal_pelajaran','thn_ajaran',$thn_ajaran,'jurusan',$jurusan);
            $data['JadwalSiswa'] = $this->MSudi->getjadwal4();
            $data['Guru']            = $this->MSudi->GetData('tbl_guru');
            $data['Mapel']            = $this->MSudi->GetData('tbl_mapel');
           
            $data['PengumumanSiswa'] = $this->MSudi->GetDataWhere2('tbl_pengumuman', 'kd_pengumuman', 2, 'status', 1);

            $getNilai = $this->MSudi->GetDataWhere('tbl_siswa_nilai','nis',$kd)->row();
            
           

            $data['num'] = 0;
            
            for($i = 1; $i <= 6; $i++)
            {
                $sem = 'sem_'.$i;
                
                if($getNilai->$sem != '')
                {
                    $data['Nilai'][$i] = explode("|" ,$getNilai->$sem);
                    $data['num']++;
                }
            }


            $data['JadwalAbsenSiswa']    = $this->db->query("SELECT * FROM tbl_jadwalabsen WHERE kd = 1")->result();

            $nis = $this->session->userdata('ses_id');
            $tamp = $this->MSudi->GetDataWhere('tbl_kehadiransiswa', 'nis', $nis)->row();

            $data['jam_absen'] = $tamp->jam_absen;
            $data['content'] = 'VDashSiswa';
            // $this->load->view('VBackend', $data);
                 
                
        }


        else if($this->uri->segment(3)== 'KenaikanKelas')
        {
            $data['content'] = 'VKenaikanKelas';
            $data['akses'] = $this->AK;
            $data['DataSiswa']=$this->MSudi->Getbangunan3();

        }

		else
		{	
		    $data['akses']  = $this->AK;
			$data['DataSiswa']=$this->MSudi->Getbangunan3();
			$data['content']='VSiswa';
		}

         $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
		$this->load->view('VBackend',$data);
	// }
 //    else{
 //        $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" style="">
 //    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 //    <h4><i class="icon fa fa-minus-circle"></i> SIA SAHA , Gaada Akhlak </h4></div>');
 //        redirect('Login');
 //    }
}

    public function UpdateKenaikanKelas()
    {

             $kd_siswa=$this->input->post('kd_siswa');
             // $update['nis']= $this->input->post('nis');
             // $update['nisn']= $this->input->post('nisn');  
             $update['nama_siswa']= $this->input->post('nama_siswa');
            
             $update['kelas_siswa']= $this->input->post('kelas_siswa');
             $update['jurusan_siswa']= $this->input->post('jurusan_siswa');              
             $update['sub_kelas_siswa']= $this->input->post('sub_kelas_siswa');  
            

             $this->MSudi->UpdateData('tbl_siswa','kd_siswa',$kd_siswa,$update);

             $var = $this->MSudi->GetData2('tbl_siswa')->row();

             $abc = $var->status_siswa;

             if($abc == '2'){
                $kd_pembayaran=$this->input->post('kd_pembayaran');
              $update3['options']= '';
              $update3['sisa_pembayaran_spp']= $this->input->post('sisa_pembayaran_spp') / 2;  
               $this->MSudi->UpdateData('tbl_pembayaran','kd_pembayaran',$kd_pembayaran,$update3);
            }
            else if($abc == '3'){
                $kd_pembayaran=$this->input->post('kd_pembayaran');
              $update4['options']= '';
              $update4['sisa_pembayaran_spp']= 0;
               $this->MSudi->UpdateData('tbl_pembayaran','kd_pembayaran',$kd_pembayaran,$update4);
            }
            else{
                $kd_pembayaran=$this->input->post('kd_pembayaran');
                $update2['options']= '';
              $update2['sisa_pembayaran_spp']= $this->input->post('sisa_pembayaran_spp');  
              $this->MSudi->UpdateData('tbl_pembayaran','kd_pembayaran',$kd_pembayaran,$update2);
            }
            

             
             
             redirect(site_url('Welcome/DataSiswa/KenaikanKelas'));


    }

	public function VFormAddSiswa()
	{
		
		$data['DataMasterAdministrasi']=$this->MSudi->GetData('tbl_master_administrasi');
        $data['akses'] = $this->AK;
		$data['content']='VFormAddSiswa';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSiswa()
	{
		// $this->load->library('session');
		
		     $add3['no_uangbangunan']='';
             $add3['no_administrasi']= $this->input->post('no_administrasi');  
             $add3['sisa_pembayaran']= $this->input->post('sisa_pembayaran');  
             $add3['keterangan']= 0;  
             $this->MSudi->AddData('tbl_uang_bangunan',$add3);

             $var = $this->db->insert_id();
             $add['kd_siswa'] = '';
         	 $add['nis']= $this->input->post('nis');
         	 $add['nisn']= $this->input->post('nisn');  
         	 $add['nama_siswa']= $this->input->post('nama_siswa');
         	 $add['no_administrasi']= $this->input->post('no_administrasi');         	 
             $add['no_uangbangunan']= $this->db->insert_id();
         	 $add['jenis_kelamin']= $this->input->post('jenis_kelamin');  
             $add['kd_pembayaran']= $var;
             $add['kd_tabungan']= $var;
         	 $add['tempat_lahir']= $this->input->post('tempat_lahir');  
         	 $add['tanggal_lahir']= $this->input->post('tanggal_lahir');
             $add['kelas_siswa']= $this->input->post('kelas_siswa');  
             $add['jurusan_siswa']= $this->input->post('jurusan_siswa');
             $add['sub_kelas_siswa']= $this->input->post('sub_kelas_siswa');  
             $add['foto_siswa'] = $this->upload_foto_siswa();
             $add['keterangan']= $this->input->post('keterangan');  
        	 $this->MSudi->AddData('tbl_siswa',$add);

             for ($i=1; $i < 12 ; $i++) { 
             $add4['kd_pembayaran']= $var;
             $add4['no_administrasi']= $this->input->post('no_administrasi');            
             $add4['options']= '';
             $add4['sisa_pembayaran_spp']= $this->input->post('sisa_pembayaran_spp');  
             $add4['bulan'] = $i;
             $add4['keteranagn']=  0;
             $this->MSudi->AddData('tbl_pembayaran',$add4);      
             }
            

        	 $add2['kd_berkassiswa']=$this->input->post('kd_siswa');
         	
         	 $add2['nama_siswa']= $this->input->post('nama_siswa');
         	 $add2['kk']= 0;  
         	 $add2['ktp_ortu']= 0;
         	 $add2['ijazah']= 0;  
         	 $add2['skhun']= 0;  
         	 $add2['akte_kelahiran']= 0;
         	 $add2['status_berkassiswa']= 0;  
         	 $this->MSudi->AddData('tbl_berkassiswa',$add2);        	


             $add5['nis'] = $this->input->post('nis');
             $this->MSudi->AddData('tbl_siswa_nilai', $add5);

             $add6['kd'] = $var; 
             $add6['nis'] = $this->input->post('nis');
             $this->MSudi->AddData('tbl_tabungansiswa', $add6);

             $add7['nis'] = $this->input->post('nis');
             $this->MSudi->AddData('tbl_poinsiswa', $add7);
                 
        	 redirect(site_url('Welcome/DataSiswa'));        	 
	}



	public function UpdateDataSiswa()
	{
		 $kd_siswa=$this->input->post('kd_siswa');
        	 $update['nis']= $this->input->post('nis');
         	 $update['nisn']= $this->input->post('nisn');  
         	 $update['nama_siswa']= $this->input->post('nama_siswa');
         	 $update['no_administrasi']= $this->input->post('no_administrasi');         	 
         	 $update['jenis_kelamin']= $this->input->post('jenis_kelamin');  
         	 $update['tempat_lahir']= $this->input->post('tempat_lahir');  
             $update['kelas_siswa']= $this->input->post('kelas_siswa');
             $update['jurusan_siswa']= $this->input->post('jurusan_siswa');              
             $update['sub_kelas_siswa']= $this->input->post('sub_kelas_siswa');  
             $update['tempat_lahir']= $this->input->post('tempat_lahir');  
         	 $update['tanggal_lahir']= $this->input->post('tanggal_lahir');
         	 $update['keterangan']= $this->input->post('keterangan');  

          	 $this->MSudi->UpdateData('tbl_siswa','kd_siswa',$kd_siswa,$update);
        	
        	 redirect(site_url('Welcome/DataSiswa'));
	}


	public function DeleteDataSiswa()
	{
		 $nis=$this->uri->segment('3');
         $this->MSudi->DeleteData('tbl_siswa','nis',$nis);
         redirect(site_url('Welcome/DataSiswa'));
	}


public function Berkassiswa()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_berkassiswa=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_berkassiswa','kd_berkassiswa',$kd_berkassiswa)->row();
			$data['detail']['kd_berkassiswa']= $tampil->kd_berkassiswa;
			$data['detail']['nama_siswa']= $tampil->nama_siswa;
			// $data['detail']['kd_siswa']= $tampil->kd_siswa;
    		$data['detail']['kk']= $tampil->kk;
    		$data['detail']['ktp_ortu']= $tampil->ktp_ortu;
    		$data['detail']['ijazah']= $tampil->ijazah;
    		$data['detail']['skhun']= $tampil->skhun;
    		$data['detail']['akte_kelahiran']= $tampil->akte_kelahiran;             
    		$data['detail']['status_berkassiswa']= $tampil->status_berkassiswa;           		
			$data['content']='VFormUpdateberkas';
            $data['akses']  = $this->AK;

		}
		else
		{	
            $data['akses']  = $this->AK;
			// $data['DataBerkasSiswa']=$this->MSudi->Get('tbl_berkassiswa');
			$data['DataBerkasSiswa']=$this->MSudi->GetData('tbl_berkassiswa');

			$data['content']='VBerkassiswa';
		}
		$this->load->view('VBackend',$data);
	}

    public function AddDataBerkassiswa()
	{
		 $add['kd_berkassiswa']=$this->input->post('kd_berkassiswa');
         	 // $add['kd_siswa']= $this->input->post('kd_siswa');
     	 $add['kk']= $this->input->post('kk');  
     	 $add['ktp_ortu']= $this->input->post('ktp_ortu');
     	 $add['ijazah']= $this->input->post('ijazah');  
     	 $add['skhun']= $this->input->post('skhun');  
     	 $add['akte_kelahiran']= $this->input->post('akte_kelahiran');
     	 $add['status_berkassiswa']= $this->input->post('status_berkassiswa');  
    	 $this->MSudi->AddData('tbl_berkassiswa',$add);
    	 $this->MSudi->AddData('tbl_siswa',$add);
    	 redirect(site_url('Welcome/DataSiswa'));
	}


	public function UpdateDataBerkassiswa()
	{
		$kd_berkassiswa=$this->input->post('kd_berkassiswa'); 
        $update['kd_berkassiswa']=$this->input->post('kd_berkassiswa');
         // $update['kd_siswa']= $this->input->post('kd_siswa');
         $update['kk']= $this->input->post('kk');  
         $update['ktp_ortu']= $this->input->post('ktp_ortu');
         $update['ijazah']= $this->input->post('ijazah');  
         $update['skhun']= $this->input->post('skhun');  
         $update['akte_kelahiran']= $this->input->post('akte_kelahiran');
         $update['status_berkassiswa']= $this->input->post('status_berkassiswa'); 
         $update['nama_siswa']= $this->input->post('nama_siswa');              
      	 $this->MSudi->UpdateData('tbl_berkassiswa','kd_berkassiswa',$kd_berkassiswa,$update);
    	
    	 redirect(site_url('Welcome/Berkassiswa'));
	}


	public function DeleteDataBerkassiswa()
	{
		$nis=$this->uri->segment('3');
        $this->MSudi->DeleteData('tbl_berkassiswa','kd_berkassiswa',$kd_berkassiwa);
        redirect(site_url('Welcome/Berkassiswa'));
	}


public function Dataguru()
	{
        $TahunAjaran = $this->THN;
		if($this->uri->segment(4)=='view')
		{
			$kd_guru=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_guru','kd_guru',$kd_guru)->row();
			$data['detail']['kd_guru']= $tampil->kd_guru;
			$data['detail']['no_pendaftaran']= $tampil->no_pendaftaran;
			$data['detail']['kategori']= $tampil->kategori;			
			$data['detail']['nama_guru']= $tampil->nama_guru;
            $data['detail']['tempat_lahir']= $tampil->tempat_lahir;
            $data['detail']['tanggal_lahir']= $tampil->tanggal_lahir;
            $data['detail']['jenis_kelamin']= $tampil->jenis_kelamin;
            $data['detail']['pendidikan_terakhir']= $tampil->pendidikan_terakhir;
            $data['detail']['alamat']= $tampil->alamat;             
            $data['detail']['agama']= $tampil->agama; 
            $data['detail']['email']= $tampil->email; 
            $data['detail']['no_telp']= $tampil->no_telp; 
            $data['detail']['data_pendidikan_sd']= $tampil->data_pendidikan_sd; 
            $data['detail']['data_pendidikan_smp']= $tampil->data_pendidikan_smp; 
            $data['detail']['data_pendidikan_smk']= $tampil->data_pendidikan_smk; 
            $data['detail']['data_pendidikan_s1']= $tampil->data_pendidikan_s1; 
            $data['detail']['data_pendidikan_s2']= $tampil->data_pendidikan_s2; 
            $data['detail']['pengalaman']= $tampil->pengalaman; 
            $data['detail']['foto_guru']= $tampil->foto_guru; 
            $data['detail']['keterangan']= $tampil->keterangan;
            $data['akses']  = $this->AK;                       		
			$data['content']='VFormUpdateguru';

		}
         elseif($this->uri->segment(3) == 'Profile')
        {
            // $data['userData']   = $this->UD;
            $data['akses']  = $this->AK;

            $kd         = $this->UD->nid;
            $thn_ajaran       = $this->THN->thn_ajaran;
            
            $data['userData'] = $this->UD;
            
            $data['Guru']      = $this->MSudi->GetDataWhere('tbl_guru','nid',$kd)->row();
            // $data['Kehadiran']  = $this->MSudi->GetDataWhere('tbl_siswa_kehadiran','nis',$kd)->row();   //add semester later
            $data['PengumumanGuru'] = $this->MSudi->GetDataWhere2('tbl_pengumuman', 'kd_pengumuman', 1, 'status', 1);

            // Jadwal Mapel
            $day =  $this->MSudi->replaceDay2(date("D"));
            $data['JadwalPelajaran']    = $this->MSudi->GetDataWhere3('tbl_jadwal_pelajaran','thn_ajaran',$TahunAjaran->thn_ajaran);
            $data['JadwalAbsenGuru']    = $this->MSudi->getjadwal($day);
            $kd = $this->session->userdata('ses_nid');
            $data['JadwalPelGuru']    = $this->MSudi->getjadwal3($kd);
            // $data['Guru']            = $this->MSudi->GetData('tbl_guru');
            $data['Mapel']            = $this->MSudi->GetData('tbl_mapel');
            $kd = $this->session->userdata('ses_nid');
            $data['DataKasbon'] = $this->MSudi->joinankasbon($kd);
            

            // $data['JamAbsen'] = $this->MSudi->jadwalabsen($day);
            // $data['JamAbsens'] = $this->MSudi->GetData('tbl_absenguru');


            // Ketentuan warna setelah absen

            // $tampils = $this->MSudi->GetDataWhere('tbl_jadwal_pelajaran2', 'kodejam', $day)->row();

            // $data['detail']['kodejam'] = $tampils->kodejam;

            $tampil = $this->MSudi->GetDataWhere('tbl_kehadiran', 'id_hari', $day)->row();

            // $data['detail']['kdmap'] = $tampil->ket;


            $data['content'] = 'VDashSiswa';
            
          
        }

        else if($this->uri->segment(3)=='InputNilai')
        {
            // SHOW the data
            $data['akses']  = $this->AK;
            $onjoin = "tbl_siswa_nilai.nis = tbl_siswa.nis";
            
            $data['Siswa']          = $this->MSudi->GetDataJoinWhere1('tbl_siswa_nilai','tbl_siswa',$onjoin,'keterangan',1);
            $data['Semester']       = $TahunAjaran->semester;
            
            // assigning content to display
            $data['content']='VGuruDaftarSiswa';
        }

        else if($this->uri->segment(3)=='AddNilai')
        {
            $data['akses']  = $this->AK;
            $kd = $this->uri->segment(4);
            $nis = $this->uri->segment(5);
        
            $data['MapelKompetensi']    = $this->MSudi->GetDataWhere3('kompetensi','kd_mapel',$kd);
            $data['Guru']               = $this->MSudi->GetDataWhere('tbl_guru','nid',$this->UD->nid)->row();
            $data['Siswa']              = $this->MSudi->GetDataWhere('tbl_siswa_nilai','nis',$nis)->row();
            $data['Semester']           = $TahunAjaran->semester;
            
            // assigning content to display
            $data['content'] = 'VGuruAddNilai';
        }
		else
		{	
            $data['akses']  = $this->AK;
            // $data['level']  = $this->LV;
			// $data['DataBerkasSiswa']=$this->MSudi->Get('tbl_berkassiswa');
			$data['Dataguru']=$this->MSudi->GetData('tbl_guru');
            $data['DataJabatan']=$this->MSudi->GetData('tbl_master_jabatan');
            $data['DataJoinJabatan']= $this->MSudi->jabatan();
			$data['content']='Vguru';
		}

        $data['successItm'] = $this->session->tempdata('item');
        $data['successItm2'] = $this->session->tempdata('item2');
        $data['successMsg'] = $this->session->tempdata('message');
		$this->load->view('VBackend',$data);
	}


    public function AddNilaiGuru()
    {
        // assigning each data
        $kd = $this->uri->segment(3);
        $nis = $this->uri->segment(4);
        $sem = $this->uri->segment(5);
        
        $_semester = 'sem_'.$sem;
        
        $AllNilai   = $this->MSudi->GetDataWhere('tbl_siswa_nilai','nis',$nis)->row()->$_semester;
        $Nilai      = null;
        
        if ($AllNilai != '')
        { $Nilai        = explode("|" ,$AllNilai); }
        
        $realNilai  = '';
        
        if (!empty($Nilai))
        {
            $stat = 0;
        
            // Update Nilai
            $i = 1;
            foreach($Nilai as $_nilai)
            {
                $detail = explode("-" ,$_nilai);
                
                if ($detail[0] == $kd)
                {
                    $stat = 1;
                    $ii = 0;
                    foreach ($detail as $_det)
                    {
                        if ($ii == 0)
                        { 
                            // assigning kd_mapel
                            if ($i == 1)
                            { $realNilai = $realNilai.$_det; }
                            else
                            { $realNilai = $realNilai.'|'.$_det; }
                        }
                        else
                        { 
                            // assigning nilai mapel
                            $realNilai = $realNilai.'-'.$this->input->post('nilai_'.$ii); 
                        }
                        
                        $ii++;
                    }
                }
                else
                {
                    if ($i == 1)
                    { $realNilai = $realNilai.$_nilai; }
                    else
                    { $realNilai = $realNilai.'|'.$_nilai; }
                }
                
                $i++;
            }
            
            // Add
            if ($stat != 1)
            {
                // 10 -> just a reference value
                for($i = 0; $i <= 9; $i++)
                {
                    if ($i == 0)
                    { $realNilai = $realNilai.'|'.$kd; }
                    else
                    {
                        if (!empty($this->input->post('nilai_'.$i)))
                        { $realNilai = $realNilai.'-'.$this->input->post('nilai_'.$i); }
                        else
                        { break; }
                    }
                }
            }
        }
        else 
        {
            // 10 -> just a reference value
            for($i = 0; $i <= 10; $i++)
            {
                if ($i == 0)
                { $realNilai = $kd; }
                else
                {
                    if (!empty($this->input->post('nilai_'.$i)))
                    { $realNilai = $realNilai.'-'.$this->input->post('nilai_'.$i); }
                    else
                    { break; }
                }
            }
        }
        
        $update[$_semester] = $realNilai;
        
        // UPDATE data to database
        $this->MSudi->UpdateData('tbl_siswa_nilai','nis',$nis,$update);
            
        // data for notification
        $tempdata = array('item' => '', 
                          'message' => 'Update');
                              
        $this->session->set_tempdata($tempdata, Null, 3);
            
        // RE-DIRECT to 'DataSiswa'
        redirect(site_url('Welcome/Dataguru/AddNilai/'.$kd.'/'.$nis.'/'.$sem));
    }


	public function VFormDetailguru()
	{
		$data['content']='VFormDetailguru';
		$this->load->view('VBackend',$data);
	}

	public function DetailDataguru()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_guru=$this->uri->segment(3);
			$tampil=$this->MSudi->joindata1($kd_guru)->row();
			$data['detail']['kd_guru']= $tampil->kd_guru;
			$data['detail']['no_pendaftaran']= $tampil->no_pendaftaran;
			$data['detail']['kategori']= $tampil->kategori;			
			$data['detail']['nama_guru']= $tampil->nama_guru;
            $data['detail']['tempat_lahir']= $tampil->tempat_lahir;
            $data['detail']['tanggal_lahir']= $tampil->tanggal_lahir;
            $data['detail']['jenis_kelamin']= $tampil->jenis_kelamin;
            $data['detail']['pendidikan_terakhir']= $tampil->pendidikan_terakhir;
            $data['detail']['alamat']= $tampil->alamat;             
            $data['detail']['agama']= $tampil->agama; 
            $data['detail']['email']= $tampil->email; 
            $data['detail']['no_telp']= $tampil->no_telp; 
            $data['detail']['data_pendidikan_sd']= $tampil->data_pendidikan_sd; 
            $data['detail']['data_pendidikan_smp']= $tampil->data_pendidikan_smp; 
            $data['detail']['data_pendidikan_smk']= $tampil->data_pendidikan_smk; 
            $data['detail']['data_pendidikan_s1']= $tampil->data_pendidikan_s1; 
            $data['detail']['data_pendidikan_s2']= $tampil->data_pendidikan_s2; 
            $data['detail']['pengalaman']= $tampil->pengalaman; 
            $data['detail']['keterangan']= $tampil->keterangan;                       		
            $data['detail']['foto_guru']= $tampil->foto_guru;                       		
			$data['content']='VFormDetailguru';
            $data['akses']  = $this->AK;

		}

		else
		{	
			// $data['DataBerkasSiswa']=$this->MSudi->Get('tbl_berkassiswa');
			$data['Dataguru']=$this->MSudi->GetData('tbl_guru');

			$data['content']='VFormDetailguru';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddguru()
	{
        $data['DataMasterPenggajian'] = $this->MSudi->GetData('tbl_master_penggajian');
		$data['content']='VFormAddguru';
        $data['akses'] = $this->AK;
		$this->load->view('VBackend',$data);
	}
	public function AddDataguru()
	{
            $add['kd_guru']= $this->input->post('kd_guru');
			$add['no_pendaftaran']= $this->input->post('no_pendaftaran');
			$add['kd_penggajian']= $this->input->post('kd_penggajian');			
			$add['nama_guru']= $this->input->post('nama_guru');
            $add['tempat_lahir']= $this->input->post('tempat_lahir');
            $add['tanggal_lahir']= $this->input->post('tanggal_lahir');
            $add['jenis_kelamin']= $this->input->post('jenis_kelamin');
            $add['pendidikan_terakhir']= $this->input->post('pendidikan_terakhir');
            $add['alamat']= $this->input->post('alamat');             
            $add['agama']= $this->input->post('agama'); 
            $add['email']= $this->input->post('email'); 
            $add['no_telp']= $this->input->post('no_telp'); 
            $add['data_pendidikan_sd']= $this->input->post('data_pendidikan_sd'); 
            $add['data_pendidikan_smp']= $this->input->post('data_pendidikan_smp'); 
            $add['data_pendidikan_smk']= $this->input->post('data_pendidikan_smk'); 
            $add['data_pendidikan_s1']= $this->input->post('data_pendidikan_s1'); 
            $add['data_pendidikan_s2']= $this->input->post('data_pendidikan_s2'); 
            $add['pengalaman']= $this->input->post('pengalaman'); 
            $add['foto_guru']= $this->upload_foto_guru();             
            $add['keterangan']= $this->input->post('keterangan'); 
            $this->MSudi->AddData('tbl_guru',$add);

            // for ($i=1; $i < 12 ; $i++) { 
            //  $add4['kd_pembayaran_guru']= $var;
            //  $add4['kd_penggajian']= $this->input->post('kd_penggajian');            
            //  $add4['options']= '';
            //  $add4['sisa_pembayaran_spp']= $this->input->post('sisa_pembayaran_spp');  
            //  $add4['bulan'] = $i;
            //  $add4['keteranagn']=  0;
            //  $this->MSudi->AddData('tbl_pembayaran',$add4);      
            //  }

        	 $add2['kd_berkasguru']='';
         	 $add2['nama_guru']= $this->input->post('nama_guru');
         	 $add2['surat_lamaran']= 0;  
         	 $add2['daftar_riwayat_hidup']= 0;
         	 $add2['pas_foto']= 0;  
         	 $add2['fc_ijazah_sd']= 0;  
         	 $add2['fc_ijazah_smp']= 0;
         	 $add2['fc_ijazah_smk']= 0;
         	 $add2['fc_ijazah_s1']= 0;
         	 $add2['fc_ijazah_s2']= 0; 
         	 $add2['fc_transkip_nilai']= 0; 
         	 $add2['fc_akta_iv']= 0; 
         	 $add2['fc_ktp']= 0; 
         	 $add2['fc_sertifikat']= 0; 
         	 $add2['fc_skck']= 0;          	         	 
         	 $add2['keterangan']= 1;  
         	 $this->MSudi->AddData('tbl_berkasguru',$add2);


             $add3['nid']= $this->input->post('nid');  
             $this->MSudi->AddData('tbl_jadwal_pelajaran2',$add3);
        	 redirect(site_url('Welcome/Dataguru'));
	}



	public function UpdateDataguru()
	{
           $kd_guru= $this->input->post('kd_guru');
           $update['no_pendaftaran']= $this->input->post('no_pendaftaran');
           $update['kategori']= $this->input->post('kategori');           
           $update['nama_guru']= $this->input->post('nama_guru');
           $update['tempat_lahir']= $this->input->post('tempat_lahir');
           $update['tanggal_lahir']= $this->input->post('tanggal_lahir');
           $update['jenis_kelamin']= $this->input->post('jenis_kelamin');
           $update['pendidikan_terakhir']= $this->input->post('pendidikan_terakhir');
           $update['alamat']= $this->input->post('alamat');             
           $update['agama']= $this->input->post('agama'); 
           $update['email']= $this->input->post('email'); 
           $update['no_telp']= $this->input->post('no_telp'); 
           $update['data_pendidikan_sd']= $this->input->post('data_pendidikan_sd'); 
           $update['data_pendidikan_smp']= $this->input->post('data_pendidikan_smp'); 
           $update['data_pendidikan_smk']= $this->input->post('data_pendidikan_smk'); 
           $update['data_pendidikan_s1']= $this->input->post('data_pendidikan_s1'); 
           $update['data_pendidikan_s2']= $this->input->post('data_pendidikan_s2'); 
           $upload_file=$this->upload_foto_guru('./upload/');
           if($upload_file)
           {
           	$update['foto_guru']= $upload_file;
           }
           $update['pengalaman']= $this->input->post('pengalaman'); 
           $update['keterangan']= $this->input->post('keterangan'); 

           $this->MSudi->UpdateData('tbl_guru','kd_guru',$kd_guru,$update);
           redirect(site_url('Welcome/Dataguru'));
	}

	public function DeleteDataguru()
	{
		 $kd_guru=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_guru','kd_guru',$kd_guru);
        	 redirect(site_url('Welcome/Dataguru'));
	}

public function Berkasguru()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_berkasguru=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_berkasguru','kd_berkasguru',$kd_berkasguru)->row();
			$data['detail']['kd_berkasguru']= $tampil->kd_berkasguru;
			$data['detail']['nama_guru']= $tampil->nama_guru;
			$data['detail']['surat_lamaran']= $tampil->surat_lamaran;
            		$data['detail']['daftar_riwayat_hidup']= $tampil->daftar_riwayat_hidup;
            		$data['detail']['pas_foto']= $tampil->pas_foto;
            		$data['detail']['fc_ijazah_sd']= $tampil->fc_ijazah_sd;
            		$data['detail']['fc_ijazah_smp']= $tampil->fc_ijazah_smp;
            		$data['detail']['fc_ijazah_smk']= $tampil->fc_ijazah_smk;
            		$data['detail']['fc_ijazah_s1']= $tampil->fc_ijazah_s1;
            		$data['detail']['fc_ijazah_s2']= $tampil->fc_ijazah_s2;            		
            		$data['detail']['fc_transkip_nilai']= $tampil->fc_transkip_nilai;
            		$data['detail']['fc_akta_iv']= $tampil->fc_akta_iv;             
            		$data['detail']['fc_ktp']= $tampil->fc_ktp;
            		$data['detail']['fc_sertifikat']= $tampil->fc_sertifikat;
            		$data['detail']['fc_skck']= $tampil->fc_skck;
            		$data['detail']['keterangan']= $tampil->keterangan;            		           		
			$data['content']='VFormUpdateBerkasguru';

		}
		else
		{	

            $data['akses']  = $this->AK;
			// $data['DataBerkasSiswa']=$this->MSudi->Get('tbl_berkassiswa');
			$data['DataBerkasguru']=$this->MSudi->GetData('tbl_berkasguru');

			$data['content']='VBerkasguru';
		}
		$this->load->view('VBackend',$data);
	}

	public function UpdateDataBerkasguru()
	{
		$kd_berkasguru=$this->input->post('kd_berkasguru'); 
        $update['kd_berkasguru']=$this->input->post('kd_berkasguru');
         $update['nama_guru']= $this->input->post('nama_guru');
		$update['surat_lamaran']= $this->input->post('surat_lamaran');
        $update['daftar_riwayat_hidup']= $this->input->post('daftar_riwayat_hidup');
        $update['pas_foto']= $this->input->post('pas_foto');
        $update['fc_ijazah_sd']= $this->input->post('fc_ijazah_sd');
        $update['fc_ijazah_smp']= $this->input->post('fc_ijazah_smp');
        $update['fc_ijazah_smk']= $this->input->post('fc_ijazah_smk');
        $update['fc_ijazah_s1']= $this->input->post('fc_ijazah_s1');
        $update['fc_ijazah_s2']= $this->input->post('fc_ijazah_s2');        
        $update['fc_transkip_nilai']= $this->input->post('fc_transkip_nilai');
        $update['fc_akta_iv']= $this->input->post('fc_akta_iv');             
        $update['fc_ktp']= $this->input->post('fc_ktp');
        $update['fc_sertifikat']= $this->input->post('fc_sertifikat');
        $update['fc_skck']= $this->input->post('fc_skck');
        $update['keterangan']= $this->input->post('keterangan');              
     	$this->MSudi->UpdateData('tbl_berkasguru','kd_berkasguru',$kd_berkasguru,$update);
       	
        	 redirect(site_url('Welcome/Berkasguru'));
	}

public function DataMasterAdministrasi()
	{
		if($this->uri->segment(4)=='view')
		{
			$no_administrasi=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_master_administrasi','no_administrasi',$no_administrasi)->row();
			$data['detail']['no_administrasi']= $tampil->no_administrasi;    
			$data['detail']['tahun_ajaran']= $tampil->tahun_ajaran;    
			$data['detail']['uang_bangunan']= $tampil->uang_bangunan;    
			$data['detail']['uang_kaos_olahraga']= $tampil->uang_kaos_olahraga;    
			$data['detail']['uang_batik']= $tampil->uang_batik;    
			$data['detail']['uang_almamater']= $tampil->uang_almamater;    
			$data['detail']['uang_atribut']= $tampil->uang_atribut;    
			$data['detail']['uang_paket_ujian_kelas_3']= $tampil->uang_paket_ujian_kelas_3;    
			$data['detail']['uang_uts_semester1']= $tampil->uang_uts_semester1;    
			$data['detail']['uang_uts_semester3']= $tampil->uang_uts_semester3;    
			$data['detail']['uang_uts_semester5']= $tampil->uang_uts_semester5;    
			$data['detail']['uang_uas_semester2']= $tampil->uang_uas_semester2;    
			$data['detail']['uang_uas_semester4']= $tampil->uang_uas_semester4;    
			$data['detail']['uang_daftar_ulang_1']= $tampil->uang_daftar_ulang_1;
			$data['detail']['uang_daftar_ulang_2']= $tampil->uang_daftar_ulang_2;
			$data['detail']['uang_prakerin']= $tampil->uang_prakerin;
			$data['detail']['keterangan']= $tampil->keterangan;
			$data['content']='VFormUpdateadministrasi';
            $data['akses']  = $this->AK;

		}
		else
		{	
            $data['akses']  = $this->AK;
			// $data['DataBerkasSiswa']=$this->MSudi->Get('tbl_berkassiswa');
			$data['DataMasterAdministrasi']=$this->MSudi->GetData('tbl_master_administrasi');

			$data['content']='VMasterAdministrasi';
		}


		$this->load->view('VBackend',$data);
	}

public function VFormAddMasterAdministrasi()
	{
		$data['content']='VFormAddMasterAdministrasi';
		$this->load->view('VBackend',$data);
	}
	public function AddMasterAdministrasi()
	{
			$add['no_administrasi']= $this->input->post('no_administrasi');    
			$add['tahun_ajaran']= $this->input->post('tahun_ajaran');    
			$add['uang_bangunan']= $this->input->post('uang_bangunan');    
			$add['uang_kaos_olahraga']= $this->input->post('uang_kaos_olahraga');    
			$add['uang_batik']= $this->input->post('uang_batik');    
			$add['uang_almamater']= $this->input->post('uang_almamater');    
			$add['uang_atribut']= $this->input->post('uang_atribut');    
			$add['uang_paket_ujian_kelas_3']= $this->input->post('uang_paket_ujian_kelas_3');    
			$add['uang_uts_semester1']= $this->input->post('uang_uts_semester1');    
			$add['uang_uts_semester3']= $this->input->post('uang_uts_semester3');    
			$add['uang_uts_semester5']= $this->input->post('uang_uts_semester5');    
			$add['uang_uas_semester2']= $this->input->post('uang_uas_semester2');    
			$add['uang_uas_semester4']= $this->input->post('uang_uas_semester4');    
			$add['uang_daftar_ulang_1']= $this->input->post('uang_daftar_ulang_1');
			$add['uang_daftar_ulang_2']= $this->input->post('uang_daftar_ulang_2');
			$add['uang_prakerin']= $this->input->post('uang_prakerin');
			$add['keterangan']= $this->input->post('keterangan');
			$this->MSudi->AddData('tbl_master_administrasi',$add);
        	 redirect(site_url('Welcome/DataMasterAdministrasi'));
	}

public function UpdateDataMasterAdministrasi()
	{
		$no_administrasi=$this->input->post('no_administrasi');                    
     	$update['no_administrasi']= $this->input->post('no_administrasi');    
		$update['tahun_ajaran']= $this->input->post('tahun_ajaran');    
		$update['uang_bangunan']= $this->input->post('uang_bangunan');    
		$update['uang_kaos_olahraga']= $this->input->post('uang_kaos_olahraga');    
		$update['uang_batik']= $this->input->post('uang_batik');    
		$update['uang_almamater']= $this->input->post('uang_almamater');    
		$update['uang_atribut']= $this->input->post('uang_atribut');    
		$update['uang_paket_ujian_kelas_3']= $this->input->post('uang_paket_ujian_kelas_3');    
		$update['uang_uts_semester1']= $this->input->post('uang_uts_semester1');    
		$update['uang_uts_semester3']= $this->input->post('uang_uts_semester3');    
		$update['uang_uts_semester5']= $this->input->post('uang_uts_semester5');    
		$update['uang_uas_semester2']= $this->input->post('uang_uas_semester2');    
		$update['uang_uas_semester4']= $this->input->post('uang_uas_semester4');    
		$update['uang_daftar_ulang_1']= $this->input->post('uang_daftar_ulang_1');
		$update['uang_daftar_ulang_2']= $this->input->post('uang_daftar_ulang_2');
		$update['uang_prakerin']= $this->input->post('uang_prakerin');
		$update['keterangan']= $this->input->post('keterangan');
		$this->MSudi->UpdateData('tbl_master_administrasi','no_administrasi',$no_administrasi,$update);       	
        redirect(site_url('Welcome/DataMasterAdministrasi'));
	}

	public function DeleteDataMasterAdministrasi()
	{
		 $no_administrasi=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_master_administrasi','no_administrasi',$no_administrasi);
        	 redirect(site_url('Welcome/DataMasterAdministrasi'));
	}

public function DataAdministrasiBangunan()
	{
		if($this->uri->segment(4)=='view')
		{
			$kd_siswa=$this->uri->segment(3);
			$tampil=$this->MSudi->Get3($kd_siswa)->row();
			$data['detail']['nama_siswa']= $tampil->nama_siswa;    
			$data['detail']['tahun_ajaran']= $tampil->tahun_ajaran;    
			$data['detail']['sisa_pembayaran']= $tampil->sisa_pembayaran;    			
            $data['detail']['foto_siswa']= $tampil->foto_siswa;               
			$data['detail']['keterangan']= $tampil->keterangan;
            $data['detail']['nis']= $tampil->nis;  
            $data['detail']['jenis_kelamin']= $tampil->jenis_kelamin;                            
			$data['content']='VFormUpdateadministrasibangunan';
            $this->session->set_userdata('no_uangbangunan', $tampil->no_uangbangunan);
            $this->session->set_userdata('uangB', $tampil->uang_bangunan);
            $this->session->set_userdata('kd_siswa', $tampil->kd_siswa);
            $data['DataTransaksi2']=$this->MSudi->joinan22($kd_siswa);
            $data['akses']  = $this->AK;
        
              $data['DataPembayaran']=$this->MSudi->joinanUBB($kd_siswa);
		}
		else
		{	
           $data['akses']  = $this->AK;
			// $data['DataBerkasSiswa']=$this->MSudi->Get('tbl_berkassiswa');
			$data['DataAdministrasiBangunan']=$this->MSudi->Getbangunan3();

			$data['content']='VFormAdministrasibangunan';
		}


		$this->load->view('VBackend',$data);
	}



	public function upload_foto_guru()
	{
		$config['upload_path']  = './upload/';
		$config['allowed_types']='doc|docx|xls|pdf|gif|jpg|jpeg|png|JPG|zip|mp3|mp4';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('foto_guru'))
		{
			$upload_data=$this->upload->data();
			$file_name=$upload_data['file_name'];
			return $file_name;
		}
        if($this->upload->do_upload('file_audio'))
        {
            $upload_data=$this->upload->data();
            $file_name=$upload_data['file_name'];
            return $file_name;
        }
        if($this->upload->do_upload('foto_siswa'))
        {
            $upload_data=$this->upload->data();
            $file_name=$upload_data['file_name'];
            return $file_name;
        }
        if($this->upload->do_upload('foto_staf'))
        {
            $upload_data=$this->upload->data();
            $file_name=$upload_data['file_name'];
            return $file_name;
        }
        

	}

    public function upload_foto_siswa()
    {
       $config['upload_path'] = './upload/';
       $config['allowed_types'] = 'jpg|JPEG|JPG|png|gif';

       $this->load->library('upload', $config);

       if($this->upload->do_upload('foto_siswa'))
       {

        $data = $this->upload->data();
        $file_name = $data['file_name'];
        return $file_name;

       }
        

    }

    public function AddDataTransUB()
    {   
            
            $kd = $this->input->post('kd');

            $add['no_uangbangunan']= $this->session->userdata('no_uangbangunan');  
            $add['tgl_transaksi']= $this->input->post('tgl_transaksi');    
            $add['jml_pembayaran']= $this->input->post('jml_pembayaran');    
            $add['kategori_trans']= $this->input->post('kategori_trans');    
           $this->MSudi->AddData('tbl_transaksi',$add);
             
        
         redirect(site_url('Welcome/DataAdministrasiBangunan/'.$kd.'/view'));
    }

    public function AddDataTransSPP()
    {   
        $kd_pembayaran = $this->session->userdata('kd_pembayaran');  
       
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');
        $add['kd_pembayaran']= $this->session->userdata('kd_pembayaran');  
       
        $add['tgl_transaksi']= $tm;
        $add['jml_pembayaran']= $this->input->post('jml_pembayaran');    
        // $add['kd_tabungan']= $this->input->post('kd_tabungan');    
        $add['kategori_trans']= "SPP";

       
           $this->MSudi->AddData('tbl_transaksi',$add);
               
                    // // $databulan = $this->session->userdata('options');
                    //  $abc = $this->input->post('options');
                    //     $add2['options'] =  "L";
                    //     // $add2['options'] = $databulan.','.implode(",",$abc);
                       
                    //     $this->MSudi->UpdateData('tbl_pembayaran','kd',$bulan,$add2);
                    
                  $kd = $this->input->post('options');
                    $this->db->set('options', 'L' );
                    $this->db->where('kd_pem', $kd);
                    $this->db->update('tbl_pembayaran');
                
        $kds=$this->input->post('kd');
             redirect(site_url('Welcome/DataAdministrasiSpp/'.$kds.'/view'));
             
    }

    public function AddDataTransSPP2()
    {   
        $kd_pembayaran = $this->session->userdata('kd_pembayaran');  
       
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');
        $add['kd_pembayaran']= $this->session->userdata('kd_pembayaran');  
       
        $add['tgl_transaksi']= $tm;
        $add['jml_pembayaran']= $this->input->post('jml_pembayaran');    
        $add['kd_tabungan']= $this->input->post('kd_tabungan');    
        $add['kategori_trans']= "SPP";

       
           $this->MSudi->AddData('tbl_transaksi',$add);
               
                    // // $databulan = $this->session->userdata('options');
                    //  $abc = $this->input->post('options');
                    //     $add2['options'] =  "L";
                    //     // $add2['options'] = $databulan.','.implode(",",$abc);
                       
                    //     $this->MSudi->UpdateData('tbl_pembayaran','kd',$bulan,$add2);
                    
                  $kd = $this->input->post('options');
                    $this->db->set('options', 'L' );
                    $this->db->where('kd_pem', $kd);
                    $this->db->update('tbl_pembayaran');
                
        $kds=$this->uri->segment(3);
             redirect(site_url('Welcome/DataAdministrasiSpp/'.$kds.'/view'));
             
    }


   

        public function DataAdministrasiSpp()
    {
        if($this->uri->segment(4)=='view')
        {
            $kd_siswa=$this->uri->segment(3);
            // $keyword = $this->uri->segment(3);
            $tampil=$this->MSudi->Get4($kd_siswa)->row();
            $data['detail']['nama_siswa'] = $tampil->nama_siswa;    
            $data['detail']['nis']= $tampil->nis;    
            $data['detail']['jenis_kelamin']= $tampil->jenis_kelamin;    
            $data['detail']['tahun_ajaran']= $tampil->tahun_ajaran;    
            $data['detail']['cicilan_bulananSPP']= $tampil->cicilan_bulananSPP;    
             // $data['detail']['kd_transaksi']= $tampil->kd_transaksi;    
             $data['detail']['kd_pembayaran']= $tampil->kd_pembayaran;    
            $data['detail']['kd_tabungan']= $tampil->kd_tabungan;    
             $data['detail']['jml_nabung']= $tampil->jml_nabung;    
             $data['detail']['status_siswa']= $tampil->status_siswa;    
             $data['detail']['uang_spp_smt1']= $tampil->uang_spp_smt1;    
            $data['detail']['sisa_pembayaran_spp']= $tampil->sisa_pembayaran_spp;               
            $data['detail']['keterangan']= $tampil->keterangan;
            $data['detail']['foto_siswa']= $tampil->foto_siswa;
            $data['detail']['options']= explode(",", $tampil->options);
            $data['content']='VFormUpdateadministrasiSPP';
            $this->session->set_userdata('kd_pembayaran', $tampil->kd_pembayaran);
            $this->session->set_userdata('uangSPP', $tampil->uang_spp_smt1);
         
           $this->session->set_userdata('kd_pem', $tampil->kd_pem);
           $this->session->set_userdata('kd', $tampil->kd_siswa);
            
            // $kd_siswa = $this->uri->segment(3);
            // $data['DataTransaksi']=$this->db->order_by('kd_transaksi', 'desc');
            $data['DataTransaksi']=$this->MSudi->joinan2($kd_siswa);
            $data['akses']  = $this->AK;
            $data['bulan'] = $this->MSudi->GetData('tbl_bulan');
            $data['DataAdministrasiSpp']=$this->MSudi->joinan($kd_siswa);
      

        }
        else
        {   
            $data['akses']  = $this->AK;
            $data['content']='VSPP';
        
            $data['DataAdministrasiSPP']=$this->MSudi->Getspp();

           
        }


        $this->load->view('VBackend',$data);
    }

    public function DataTransaksi()
    {

        if($this->uri->segment(4)=='view')
        {
            $kd_transaksi=$this->uri->segment(3);
            $tampil=$this->MSudi->get_produk($kd_transaksi)->row();
            $data['detail']['kd_transaksi']= $tampil->kd_transaksi;
            $data['detail']['nis']= $tampil->nis;
            $data['detail']['tempat_lahir']= $tampil->tempat_lahir;
            $data['detail']['kelas_siswa']= $tampil->kelas_siswa;
            $data['detail']['jurusan_siswa']= $tampil->jurusan_siswa;
            $data['detail']['sub_kelas_siswa']= $tampil->sub_kelas_siswa;
            $data['detail']['kd_pembayaran']= $tampil->kd_pembayaran;
            $data['detail']['nama_siswa']= $tampil->nama_siswa;
            $data['detail']['tgl_transaksi']= $tampil->tgl_transaksi;
            $data['detail']['jml_pembayaran']= $tampil->jml_pembayaran;
            $data['detail']['foto_siswa']= $tampil->foto_siswa;
          
            $data['akses'] =$this->AK;
            $data['content']='CetakSPP';
            // $this->load->view('CetakSPP',$data);
        }
        else if($this->uri->segment(3)=='Cetak')
        {


        }
        else
        {   

            $kd_siswa = $this->uri->segment(3);
            // $data['DataTransaksi']=$this->db->order_by('kd_transaksi', 'desc');
            $data['DataTransaksi']=$this->MSudi->joinan2($kd_siswa);
            // $data['DataTransaksi']=$this->MSudi->get_produk();
            $data['content']='VFormUpdateadministrasiSPP';
        }


        $this->load->view('VBackend',$data);
    }


    public function DataTransaksi2()
    {

        if($this->uri->segment(4)=='view')
        {
            $kd_transaksi=$this->uri->segment(3);
            $tampil=$this->MSudi->get_produk2($kd_transaksi)->row();
            $data['detail']['kd_transaksi']= $tampil->kd_transaksi;
            $data['detail']['nis']= $tampil->nis;
            $data['detail']['tempat_lahir']= $tampil->tempat_lahir;
            $data['detail']['kelas_siswa']= $tampil->kelas_siswa;
            $data['detail']['jurusan_siswa']= $tampil->jurusan_siswa;
            $data['detail']['sub_kelas_siswa']= $tampil->sub_kelas_siswa;
            $data['detail']['no_uangbangunan']= $tampil->no_uangbangunan;
            $data['detail']['nama_siswa']= $tampil->nama_siswa;
            $data['detail']['tgl_transaksi']= $tampil->tgl_transaksi;
            $data['detail']['jml_pembayaran']= $tampil->jml_pembayaran;
            $data['detail']['foto_siswa']= $tampil->foto_siswa;
          
            $data['akses'] = $this->AK;
            $data['content']='CetakSPP';
            // $this->load->view('CetakSPP',$data);
        }
        else if($this->uri->segment(3)=='Cetak')
        {


        }
        else
        {   

            $kd_siswa = $this->uri->segment(3);
            // $data['DataTransaksi']=$this->db->order_by('kd_transaksi', 'desc');
            $data['DataTransaksi']=$this->MSudi->joinan2($kd_siswa);
            // $data['DataTransaksi']=$this->MSudi->get_produk();
            $data['content']='VPembayaranSiswa';
        }


        $this->load->view('VBackend',$data);
    }

     public function DataTransaksi3()
    {

        if($this->uri->segment(4)=='view')
        {
            $kd_transaksi=$this->uri->segment(3);
            $tampil=$this->MSudi->get_produk4($kd_transaksi)->row();
            // $data['detail']['kd_transaksi']= $tampil->kd_transaksi;
            $data['detail']['nid']= $tampil->nid;
            $data['detail']['total_gaji']= $tampil->total_gaji;
            $data['detail']['tgl_gaji']= $tampil->tgl_gaji;
            $data['detail']['nama_guru']= $tampil->nama_guru;
            // $data['detail']['jml_pembayaran']= $tampil->jml_pembayaran;
            //  $data['detail']['foto_siswa']= $tampil->foto_siswa;
          
          
            $data['content']='CetakSPP3';
            $this->load->view('CetakSPP3',$data);
        }
        else if($this->uri->segment(3)=='Cetak')
        {


        }
        else
        {   

            $kd_siswa = $this->uri->segment(3);
            // $data['DataTransaksi']=$this->db->order_by('kd_transaksi', 'desc');
            $data['DataTransaksi']=$this->MSudi->joinan2($kd_siswa);
            // $data['DataTransaksi']=$this->MSudi->get_produk();
            $data['content']='VPembayaranSiswa';
        }


        $this->load->view('VBackend',$data);
    }

    public function DataTransaksi4()
    {

        if($this->uri->segment(4)=='view')
        {
            $kd_transaksi=$this->uri->segment(3);
            // $kd=$this->uri->segment(4);
            $tampil=$this->MSudi->get_produk4($kd_transaksi)->row();
            // $data['detail']['kd_transaksi']= $tampil->kd_transaksi;
            $data['detail']['nid']= $tampil->nid;
            $data['detail']['total_gaji']= $tampil->total_gaji;
            $data['detail']['tgl_gaji']= $tampil->tgl_gaji;
            $data['detail']['nama_guru']= $tampil->nama_guru;
            $data['detail']['alamat']= $tampil->alamat;
            // $data['detail']['no_telp']= $tampil->no_telp;
            // $data['detail']['jamngajar']              = $this->MSudi->akumulasiabsen($kd);
            // $data['detail']['datakasbon']             = $this->MSudi->joinankasbon2($kd);
            
            // $tampil2 = $this->MSudi->joindata3($kd)->row();

            // $data['detail']['gapok']    = $tampil2->gapok;
            $data['akses'] = $this->AK;
            $data['content']='CetakSPP3';
            $this->load->view('CetakSPP3',$data);
        }

        elseif($this->uri->segment(4)=='staf')
        {
            $kd=$this->uri->segment(3);
            // $kd=$this->uri->segment(4);
            $tampil=$this->MSudi->get_produk5($kd)->row();
            // $data['detail']['kd_transaksi']= $tampil->kd_transaksi;
            $data['detail']['nip']= $tampil->nip;
            $data['detail']['kd']= $tampil->kd;
            $data['detail']['total_gaji']= $tampil->total_gaji;
            $data['detail']['tgl_gaji']= $tampil->tgl_gaji;
            $data['detail']['nama_staf']= $tampil->nama_staf;
            $data['detail']['transport']= $tampil->transport;
            $data['detail']['tunjangan']= $tampil->tunjangan;
            $data['detail']['bagian_staf']= $tampil->bagian_staf;
            $data['detail']['jammasuk']               = $this->MSudi->akumulasiabsen2($kd);
            $data['detail']['datakasbon']             = $this->MSudi->joinankasbon3($kd);
            $data['detail']['alamat']= $tampil->alamat;
            // $data['detail']['no_telp']= $tampil->no_telp;
            // $data['detail']['jamngajar']              = $this->MSudi->akumulasiabsen($kd);
            // $data['detail']['datakasbon']             = $this->MSudi->joinankasbon2($kd);
            
            // $tampil2 = $this->MSudi->joindata3($kd)->row();

            // $data['detail']['gapok']    = $tampil2->gapok;
            $data['akses'] = $this->AK;
            $data['content']='CetakGajiStaf';
            
        }
       


        $this->load->view('VBackend',$data);
    }

    public function DataMapel()
    {
        if($this->uri->segment(4)=='view')
        {
            $kd = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('tbl_mapel', 'kd_mapel', $kd);
            $data['detail']['kd_mapel']     = $tampil->kd_mapel;
            $data['detail']['nama_mapel']   = $tampil->nama_mapel;
            $data['detail']['status']       = $tampil->status;
        }



        else
        {
            $data['akses']  = $this->AK;
            $data['DataMapel'] = $this->MSudi->GetData('tbl_mapel');
            $data['content'] = 'VMapel';

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
            
        $this->load->view('VBackend', $data);
    }

    public function AddMapel()
    {

        $add['kd_mapel']    = $this->input->post('kd_mapel');
        $add['nama_mapel']  = $this->input->post('nama_mapel');
        $add['status']      = $this->input->post('status');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('kd_mapel', 'kd_mapel', 'required');
        $this->form_validation->set_rules('nama_mapel', 'nama_mapel', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            redirect(site_url('Welcome/DataMapel'));
        }
        else
        {
            $tempdata = array('item' => $this->input->post('nama_mapel'), 
                          'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
            $this->MSudi->AddData('tbl_mapel', $add);
            return redirect(site_url('Welcome/DataMapel'));
        }   

    }

    public function DataPengumuman()
    {

      if($this->uri->segment(4)=='view')
        {
            $kd = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('tbl_pengumuman', 'kd_pengumuman', $kd);
            $data['detail']['kd_pengumuman']= $tampil->kd_mapel;
            $data['detail']['isi_pengumuman']   = $tampil->isi_pengumuman;
            $data['detail']['status']       = $tampil->status;
        }

        else
        {
            $data['akses']  = $this->AK;
            $data['DataPengumuman'] = $this->MSudi->GetData('tbl_pengumuman');
            $data['content'] = 'VPengumuman';

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
            
        $this->load->view('VBackend', $data);  

    }


    public function AddPengumuman()
    {

        $add['kd_pengumuman']    = $this->input->post('kd_pengumuman');
        $add['judul_pengumuman']  = $this->input->post('judul_pengumuman');
        $add['isi_pengumuman']  = $this->input->post('isi_pengumuman');
        $add['status']      = $this->input->post('status');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('kd_pengumuman', 'kd_pengumuman', 'required');
        $this->form_validation->set_rules('judul_pengumuman', 'judul_pengumuman', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'isi_pengumuman', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            redirect(site_url('Welcome/DataPengumuman'));
        }
        else
        {
            $tempdata = array('item' => $this->input->post('judul_pengumuman'), 
                          'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
            $this->MSudi->AddData('tbl_pengumuman', $add);
            return redirect(site_url('Welcome/DataPengumuman'));
        }   

    }

    public function UpdatePengumuman()
    {
        $kd                             = $this->input->post('kd_pengumuman');
        $update['judul_pengumuman']                 = $this->input->post('judul_pengumuman');
        $update['isi_pengumuman']              = $this->input->post('isi_pengumuman');
        $update['status']              = $this->input->post('status');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('kd_pengumuman', 'kd_pengumuman', 'required');
        $this->form_validation->set_rules('judul_pengumuman', 'judul_pengumuman', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'isi_pengumuman', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/DataPengumuman/'.$kd.'/view'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('tbl_pengumuman','kd_pengumuman',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('judul_pengumuman'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        $this->MSudi->UpdateData('tbl_pengumuman','kd_pengumuman',$kd,$update);
        return redirect(site_url('Welcome/DataPengumuman'));
        }
    }

    public function Pengumuman()
    {
        
        $data['PengumumanGuru'] = $this->MSudi->GetDataWhere2('tbl_pengumuman', 'kd_pengumuman', 1, 'status', 1);
        $data['PengumumanSiswa'] = $this->MSudi->GetDataWhere2('tbl_pengumuman', 'kd_pengumuman', 2, 'status', 1);

        $data['content'] = 'VDashSiswa';
        $this->load->view('VBackend', $data);

    } 

    public function JadwalMapel()
    {

        // important!
        $TahunAjaran = $this->THN;
        $thn = $this->THN->thn_ajaran;
        if($this->uri->segment(4)=='View')
        {
            $kd = $this->uri->segment(3);
            $thn = $this->uri->segment(6);
            
            $tampil     = $this->MSudi->GetDataWhere('tbl_jadwal_pelajaran','kd',$kd)->row();
            
            $data['detail']['thn_ajaran']           = $tampil->thn_ajaran;
            $data['detail']['kd']       = $tampil->kd;
            $data['detail']['jurusan']  = $tampil->jurusan;
            $data['detail']['kelas']    = $tampil->kelas;
            $data['detail']['sub_kelas']    = $tampil->sub_kelas;
            $data['detail']['jadwal_pelajaran']     = $tampil->jadwal_pelajaran;
            // assigning content to display


            // $kelas       = $this->UD->kelas_siswa;
            // $jurusan    = $this->UD->jurusan_siswa;
            // // $sub_kelas  = $this->UD->sub_kelas_siswa;
            // $kds         = $this->UD->nis;
            //  $thn_ajaran       = $this->THN->thn_ajaran;
            // $data['JadwalTahunAjaran']  = $this->MSudi->GetDataWhere3('tbl_jadwal_pelajaran','thn_ajaran',$TahunAjaran->thn_ajaran);
           $data['JadwalPelajaran'] = $this->MSudi->GetDataWhere3('tbl_jadwal_pelajaran','kd',$kd);
            $data['Siswa']      = $this->MSudi->GetDataWhere('tbl_siswa','nis',$kd)->row();
            $data['Guru']               = $this->MSudi->GetData('tbl_guru');
            $data['Mapel']              = $this->MSudi->GetData('tbl_mapel');
            $data['content']='VTahunAjaranUpdate';
        }
        elseif($this->uri->segment(3) == 'UpdateJadwal')
        {
             $kelas       = $this->UD->kelas_siswa;
            $jurusan    = $this->UD->jurusan_siswa;
            $sub_kelas  = $this->UD->sub_kelas_siswa;
            $kd         = $this->UD->nis;
            $thn_ajaran       = $this->THN->thn_ajaran;
            
            
            
            $data['Siswa']      = $this->MSudi->GetDataWhere('tbl_siswa','nis',$kd)->row();
            // $data['Kehadiran']  = $this->MSudi->GetDataWhere('tbl_siswa_kehadiran','nis',$kd)->row();   //add semester later
            
            // Jadwal Mapel
          $data['JadwalTahunAjaran']    = $this->MSudi->GetDataWhere3('tbl_jadwal_pelajaran','thn_ajaran',$TahunAjaran->thn_ajaran);
            $data['Guru']            = $this->MSudi->GetData('tbl_guru');
            $data['Mapel']            = $this->MSudi->GetData('tbl_mapel'); 
            $data['content']='VTahunAjaran';
        }
        else
        {
            $data['TahunAjaran']        = $TahunAjaran->thn_ajaran;
            
            $data['JadwalTahunAjaran']  = $this->MSudi->GetDataWhere3('tbl_jadwal_pelajaran','thn_ajaran',$TahunAjaran->thn_ajaran);
            
            $data['Guru']            = $this->MSudi->GetData('tbl_guru');
            $data['Mapel']            = $this->MSudi->GetData('tbl_mapel'); 
            
            // assigning content to display
            $data['content']='VTahunAjaran';
        }
    
        // get session data & get menu in 'tdn_menu'
        $data['akses']  = $this->AK;
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        
      
        
        // CALL 'VBackend' in VIEW folder
        $this->load->view('VBackend',$data);
    }
    public function UpdateTahunAjaran()
    {
      

     
        $kd = 1;
        $JadwalPelajaran    = $this->MSudi->GetDataWhere3('tbl_jadwal_pelajaran','thn_ajaran',$TahunAjaran->thn_ajaran)->$kd;
        
                                if(!empty($JadwalPelajaran)){
                                  $i=0;
                                    foreach($JadwalPelajaran as $_jadwal)
                                    {
                                         
                                            $Hari = explode("|" ,$_jadwal->jadwal_pelajaran);
                                            
                                            foreach($Hari as $_hari)
                                            {
                                               
                                                $map = explode("~" ,$_hari);
                                                $detail = explode("-" ,$map[1]);
                                                
                                                foreach($detail as $_detail)
                                                {

                                                    $m = explode("#" ,$_detail);
                                                    
                                                    foreach($Mapel as $_mapel)
                                                    { 
                                                        if ($_mapel->kd_mapel == $m[1])
                                                        { echo '<span class="badge bg-orange"><i class="icon fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }
                                                        else{
                                                            $real = '';
                                                        }
                                                        
                                                    }
                                                    foreach($Guru as $_guru)
                                                    {
                                                        if ($_guru->nid == $m[2])
                                                        { echo '<span class="badge bg-green"><i class="icon fa fa-circle"></i> '.$_guru->nama_guru.'</span><br>'; }

                                                    }
                                                    
                                                    
                                                }
                                                 
                                                 
                                            } 

                                        }
                                        
                                        
                                        
                                    }
                                
                        
                                    $kd                         = $this->input->post('kd');
                                    $update['jadwal_pelajaran'] = $this->input->post('jadwal_pelajaran'); 
                                        
                                        $update['thn_ajaran']       = $this->input->post('thn_ajaran');
                                        $update['kelas']            = $this->input->post('kelas');
                                        $update['sub_kelas']        = $this->input->post('sub_kelas');
                                        $update['jurusan']          = $this->input->post('jurusan');
       $this->MSudi->UpdateData('tbl_jadwal_pelajaran','kd',$kd,$update);





        
            
        // data for notification
        $tempdata = array('item' => '', 
                          'message' => 'Update');
                              
        $this->session->set_tempdata($tempdata, Null, 3);
            
        // RE-DIRECT to ...
        redirect(site_url('Welcome/JadwalMapel'));
    }
    
    public function DataBell()
    {


          if($this->uri->segment(4)=='view')
        {
            $kd = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('tbl_pengumuman', 'kd_pengumuman', $kd);
            $data['detail']['kd_pengumuman']= $tampil->kd_mapel;
            $data['detail']['isi_pengumuman']   = $tampil->isi_pengumuman;
            $data['detail']['status']       = $tampil->status;
        }
        else if($this->uri->segment(3) == 'Add')
        {

            $data['content'] = 'VAddBell';
            $data['akses'] = $this->AK;
            $data['BunyiBell'] = $this->MSudi->GetData('audio');
        }
        else
        {

        $day =  $this->MSudi->replaceDay2(date("D"));
        $data['DataPengaturan'] = $this->MSudi->GetResmumeJoin();
        $data['JadwalBell'] = $this->MSudi->GetJadwalBell($day);
        $data['qtab'] = $this->MSudi->GetJadwalBell($day);
        $data['BunyiBell'] = $this->MSudi->GetData('audio');
        $data['DataStat'] = $this->MSudi->GetData('status');
        $data['DataHari'] = $this->MSudi->GetData('tbl_hari');
        $data['abc'] = $this->MSudi->GetData('resume');
        $data['akses'] = $this->AK;
        $data['content'] = 'VBell';
        $data['DataBunyiBell'] = $this->MSudi->GetBunyiBell($day);
        $data['qmp3'] = $this->MSudi->GetBunyiBell($day);

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
            
        $this->load->view('VBackend', $data);  

    }
         
        
    
    public function DataBunyi()
    {
        $day =  $this->MSudi->replaceDay2(date("D"));
        $data['DataBunyiBell'] = $this->MSudi->GetBunyiBell($day)->row();
        $tampil = $this->MSudi->GetBunyiBell($day)->row();

        // $data['detail']['file'] = $tampil->file;
        $data['content'] = 'play';
       $this->load->view('play');
    }

   
  
     public function AddPengaturanBell()
    {


        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d h:i:s');

        $add['id']    = '';
        $add['updated']    = $tm;
        $add['jadwal']    = $this->input->post('jadwal');
        $add['id_hari']  = $this->input->post('id_hari');
        $add['id_audio']  = $this->input->post('id_audio');
        $add['jam']      = $this->input->post('jam');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('jadwal', 'jadwal', 'required');
        $this->form_validation->set_rules('id_hari', 'id_hari', 'required');
        $this->form_validation->set_rules('id_audio', 'id_audio', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            redirect(site_url('Welcome/DataBell/Add'));
        }
        else
        {
            $tempdata = array('item' => $this->input->post('judul'), 
                          'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
            $this->MSudi->AddData('resume', $add);
            return redirect(site_url('Welcome/DataBell'));
        }   

    }

     public function UpdateJadwalBell()
    {

        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d h:i:s');

        $kd                             = $this->input->post('id');
        $update['jadwal']                 = $this->input->post('jadwal');
        $update['id_audio']              = $this->input->post('id_audio');
        $update['id_hari']              = $this->input->post('id_hari');
        $update['jam']              = $this->input->post('jam');
        $update['updated']              = $tm;

        // $this->load->library('form_validation');

        // $this->form_validation->set_rules('id_hari', 'id_hari', 'required');
        // $this->form_validation->set_rules('judul', 'judul', 'required');
        // $this->form_validation->set_rules('id_audio', 'id_audio', 'required');

        // if ($this->form_validation->run() == FALSE)
        // {
        //     // data for notification
        //     $tempdata = array('item' => '', 
        //                       'message' => 'Update_Fail');
                              
        //     $this->session->set_tempdata($tempdata, Null, 3);
            
        //     redirect(site_url('Welcome/DataBell/'.$kd.'/view'));
        // }
        // else
        // {
            // UPDATE data to database
            $this->MSudi->UpdateData('resume','id',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('judul'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        $this->MSudi->UpdateData('resume','id',$kd,$update);
        return redirect(site_url('Welcome/DataBell'));
        
    }


    public function DataNilai()
    {
        $data['akses'] = $this->AK;
       
        $data['Mapel'] = $this->MSudi->GetData('tbl_mapel');
        // $data['Guru'] = $this->MSudi->GetData('tbl_guru');
        //  $data['num'] = 0;
      
        //  $data['DataNilai'] = $this->MSudi->GetData('tbl_siswa_nilai');
        $TahunAjaran       = $this->THN;
           $onjoin = "tbl_siswa_nilai.nis = tbl_siswa.nis";
            
            $data['Siswa']          = $this->MSudi->GetDataJoinWhere1('tbl_siswa_nilai','tbl_siswa',$onjoin,'keterangan',1);
            $data['Semester']       = $TahunAjaran->semester; 
            $data['content'] = 'VNilai';
        $this->load->view('VBackend', $data);
    }

   

    public function UploadRingtone()
    {

        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d h:i:s');

        $add['file_audio'] = $this->upload_foto_guru();
        $add['nama'] = $this->input->post('nama');
        $add['updated'] = $tm;

        $this->MSudi->AddData('audio', $add);
      

    }

    public function DataKasbonGuru()
    {

        if($this->uri->segment(4)=='view')
        {
            $kd=$this->uri->segment(3);
            $tampil=$this->MSudi->GetDataWhere('tbl_kasbon_guru', 'kd_kasbon_guru', $kd)->row();

            $data['detail']['nid'] = $tampil->nid;
            $data['detail']['ket_kasbon'] = $tampil->ket_kasbon;
            $data['detail']['jml_kasbon'] = $tampil->jml_kasbon;

            $data['content'] = 'VUpdateKasbon';
            $data['akses'] = $this->AK;
            $data['Guru'] = $this->MSudi->GetData('tbl_guru');
        }
        elseif($this->uri->segment(3)=='Add')
        {
            $data['content'] = 'VAddKasbon';
            $data['akses'] = $this->AK;
        }
        else
        {
            $data['DataKasbon'] = $this->MSudi->joinkasbon();
            $data['content'] ='VKasbon';
            $data['Guru'] = $this->MSudi->GetData('tbl_guru');
            $data['akses'] = $this->AK;

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);
    }

    public function AddDataKasbon()
    {


        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');

        $add['ket_kasbon'] = $this->input->post('ket_kasbon');
        $add['jml_kasbon'] = $this->input->post('jml_kasbon');
        $add['nid'] = $this->input->post('nid');
        $add['tgl_kasbon'] = $tm;
        $add['status_bayar'] = 0;


        $tempdata = array('item' => $this->input->post('ket_kasbon'), 
                          'message' => 'Add');
                              
        $this->session->set_tempdata($tempdata, Null, 3);
        $this->MSudi->AddData('tbl_kasbon_guru', $add);
        redirect(site_url('Welcome/DataKasbonGuru'));
    }

     public function DataKasbonStaf()
    {

        if($this->uri->segment(4)=='view')
        {
            $kd=$this->uri->segment(3);
            $tampil=$this->MSudi->GetDataWhere('tbl_kasbon_staf', 'kd_kasbon_staf', $kd)->row();

            $data['detail']['nip'] = $tampil->nip;
            $data['detail']['ket_kasbon'] = $tampil->ket_kasbon;
            $data['detail']['jml_kasbon'] = $tampil->jml_kasbon;

            $data['content'] = 'VUpdateKasbonStaf';
            $data['akses'] = $this->AK;
            $data['Staf'] = $this->MSudi->GetData('tbl_stafbawah');
        }
        elseif($this->uri->segment(3)=='Add')
        {
            $data['content'] = 'VAddKasbon';
            $data['akses'] = $this->AK;
        }
        else
        {
            $data['DataKasbon'] = $this->MSudi->joinkasbon2();
            $data['content'] ='VKasbonStaf';
            $data['Staf'] = $this->MSudi->GetData('tbl_stafbawah');
            $data['akses'] = $this->AK;

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);
    }

    public function AddDataKasbonStaf()
    {


        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');

        $add['ket_kasbon'] = $this->input->post('ket_kasbon');
        $add['jml_kasbon'] = $this->input->post('jml_kasbon');
        $add['nip'] = $this->input->post('nip');
        $add['tgl_kasbon'] = $tm;
        $add['status_bayar'] = 0;


        $tempdata = array('item' => $this->input->post('ket_kasbon'), 
                          'message' => 'Add');
                              
        $this->session->set_tempdata($tempdata, Null, 3);
        $this->MSudi->AddData('tbl_kasbon_staf', $add);
        redirect(site_url('Welcome/DataKasbonStaf'));
    }

    public function DataPengeluaran()
    {

        if($this->uri->segment(4)=='view')
        {
            $kd=$this->uri->segment(3);
            $tampil=$this->MSudi->GetDataWhere('tbl_keuangansekolah', 'kd_kasbon_guru', $kd)->row();

            $data['detail']['kd'] = $tampil->kd;
            $data['detail']['ket_pengeluaran'] = $tampil->ket_pengeluaran;
            $data['detail']['jml_pengeluaran'] = $tampil->jml_pengeluaran;

            $data['content'] = 'VUpdatePengeluaran';
            $data['akses'] = $this->AK;
            $data['Guru'] = $this->MSudi->GetData('tbl_guru');
        }
      
        else
        {
            $data['DataPengeluaran'] = $this->MSudi->GetData('tbl_keuangansekolah');
            $data['content'] ='VKeuanganSekolah';
            
            $data['akses'] = $this->AK;

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);
    }

    public function AddDataPengeluaran()
    {


        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');

        $add['ket_pengeluaran'] = $this->input->post('ket_pengeluaran');
        $add['jml_pengeluaran'] = $this->input->post('jml_pengeluaran');
        
        $add['tgl_pengeluaran'] = $tm;


        $tempdata = array('item' => $this->input->post('ket_pengeluaran'), 
                          'message' => 'Add');
                              
        $this->session->set_tempdata($tempdata, Null, 3);
        $this->MSudi->AddData('tbl_keuangansekolah', $add);
        redirect(site_url('Welcome/DataPengeluaran'));
    }

    public function DataHutangSiswa()
    {
      if($this->uri->segment(4)=='view')
        {
            // $kd=$this->uri->segment(3);
            // $tampil=$this->MSudi->GetDataWhere('tbl_siswa', 'kd_kasbon_guru', $kd)->row();

            // $data['detail']['kd'] = $tampil->kd;
            // $data['detail']['ket_pengeluaran'] = $tampil->ket_pengeluaran;
            // $data['detail']['jml_pengeluaran'] = $tampil->jml_pengeluaran;
            $kd_siswa = $this->uri->segment(3);
            $data2 = $this->MSudi->Get4($kd_siswa)->row();
            $data3 = $this->MSudi->Get3($kd_siswa)->row();

            $data['detail']['sisa_pembayaran_spp']= $data2->sisa_pembayaran_spp;               
            $data['detail']['uang_bangunan'] = $data3->uang_bangunan;
            
            $data['content'] = 'VUpdateHutangSiswa';
            $data['akses'] = $this->AK;

            
            // $data['Guru'] = $this->MSudi->GetData('tbl_guru');
            
        }
        
        else if($this->uri->segment(4)=='cetak')
        {
            $kd_transaksi=$this->uri->segment(3);
            $tampil=$this->MSudi->get_produk3()->row();
            
            $data['detail']['nama_siswa']= $tampil->nama_siswa;
           
             $kd_siswa = $this->uri->segment(3);
            $data2 = $this->MSudi->Get4($kd_siswa)->row();
            $data3 = $this->MSudi->Get3($kd_siswa)->row();

            $data['detail']['sisa_pembayaran_spp']= $data2->sisa_pembayaran_spp;               
            $data['detail']['uang_bangunan'] = $data3->uang_bangunan;
            $data['detail']['nama_siswa'] = $data3->nama_siswa;
            $data['detail']['nis'] = $data3->nis;
            $data['detail']['kelas_siswa'] = $data3->kelas_siswa;      
            $data['detail']['jurusan_siswa'] = $data3->jurusan_siswa;
            $data['detail']['sub_kelas_siswa'] = $data3->sub_kelas_siswa;    
            $data['detail']['tempat_lahir'] = $data3->tempat_lahir;    

            $data['akses'] = $this->AK;
            $data['content']='Cetaktotalhutangsiswa';
            // $this->load->view('CetakSPP2',$data);
        }

        else
        {
            

            $data['DataHutang'] = $this->MSudi->GetData('tbl_siswa');
            $data['content'] ='VHutangSiswa';
            
            $data['akses'] = $this->AK;

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);
    }

    public function AddDataAbsen()
    {

    $akses      = $this->session->userdata('akses');
        if($akses == '2'){
         date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');
        $tm2 = date('H:i:s', time());
        $add['nid'] = $this->session->userdata('ses_nid');
        $add['kehadiran'] = $this->input->post('kehadiran');
        $add['id_hari'] = $this->input->post('id_hari');
        $add['ket'] = $this->input->post('ket');
        $add['tgl_absen'] = $tm;
        $add['jam_absen'] = $tm2;

        $this->MSudi->AddData('tbl_kehadiran', $add);
        $this->session->set_flashdata('flash', 'Absen');
        redirect(site_url('Welcome/Dataguru/Profile'));
    }
        if($akses == '7'){
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');
        $tm2 = date('H:i:s', time());
        $add2['nip'] = $this->session->userdata('ses_nip');
        $add2['kehadiran'] = $this->input->post('kehadiran');
        $add2['id_hari'] = $this->input->post('id_hari');
        $add2['ket'] = $this->input->post('ket');
        $add2['tgl_absen'] = $tm;
        $add2['jam_absen'] = $tm2;
        $this->MSudi->AddData('tbl_kehadiranstaf', $add2);
        $this->session->set_flashdata('flash', 'Absen');
        redirect(site_url('Welcome/DataStafBawah/Profile'));
    }

    }

     public function AddDataAbsen2()
    {


         date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');
        $tm2 = date('H:i:s', time());
        $add['nis'] = $this->session->userdata('ses_id');
        $add['kehadiran'] = $this->input->post('kehadiran');
        $add['id_hari'] = $this->input->post('id_hari');
        // $add['ket'] = $this->input->post('ket');
        $add['tgl_absen'] = $tm;
        $add['jam_absen'] = $tm2;

        $this->MSudi->AddData('tbl_kehadiransiswa', $add);
        $this->session->set_flashdata('flash', 'Absen');
        redirect(site_url('Welcome/DataSiswa/Profile'));


    }

    public function DataAkumulasiAbsen()
    {

        $data['content'] = 'VAkumulasiAbsen';
        $data['akses'] = $this->AK;
        $this->load->view('VBackend', $data);
        

    }

    public function DataTabunganSiswa()
    {

         if($this->uri->segment(4)== 'view')
        {
            $nis = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('tbl_tabungansiswa', 'nis', $nis)->row();
            $data['detail']['kd']        = $tampil->kd;
            $data['detail']['nis']        = $tampil->nis;
            $data['detail']['tgl_nabung'] = $tampil->tgl_nabung;
            $data['detail']['jml_nabung'] = $tampil->jml_nabung;


            $data['content'] = 'VUpdateTabungan';
            $data['akses'] = $this->AK;


        }

       

        else
        {
            $data['DataTabunganSiswa'] = $this->MSudi->jointabsiswa();
            $data['content'] = 'VTabungan';
            $data['akses'] = $this->AK;
        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);
    }


    public function DataTabunganSiswa2()
    {

        if($this->uri->segment(4)== 'view')
        {
            $nis = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('tbl_tabungansiswa', 'nis', $nis)->row();
            $data['detail']['kd']        = $tampil->kd;
            $data['detail']['nis']        = $tampil->nis;
            $data['detail']['tgl_nabung'] = $tampil->tgl_nabung;
            $data['detail']['jml_nabung'] = $tampil->jml_nabung;


            $data['content'] = 'VUpdateTabungan2';
            $data['akses'] = $this->AK;


        

        }
        else
        {
             $data['DataTabunganSiswa'] = $this->MSudi->GetData('tbl_tabungansiswa');
            $data['content'] = 'VTabungan';
            $data['akses'] = $this->AK;
        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);
    }


    public function AddDataTabungan()
    {

        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d H:i:s');

        $nis = $this->input->post('nis');
        $update['nis'] = $this->input->post('nis');
        $update['tgl_nabung'] = $tm;
        $update['jml_nabung'] = $this->input->post('jml_nabung');

        $this->MSudi->UpdateData('tbl_tabungansiswa', 'nis', $nis, $update);

        $kd = $this->input->post('kd');
        
        $update2['tgl_pendapatan'] = $tm;
        $update2['jml_pendapatan'] = $this->input->post('jml_pendapatan');

        $this->MSudi->AddData('tbl_pendapatan_tabungan', $update2);
        redirect(site_url('Welcome/DataTabunganSiswa'));
    }

    public function DataStatusSiswa()
    {

        $data['content'] = 'VStatusSiswa';
        $data['akses'] = $this->AK;
        $data['DataSatatusSiswa'] = $this->MSudi->getjoinstatus2();

        $this->load->view('VBackend', $data);



    }

    public function UpdateStatus()
    {
        $tampil = $this->MSudi->getjoinstatus()->row();
        $kds = $this->uri->segment(3);
        $kd = $this->uri->segment(3);
        if($this->input->post('status_siswa') == '2'){
            $update['sisa_pembayaran_spp'] = $tampil->uang_spp_smt1 / 2;
            $this->MSudi->UpdateData('tbl_pembayaran', 'kd_pembayaran', $kd, $update);
           
            $update6['sisa_pembayaran'] = $tampil->uang_bangunan / 2;
            $this->MSudi->UpdateData('tbl_uang_bangunan', 'no_uangbangunan', $kd, $update6);

        }
            
            else{
            $update3['sisa_pembayaran_spp'] = 0;
            $this->MSudi->UpdateData('tbl_pembayaran', 'kd_pembayaran', $kds, $update3);
           
            $update5['sisa_pembayaran'] = 0;
            $this->MSudi->UpdateData('tbl_uang_bangunan', 'no_uangbangunan', $kds, $update5);
            }

            $stat = $this->uri->segment(4);
             $update2['status_siswa'] = $this->input->post('status_siswa');        
            $this->MSudi->UpdateData('tbl_siswa', 'kd_siswa', $stat, $update2);
             $update4['status_siswa'] = $this->input->post('status_siswa');
             $this->MSudi->UpdateData('tbl_siswa', 'kd_siswa', $stat, $update4);
            redirect(site_url('Welcome/DataStatusSiswa'));
    }

    public function Mapel()
    {
        if($this->uri->segment(4)=='view')
        {
            // Get a segment url
            $kd = $this->uri->segment(3);
            
            $this->load->library('form_validation');
            
            $tampil = $this->MSudi->GetDataWhere('tbl_mapel','kd_mapel',$kd)->row();
            
            // Get each data
            $data['detail']['kd_mapel']         = $tampil->kd_mapel;
            $data['detail']['nama_mapel']       = $tampil->nama_mapel;
            $data['detail']['status']           = $tampil->status;
            
            // assigning content to display
            $data['content']='VMapelUpdate';
        }
        else if($this->uri->segment(3)=='Kompetensi')
        {
            // Get a segment url
            $kd = $this->uri->segment(4);
            
            // SHOW the data
            //$data['Kompetensi'] = $this->MSudi->GetDataWhere1('kompetensi','kd_mapel',$kd);
            
            // Loop Semester
            $kom = $this->MSudi->GetDataWhere3('kompetensi','kd_mapel',$kd);
            $sem = 0;
            $i   = 0;
            
            foreach($kom as $ReadDS)
            {
                if ($sem < $ReadDS->semester)
                {
                    $sem = $ReadDS->semester;
                    $i++;
                    $data['Semester'][$i]   = $this->MSudi->GetDataWhere2('kompetensi','semester',$sem,'kd_mapel',$kd);
                }
            }
            
            $data['TotalSemester'] = $i;
            
            // assigning content to display
            $data['content']='VMapelKompetensi';
        }
        else if($this->uri->segment(3)=='Add')
        {
            // assigning content to display
            $data['content']='VMapelAdd';
        }
        else
        {
            $data['Mapel']=$this->db->order_by('kd_mapel','DESC');
        
            // SHOW the data
            $data['Mapel']=$this->MSudi->GetDataWhere3('tbl_mapel','status',1);
            
            // assigning content to display
            $data['content']='VMapel';
        }
        
        // get session data & get menu in 'tdn_menu'
        $data['userData']   = $this->UD;
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        
        $data['akses'] = $this->AK;
        
        // CALL 'VBackend' in VIEW folder
        $this->load->view('VBackend',$data);
    }
    public function AddMapel2()
    {
        // get date & time
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d h:i:s');
    
        // assigning each data
        $add['kd_mapel']            = $this->input->post('kd_mapel');
        $add['nama_mapel']          = $this->input->post('nama_mapel');
        $add['s_history']           = $tm;
        $add['u_history']           = '';
        $add['d_history']           = '';
        $add['status']              = $this->input->post('status');
        
        // validation check
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_mapel', 'nama_mapel', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            // RE-DIRECT to 'DataSiswa'
            redirect(site_url('Welcome/Mapel/Add'));
        }
        else
        {
            // ADD new data to database
            $this->MSudi->AddData('tbl_mapel',$add);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('nama_mapel'), 
                              'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            // RE-DIRECT to 'DataSiswa'
            redirect(site_url('Welcome/Mapel'));
        }
    }
    public function AddMapelKompetensi()
    {
        // get date & time
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d h:i:s');
        
        // get uri segment
        $link = $this->uri->segment(3);
        
        // assigning each data
        $add['kd_mapel']            = $this->input->post('kd_mapel');
        $add['semester']            = $this->input->post('semester');
        $add['kd_kompetensi']       = '';
        $add['p_kompetensi']        = $this->input->post('p_kompetensi');
        $add['p_kkm_kompetensi']    = $this->input->post('p_kkm_kompetensi');
        $add['k_kompetensi']        = $this->input->post('k_kompetensi');
        $add['k_kkm_kompetensi']    = $this->input->post('k_kkm_kompetensi');
        
        // ADD new data to database
        $this->MSudi->AddData('kompetensi',$add);
            
        // data for notification
        $tempdata = array('item' => '', 
                          'message' => 'Add');
                              
        $this->session->set_tempdata($tempdata, Null, 1);
            
        // RE-DIRECT to
        redirect(site_url('Welcome/Mapel/Kompetensi/'.$link));
        
        
        // validation check
        /*
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_mapel', 'nama_mapel', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            // RE-DIRECT to 'DataSiswa'
            redirect(site_url('Welcome/Mapel/Add'));
        }
        else
        {
            // ADD new data to database
            $this->MSudi->AddData('mapel',$add);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('nama_mapel'), 
                              'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            // RE-DIRECT to 'DataSiswa'
            redirect(site_url('Welcome/Mapel'));
        }
        */
    }
    public function UpdateMapel()
    {
        // get date & time
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d h:i:s');
    
        // assigning each data
        $kd                             = $this->input->post('kd_mapel');
        $update['nama_mapel']           = $this->input->post('nama_mapel');
        // $update['u_history']            = $tm;
        $update['status']               = $this->input->post('status');
        
        // validation check
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_mapel', 'nama_mapel', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/Mapel/'.$kd.'/view'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('tbl_mapel','kd_mapel',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('nama_mapel'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            // RE-DIRECT to 'DataSiswa'
            redirect(site_url('Welcome/Mapel'));
        }
    }
    public function UpdateMapelKompetensi()
    {
        // get date & time
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d h:i:s');
        
        // get uri segment
        $kd = $this->uri->segment(3);
        $link = $this->uri->segment(4);
        
        // assigning each data
        $update['p_kompetensi']         = $this->input->post('p_kompetensi');
        $update['p_kkm_kompetensi']     = $this->input->post('p_kkm_kompetensi');
        $update['k_kompetensi']         = $this->input->post('k_kompetensi');
        $update['k_kkm_kompetensi']     = $this->input->post('k_kkm_kompetensi');
        
        // UPDATE data to database
        $this->MSudi->UpdateData('kompetensi','kd_kompetensi',$kd,$update);
            
        // data for notification
        $tempdata = array('item' => '', 
                          'message' => 'Update');
                              
        $this->session->set_tempdata($tempdata, Null, 3);
            
        // RE-DIRECT to 'DataSiswa'
        redirect(site_url('Welcome/Mapel/Kompetensi/'.$link));
        
        // validation check
        /*
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_mapel', 'nama_mapel', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/Mapel/'.$kd.'/view'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('mapel','kd_mapel',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('nama_mapel'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            // RE-DIRECT to 'DataSiswa'
            redirect(site_url('Welcome/Mapel'));
        }*/
    }   
    public function DeleteMapel()
    {
        // get date & time
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d h:i:s');
    
        // Get a segment url
        $kd = $this->uri->segment(3);
        
        // assigning each data
        // $update['d_history']    = $tm;
        $update['status']       = 0;
        
        // UPDATE data to database
        $this->MSudi->UpdateData('tbl_mapel','kd_mapel',$kd,$update);
            
        // data for notification
        $tempdata = array('item' => '', 
                          'message' => 'Delete');
                              
        $this->session->set_tempdata($tempdata, Null, 3);
            
        // RE-DIRECT to 'DataSiswa'
        redirect(site_url('Welcome/Mapel'));
    }
    public function DeleteMapelKompetensi()
    {
        // get date & time
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d h:i:s');
    
        // Get a segment url
        $kd = $this->uri->segment(3);
        $link = $this->uri->segment(4);
        
        // DELETE data from databse
        $this->MSudi->DeleteData('kompetensi','kd_kompetensi',$kd);
            
        // data for notification
        $tempdata = array('item' => '', 
                          'message' => 'Delete');
                              
        $this->session->set_tempdata($tempdata, Null, 3);
        
        // RE-DIRECT to 'DataSiswa'
        redirect(site_url('Welcome/Mapel/Kompetensi/'.$link));
    }
    
    public function DataJamMapel()
    {

       
         if($this->uri->segment(4)=='view')
        {
            // Get a segment url
            $kd = $this->uri->segment(3);
            // $jurusan = $this->uri->segment(4);
            // $sub_kelas = $this->uri->segment(5);
            
            $this->load->library('form_validation');
            
            $tampil = $this->MSudi->getjadwalmengajar($kd)->row();
            
            // Get each data
            $data['detail']['kd']         = $tampil->kd;
            $data['detail']['hari']       = $tampil->hari;
            $data['detail']['id_hari']       = $tampil->id_hari;
            $data['detail']['nid']           = $tampil->nid;
            $data['detail']['kd_mapel']           = $tampil->kd_mapel;
            $data['detail']['nama_mapel']           = $tampil->nama_mapel;
            $data['detail']['jam_awal']           = $tampil->jam_awal;
            $data['detail']['jam_akhir']           = $tampil->jam_akhir;
            $data['detail']['jam_awal']           = $tampil->jam_awal;
            $data['detail']['kelas_guru']           = $tampil->kelas_guru;
            $data['detail']['kelas']           = $tampil->kelas;
            $data['detail']['jurusan']           = $tampil->jurusan;
            $data['detail']['sub_kelas']           = $tampil->sub_kelas;
            $ses = $this->session->set_userdata('kelasGuru', $tampil->kelas_guru);
            // assigning content to display
            $data['DataJamMapel'] = $this->MSudi->GetData('tbl_guru');
            
            $data['akses'] = $this->AK;

            // $day = $this->session->userdata('ses_nid');
            $data['Mapel'] = $this->MSudi->GetData('tbl_mapel');
            $data['DataHari'] = $this->MSudi->GetData('tbl_hari');

            $data['content']='VUpdateJamNgajar';
        }

        elseif($this->uri->segment(3)=='Add')
        {

            $data['content'] = 'VAddJadwalNgajar';

            $data['Mapel'] = $this->MSudi->GetData('tbl_mapel');
            $data['DataHari'] = $this->MSudi->GetData('tbl_hari');
            $data['DataGuru'] = $this->MSudi->GetData('tbl_guru');
            $data['sesskelas'] = $this->session->userdata('kelasGuru');
            $data['akses'] = $this->AK;

        }

        else
        {
            $day = $this->uri->segment(3);
            $data['DataJamMapel'] = $this->MSudi->getjadwalmengajar2();
            $data['sesskelas'] = $this->session->userdata('kelasGuru');
            $data['DataGuru'] = $this->MSudi->GetData('tbl_guru');
            $data['Mapel'] = $this->MSudi->GetData('tbl_mapel');
            $data['content'] = 'VJadwalNgajar';
            $data['akses'] = $this->AK;

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);

    }

    public function UpdateDataNgajar()
    {

        $kd = $this->input->post('kd');
        $update['id_hari'] = $this->input->post('id_hari');
        $update['kd_mapel'] = $this->input->post('kd_mapel');
        $update['jam_awal'] = $this->input->post('jam_awal');
        $update['jam_akhir'] = $this->input->post('jam_akhir');
        $update['jam_awal'] = $this->input->post('jam_awal');

        $update['kelas'] = $this->input->post('kelas');
        $update['jurusan'] = $this->input->post('jurusan');
        $update['sub_kelas'] = $this->input->post('sub_kelas');
        $update['thn_ajaran'] = '2019/2020';


        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_hari', 'id_hari', 'required');
        $this->form_validation->set_rules('kd_mapel', 'kd_mapel', 'required');
        $this->form_validation->set_rules('jam_awal', 'jam_awal', 'required');
        $this->form_validation->set_rules('jam_akhir', 'jam_akhir', 'required');


        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/DataJamMapel/'.$kd.'/view'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('tbl_jadwal_pelajaran2', 'kd', $kd, $update);
            
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        }
        
        redirect(site_url('Welcome/DataJamMapel'));

    }

    public function AddJamNgajar()
    {

        
        $add['jam_awal']  = $this->input->post('jam_awal');
        $add['jam_akhir']  = $this->input->post('jam_akhir');
        $add['id_hari']      = $this->input->post('id_hari');
        $add['kd_mapel']      = $this->input->post('kd_mapel');
        $add['nid']      = $this->input->post('nid');
        $add['kelas']      = $this->input->post('kelas');
        $add['jurusan']      = $this->input->post('jurusan');
        $add['sub_kelas']      = $this->input->post('sub_kelas');
        $add['jam_belajar']      = $this->input->post('jamawal').'-'.$this->input->post('jamakhir');
        $this->MSudi->AddData('tbl_jadwal_pelajaran2', $add);


        // $add9['kelas_guru']  = ','.$this->input->post('kelas');
        // $add3['kelas_guru']    = '-'.$this->input->post('jurusan');
        // $add4['kelas_guru']      = '-'.$this->input->post('sub_kelas');


        
         // $tampil = $this->MSudi->getjadwalmengajar3()->row();

        //  $ses = $this->session->userdata('kelasGuru');
        //  $abc = $this->input->post('kd_mapel').'-'.$this->input->post('kelas').'-'.$this->input->post('jurusan').'-'.$this->input->post('sub_kelas');
       
        //              // $abc = $this->input->post('options');
        //                 // $add2['options'] =  "L";
        //  $add2['kelas_guru'] = $ses.','.implode(",", $abc);

        
        // $kd = $this->input->post('nid');
            
        // $this->MSudi->UpdateData('tbl_guru', 'nid', $kd, $add2);
            $tempdata = array('item' => $this->input->post('nid'), 
                          'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
           
            return redirect(site_url('Welcome/DataJamMapel'));
           

    }

    public function KelasGuru()
    {

          if($this->uri->segment(4)=='view')
        {
            // Get a segment url
            $kd = $this->uri->segment(3);
            // $jurusan = $this->uri->segment(4);
            // $sub_kelas = $this->uri->segment(5);
            
            $this->load->library('form_validation');
            
            $tampil = $this->MSudi->getkelasajar($kd)->row();
            
            // Get each data
            $data['detail']['nid']         = $tampil->nid;
            $data['detail']['nama_guru']       = $tampil->nama_guru;
           
            $data['detail']['kelas_guru']           = $tampil->kelas_guru;
             $data['ses'] = $this->session->set_userdata('kelasGuru', $tampil->kelas_guru);
            // assigning content to display
            $data['DataJamMapel'] = $this->MSudi->GetData('tbl_guru');
            
            $data['akses'] = $this->AK;

            // $day = $this->session->userdata('ses_nid');
            $data['Mapel'] = $this->MSudi->GetData('tbl_mapel');
            $data['DataHari'] = $this->MSudi->GetData('tbl_hari');

            $data['content']='VUpdateKelasNgajar';
        }
        else
        {
            $data['akses'] = $this->AK;
            $data['content']='VDetailMengajar';
            $data['Mapel'] = $this->MSudi->GetData('tbl_mapel');
            $data['DataDetailMengajar'] = $this->MSudi->GetData('tbl_guru');

        }
        $this->load->view('VBackend', $data);

    }

    public function UpdateKelasGuru()
    {
        $kd = $this->input->post('nid');
          $databulan = $this->input->post('ses');
                     $abc = $this->input->post('kd_mapel').'-'.$this->input->post('kelas').'-'.$this->input->post('jurusan').'-'.$this->input->post('sub_kelas');
                        // $add2['options'] =  "L";
                        $add2['kelas_guru'] = $databulan.','.$abc;
                       
                        $this->MSudi->UpdateData('tbl_guru','nid',$kd, $add2);
                        redirect(site_url('Welcome/kelasGuru'));
    }

    public function DataKenakalan()
    {

           if($this->uri->segment(4)=='view')
        {
            // Get a segment url
            $kd = $this->uri->segment(3);
            // $jurusan = $this->uri->segment(4);
            // $sub_kelas = $this->uri->segment(5);
            
            $this->load->library('form_validation');
            
            $tampil = $this->MSudi->GetDataWhere('tbl_kenakalansiswa', 'kd', $kd)->row();
            
            // Get each data
            $data['detail']['kd']                    = $tampil->kd;
            $data['detail']['jenis_kenakalan']       = $tampil->jenis_kenakalan;
           
            $data['detail']['poin_kenakalan']        = $tampil->poin_kenakalan;
             
            // assigning content to display
            $data['akses'] = $this->AK;
            $data['content']='VUpdateKenakalan';
            
            
        }
        else
        {
            $data['akses'] = $this->AK;
            $data['content']='VKenakalanSiswa';
            
            $data['DataKenakalan'] = $this->MSudi->GetData('tbl_kenakalansiswa');

        }
         $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);


    }

     public function AddKenakalan()
    {

        
        $add['jenis_kenakalan']  = $this->input->post('jenis_kenakalan');
        $add['poin_kenakalan']  = $this->input->post('poin_kenakalan');
        

        $this->load->library('form_validation');

      
        $this->form_validation->set_rules('jenis_kenakalan', 'jenis_kenakalan', 'required');
        $this->form_validation->set_rules('poin_kenakalan', 'poin_kenakalan', 'required');
        // $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            redirect(site_url('Welcome/DataKenakalan'));
        }
        else
        {
            $tempdata = array('item' => $this->input->post('jenis_kenakalan'), 
                          'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
            $this->MSudi->AddData('tbl_kenakalansiswa', $add);
            return redirect(site_url('Welcome/DataKenakalan'));
        }   

    }

    public function UpdateDataKenakalan()
    {
        $kd                             = $this->input->post('kd');
        $update['jenis_kenakalan']                 = $this->input->post('jenis_kenakalan');
        $update['poin_kenakalan']              = $this->input->post('poin_kenakalan');
       

        $this->load->library('form_validation');

        $this->form_validation->set_rules('kd', 'kd', 'required');
        $this->form_validation->set_rules('jenis_kenakalan', 'jenis_kenakalan', 'required');
        $this->form_validation->set_rules('poin_kenakalan', 'poin_kenakalan', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/DataKenakalan/'.$kd.'/view'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('tbl_kenakalansiswa','kd',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('jenis_kenakalan'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
        return redirect(site_url('Welcome/DataKenakalan'));
        }
    }

    public function DataKenakalanSiswa()
    {

         if($this->uri->segment(4)=='view')
        {
            // Get a segment url
            $kd = $this->uri->segment(3);
            // $jurusan = $this->uri->segment(4);
            // $sub_kelas = $this->uri->segment(5);
            
            $this->load->library('form_validation');
            
            $tampil = $this->MSudi->GetDataWhere('tbl_poinsiswa', 'kd', $kd)->row();
            
            // Get each data
            $data['detail']['kd']                    = $tampil->kd;
            $data['detail']['nis']                   = $tampil->nis;
           
            $data['detail']['poin_kenakalan']        = $tampil->poin_kenakalan;
            $data['detail']['status_siswa']        = $tampil->status_siswa;
             
            // assigning content to display
            $data['akses'] = $this->AK;

            $data['content']='VUpdateDataKenakalan';
            
            
        }

        else if($this->uri->segment(3)== 'Detail')
        {

            $kd = $this->uri->segment(4);

            
            $data['akses'] = $this->AK;
            $data['content']='VDetailPoinSiswa';
            $data['DataKenakalan'] = $this->MSudi->datakenakalan($kd);
            $data['DataKenakalanSiswa'] = $this->MSudi->GetData('tbl_kenakalansiswa');

            $tampil = $this->MSudi->GetDataWhere('tbl_poinsiswa', 'nis', $kd)->row();
            
            // Get each data
            
            $data['detail']['nis']                   = $tampil->nis;

        }

        else
        {
            $data['akses'] = $this->AK;
            $data['content']='VDataKenakalanSiswa';
            
            $data['DataKenakalan'] = $this->MSudi->GetData('tbl_poinsiswa');
            $data['DataSiswa'] = $this->MSudi->GetData('tbl_siswa');

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);



    }

    public function UpdateDataPoin()
    {

         $update['nis']                 = $this->input->post('nis');
        $update['jenis_kenakalan']                 = $this->input->post('jenis_kenakalan');
        $update['poin_kenakalan']              = $this->input->post('poin_kenakalan');
        $update['tgl_kenakalan']              = $this->input->post('tgl_kenakalan');
       

        $this->load->library('form_validation');

        $this->form_validation->set_rules('jenis_kenakalan', 'jenis_kenakalan', 'required');
        $this->form_validation->set_rules('tgl_kenakalan', 'tgl_kenakalan', 'required');
        $this->form_validation->set_rules('poin_kenakalan', 'poin_kenakalan', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/DataKenakalanSiswa'));
        }
        else
        {
            // UPDATE data to database
            $kd = $this->input->post('nis');
            $this->MSudi->AddData('tbl_poinsiswa', $update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('nis'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
        return redirect(site_url('Welcome/DataKenakalanSiswa/Detail/'.$kd.''));
        }

    }

    public function UpdateStatusKenakalan()
    {
         $kd = $this->input->post('nis');
         $update['status_kenakalan'] = $this->input->post('status_kenakalan');
         $this->MSudi->UpdateData('tbl_siswa','nis', $kd, $update);

          redirect(site_url('Welcome/DataKenakalanSiswa'));
    }

    public function MasterPenggajian()
    {

        if($this->uri->segment(4)=='view')
        {
            $tampil = $this->MSudi->GetDataWhere('tbl_master_penggajian')->row();

            $data['detail']['kd_penggajian']    = $tampil->kd_penggajian;
            $data['detail']['stat_guru']        = $tampil->stat_guru;
            $data['detail']['gapok']            = $tampil->gapok;
            $data['detail']['transport']        = $tampil->transport;
        }
        else
        {

            $data['akses'] = $this->AK;
            $data['content'] = 'VMasterPenggajian';
            $data['DataMasterPenggajian'] = $this->MSudi->GetData('tbl_master_penggajian');


        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);

    }

     public function AddMasterPenggajian()
    {

        // $add['kd_penggajian']    = $this->input->post('kd_penggajian');
        $add['kategori'] = $this->input->post('kategori');
        $add['gapok']   = $this->input->post('gapok');
        $add['transport']           = $this->input->post('transport');

        $this->load->library('form_validation');

        // $this->form_validation->set_rules('kd_penggajian', 'kd_penggajian', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('gapok', 'gapok', 'required');
        $this->form_validation->set_rules('transport', 'transport', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            redirect(site_url('Welcome/MasterPenggajian'));
        }
        else
        {
            $tempdata = array('item' => $this->input->post('kategori'), 
                          'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
            $this->MSudi->AddData('tbl_master_penggajian', $add);
            return redirect(site_url('Welcome/MasterPenggajian'));
        }   

    }

    public function UpdateMasterPenggajian()
    {
        $kd                             = $this->input->post('kd_penggajian');
        $update['kategori']                 = $this->input->post('kategori');
        $update['gapok']              = $this->input->post('gapok');
        $update['transport']              = $this->input->post('transport');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('kd_penggajian', 'kd_penggajian', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('gapok', 'gapok', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/MasterPenggajian/'.$kd.'/view'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('tbl_master_penggajian','kd_penggajian',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('kategori'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
        return redirect(site_url('Welcome/MasterPenggajian'));
        }
    }

    public function DataPenggajian()
    {

        if($this->uri->segment(4)=='view')
        {
            // Get a segment url
            $kd = $this->uri->segment(3);
            // $jurusan = $this->uri->segment(4);
            // $sub_kelas = $this->uri->segment(5);
            
            $this->load->library('form_validation');
            
            $tampil = $this->MSudi->joindata3($kd)->row();
            
            // Get each data
            $data['detail']['nid']                    = $tampil->nid;
            $data['detail']['nama_guru']              = $tampil->nama_guru;
            $data['detail']['jenis_kelamin']          = $tampil->jenis_kelamin;
            $data['detail']['kategori']               = $tampil->kategori;
            $data['detail']['foto_guru']              = $tampil->foto_guru;
            $data['detail']['gapok']                  = $tampil->gapok;
            $data['detail']['kd_guru']                  = $tampil->kd_guru;
            $data['detail']['tunjangan']                  = $tampil->tunjangan;
            $data['detail']['nama_jabatan']           = $tampil->nama_jabatan;
            $data['detail']['transport']                  = $tampil->transport;
            $data['detail']['jamngajar']              = $this->MSudi->akumulasiabsen($kd);
            $data['detail']['datakasbon']             = $this->MSudi->joinankasbon2($kd);
            $data['DataTransaksi']=$this->MSudi->joinan23($kd);
            // assigning content to display
            $data['akses'] = $this->AK;
            $data['content']='VDetailPenggajian';
            
            
        }
        else
        {
            $data['akses'] = $this->AK;
            $data['content']='VDataPenggajian';
            
            $data['DataPenggajian'] = $this->MSudi->joindata2();

        }
         $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);
 

    }

    public function AddGajiGuru()
    {
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');
        $tm2 = date('Ymd');
        $add['nid'] = $this->input->post('nid');
        $add['tgl_gaji'] = $tm;
        $add['tanggal'] = $tm2;

        $add['total_gaji'] = $this->input->post('total_gaji');
        $this->MSudi->AddData('tbl_gajiguru', $add);

        $kd = $this->input->post('nid');
        
        
        // DELETE data from databse
        $this->MSudi->DeleteData('tbl_kehadiran','nid',$kd);
        redirect(site_url('Welcome/DataPenggajian/'.$kd.'/view'));
    }

    public function AddGajiStaf()
    {
        date_default_timezone_set("Asia/Jakarta"); 
        $tm = date('Y-m-d');
        $tm2 = date('Ymd');
        $add['nip'] = $this->input->post('nip');
        $add['tgl_gaji'] = $tm;
        

        $add['total_gaji'] = $this->input->post('total_gaji');
        $this->MSudi->AddData('tbl_gajistaf', $add);

        $kd = $this->input->post('nip');
        redirect(site_url('Welcome/DataPenggajianStaf/'.$kd.'/view'));
    }

    public function DetailPengeluaranSPP()
    {

        if($this->uri->segment(4)=='view')
        {
            $kd= $this->uri->segment(3);

            
            $data['DataPengSPP'] = $this->MSudi->getpengspp($kd);
            $data['detail']['total_gaji'] = $this->MSudi->getpengspp($kd);
            
            $data['content'] = 'VDetailPengspp';
            $data['akses'] = $this->AK;
        }
        else
        {
            $data['content'] = 'VDetailPengeluaranspp';
            $data['PengeluaranSPP'] = $this->MSudi->getdataspp();
            // $data['PengeluaranSPP'] = $this->MSudi->getdataspp2();
            $data['akses'] = $this->AK;
        }
        $this->load->view('VBackend', $data);

    }

    public function DeleteDataKenakalan()
    {
         $kd  =   $this->uri->segment(3);
         $kds = $this->input->post('nis');
         $this->MSudi->DeleteData('tbl_poinsiswa','kd',$kd);
         redirect(site_url('Welcome/DataKenakalanSiswa/Detail/'.$kds.''));
    }

    public function DataMonitoringJadwal()
    {

        $data['content'] = 'VMonitoringJadwal';
        $data['akses'] =$this->AK;
        $data['JadwalPelGuru']    = $this->MSudi->getjadwal3();
        $this->load->view('VBackend', $data);


    }

     public function DataMonitoringAbsen()
    {

        $data['content'] = 'VMonitoringAbsen';
        $data['akses'] =$this->AK;
        $day =  $this->MSudi->replaceDay2(date("D"));
        $data['DataMonitoringAbsen']    = $this->MSudi->getmonitoringabsen($day);
        $this->load->view('VBackend', $data);


    }

    public function MasterJabatan()
    {

        if($this->uri->segment(4)=='view')
        {
            $tampil = $this->MSudi->GetDataWhere('tbl_master_jabatan')->row();

            $data['detail']['kd_jabatan']    = $tampil->kd_jabatan;
            $data['detail']['nama_jabatan']        = $tampil->nama_jabatan;
            $data['detail']['tunjangan']            = $tampil->tunjangan;
            
        }
        else
        {

            $data['akses'] = $this->AK;
            $data['content'] = 'VMasterJabatan';
            $data['DataMasterJabatan'] = $this->MSudi->GetData('tbl_master_jabatan');


        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);

    }

     public function AddMasterJabatan()
    {

        // $add['kd_jabatan']    = $this->input->post('kd_jabatan');
        $add['nama_jabatan'] = $this->input->post('nama_jabatan');
        $add['tunjangan']   = $this->input->post('tunjangan');
        

        $this->load->library('form_validation');

        // $this->form_validation->set_rules('kd_jabatan', 'kd_jabatan', 'required');
        $this->form_validation->set_rules('nama_jabatan', 'nama_jabatan', 'required');
        $this->form_validation->set_rules('tunjangan', 'tunjangan', 'required');
        

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            redirect(site_url('Welcome/MasterJabatan'));
        }
        else
        {
            $tempdata = array('item' => $this->input->post('nama_jabatan'), 
                          'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
            $this->MSudi->AddData('tbl_master_jabatan', $add);
            return redirect(site_url('Welcome/MasterJabatan'));
        }   

    }

    public function UpdateMasterJabatan()
    {
        $kd                             = $this->input->post('kd_jabatan');
        $update['nama_jabatan']                 = $this->input->post('nama_jabatan');
        $update['tunjangan']              = $this->input->post('tunjangan');
        

        $this->load->library('form_validation');

    
        $this->form_validation->set_rules('nama_jabatan', 'nama_jabatan', 'required');
        $this->form_validation->set_rules('tunjangan', 'tunjangan', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/MasterJabatan/'.$kd.'/view'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('tbl_master_jabatan','kd_jabatan',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('nama_jabatan'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
        return redirect(site_url('Welcome/MasterJabatan'));
        }
    }    

     public function UpdateJabatanGuru()
    {
        $kd                             = $this->input->post('nid');
        $update['kd_jabatan']                 = $this->input->post('kd_jabatan');
        // $update['tunjangan']              = $this->input->post('tunjangan');
        

        $this->load->library('form_validation');

    
        $this->form_validation->set_rules('kd_jabatan', 'kd_jabatan', 'required');
        // $this->form_validation->set_rules('tunjangan', 'tunjangan', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/Dataguru'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('tbl_guru','nid',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('nama_guru'),
                              'item2' => $this->input->post('namajabatan'),
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
        return redirect(site_url('Welcome/Dataguru'));
        }
    }    


     public function MasterStafBawah()
    {

        if($this->uri->segment(4)=='view')
        {
            $tampil = $this->MSudi->GetDataWhere('tbl_master_stafbawah')->row();

            $data['detail']['kd_stafbawah']    = $tampil->kd_stafbawah;
            $data['detail']['bagian_staf']        = $tampil->bagian_staf;
            $data['detail']['tunjangan']            = $tampil->tunjangan;
            $data['detail']['transport']            = $tampil->transport;
            
        }
        else
        {

            $data['akses'] = $this->AK;
            $data['content'] = 'VMasterStafBawah';
            $data['DataMasterStafBawah'] = $this->MSudi->GetData('tbl_master_stafbawah');


        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);

    }

     public function AddMasterStafBawah()
    {

        // $add['kd_stafbawah']    = $this->input->post('kd_stafbawah');
        $add['bagian_staf'] = $this->input->post('bagian_staf');
        $add['tunjangan']   = $this->input->post('tunjangan');
        $add['transport']   = $this->input->post('transport');
        

        $this->load->library('form_validation');

        // $this->form_validation->set_rules('kd_stafbawah', 'kd_stafbawah', 'required');
        $this->form_validation->set_rules('bagian_staf', 'bagian_staf', 'required');
        $this->form_validation->set_rules('tunjangan', 'tunjangan', 'required');
        $this->form_validation->set_rules('transport', 'transport', 'required');
        

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            redirect(site_url('Welcome/MasterStafBawah'));
        }
        else
        {
            $tempdata = array('item' => $this->input->post('bagian_staf'), 
                          'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
            $this->MSudi->AddData('tbl_master_stafbawah', $add);
            return redirect(site_url('Welcome/MasterStafBawah'));
        }   

    }

    public function UpdateMasterStafBawah()
    {
        $kd                             = $this->input->post('kd_stafbawah');
        $update['bagian_staf']                 = $this->input->post('bagian_staf');
        $update['tunjangan']              = $this->input->post('tunjangan');
        $update['transport']              = $this->input->post('transport');
        

        $this->load->library('form_validation');

    
        $this->form_validation->set_rules('bagian_staf', 'bagian_staf', 'required');
        $this->form_validation->set_rules('tunjangan', 'tunjangan', 'required');
        $this->form_validation->set_rules('transport', 'transport', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/MasterStafBawah/'.$kd.'/view'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('tbl_master_stafbawah','kd_stafbawah',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('bagian_staf'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
        return redirect(site_url('Welcome/MasterStafBawah'));
        }
    }

    public function DataStafBawah()
    {
        if($this->uri->segment(4)=='view')
        {
            $kd = $this->uri->segment(3);
            $onjoin ="tbl_master_stafbawah.kd_stafbawah=tbl_stafbawah.kd_stafbawah";
            $tampil = $this->MSudi->GetDataJoinWhere2('tbl_stafbawah', 'tbl_master_stafbawah', $onjoin, 'kd', $kd)->row();

            $data['detail']['kd']               = $tampil->kd;
            $data['detail']['nip']              = $tampil->nip;
            $data['detail']['alamat']           = $tampil->alamat;
            $data['detail']['nama_staf']        = $tampil->nama_staf;
            $data['detail']['jenis_kelamin']    = $tampil->jenis_kelamin;
            $data['detail']['bagian_staf']    = $tampil->bagian_staf;
            $data['detail']['kd_stafbawah']    = $tampil->kd_stafbawah;
            $data['detail']['foto_staf']        = $tampil->foto_staf;

            $data['MasterStafBawah'] = $this->MSudi->GetData('tbl_master_stafbawah');
            $data['content'] = 'VUpdateDataStafBawah';
            $data['akses']   = $this->AK;
        }

        elseif($this->uri->segment(3)=='Profile')
        {

            $data['akses']   = $this->AK;
            $data['JadwalAbsenStaf']    = $this->db->query("SELECT * FROM tbl_jadwalabsen WHERE kd = 2")->result();
            $kd = $this->session->userdata('ses_nip');
            $data['DataKasbon'] = $this->MSudi->joinankasbonstaf($kd);
            $data['content'] = 'VDashSiswa';

        }

        elseif($this->uri->segment(3)=='Add')
        {

            $data['akses']   = $this->AK;
            $data['content'] = 'VAddDataStafBawah';
            $data['MasterStafBawah'] = $this->MSudi->GetData('tbl_master_stafbawah');
        }
        else
        {

            $data['DataStafBawah'] = $this->db->query("SELECT * FROM tbl_stafbawah INNER JOIN tbl_master_stafbawah ON tbl_master_stafbawah.kd_stafbawah=tbl_stafbawah.kd_stafbawah")->result();
            $data['akses']         = $this->AK;
            $data['content']       = 'VDataStafBawah';

        }
        $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);
    }    

    public function AddDataStafBawah()
    {

        // $add['kd_stafbawah']    = $this->input->post('kd_stafbawah');
        $add['nip']             = $this->input->post('nip');
        $add['alamat']          = $this->input->post('alamat');
        $add['jenis_kelamin']   = $this->input->post('jenis_kelamin');
        $add['nama_staf']       = $this->input->post('nama_staf');
        $add['kd_stafbawah']    = $this->input->post('kd_stafbawah');
        $add['akses']    = '7';
        $add['foto_staf']       = $this->upload_foto_guru();
        

        $this->load->library('form_validation');

        // $this->form_validation->set_rules('kd_stafbawah', 'kd_stafbawah', 'required');
        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('nama_staf', 'nama_staf', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        // $this->form_validation->set_rules('foto_staf', 'foto_staf', 'required');
        

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Add_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 1);
            
            redirect(site_url('Welcome/DataStafBawah/Add'));
        }
        else
        {
            $tempdata = array('item' => $this->input->post('nama_staf'), 
                          'message' => 'Add');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
            $this->MSudi->AddData('tbl_stafbawah', $add);
            return redirect(site_url('Welcome/DataStafBawah'));
        }   

    }

     public function UpdateDataStafBawah()
    {
        $kd                             = $this->input->post('kd');
        $update['kd_stafbawah']                 = $this->input->post('kd_stafbawah');
        $update['nama_staf']              = $this->input->post('nama_staf');
        $update['nip']              = $this->input->post('nip');
        $update['alamat']              = $this->input->post('alamat');
        $update['jenis_kelamin']              = $this->input->post('jenis_kelamin');
        $upload_file=$this->upload_foto_guru('./upload/');
           if($upload_file)
           {
            $update['foto_staf']= $upload_file;
           }
        

        $this->load->library('form_validation');

    
        $this->form_validation->set_rules('nama_staf', 'nama_staf', 'required');
        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        // $this->form_validation->set_rules('foto_staf', 'foto_staf', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // data for notification
            $tempdata = array('item' => '', 
                              'message' => 'Update_Fail');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
            
            redirect(site_url('Welcome/DataStafBawah/'.$kd.'/view'));
        }
        else
        {
            // UPDATE data to database
            $this->MSudi->UpdateData('tbl_stafbawah','kd',$kd,$update);
            
            // data for notification
            $tempdata = array('item' => $this->input->post('nama_staf'), 
                              'message' => 'Update');
                              
            $this->session->set_tempdata($tempdata, Null, 3);
        
        return redirect(site_url('Welcome/DataStafBawah'));
        }
    }

    public function DeleteDataStafBawah()
    {
         $nip=$this->uri->segment(3);
         $this->MSudi->DeleteData('tbl_stafbawah','nip',$nip);
         redirect(site_url('Welcome/DataStafBawah'));
    }

    public function DataPenggajianStaf()
    {
        
        if($this->uri->segment(4)=='view')
        {
            // Get a segment url
            $kd = $this->uri->segment(3);
            // $jurusan = $this->uri->segment(4);
            // $sub_kelas = $this->uri->segment(5);
            
            $this->load->library('form_validation');
            
            $tampil = $this->MSudi->joindata5($kd)->row();
            
            // Get each data
            $data['detail']['nip']                    = $tampil->nip;
            $data['detail']['nama_staf']              = $tampil->nama_staf;
            $data['detail']['jenis_kelamin']          = $tampil->jenis_kelamin;
            $data['detail']['bagian_staf']            = $tampil->bagian_staf;
            $data['detail']['foto_staf']              = $tampil->foto_staf;
            $data['detail']['kd_stafbawah']           = $tampil->kd_stafbawah;
            $data['detail']['transport']              = $tampil->transport;
            $data['detail']['tunjangan']              = $tampil->tunjangan;
            $data['detail']['transport']              = $tampil->transport;
            $data['detail']['jammasuk']               = $this->MSudi->akumulasiabsen2($kd);
            $data['detail']['datakasbon']             = $this->MSudi->joinankasbon3($kd);
            $data['DataTransaksi']=$this->MSudi->joinan24($kd);
            // assigning content to display
            $data['akses'] = $this->AK;
            $data['content']='VDetailPenggajianStaf';
            
            
        }
        else
        {
            $data['akses'] = $this->AK;
            $data['content']='VDataPenggajianStaf';
            
            $data['DataPenggajianStaf'] = $this->MSudi->joindata4();

        }
         $data['successItm'] = $this->session->tempdata('item');
        $data['successMsg'] = $this->session->tempdata('message');
        $this->load->view('VBackend', $data);
    }

	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('akses');
		redirect(site_url('Login'));
	}

}
