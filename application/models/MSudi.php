<?php
use GuzzleHttp\Client;

class MSudi extends CI_Model
{

    private $_Client;

    public function __construct()
    {

        $this->_Client = new Client([
            'base_uri' => 'http://localhost/Rest-ServerSekolahGT/api/',
            'auth' => ['rama', 'jerapah']


        ]);



    }

    function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
        $this->db->insert_id();
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetData2($tabel)
    {
        $query= $this->db->get($tabel);
        return $query;
    }

    function GetDataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }
    function GetDataWhere3($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere2($tabel,$id,$nilai,$id2,$nilai2)
    {
        $this->db->where($id,$nilai);
        $this->db->where($id2,$nilai2);
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere22($tabel,$id,$nilai,$id2,$nilai2)
    {
        $this->db->where($id,$nilai);
        $this->db->where($id2,$nilai2);
        $query= $this->db->get($tabel);
        return $query;
    }

     function GetDataWhere4($tabel,$id,$nilai,$id2,$nilai2,$id3,$nilai3)
    {
        $this->db->where($id,$nilai);
        $this->db->where($id2,$nilai2);
        $this->db->where($id3,$nilai3);
        $query= $this->db->get($tabel);
        return $query;
    }

    function GetDataJoinWhere1($tabel, $tabel2, $onjoin, $id, $nilai)
    {
        $this->db->join($tabel2, $onjoin);
        $this->db->where($id,$nilai);
        $query = $this->db->get($tabel);
        return $query->result();
    }

    function GetDataJoinWhere2($tabel, $tabel2, $onjoin, $id, $nilai)
    {
        $this->db->join($tabel2, $onjoin);
        $this->db->where($id,$nilai);
        $query = $this->db->get($tabel);
        return $query;
    }

      function Get()
    {
        $this->db->select('*');
        $this->db->from('tbl_berkassiswa');
        $this->db->join('tbl_siswa','tbl_siswa.kd_siswa=tbl_berkassiswa.kd_siswa');
        $query=$this->db->get();
        return $query->result();
    }
 
      function Get2()
   {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_master_administrasi','tbl_master_administrasi.no_administrasi=tbl_siswa.no_administrasi');
        $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=tbl_siswa.no_uangbangunan');
        $query=$this->db->get();
        return $query->result();
    }


      function Get3($kd_siswa)
   {
         $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_master_administrasi','tbl_master_administrasi.no_administrasi=tbl_siswa.no_administrasi');
        $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=tbl_siswa.no_uangbangunan');
        $this->db->where('kd_siswa ='.$kd_siswa);

        $query=$this->db->get();
        return $query;
    }

      function Get4($kd_siswa)
   {
         $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_master_administrasi','tbl_master_administrasi.no_administrasi=tbl_siswa.no_administrasi');
        $this->db->join('tbl_pembayaran','tbl_pembayaran.kd_pembayaran=tbl_siswa.kd_pembayaran');
        // $this->db->join('tbl_transaksi','tbl_transaksi.kd_pembayaran=tbl_pembayaran.kd_pembayaran');
        $this->db->join('tbl_tabungansiswa','tbl_tabungansiswa.kd=tbl_siswa.kd_tabungan');
        $this->db->where('kd_siswa ='.$kd_siswa);

        $query=$this->db->get();
        return $query;
    }

     function Getbangunan3()
   {
         $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_master_administrasi','tbl_master_administrasi.no_administrasi=tbl_siswa.no_administrasi');
         $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=tbl_siswa.no_uangbangunan');
        $query=$this->db->get();
         if($query -> num_rows() == 0){
                $row = $query->row(); 
               $this->session->set_userdata('no_uangbangunan', $row->no_uangbangunan);
              $this->session->set_userdata('uangB', $row->uang_bangunan);
                $this->session->set_userdata('kd_siswa',$row->kd_siswa);
                return $query;
          }
    return $query->result();
}

 function Getspp()
   {
         $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_master_administrasi','tbl_master_administrasi.no_administrasi=tbl_siswa.no_administrasi');
         // $this->db->join('tbl_pembayaran','tbl_pembayaran.kd_pembayaran=tbl_siswa.kd_pembayaran');
        $query=$this->db->get();
         if($query -> num_rows() == 1){
                $row = $query->row(); 
               $this->session->set_userdata('kd_pembayaran', $row->kd_pembayaran);
                $this->session->set_userdata('uangSPP',$row->uang_spp_smt1);
                $this->session->set_userdata('kd_siswa',$row->kd_siswa);
                $this->session->set_userdata('options',$row->options);
                $this->session->set_userdata('kd_pem', $row->kd_pem);
                return $query;
    }
    return $query->result();
}

     function AddData2($tabel, $data=array(), $kd_siswa)
    {
        $this->db->insert($tabel,$data);
        $this->db->where($kd_siswa);
    }



     function joinanUB($keyword){
         $this->db->from('tbl_transaksi_ub');
            $this->db->join('tbl_siswa','tbl_siswa.kd_siswa=tbl_transaksi_ub.kd_siswa'); 
            $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.kd_uangbangunan=tbl_transaksi_ub.kd_uangbangunan'); 

            $this->db->like('nama',$keyword);
              $query = $this->db->get();
        return $query->result();
    }


    function GetSiswa($new_id)
    {
            $this->db->select('*');
            $this->db->from('tbl_siswa');
             $this->db->join('tbl_master_administrasi','tbl_master_administrasi.no_administrasi=tbl_siswa.no_administrasi');
             $this->db->where('tahun_ajaran ='.$new_id);
            $query = $this->db->get();

            $this->session->set_userdata('kd_siswa');
             return $query;
        }

    function GetBerkas()
   {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_berkassiswa','tbl_berkassiswa.kd_berkassiswa=tbl_siswa.kd_berkassiswa');
        $query=$this->db->get();
        return $query->result();
    }

    function get_product_keyword($keyword)
    {
            $this->db->select('*');
            $this->db->from('tbl_siswa');
         
            $this->db->like('nama_siswa',$keyword);
            // $this->db->or_like('kd_siswa',$keyword);
          
            $query = $this->db->get();
            if($query -> num_rows() == 1){
                $row = $query->row(); 
                $this->session->set_userdata('kd_siswa',$row->kd_siswa);
              
                
            
                
            
                return $query->result();
            }
        }
    function joinan($kd_siswa){
         $this->db->from('tbl_pembayaran');
         $this->db->join('tbl_master_administrasi','tbl_master_administrasi.no_administrasi=tbl_pembayaran.no_administrasi');
            $this->db->join('tbl_siswa','tbl_siswa.kd_pembayaran=tbl_pembayaran.kd_pembayaran'); 
            $this->db->join('tbl_bulan','tbl_bulan.NO=tbl_pembayaran.bulan');
             $this->db->join('tbl_tabungansiswa','tbl_tabungansiswa.kd=tbl_siswa.kd_tabungan'); 
            // $this->db->join('tbl_transaksi','tbl_transaksi.kd_pembayaran=tbl_pembayaran.kd_pembayaran'); 
$this->db->where('kd_siswa ='.$kd_siswa);
           
              $query = $this->db->get();
               if($query -> num_rows() == 1){
                $row = $query->row(); 
                $this->session->set_userdata('kd_pem',$row->kd_pem);
              
                
            
                
            
                return $query;
            }
        return $query->result();
    }

    function joinanUBB($kd_siswa){
         $this->db->from('tbl_uang_bangunan');
            $this->db->join('tbl_siswa','tbl_siswa.no_uangbangunan=tbl_uang_bangunan.no_uangbangunan'); 
            // $this->db->join('tbl_transaksi','tbl_transaksi.kd_siswa=tbl_pembayaran.kd_siswa'); 
$this->db->where('kd_siswa ='.$kd_siswa);
           
              $query = $this->db->get();
        return $query->result();
    }


    function joinan2($kd_siswa){
         $this->db->select('*');
        $this->db->from('tbl_siswa');
               $this->db->join('tbl_transaksi','tbl_transaksi.kd_pembayaran=tbl_siswa.kd_pembayaran'); 
 // $this->db->join('tbl_pembayaran','tbl_pembayaran.kd_pembayaran=tbl_transaksi.kd_pembayaran'); 
            $this->db->where('kd_siswa ='.$kd_siswa);
            
              $query = $this->db->get();
              if($query -> num_rows() == 1){
                $row = $query->row(); 
                $this->session->set_userdata('kd_transaksi',$row->kd_transaksi);
              
                
            
                
            
                return $query->result();
            }
        return $query->result();
    }

     function joinan22($kd_siswa){
         $this->db->select('*');
        $this->db->from('tbl_siswa');
               $this->db->join('tbl_transaksi','tbl_transaksi.no_uangbangunan=tbl_siswa.no_uangbangunan'); 
 $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=tbl_siswa.no_uangbangunan'); 
            $this->db->where('kd_siswa ='.$kd_siswa);
            
              $query = $this->db->get();
              if($query -> num_rows() == 1){
                $row = $query->row(); 
                $this->session->set_userdata('kd_transaksi',$row->kd_transaksi);
              
                
            
                
            
                return $query->result();
            }
        return $query->result();
    }

    function joinan23($nid){
         $this->db->select('*');
        $this->db->from('tbl_gajiguru');
 //               $this->db->join('tbl_transaksi','tbl_transaksi.no_uangbangunan=tbl_siswa.no_uangbangunan'); 
 // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=tbl_siswa.no_uangbangunan'); 
            $this->db->where('nid ='.$nid);
            
              $query = $this->db->get();
             
        return $query->result();
    }

    function joinan24($nip){
         $this->db->select('*');
        $this->db->from('tbl_gajistaf');
 //               $this->db->join('tbl_transaksi','tbl_transaksi.no_uangbangunan=tbl_siswa.no_uangbangunan'); 
 // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=tbl_siswa.no_uangbangunan'); 
            $this->db->where('nip ='.$nip);
            
              $query = $this->db->get();
             
        return $query->result();
    }

    function datajoin()
     {
         $this->db->from('tbl_transaksi');
            $this->db->join('tbl_siswa','tbl_siswa.kd_siswa=tbl_transaksi.kd_siswa'); 
            // $this->db->join('tbl_transaksi','tbl_transaksi.kd_transaksi=tbl_pembayaran.kd_transaksi'); 
           
            $this->db->like('nama_siswa');
              $query = $this->db->get();
              if($query -> num_rows() == 1){
                $row = $query->row(); 
                $this->session->set_userdata('kd_transaksi',$row->kd_transaksi);
              
                
            
                
            
                return $query->result();
            }
      
    }

     function datajoin2()
     {
        $this->db->from('tbl_pembayaran');
            $this->db->join('tbl_siswa','tbl_siswa.kd_siswa=tbl_pembayaran.kd_siswa'); 
            // $this->db->join('tbl_transaksi','tbl_transaksi.kd_transaksi=tbl_pembayaran.kd_transaksi'); 
           
            $this->db->like('nama_siswa');
              $query = $this->db->get();
              if($query -> num_rows() == 0){
                $row = $query->row(); 
                $this->session->set_userdata('options', $row->options);
              
                
            
                
            
                return $query->result();
            }
      
    }

     function get_produk($kd_transaksi)
    {
        // $a= $this->session->userdata('kd_transaksi');
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_transaksi','tbl_transaksi.kd_pembayaran=tbl_siswa.kd_pembayaran'); 
        $this->db->join('tbl_pembayaran','tbl_pembayaran.kd_pembayaran=tbl_pembayaran.kd_pembayaran'); 
        $this->db->where('kd_transaksi ='.$kd_transaksi);
        $query = $this->db->get();
        return $query;
    }

    function get_produk3()
    {
        // $a= $this->session->userdata('kd_transaksi');
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=tbl_siswa.no_uangbangunan'); 
        $this->db->join('tbl_pembayaran','tbl_pembayaran.kd_pembayaran=tbl_siswa.kd_pembayaran'); 
      
        $query = $this->db->get();
        return $query;
    }

    function get_produk2($kd_transaksi)
    {
        // $a= $this->session->userdata('kd_transaksi');
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_transaksi','tbl_transaksi.no_uangbangunan=tbl_siswa.no_uangbangunan'); 
        $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=tbl_siswa.no_uangbangunan'); 
        $this->db->where('kd_transaksi ='.$kd_transaksi);
        $query = $this->db->get();
        return $query;
    }

     function get_produk4($kd_transaksi)
    {
        // $a= $this->session->userdata('kd_transaksi');
        $this->db->select('*');
        $this->db->from('tbl_gajiguru');
        $this->db->join('tbl_guru','tbl_guru.nid=tbl_gajiguru.nid'); 
        $this->db->join('tbl_kasbon_guru','tbl_kasbon_guru.nid=tbl_gajiguru.nid'); 
        $this->db->where('kd ='.$kd_transaksi);
        $query = $this->db->get();
        return $query;
    }

    function get_produk5($kd_transaksi)
    {
        // $a= $this->session->userdata('kd_transaksi');
        $this->db->select('*');
        $this->db->from('tbl_gajistaf');
        $this->db->join('tbl_stafbawah','tbl_stafbawah.nip=tbl_gajistaf.nip'); 
        $this->db->join('tbl_kasbon_staf','tbl_kasbon_staf.nip=tbl_gajistaf.nip'); 
        $this->db->join('tbl_master_stafbawah','tbl_master_stafbawah.kd_stafbawah=tbl_stafbawah.kd_stafbawah'); 
        $query = $this->db->get();
        return $query;
    }

    function jumlahsiswa(){
        $query = $this->db->get('tbl_siswa');
        if ($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else{
            return 0;
        }
    }

    function jumlahguru(){
        $query = $this->db->get('tbl_guru');
        if ($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else{
            return 0;
        }
    }

    function jumlahberkas(){
        $this->db->select('*');
        $this->db->from('tbl_berkassiswa');
        $this->db->where('status_berkassiswa=', 0);
        $query = $this->db->get();
        if ($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else{
            return 0;
        }
    }

    function jumlahberkas2(){
        $this->db->select('*');
        $this->db->from('tbl_berkasguru');
        $this->db->where('keterangan=', 0);
        $query = $this->db->get();
        if ($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else{
            return 0;
        }
    }

function replaceDayToInd($hari) {
    switch ($hari) {
        case "Mon":
            return "Senin";
            break;
        case "Tue":
            return "Selasa";
            break;
        case "Wed":
            return "Rabu";
            break;
        case "Thu":
            return "Kamis";
            break;
        case "Fri":
            return "Jum'at";
            break;
        case "Sat":
            return "Sabtu";
            break;
        case "Sun":
            return "Minggu";
            break;
        default:
            break;
    }
}

  function replaceDay($hariEng) {
            switch ($hariEng) {
                case"Mon":
                    return"Senin";
                    break;
                case"Tue":
                    return"Selasa";
                    break;
                case"Wed":
                    return"Rabu";
                    break;
                case"Thu":
                    return"Kamis";
                    break;
                case"Fri":
                    return"Jum'at";
                    break;
                case"Sat":
                    return"Sabtu";
                    break;
                case"Sun":
                    return"Minggu";
                    break;
                default:
                    return hariEng;break;}
        }

         function replaceDay2($hariEng) {
            switch ($hariEng) {
                case"Mon":
                    return"1";
                    break;
                case"Tue":
                    return"2";
                    break;
                case"Wed":
                    return"3";
                    break;
                case"Thu":
                    return"4";
                    break;
                case"Fri":
                    return"5";
                    break;
                case"Sat":
                    return"6";
                    break;
                case"Sun":
                    return"7";
                    break;
                default:
                    return hariEng;break;}
        }

        function replaceDay3($hariEng) {
            switch ($hariEng) {
                case"Mon":
                    return"Sen";
                    break;
                case"Tue":
                    return"Sel";
                    break;
                case"Wed":
                    return"Rab";
                    break;
                case"Thu":
                    return"Kam";
                    break;
                case"Fri":
                    return"Jum";
                    break;
                case"Sat":
                    return"Sab";
                    break;
                case"Sun":
                    return"Ming";
                    break;
                default:
                    return hariEng;break;}
        }

function GetJadwalBell($day)
{
        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('tbl_hari','tbl_hari.kd_hari=resume.id_hari');
        // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=resume.no_uangbangunan');
        $this->db->where('id_hari ='.$day);

        $query=$this->db->get();
        return $query->result(); 
}

function jadwalabsen($day)
{
        $this->db->select('*');
        $this->db->from('tbl_absenguru');
        $this->db->join('tbl_hari','tbl_hari.kd_hari=tbl_absenguru.id_hari');
        // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=resume.no_uangbangunan');
        $this->db->where('id_hari ='.$day);

        $query=$this->db->get();
        return $query->result(); 
}

function GetJadwalBell2($day)
{
        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('tbl_hari','tbl_hari.kd_hari=resume.id_hari');
        // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=resume.no_uangbangunan');
        $this->db->where('id_hari ='.$day);

        $query=$this->db->get();
        return $query->result_array(); 
}

function GetBunyiBell($day)
{
        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('audio','audio.kd_audio=resume.id_audio');
        // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=resume.no_uangbangunan');
        $this->db->where('id_audio ='.$day);

        $query=$this->db->get();
        return $query; 
}


    function GetResmumeJoin()
    {


         $this->db->select('*');
        $this->db->from('resume');
         $this->db->join('audio','audio.kd_audio=resume.id_audio');
        $this->db->join('tbl_hari','tbl_hari.kd_hari=resume.id_hari');
       
        

        $query=$this->db->get();
        return $query->result(); 

    }

    function joinkasbon()
    {
        $this->db->select('*');
        $this->db->from('tbl_kasbon_guru');
         $this->db->join('tbl_guru','tbl_guru.nid=tbl_kasbon_guru.nid');
        
       
        

        $query=$this->db->get();
        return $query->result();
    }

    function joinkasbon2()
    {
        $this->db->select('*');
        $this->db->from('tbl_kasbon_staf');
         $this->db->join('tbl_stafbawah','tbl_stafbawah.nip=tbl_kasbon_staf.nip');
        
       
        

        $query=$this->db->get();
        return $query->result();
    }

    function joinankasbon($kd)
    {

        $this->db->select('*');
        $this->db->from('tbl_kasbon_guru');
         // $this->db->join('tbl_guru','tbl_guru.kd_guru=tbl_kasbon_guru.kd_guru');
        
       
        
         $this->db->where('nid ='.$kd);
         $this->db->where('status_bayar', 0);
        $query=$this->db->get();
        return $query->result();

    }

    function joinankasbonstaf($kd)
    {

        $this->db->select('*');
        $this->db->from('tbl_kasbon_staf');
         // $this->db->join('tbl_guru','tbl_guru.kd_guru=tbl_kasbon_guru.kd_guru');
        
       
        
         $this->db->where('nip ='.$kd);
         $this->db->where('status_bayar', 0);
        $query=$this->db->get();
        return $query->result();

    }

   

    function hitungpengeluaran()
    {

        $this->db->select_sum('jml_pengeluaran');
         $query = $this->db->get('tbl_keuangansekolah');
        if ($query->num_rows()>0)
        {
            return $query->row()->jml_pengeluaran;
        }
        else{
            return 0;
        }

    }

     function hitungpemasukantabungan()
    {

        $this->db->select_sum('jml_pendapatan');
         $query = $this->db->get('tbl_pendapatan_tabungan');
        if ($query->num_rows()>0)
        {
            return $query->row()->jml_pendapatan;
        }
        else{
            return 0;
        }

    }

    

    function getjadwal($day)
{
        $this->db->select('*');
        $this->db->from('tbl_jadwal_pelajaran2');
        $this->db->join('tbl_mapel','tbl_mapel.kd_mapel=tbl_jadwal_pelajaran2.kd_mapel');
        // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=resume.no_uangbangunan');
        // $this->db->where('id_hari ='.$day);
        $this->db->where('nid ='.$this->session->userdata('ses_nid'));
        $this->db->where('id_hari='. $day);
        $query=$this->db->get();
        return $query->result(); 
}

function getmonitoringabsen($day)
{
        $this->db->select('*');
        $this->db->from('tbl_jadwal_pelajaran2');
        $this->db->join('tbl_mapel','tbl_mapel.kd_mapel=tbl_jadwal_pelajaran2.kd_mapel');
        $this->db->join('tbl_hari','tbl_hari.kd_hari=tbl_jadwal_pelajaran2.id_hari');
        // $this->db->where('id_hari ='.$day);
        // $this->db->where('nid ='.$this->session->userdata('ses_nid'));
        $this->db->where('id_hari='. $day);
        $query=$this->db->get();
        return $query->result(); 
}

function getjadwal3($kd)
{
        $this->db->select('*');
        $this->db->from('tbl_jadwal_pelajaran2');
        $this->db->join('tbl_mapel','tbl_mapel.kd_mapel=tbl_jadwal_pelajaran2.kd_mapel');
        $this->db->join('tbl_hari','tbl_hari.kd_hari=tbl_jadwal_pelajaran2.id_hari');
        // $this->db->where('id_hari ='.$day);
        // $this->db->where('nid ='.$this->session->userdata('ses_nid'));
        $this->db->where('nid='. $kd);
        $query=$this->db->get();
        return $query->result(); 
}

function getjadwal4()
{
        $this->db->select('*');
        $this->db->from('tbl_jadwal_pelajaran2');
        $this->db->join('tbl_mapel','tbl_mapel.kd_mapel=tbl_jadwal_pelajaran2.kd_mapel');
        $this->db->join('tbl_hari','tbl_hari.kd_hari=tbl_jadwal_pelajaran2.id_hari');
        $this->db->join('tbl_guru','tbl_guru.nid=tbl_jadwal_pelajaran2.nid');
        // $this->db->where('id_hari ='.$day);
        // $this->db->where('nid ='.$this->session->userdata('ses_nid'));
        // $this->db->where('id_hari='. $day);
        $query=$this->db->get();
        return $query->result(); 
}

function getjadwal2()
{
        $this->db->select('*');
        $this->db->from('tbl_jadwalabsen');
       
        // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=resume.no_uangbangunan');
        // $this->db->where('id_hari ='.$day);
        // $this->db->where('nid ='.$this->session->userdata('ses_id'));

        $query=$this->db->get();
        return $query->result(); 
}

     function getjoinstatus()
{
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_master_administrasi','tbl_master_administrasi.no_administrasi=tbl_siswa.no_administrasi');
        // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=resume.no_uangbangunan');
        // $this->db->where('id_hari ='.$day);
        // $this->db->where('nama_guru ='.$this->session->userdata('ses_nid'));

        $query=$this->db->get();
        return $query; 
}

function getjoinstatus2()
{
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_master_administrasi','tbl_master_administrasi.no_administrasi=tbl_siswa.no_administrasi');
        $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=tbl_siswa.no_uangbangunan');
        // $this->db->join('tbl_pembayaran','tbl_pembayaran.kd_pembayaran=tbl_siswa.kd_pembayaran');
        // $this->db->where('id_hari ='.$day);
        // $this->db->where('keterangan =', 1);

        $query=$this->db->get();
        return $query->result(); 
}

function jointabsiswa()
{
        $this->db->select('*');
        $this->db->from('tbl_tabungansiswa');
        $this->db->join('tbl_siswa','tbl_siswa.nis=tbl_tabungansiswa.nis');
      
        // $this->db->join('tbl_pembayaran','tbl_pembayaran.kd_pembayaran=tbl_siswa.kd_pembayaran');
        // $this->db->where('id_hari ='.$day);
        // $this->db->where('keterangan =', 1);

        $query=$this->db->get();
        return $query->result(); 
}


function getjadwalmengajar($day)
{
        $this->db->select('*');
        $this->db->from('tbl_jadwal_pelajaran2');
        $this->db->join('tbl_hari','tbl_hari.kd_hari=tbl_jadwal_pelajaran2.id_hari');
        $this->db->join('tbl_mapel','tbl_mapel.kd_mapel=tbl_jadwal_pelajaran2.kd_mapel');
        $this->db->join('tbl_guru','tbl_guru.nid=tbl_jadwal_pelajaran2.nid');
        
        // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=resume.no_uangbangunan');
        $this->db->where('kd='.$day);

        $query=$this->db->get();
        if($query -> num_rows() == 1){
                $row = $query->row(); 
                $this->session->set_userdata('kelasGuru',$row->kelas_guru);
              
                
            
                
            
                return $query;
            }
        return $query; 
}

function getkelasajar($nid)
{
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->where('nid ='.$nid);
        $query=$this->db->get();
        if($query -> num_rows() == 1){
                $row = $query->row(); 
                $this->session->set_userdata('kelasGuru',$row->kelas_guru);
              
                
            
                
            
                return $query;
            }
        return $query; 
}

function getjadwalmengajar2()
{
        $this->db->select('*');
        $this->db->from('tbl_jadwal_pelajaran2');
        $this->db->join('tbl_hari','tbl_hari.kd_hari=tbl_jadwal_pelajaran2.id_hari');
        $this->db->join('tbl_mapel','tbl_mapel.kd_mapel=tbl_jadwal_pelajaran2.kd_mapel');
        $this->db->join('tbl_guru','tbl_guru.nid=tbl_jadwal_pelajaran2.nid');
        
        // $this->db->join('tbl_uang_bangunan','tbl_uang_bangunan.no_uangbangunan=resume.no_uangbangunan');
        

        $query=$this->db->get();
         if($query -> num_rows() == 1){
                $row = $query->row(); 
                $this->session->set_userdata('kelasGuru',$row->kelas_guru);
              
                
            
                
            
                return $query;
            }
        return $query->result(); 
}

 function joindata1($kd)
     {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->join('tbl_master_penggajian','tbl_master_penggajian.kd_penggajian=tbl_guru.kd_penggajian'); 
        $this->db->where('kd_guru='. $kd); 
        $query=$this->db->get();
        return $query;
      
    }

    function joindata3($kd)
     {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->join('tbl_master_penggajian','tbl_master_penggajian.kd_penggajian=tbl_guru.kd_penggajian'); 
        $this->db->join('tbl_master_jabatan','tbl_master_jabatan.kd_jabatan=tbl_guru.kd_jabatan'); 
        $this->db->where('nid='. $kd); 
        $query=$this->db->get();
        return $query;
      
    }

    function joindata5($kd)
     {
        $this->db->select('*');
        $this->db->from('tbl_stafbawah');
        $this->db->join('tbl_master_stafbawah','tbl_master_stafbawah.kd_stafbawah=tbl_stafbawah.kd_stafbawah'); 
        // $this->db->join('tbl_kasbon_staf','tbl_kasbon_staf.kd_kasbon=tbl_stafbawah.kd_kasbon'); 
        $this->db->where('nip='. $kd); 
        $query=$this->db->get();
        return $query;
      
    }

    function jabatan()
     {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        
        $this->db->join('tbl_master_jabatan','tbl_master_jabatan.kd_jabatan=tbl_guru.kd_jabatan'); 
        
        $query=$this->db->get();
        return $query;
      
    }

    function joindata2()
     {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->join('tbl_master_penggajian','tbl_master_penggajian.kd_penggajian=tbl_guru.kd_penggajian'); 
        
        $query=$this->db->get();
        return $query->result();
      
    }

     function joindata4()
     {
        $this->db->select('*');
        $this->db->from('tbl_stafbawah');
        $this->db->join('tbl_master_stafbawah','tbl_master_stafbawah.kd_stafbawah=tbl_stafbawah.kd_stafbawah'); 
        
        $query=$this->db->get();
        return $query->result();
      
    }

     function hitungjumlahpoin($kd)
    {

        $this->db->select_sum('poin_kenakalan');
        $this->db->where('nis ='.$kd);

         $query = $this->db->get('tbl_poinsiswa');
        if ($query->num_rows()>0)
        {
            return $query->row()->poin_kenakalan;
        }
        else{
            return 0;
        }

    }

    function datakenakalan($kd)
    {

        $this->db->select('*');
        $this->db->from('tbl_poinsiswa');
        $this->db->where('nis ='.$kd);

        $query = $this->db->get();
        return $query->result();
                    
    }

    function totalspp()
    {

        $this->db->select_sum('jml_pembayaran');
        $this->db->where('kategori_trans', 'SPP');

         $query = $this->db->get('tbl_transaksi');
        if ($query->num_rows()>0)
        {
            return $query->row()->jml_pembayaran;
        }
        else{
            return 0;
        }

    }

    function totalUB()
    {

        $this->db->select_sum('jml_pembayaran');
        $this->db->where('kategori_trans', 'UB');

         $query = $this->db->get('tbl_transaksi');
        if ($query->num_rows()>0)
        {
            return $query->row()->jml_pembayaran;
        }
        else{
            return 0;
        }

    }

    function totalgajiguru()
    {

        $this->db->select_sum('total_gaji');
        

         $query = $this->db->get('tbl_gajiguru');
        if ($query->num_rows()>0)
        {
            return $query->row()->total_gaji;
        }
        else{
            return 0;
        }

    }

    function akumulasiabsen($kd)
    {

        $this->db->select_sum('kehadiran');
        $this->db->where('nid='.$kd);

         $query = $this->db->get('tbl_kehadiran');
        if ($query->num_rows()>0)
        {
            return $query->row()->kehadiran;
        }
        else{
            return 0;
        }

    }

    function akumulasiabsen2($kd)
    {

        $this->db->select_sum('kehadiran');
        $this->db->where('nip='.$kd);

         $query = $this->db->get('tbl_kehadiranstaf');
        if ($query->num_rows()>0)
        {
            return $query->row()->kehadiran;
        }
        else{
            return 0;
        }

    }

   

     function joinankasbon2($kd)
    {

       $this->db->select_sum('jml_kasbon');
       $this->db->from('tbl_kasbon_guru');
         // $this->db->join('tbl_guru','tbl_guru.nid=tbl_kasbon_guru.nid');
        $this->db->where('nid='.$kd);
        $this->db->where('status_bayar', 0);
         $query = $this->db->get();
        if ($query->num_rows()>0)
        {
            return $query->row()->jml_kasbon;
        }
        else{
            return 0;
        }


    }

    function joinankasbon3($kd)
    {

       $this->db->select_sum('jml_kasbon');
       $this->db->from('tbl_kasbon_staf');
         // $this->db->join('tbl_guru','tbl_guru.nid=tbl_kasbon_guru.nid');
        $this->db->where('nip='.$kd);
        $this->db->where('status_bayar', 0);
         $query = $this->db->get();
        if ($query->num_rows()>0)
        {
            return $query->row()->jml_kasbon;
        }
        else{
            return 0;
        }


    }

    function getpengspp($kd)
    {

     $this->db->select_sum('total_gaji');
       $this->db->from('tbl_gajiguru');
         // $this->db->join('tbl_guru','tbl_guru.nid=tbl_kasbon_guru.nid');
        $this->db->where('tanggal='.$kd);
        
         $query = $this->db->get();
    
      // $query = $this->db->query("SELECT total_gaji, SUM(total_gaji) FROM `tbl_gajiguru` WHERE tgl_gaji ='$kd'");
       
        if ($query->num_rows()>0)
        {
            return $query->row()->total_gaji;
        }
        else{
            return 0;
        }
        
        
    }

     function getdataspp()
    {

    $this->db->select('tgl_gaji');
    $this->db->distinct('tgl_gaji');
    

    $this->db->select('tanggal');
    $this->db->distinct('tanggal');
    $this->db->from('tbl_gajiguru');

    $query = $this->db->get();
        return $query->result();
         // $this->db->join('tbl_guru','tbl_guru.nid=tbl_kasbon_guru.nid');
       
    }

    function getdataspp2()
    {

    

    $query = $this->db->get();
        return $query->result();
         // $this->db->join('tbl_guru','tbl_guru.nid=tbl_kasbon_guru.nid');
       
    }



}












