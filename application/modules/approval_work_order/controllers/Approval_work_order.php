<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Approval_work_order extends Parent_Controller { 

    var $nama_tabel = 't_work_order';
    var $daftar_field = array('id','id_sales','id_trainer','judul_training','durasi','id_kategori_training','id_instansi','jml_peserta','lokasi_pelaksanaan','tgl_pelaksanaan','tgl_sertifikat','keterangan','is_approve_education','is_approve_sales_lead','id_materi','total_jampel','token','id_room','status','no_wo','created_at','approve_edu_date','approve_sales_date');
    var $primary_key = 'id'; 
	var $source = 'SC';//FT - SC - FI

 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_approval_work_order');
 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('login') . "';
				 </script>";
		}
 	}

  
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['konten'] = 'approval_work_order/approval_work_order_view';
		$this->load->view('template_view',$data);		
   
	}

	public function approvewo(){
		$id = $this->input->post('id');
		$userid = $this->input->post('userid');
		$session_level = $this->input->post('session_level');
		$genereateqr = '';
		$store = '';
		if($session_level == 5){

			$genereateqr = 'was_approved_by_'.get_user_account($userid).'_on_'.date('Y_m_d_H_i_s');
			$exqr = $this->generate_qrcode_approval($genereateqr);
		 
			$setdata = array('is_approve_sales_lead'=>$userid,'approve_sales_date'=>date('Y-m-d H:i:s'),'qr_sales_approve'=>$exqr);
			$store = $this->db->set($setdata)->where('id',$id)->update($this->nama_tabel);
			
		}else{ 
			$genereateqr = 'was_approved_by_'.get_user_account($userid).'_on_'.date('Y_m_d_H_i_s');
			$exqr = $this->generate_qrcode_approval($genereateqr);
		  
			$setdata = array('is_approve_education'=>$userid,'approve_edu_date'=>date('Y-m-d H:i:s'),'qr_edu_approve'=>$exqr);
			$store = $this->db->set($setdata)->where('id',$id)->update($this->nama_tabel);
			
		}

		 
		if($store){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}


		echo json_encode($result,true);
	}

	
	function generate_qrcode_approval($message)
	{
		$this->load->library('ciqrcode');
		$params['data'] = $message;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.'qrcode/'.$message.".png";
		$this->ciqrcode->generate($params);
		return $message.".png";

	}

  

	public function fetch_audience(){
		$id = $this->uri->segment(3);

		$listing = $this->db->query('select a.juduL_training,a.no_wo,a.token,c.nama,c.telp,c.email from t_work_order a 
		left join t_work_order_detail b on b.token = a.token
		left join m_peserta c on c.id = b.id_peserta
		where a.id = "'.$id.'" ')->result(); 
		$data = array();  
		foreach($listing as $row)  
		{  
			 $sub_array = array(); 

			 $sub_array[] = $row->nama;    
			 $sub_array[] = $row->telp;    
			 $sub_array[] = $row->email;    
		 
			 $data[] = $sub_array;   
		}  
		 
		echo json_encode(array("data"=>$data));
		
	 
	} 
  	public function fetch_approval_work_order(){  
       $getdata = $this->m_approval_work_order->fetch_approval_work_order();
       echo json_encode($getdata);   
  	}  

  	public function fetch_cat_work_order(){  
       $getdata = $this->m_approval_work_order->fetch_cat_work_order();
       echo json_encode($getdata);   
  	} 
	
   
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$sql = "select a.*,b.nama_perusahaan,c.nama as namatrainer,d.nama as namasales,
		e.nama_materi,f.kategori_training,g.room from t_work_order a
       left join m_instansi b on b.id = a.id_instansi
       left join m_trainer c on c.id = a.id_trainer
       left join m_sales d on d.id = a.id_sales
       left join m_materi e on e.id = a.id_materi
       left join m_kategori_training f on f.id = a.id_kategori_training
       left join m_room g on g.id = a.id_room where a.id = '".$id."' "; 
		$get = $this->db->query($sql)->row();
		echo json_encode($get,TRUE);
	}
	 
	public function hapus_data(){
		$id = $this->uri->segment(3);   

    	$sqlhapus = $this->m_approval_work_order->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	 
	public function simpan_data(){
    
    
    $data_form = $this->m_approval_work_order->array_from_post($this->daftar_field);

    $id = isset($data_form['id']) ? $data_form['id'] : NULL; 
 

    $simpan_data = $this->m_approval_work_order->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
    $simpan_approval_work_order = $this->upload_approval_work_order();
  
 
	
		if($simpan_data && $simpan_approval_work_order){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	}
 
  function upload_approval_work_order(){  
    if(isset($_FILES["user_image"])){  
        $extension = explode('.', $_FILES['user_image']['name']);   
        $destination = './upload/' . $_FILES['user_image']['name'];  
        return move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
         
    }  
  }  
       


}
