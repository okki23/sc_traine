<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Instansi extends Parent_Controller {
  
  var $nama_tabel = 'm_instansi';
  var $daftar_field = array('id','id_sales_marketing','nama_perusahaan','jenis_perusahaan','alamat','telp','jabatan');  
  var $primary_key = 'id';
 
      public function __construct(){
        parent::__construct();
        $this->load->model('m_instansi'); 
        $this->load->model('sales/m_sales','m_sales_data'); 
        if(!$this->session->userdata('username')){
          echo "<script language=javascript>
            alert('Anda tidak berhak mengakses halaman ini!');
            window.location='" . base_url('login') . "';
            </script>";
        }
      }
  
      public function index(){
        $data['judul'] = $this->data['judul']; 
        $data['konten'] = 'instansi/instansi_view';
        $data['userid'] = $this->session->userdata('userid');
        $this->load->view('template_view',$data);		 
      }
 	
  
    	public function fetch_instansi(){  
       $getdata = $this->m_instansi->fetch_instansi();
       echo json_encode($getdata);   
      } 

      public function fetch_sales(){  
        $getdata = $this->m_sales_data->fetch_sales();
        echo json_encode($getdata);   
       } 
	  
      public function get_instansi(){
        $id = $this->uri->segment(3); 
        $get = $this->db->query("select a.*,b.nama as namasales from m_instansi a 
        left join m_sales b on b.id = a.id_sales_marketing where id = '".$id."' ")->row();
        echo json_encode($get,TRUE);
      }
 
	 
  
	public function get_data_edit(){
    $id = $this->uri->segment(3); 
    $get = $this->db->query("select a.*,b.nama as namasales from m_instansi a 
    left join m_sales b on b.id = a.id_sales_marketing where a.id = '".$id."' ")->row();
    echo json_encode($get,TRUE);
	}
	 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
    //cek apakah instansi/gambar tersedia
		$cek_instansi = $this->db->where($this->primary_key,$id)->get($this->nama_tabel)->row(); 
   
		if($cek_instansi->instansi != '' || $cek_instansi->instansi != NULL){
          //apabila instansi ada maka dihapus,apabila sebaliknya maka tidak dihapus
          unlink("upload/".str_replace(" ","_",$cek_instansi->instansi));
		}   

    $sqlhapus = $this->m_instansi->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	 
	public function simpan_data(){
    
    
    $data_form = $this->m_instansi->array_from_post($this->daftar_field);

    $id = isset($data_form['id']) ? $data_form['id'] : NULL; 
 

    $simpan_data = $this->m_instansi->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
 
	
		if($simpan_data){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	}
 


}
