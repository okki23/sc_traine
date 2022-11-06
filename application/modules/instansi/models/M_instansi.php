<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_instansi extends Parent_Model { 
   
     var $nama_tabel = 'm_instansi';
     var $daftar_field = array('id','id_sales_marketing','nama_perusahaan','jenis_perusahaan','alamat','telp','jabatan');  
     var $primary_key = 'id';
   
     public function __construct(){
          parent::__construct();
          $this->load->database();
     }
 
     
     public function fetch_instansi(){
          $getdata = $this->db->query("select a.*,b.nama as namasales from m_instansi a 
          left join m_sales b on b.id = a.id_sales_marketing")->result();
          $data = array();  
          $no = 1;
               foreach($getdata as $row)  
               {  
                    $sub_array = array();   
                    $sub_array[] = $row->nama_perusahaan;   
                    $sub_array[] = $row->jenis_perusahaan;   
                    $sub_array[] = $row->alamat;  
                    $sub_array[] = $row->telp;
                    $sub_array[] = $row->namasales;    
               
                    $sub_array[] = '<a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="material-icons">create</i> Ubah </a> &nbsp;
                    <button typpe="button" onclick="Hapus('.$row->id.');" class = "btn btn-danger btn-xs waves-effect"> <i class="material-icons">delete_forever</i> Hapus </button>';  
                    $sub_array[] = $row->id;    
               
                    $data[] = $sub_array;  
                    $no++;
               }  
               
          return $output = array("data"=>$data);
     }
     
 
}
