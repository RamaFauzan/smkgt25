<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAbsenGuru extends CI_Model
{

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

    function akumulasiabsen2()
    {

        $this->db->select_sum('kehadiran');
        $this->db->where('nid=', 15180005);
         $query = $this->db->get('tbl_kehadiran');
        if ($query->num_rows()>0)
        {
            return $query->row()->kehadiran;
        }
        else{
            return 0;
        }

    }

}