<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSudi extends CI_Model
{
   public function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

   public function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    public function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }
     public function Get($tabel)
   {
        $this->db->select('*');
        $this->db->from('tbl_berkassiswa');
        $this->db->join('tbl_siswa','tbl_siswa.kd_siswa=tbl_berkassiswa.kd_siswa');
        $query=$this->db->get($tabel);
        return $query->result();
    }

     public function Get2($tabel)
   {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_masteradministrasi','tbl_masteradministrasi.no_administrasi=tbl_siswa.no_administrasi');
        $query=$this->db->get($tabel);
        return $query->result();
    }

   public function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

   public function GetDataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

public function AddData2($tabel, $data=array())
    {
        $this->db->insert_batch($tabel,$data);
    }
}