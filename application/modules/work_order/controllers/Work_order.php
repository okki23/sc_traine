<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Work_order extends Parent_Controller {
  

  var $nama_tabel = 't_work_order';
  var $daftar_field = array('id','id_sales','id_trainer','judul_training','durasi','id_kategori_training','id_instansi','jml_peserta','lokasi_pelaksanaan','tanggal_start','tanggal_end','tanggal_sertifikat','keterangan','is_approve_sales','is_approve_education','is_approve_sales_lead','id_materi','total_jampel','token','id_room','status');
  var $primary_key = 'id'; 

 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_work_order');
 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('login') . "';
				 </script>";
		}
 	}

  
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['konten'] = 'work_order/work_order_view';
		$this->load->view('template_view',$data);		
   
	}
 

	public function get_last_id(){
		$params = date('Ymd');
		echo $this->transaksi_id($params);  
	}

	
     
	public function transaksi_id($param = '') {
        $data = $this->m_work_order->get_no();
        $lastid = $data->row();
        $idnya = $lastid->id;


        if($idnya == '') { // bila data kosong
            $ID = $param . "0000001";
            //00000001
        }else {
            $MaksID = $idnya;
            $MaksID++;
            if ($MaksID < 10)
                $ID = $param . "000000" . $MaksID;
            else if ($MaksID < 100)
                $ID = $param . "00000" . $MaksID;
            else if ($MaksID < 1000)
                $ID = $param . "0000" . $MaksID;
            else if ($MaksID < 10000)
                $ID = $param . "000" . $MaksID;
            else if ($MaksID < 100000)
                $ID = $param . "00" . $MaksID;
            else if ($MaksID < 1000000)
                $ID = $param . "0" . $MaksID;
            else
                $ID = $MaksID;
        }

        return $ID;
    }  	

  	public function fetch_work_order(){  
       $getdata = $this->m_work_order->fetch_work_order();
       echo json_encode($getdata);   
  	}  

  	public function fetch_cat_work_order(){  
       $getdata = $this->m_work_order->fetch_cat_work_order();
       echo json_encode($getdata);   
  	} 
	
   
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$sql = "select a.*,b.nama_jabatan from m_work_order a
		left join m_jabatan b on b.id = a.id_jabatan where a.id = '".$id."' "; 
		$get = $this->db->query($sql)->row();
		echo json_encode($get,TRUE);
	}
	 
	public function hapus_data(){
		$id = $this->uri->segment(3);   

    	$sqlhapus = $this->m_work_order->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	 
	public function simpan_data(){
    
    
    $data_form = $this->m_work_order->array_from_post($this->daftar_field);

    $id = isset($data_form['id']) ? $data_form['id'] : NULL; 
 

    $simpan_data = $this->m_work_order->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
    $simpan_work_order = $this->upload_work_order();
  
 
	
		if($simpan_data && $simpan_work_order){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	}
 
  function upload_work_order(){  
    if(isset($_FILES["user_image"])){  
        $extension = explode('.', $_FILES['user_image']['name']);   
        $destination = './upload/' . $_FILES['user_image']['name'];  
        return move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
         
    }  
  }  
       


}
