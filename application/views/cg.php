 $onjoin = "tbl_siswa_nilai.nis = tbl_siswa.nis";
            
            $data['Siswa']          = $this->MSudi->GetDataJoinWhere1('tbl_siswa_nilai','tbl_siswa',$onjoin,'keterangan',1);