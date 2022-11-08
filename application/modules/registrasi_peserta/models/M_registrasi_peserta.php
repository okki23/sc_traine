<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_registrasi_peserta extends Parent_Model { 
   
      var $nama_tabel = 'm_peserta';
      //   var $daftar_field = array('id','id_instansi','nama','tempat_lahir','tanggal_lahir','alamat','telp', 'email');
      var $daftar_field = array('id','nama','telp', 'email');
      var $primary_key = 'id';
     
	  
      public function __construct(){
            parent::__construct();
            $this->load->database();
      }
   
}
