<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Registrasi_peserta extends Parent_Controller {
  

  var $nama_tabel = 'm_peserta';
//   var $daftar_field = array('id','id_instansi','nama','tempat_lahir','tanggal_lahir','alamat','telp', 'email');
  var $daftar_field = array('id','nama','telp', 'email');
  var $primary_key = 'id';
 
  
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_registrasi_peserta');
  
 	}

  
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['konten'] = 'registrasi_peserta/registrasi_peserta_view';
		$this->load->view('registrasi_peserta/registrasi_peserta_view',$data);		
   
	}

	public function cek_token(){
		$token = $this->input->post('token');
		$cek = $this->db->query("select a.*,b.nama_perusahaan,c.nama as namatrainer,d.nama as namasales,
		e.nama_materi,f.kategori_training,g.room from t_work_order a
		left join m_instansi b on b.id = a.id_instansi
		left join m_trainer c on c.id = a.id_trainer
		left join m_sales d on d.id = a.id_sales
		left join m_materi e on e.id = a.id_materi
		left join m_kategori_training f on f.id = a.id_kategori_training
		left join m_room g on g.id = a.id_room where a.token = '".$token."' ");
		$parse = $cek->row();
		if($cek->num_rows() > 0){
			$resp = array('status'=>1,'data'=>array('judul_training'=>$parse->judul_training,'durasi'=>$parse->durasi,'lokasi'=>$parse->lokasi_pelaksanaan,'tanggal_start'=>$parse->tanggal_start,'tanggal_end'=>$parse->tanggal_end,'keterangan'=>$parse->keterangan,'materi'=>$parse->nama_materi,'ruangan'=>$parse->room,'trainer'=>$parse->namatrainer));
		}else{
			$resp = array('status'=>2,'data'=>array('not_found!'));
		}

		echo json_encode($resp);
	}
 
  	public function fetch_registrasi_peserta(){  
       $getdata = $this->m_registrasi_peserta->fetch_registrasi_peserta();
       echo json_encode($getdata);   
  	}  

  	public function fetch_cat_registrasi_peserta(){  
       $getdata = $this->m_registrasi_peserta->fetch_cat_registrasi_peserta();
       echo json_encode($getdata);   
  	} 
	 
	public function simpan_data(){ 
    
		$data_form = $this->m_registrasi_peserta->array_from_post($this->daftar_field);
		

		
		$id = isset($data_form['id']) ? $data_form['id'] : NULL;  

		$simpan_data = $this->m_registrasi_peserta->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
		$insert_id = $this->db->insert_id();  
		$post = array('id_peserta'=>$insert_id,'token'=>$this->input->post('token'));
		$this->db->insert('t_work_order_detail', $post);

		
			if($simpan_data){
				$result = array("response"=>array('message'=>'success'));
			}else{
				$result = array("response"=>array('message'=>'failed'));
			}
			
			echo json_encode($result,TRUE);

	}
  

}
