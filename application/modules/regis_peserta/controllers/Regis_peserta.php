<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class regis_peserta extends Parent_Controller {
  

  var $nama_tabel = 'm_regis_peserta';
  var $daftar_field = array('id','nip','nama','telp','alamat','email','id_jabatan','foto');
  var $primary_key = 'id';
 
  
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_regis_peserta');
 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('login') . "';
				 </script>";
		}
 	}

  
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['konten'] = 'regis_peserta/regis_peserta_view';
		$this->load->view('template_view',$data);		
   
	}
 
  	public function fetch_regis_peserta(){  
       $getdata = $this->m_regis_peserta->fetch_regis_peserta();
       echo json_encode($getdata);   
  	}  

  	public function fetch_cat_regis_peserta(){  
       $getdata = $this->m_regis_peserta->fetch_cat_regis_peserta();
       echo json_encode($getdata);   
  	} 
	
   
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$sql = "select a.*,b.nama_jabatan from m_regis_peserta a
		left join m_jabatan b on b.id = a.id_jabatan where a.id = '".$id."' "; 
		$get = $this->db->query($sql)->row();
		echo json_encode($get,TRUE);
	}
	 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
    //cek apakah regis_peserta/gambar tersedia
		$cek_regis_peserta = $this->db->where($this->primary_key,$id)->get($this->nama_tabel)->row(); 
   
		if($cek_regis_peserta->regis_peserta != '' || $cek_regis_peserta->regis_peserta != NULL){
          //apabila regis_peserta ada maka dihapus,apabila sebaliknya maka tidak dihapus
          unlink("upload/".str_replace(" ","_",$cek_regis_peserta->regis_peserta));
		}   

    $sqlhapus = $this->m_regis_peserta->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	 
	public function simpan_data(){
    
    
    $data_form = $this->m_regis_peserta->array_from_post($this->daftar_field);

    $id = isset($data_form['id']) ? $data_form['id'] : NULL; 
 

    $simpan_data = $this->m_regis_peserta->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
    $simpan_regis_peserta = $this->upload_regis_peserta();
  
 
	
		if($simpan_data && $simpan_regis_peserta){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	}
 
  function upload_regis_peserta(){  
    if(isset($_FILES["user_image"])){  
        $extension = explode('.', $_FILES['user_image']['name']);   
        $destination = './upload/' . $_FILES['user_image']['name'];  
        return move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
         
    }  
  }  
       


}
