 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                 
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              History Work Order
                            </h2>
                            <br>
                            <?php 
                                if($this->session->userdata('level') == 1 ||$this->session->userdata('level') == 2){
                            ?>
                                <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="material-icons">add_circle</i>  Tambah Data </a>
                            <?php 
                                }
                            ?>
                           
 
                        </div>
                        <div class="body">
                                
                            <div class="table-responsive">
							   <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
									<thead>
										<tr>
											<th style="width:10%;">Nama Pelatihan</th>
                                            <th style="width:5%;">Kategori Pelatihan</th>  
											<th style="width:5%;">Trainer</th>  
                                            <th style="width:5%;">Start Date</th>  
                                            <th style="width:5%;">End Date</th> 
                                            <th style="width:5%;">Status</th>   
											<th style="width:15%;">Opsi</th> 
										</tr>
									</thead> 
								</table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         


        </div>
    </section>

   
	<!-- form tambah dan ubah data -->
	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                              <form method="post" id="user_form" enctype="multipart/form-data">   
                                 <input type="hidden" name="id" id="id"> 
                                    <div class="form-group">
                                        <label for=""> Nomor WO</label>
                                        <input type="hidden" name="token" id="token">
                                        <div class="form-line">
                                            <input type="text" name="no_wo" id="no_wo" class="form-control"  readonly="readonly" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Tanggal </label>
                                        <div class="form-line">
                                            <input type="text" name="created_at" id="created_at" class="form-control" readonly="readonly" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Sales </label>
                                        <div class="form-line">
                                        <input type="text" name="nama_sales" id="nama_sales" class="form-control" readonly="readonly"   />
                                            <input type="hidden" name="id_sales" id="id_sales" class="form-control" readonly="readonly"  />
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <br>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for=""> Judul Training </label>
                                            <input type="text" name="judul_training" id="judul_training" class="form-control" placeholder="Judul Training" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for=""> Durasi </label>
                                            <input type="text" name="durasi" id="durasi" class="form-control" placeholder="Durasi (Hari)" />
                                        </div>
                                    </div>
                                    <div class="input-group">
                                                <div class="form-line">
                                                    <label for="">Kategori Training</label>
                                                    <input type="text" name="kategori_training" id="kategori_training" class="form-control" readonly="readonly" >
                                                    <input type="hidden" name="id_kategori_training" id="id_kategori_training" required>
                                                    
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="PilihCatTraining();" class="btn btn-primary"> Pilih Kategori Training ... </button>
                                                </span>
                                    </div> 
                                    <div class="input-group">
                                                <div class="form-line">
                                                    <label for="">Instansi</label>
                                                    <input type="text" name="nama_instansi" id="nama_instansi" class="form-control" readonly="readonly" >
                                                    <input type="hidden" name="id_instansi" id="id_instansi" required>
                                                    
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="PilihInstansi();" class="btn btn-primary"> Pilih Instansi ... </button>
                                                </span>
                                    </div> 
                                    <div class="input-group">
                                                <div class="form-line">
                                                    <label for="">Trainer</label>
                                                    <input type="text" name="nama_trainer" id="nama_trainer" class="form-control" readonly="readonly" >
                                                    <input type="hidden" name="id_trainer" id="id_trainer" required>
                                                    
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="PilihTrainer();" class="btn btn-primary"> Pilih Trainer ... </button>
                                                </span>
                                    </div> 
                                    <!-- <div class="input-group">
                                                <div class="form-line">
                                                    <label for="">Materi</label>
                                                    <input type="text" name="nama_materi" id="nama_materi" class="form-control" readonly="readonly" >
                                                    <input type="hidden" name="id_materi" id="id_materi" required>
                                                    
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="PilihMateri();" class="btn btn-primary"> Pilih Materi ... </button>
                                                </span>
                                    </div>  -->

                                    <div class="input-group">
                                                <div class="form-line">
                                                    <label for="">Room</label>
                                                    <input type="text" name="nama_room" id="nama_room" class="form-control" readonly="readonly" >
                                                    <input type="hidden" name="id_room" id="id_room" required>
                                                    
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="PilihRoom();" class="btn btn-primary"> Pilih Room ... </button>
                                                </span>
                                    </div> 

                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Jumlah Peserta</label>
                                            <input type="text" name="jml_peserta" id="jml_peserta" class="form-control" placeholder="Jumlah Peserta" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Lokasi Pelaksanaan</label>
                                            <input type="text" name="lokasi_pelaksanaan" id="lokasi_pelaksanaan" class="form-control" placeholder="Lokasi Pelaksanaan" />
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Tanggal Dimulai</label>
                                            <input type="text" name="tanggal_start" id="tanggal_start" class="datepicker form-control" placeholder="Tanggal Mulai" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Tanggal Berakhir</label>
                                            <input type="text" name="tanggal_end" id="tanggal_end" class="datepicker form-control" placeholder="Tanggal Selesai" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Tanggal Serfitikat</label>
                                            <input type="text" name="tanggal_sertifikat" id="tanggal_sertifikat" class="datepicker form-control" placeholder="Tanggal Sertifikat" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">Keterangan</label>
                                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
                                            <!-- <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" /> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    
                                        <label> Status  </label>
                                        <br>
    
                                        <input type="hidden" name="status" id="status">

                                        <button type="button" id="btna" class="btn btn-default waves-effect "> Pengajuan </button>

                                        <button type="button" id="btnb" class="btn btn-default waves-effect "> Dimulai </button>

                                        <button type="button" id="btnc" class="btn btn-default waves-effect "> Selesai </button>

                                        <button type="button" id="btnd" class="btn btn-default waves-effect "> Penyerahan Sertifikat </button>

                                         
                                    
                                    </div>
								  

								    <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                    <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
							 </form>
					   </div>
                     
                    </div>
                </div>
    </div>


    <!-- modal cari training -->
    <div class="modal fade" id="PilihCatTrainingModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Kategori Training </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_cat_training" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Kategori Training</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_cat_trainingx">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    
    <!-- modal cari instansi -->
    <div class="modal fade" id="PilihInstansiModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Instansi </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_instansi" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Nama Instansi</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_instansix">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>


    <!-- modal cari trainer -->
    <div class="modal fade" id="PilihTrainerModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Trainer </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_trainer" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Nama Trainer</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_trainerx">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    <!-- modal cari materi -->
    <div class="modal fade" id="PilihMateriModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Materi </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_materi" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Nama Materi</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_materix">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    <!-- modal cari room -->
    <div class="modal fade" id="PilihRoomModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Room </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_room" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Room</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_roomx">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

	
	<!-- detail data history_work_order -->
	<div class="modal fade" id="DetailModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Work Order</h4>
                        </div>
                        <div class="modal-body">
						
						<table class="table table-responsive">
                            <tr>
								<td style="font-weight:bold;"> No WO</td>
								<td> : </td>
								<td> <p id="nowodtl"> </p> </td>
							</tr>
							 
							<tr>   
								<td style="font-weight:bold;"> Tanggal </td>
								<td> : </td>
								<td> <p id="tglwodtl"> </p> </td>  
                            </tr>
                            
                            <tr>	
                                <td style="font-weight:bold;"> Sales</td>
								<td> : </td>
								<td> <p id="salesdtl"> </p> </td> 
							</tr>
							 
							<tr>
								<td style="font-weight:bold;"> Token  </td> 
								<td> : </td>
								<td> <p id="tokendtl"> </p> </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Judul Training  </td> 
								<td> : </td>
								<td> <p id="juduldtl"> </p> </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Kategori Training  </td> 
								<td> : </td>
								<td> <p id="kategoridtl"> </p> </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Instansi  </td> 
								<td> : </td>
								<td> <p id="instansidtl"> </p> </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Trainer  </td> 
								<td> : </td>
								<td> <p id="trainerdtl"> </p> </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Durasi  </td> 
								<td> : </td>
								<td> <p id="durasidtl"> </p> </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Tanggal Mulai  </td> 
								<td> : </td>
								<td> <p id="tglstartdtl"> </p> </td> 
							</tr>
                            
                            <tr>
								<td style="font-weight:bold;"> Tanggal Selesai  </td> 
								<td> : </td>
								<td> <p id="tglenddtl"> </p> </td> 
							</tr>

                            <tr>
								<td style="font-weight:bold;"> Room  </td> 
								<td> : </td>
								<td> <p id="roomdtl"> </p> </td> 
							</tr> 

							<tr>
								<td colspan="6" align="center">  
								<img src="" class="img responsive" style="width:50%; height: 50%;" id="foto_dtl">
								</td>
							</tr>
						 
							 <div class="modal-footer">
							  <button type="button" class="btn btn-danger" data-dismiss="modal"> X Tutup </button>
							 </div>
						</table>
                           
					   </div>
                     
                    </div>
                </div>
    </div>

    
	<!-- detail data peserta -->
	<div class="modal fade" id="PesertaModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Peserta</h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" onclick="ClosePeserta();">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_peserta" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Nama Peserta</th>
                                            <th style="width:95%;">Telepon (Whatsapp) </th>
                                            <th style="width:95%;">Email</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_pesertax">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

 
   <script type="text/javascript">

    $("#approve").prop("disabled",true);
    function ClosePeserta(){ 
         $('#daftar_peserta').DataTable().clear();
        $('#daftar_peserta').DataTable().destroy();
        $("#PesertaModal").modal('hide');
    }
    $("#btna").on("click",function(){
        $("#status").val('1');
        $(this).attr('class','btn btn-primary');
        $("#btnb").attr('class','btn btn-default'); 
        $("#btnc").attr('class','btn btn-default'); 
        $("#btnd").attr('class','btn btn-default'); 
        
    });

    $("#btnb").on("click",function(){
        $("#status").val('2');
        $(this).attr('class','btn btn-primary');
        $("#btna").attr('class','btn btn-default'); 
        $("#btnc").attr('class','btn btn-default'); 
        $("#btnd").attr('class','btn btn-default'); 
        
    });

    $("#btnc").on("click",function(){
        $("#status").val('3');
        $(this).attr('class','btn btn-primary');
        $("#btna").attr('class','btn btn-default'); 
        $("#btnb").attr('class','btn btn-default');  
        $("#btnd").attr('class','btn btn-default'); 
        
    });

    $("#btnd").on("click",function(){
        $("#status").val('4');
        $(this).attr('class','btn btn-primary');
        $("#btna").attr('class','btn btn-default'); 
        $("#btnb").attr('class','btn btn-default');  
        $("#btnc").attr('class','btn btn-default'); 
        
    });
 
    function Show_Peserta(id){ 
        $("#PesertaModal").modal({backdrop: 'static', keyboard: false,show:true}); 
        $('#daftar_peserta').DataTable( {
            "ajax": "<?php echo base_url('history_work_order/fetch_audience/'); ?>"+id
        });
        // $('#daftar_peserta').DataTable().clear();
        // $('#daftar_peserta').DataTable().destroy();
      

	}

	function PilihCatTraining(){
        $("#PilihCatTrainingModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihInstansi(){
        $("#PilihInstansiModal").modal({backdrop: 'static', keyboard: false,show:true});
    }
 
    function PilihTrainer(){
        $("#PilihTrainerModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihMateri(){
        $("#PilihMateriModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihRoom(){
        $("#PilihRoomModal").modal({backdrop: 'static', keyboard: false,show:true});
    }
   
    $('#daftar_cat_training').DataTable( {
        "ajax": "<?php echo base_url(); ?>kategori_training/fetch_kategori_training" 
    });

    $('#daftar_instansi').DataTable( {
        "ajax": "<?php echo base_url(); ?>instansi/fetch_instansi" 
    });

    $('#daftar_trainer').DataTable( {
        "ajax": "<?php echo base_url(); ?>trainer/fetch_trainer" 
    });

    $('#daftar_materi').DataTable( {
        "ajax": "<?php echo base_url(); ?>materi/fetch_materi" 
    });

    $('#daftar_room').DataTable( {
        "ajax": "<?php echo base_url(); ?>room/fetch_room" 
    });

   
    var daftar_cat_training = $('#daftar_cat_training').DataTable();
     
        $('#daftar_cat_training tbody').on('click', 'tr', function () {
            
            var content = daftar_cat_training.row(this).data()
            console.log(content);
            $("#kategori_training").val(content[0]);
            $("#id_kategori_training").val(content[2]);
            $("#PilihCatTrainingModal").modal('hide');
        } );

    var daftar_instansi = $('#daftar_instansi').DataTable();
     
        $('#daftar_instansi tbody').on('click', 'tr', function () {
            
            var content = daftar_instansi.row(this).data()
            console.log(content);
            $("#nama_instansi").val(content[0]);
            $("#id_instansi").val(content[6]);
            $("#PilihInstansiModal").modal('hide');
        } );
    
    var daftar_trainer = $('#daftar_trainer').DataTable();
     
     $('#daftar_trainer tbody').on('click', 'tr', function () {
         
         var content = daftar_trainer.row(this).data()
         console.log(content);
         $("#nama_trainer").val(content[0]);
         $("#id_trainer").val(content[5]);
         $("#PilihTrainerModal").modal('hide');
     } );


    var daftar_materi = $('#daftar_materi').DataTable();
     
     $('#daftar_materi tbody').on('click', 'tr', function () {
         
         var content = daftar_materi.row(this).data()
         console.log(content);
         $("#nama_materi").val(content[0]);
         $("#id_materi").val(content[3]);
         $("#PilihMateriModal").modal('hide');
     } );

     var daftar_room = $('#daftar_room').DataTable();
     
     $('#daftar_room tbody').on('click', 'tr', function () {
         
         var content = daftar_room.row(this).data()
         console.log(content);
         $("#nama_room").val(content[0]);
         $("#id_room").val(content[3]);
         $("#PilihRoomModal").modal('hide');
     } );


	 function Show_Detail(id){ 
		$("#DetailModal").modal({backdrop: 'static', keyboard: false,show:true});
		$.ajax({
			 url:"<?php echo base_url(); ?>history_work_order/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){  
                 var nf = new Intl.NumberFormat();
                 $("#id_jabatandtl").html(result.id_jabatan);
                 $("#nowodtl").html(result.no_wo);
                 $("#tglwodtl").html(result.created_at); 
                 $("#salesdtl").html(result.namasales);  
                 $("#tokendtl").html(result.token);   
                 $("#juduldtl").html(result.judul_training);   
                 $("#durasidtl").html(result.durasi);
                 $("#tglstartdtl").html(result.tanggal_start);
                 $("#tglenddtl").html(result.tanggal_end);   
                 $("#trainerdtl").html(result.namatrainer);  
                 $("#roomdtl").html(result.room);  
                 $("#kategoridtl").html(result.kategori_training);    
                 $("#instansidtl").html(result.nama_perusahaan);  
                 
				 
			 }
		 });
	 }

 
       
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>history_work_order/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){ 
                
				 $("#defaultModal").modal('show'); 
				 $("#id").val(result.id);
                 $("#id_sales").val(result.id_sales);
                 $("#nama_sales").val(result.namasales);
                 $("#no_wo").val(result.no_wo);
                 $("#token").val(result.token);
                 $("#created_at").val(result.created_at);
                 $("#judul_training").val(result.judul_training);
                 $("#durasi").val(result.durasi);
                 $("#kategori_training").val(result.kategori_training);                  
                 $("#id_kategori_training").val(result.id_kategori_training);
                 $("#nama_instansi").val(result.nama_perusahaan);                  
                 $("#id_instansi").val(result.id_instansi);
                 $("#nama_trainer").val(result.namatrainer);                  
                 $("#id_trainer").val(result.id_trainer);
                 $("#nama_materi").val(result.nama_materi);                  
                 $("#id_materi").val(result.id_materi);
                 $("#nama_room").val(result.room);                  
                 $("#id_room").val(result.id_room);
                 $("#jml_peserta").val(result.jml_peserta);
                 $("#lokasi_pelaksanaan").val(result.lokasi_pelaksanaan);
                 $("#tanggal_start").val(result.tanggal_start);
                 $("#tanggal_end").val(result.tanggal_end);
                 $("#tanggal_sertifikat").val(result.tanggal_sertifikat);
                 $("#keterangan").html(result.keterangan);
                 $("#status").val(result.status);


                 
                if(result.status == '1'){
                    $("#btna").attr('class','btn btn-primary');
                    $("#btnb").attr('class','btn btn-default'); 
                    $("#btnc").attr('class','btn btn-default'); 
                    $("#btnd").attr('class','btn btn-default'); 
                }else if(result.status == '2'){
                    $("#btnb").attr('class','btn btn-primary');
                    $("#btna").attr('class','btn btn-default'); 
                    $("#btnc").attr('class','btn btn-default'); 
                    $("#btnd").attr('class','btn btn-default'); 
                }else if(result.status == '3'){
                    $("#btnc").attr('class','btn btn-primary');
                    $("#btna").attr('class','btn btn-default'); 
                    $("#btnb").attr('class','btn btn-default'); 
                    $("#btnd").attr('class','btn btn-default'); 
                }else if(result.status == '4'){
                    $("#btnd").attr('class','btn btn-primary');
                    $("#btna").attr('class','btn btn-default'); 
                    $("#btnb").attr('class','btn btn-default'); 
                    $("#btnc").attr('class','btn btn-default'); 
                 }
  

                  
			 }
		 });
	 }
 
	 function Bersihkan_Form(){
        $(':input').val(''); 
        $("#btna").attr('class','btn btn-default'); 
        $("#btnb").attr('class','btn btn-default'); 
        $("#btnc").attr('class','btn btn-default'); 
        $("#btnd").attr('class','btn btn-default'); 
        
     }

	 function Hapus_Data(id){
		if(confirm('Anda yakin ingin menghapus data ini?'))
        {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('history_work_order/hapus_data')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
			   
               $('#example').DataTable().ajax.reload(); 
			   
			    $.notify("Data berhasil dihapus!", {
					animate: {
						enter: 'animated fadeInRight',
						exit: 'animated fadeOutRight'
					}  
				 },{
					type: 'success'
					});
				 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
   
    }
	}
    
 
    $('.thumbnail').on('click',function(){
        $('.modal-body').empty();
        var title = $(this).parent('a').attr("title");
        $('.modal-title').html(title);
        $($(this).parents('div').html()).appendTo('.modal-body');
        $('#Prev').modal({show:true});
    });
  
	function Simpan_Data(){
	 
		 var formData = new FormData($('#user_form')[0]); 
        console.log(formData);
           
            $.ajax({
             url:"<?php echo base_url(); ?>history_work_order/simpan_data",
             type:"POST",
             data:formData, 
             contentType:false,  
             processData:false,   
             success:function(result){ 
                
                 $("#defaultModal").modal('hide');
                 $('#example').DataTable().ajax.reload(); 
                 $('#user_form')[0].reset(); 
                 $.notify("Data berhasil disimpan!", {
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                 } 
                 } );
             }
            }); 

         

	}
     

	 $('.datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1,
        time: false
     });
      
      
       $(document).ready(function() {
		   
		$("#addmodal").on("click",function(){
			$("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
            $("#method").val('Add');
            $("#defaultModalLabel").html("Form Tambah Data");
            $.get("<?php echo base_url('history_work_order/header_wo'); ?>",function(result){
                // console.log(result);
                var parsing = JSON.parse(result);
                $("#no_wo").val(parsing.no_wo);
                $("#created_at").val(parsing.date);
                $("#nama_sales").val(parsing.useraccount);
                $("#id_sales").val(parsing.userid);
                $("#token").val(parsing.token);
            });
		});
		
		$("#addmodalx").on("click",function(){
			$("#defaultModalx").modal({backdrop: 'static', keyboard: false,show:true});
            $("#defaultModalLabel").html("Form Tambah Datax");
		});
		
		$('#example').DataTable( {
			"ajax": "<?php echo base_url(); ?>history_work_order/fetch_history_work_order",
            'rowsGroup': [1] 
		});
	 
	    $('#daftar_sales').DataTable( {
            "ajax": "<?php echo base_url(); ?>history_work_order/fetch_kategori" 
        });


		 
	  });
  
		
		 
    </script>