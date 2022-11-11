<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Work_order extends Parent_Controller { 

    var $nama_tabel = 't_work_order';
    var $daftar_field = array('id','id_sales','id_trainer','judul_training','durasi','id_kategori_training','id_instansi','jml_peserta','lokasi_pelaksanaan','tgl_pelaksanaan','tgl_sertifikat','keterangan','is_approve_education','is_approve_sales_lead','id_materi','total_jampel','token','id_room','status','no_wo','created_at','approve_edu_date','approve_sales_date','qr_sales');
    var $primary_key = 'id'; 
	var $source = 'FT';//FT - SC - FI

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
		$data['img'] = $this->db->where('id',3)->get($this->nama_tabel)->row();
		$data['konten'] = 'work_order/work_order_view';
		$this->load->view('template_view',$data);		
   
	}

	public function header_wo(){
		// $params = date('Ymd');
		$now = date('Y-m-d H:i:s');
		$whoami = get_user_account($this->session->userdata('userid'));
		$last_id = $this->get_max(); 
		$token = rand();

		$parse = array('no_wo'=>$last_id,'userid'=>$this->session->userdata('userid'),'useraccount'=>$whoami,'date'=>$now,'token'=>$token);
		echo json_encode($parse);  
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
 
	public function get_max(){
		  
		$data = $this->m_work_order->get_no(); 

		$list =  $data[0]['result']; 
 
		if(empty($data[0]['result']) || $data[0]['result'] == '' || $data[0]['result'] == NULL){
			$list = 001;
		}elseif(date('d') == 01){
			$list = 001;
		}else{
			$list++;
		}
		$kodewo = sprintf("%03s", $list).'/WO-'.$this->source.'/'.date('m').'/'.date('Y');
		
		return $kodewo;
		 
	}

 

  	public function fetch_work_order(){  
       $getdata = $this->m_work_order->fetch_work_order();
       echo json_encode($getdata);   
  	}  
 
	
	
  
	public function cetak_wo(){

		$this->load->library('pdfgenerator');

		$id = $this->uri->segment(3);
	  
		$this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';
		$sql = "select a.*,b.nama_perusahaan,c.nama as namatrainer,
		d.nama as namasales,e.nama_materi,f.kategori_training,g.room,h.username as salesleadname,i.username as eduleadname
		 from t_work_order a
		left join m_instansi b on b.id = a.id_instansi
		left join m_trainer c on c.id = a.id_trainer
		left join m_sales d on d.id = a.id_sales
		left join m_materi e on e.id = a.id_materi
		left join m_kategori_training f on f.id = a.id_kategori_training 
		left join m_room g on g.id = a.id_room
		left join m_user h on h.id = a.is_approve_sales_lead
		left join m_user i on i.id = a.is_approve_education
		where a.id = '".$id."' ";
		$dataparse = $this->db->query($sql)->row();
		$this->data['result'] = $this->db->query($sql)->row();
			
		// filename dari pdf ketika didownload
		$file_pdf = 'Work Order - '.$dataparse->no_wo;
		// setting paper
		$paper = 'A4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";
		
		$html = $this->load->view('work_order/wo_print',$this->data, true);	    
		
		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}
	
    public function get_status_show(){
		$id = $this->uri->segment(3); 
		$data = $this->db->where('id',$id)->get($this->nama_tabel)->row();

		$appr_sales = '';
		$appr_edu = '';

		if($data->is_approve_sales_lead == '' || $data->is_approve_sales_lead == NULL){
			$appr_sales = ' - ';
		}else{
			$appr_sales = 'Was Aproved by '.get_user_account($data->is_approve_sales_lead).' on '.$data->approve_sales_date;
		}

		if($data->is_approve_education== '' || $data->is_approve_education == NULL){
			$appr_edu = ' - ';
		}else{
			$appr_edu = 'Was Aproved by '.get_user_account($data->is_approve_education).' on '.$data->approve_edu_date;
		}
		$result = array('status'=>status_wo($data->status),'approve_sales_head'=>$appr_sales,'approve_edu_head'=>$appr_edu);
		echo json_encode($result,true);
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
	$qrsales = 'was_approved_by_'.get_user_account($this->session->userdata('userid')).'_on_'.date('Y_m_d_H_i_s');
	$savesalesqr =  $this->generate_qrcode_approval($qrsales);
 
    $data_form['qr_sales'] = $savesalesqr;
    $simpan_data = $this->m_work_order->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
 
	
		if($simpan_data){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	}

	function generate_qrcode_approval($message){
		$this->load->library('ciqrcode');
		$params['data'] = $message;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.'qrcode/'.$message.".png";
		$this->ciqrcode->generate($params);
		return $message.".png";

  }
  
       


}
