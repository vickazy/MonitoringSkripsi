<?php
class M_kuota extends CI_Model {
  
 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
     
    function list_data(){
        $query = $this->db->get('dosen');// mengambil semua data dari tabel skripsi
         
        return $query->result();// mengembalikan ke controller hasil dari query ke table skripsi
    }
	
	function input($param){
   $this->db->insert('dosen',$param);
   return true;
}
 
function getEdit($NIK){
   $this->db->where('NIK',$NIK);
   $query = $this->db->get('dosen');
 
   return $query->result();
}
 
function edit($param,$NIK){
   $this->db->where('NIK',$NIK);
   $this->db->update('dosen',$param);
   return true;
}
function delete($NIK){
   $this->db->where('NIK',$NIM);
   $this->db->delete('dosen');
}

   function getsemuakuota(){
		 $sql ="SELECT  NIK, Nama, KBK, Kuota FROM dosen";
		  
		  $query = $this->db->query($sql);
        $i = 0;
        foreach ($query->result_array() as $row)
         {
			$user[$i]['NIK'] = $row['NIK'];
            $user[$i]['nama'] = $row['Nama'];
            $user[$i]['KBK'] = $row['KBK'];
			$user[$i]['kuota'] = $row['Kuota'];
			$i++;
        }
        return $user;
		  
		  }
}
