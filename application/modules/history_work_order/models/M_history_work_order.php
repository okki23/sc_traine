<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_history_work_order extends Parent_Model { 
    

    var $nama_tabel = 't_work_order';
    var $daftar_field = array('id','id_sales','id_trainer','judul_training','durasi','id_kategori_training','id_instansi','jml_peserta','lokasi_pelaksanaan','tgl_pelaksanaan','tgl_sertifikat','keterangan','is_approve_education','is_approve_sales_lead','id_materi','total_jampel','token','id_room','status','no_wo','created_at','approve_edu_date','approve_sales_date');
    var $primary_key = 'id'; 
	var $source = 'FT';//FT - SC - FI

	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }


  public function get_no(){
      $query = $this->db->query("SELECT SUBSTR(MAX(no_wo),-7) AS id  FROM t_history_work_order"); 
      return $query;
  }
  

  public function fetch_history_work_order(){
       $sql = "select a.*,b.nama_perusahaan,c.nama as namatrainer,d.nama as namasales,
       nama_materi,f.kategori_training,g.room from t_work_order a
       left join m_instansi b on b.id = a.id_instansi
       left join m_trainer c on c.id = a.id_trainer
       left join m_sales d on d.id = a.id_sales
       left join m_materi e on e.id = a.id_materi
       left join m_kategori_training f on f.id = a.id_kategori_training
       left join m_room g on g.id = a.id_room";   
		   $getdata = $this->db->query($sql)->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
             
                $sub_array[] = $row->judul_training;  
                $sub_array[] = $row->kategori_training;   
                $sub_array[] = $row->namatrainer;   
                $sub_array[] = $row->tanggal_start;
                $sub_array[] = $row->tanggal_end;
                $sub_array[] = status_wo($row->status);  
 

                    $sub_array[] = '
                    <a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" id="detail" onclick="Show_Peserta('.$row->id.');" > <i class="material-icons">person</i> Peserta </a> 
                    &nbsp; <a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" id="detail" onclick="Show_Detail('.$row->id.');" > <i class="material-icons">aspect_ratio</i> Detail </a>
                    &nbsp; <a href="javascript:void(0)" class="btn btn-success btn-xs waves-effect" id="approve"> <i class="material-icons">check_circle</i> Was Approved </a>';  
                
		   
                    $sub_array[] = $row->id;
                    $data[] = $sub_array;  
                 $no++;
           }  
          
		   return $output = array("data"=>$data);
		    
    }

    public function fetch_cat_history_work_order(){   
       $getdata = $this->db->get('m_cat_history_work_order')->result();
       $data = array();  
       $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = $no;
                $sub_array[] = $row->deskripsi;   
                $sub_array[] = $row->id;   
                
                $data[] = $sub_array;  
                 $no++;
           }  
          
       return $output = array("data"=>$data);
        
    }

  
  
	 
 
}
