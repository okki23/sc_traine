<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $judul; ?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
 
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
     
    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />
    
    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/sweetalert.css" rel="stylesheet">
   <!--  <link href="<?php echo base_url(); ?>assets/css/orgchart.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" rel="stylesheet" />
    
  
     
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />
	
	<link href="<?php echo base_url(); ?>assets/css/card_custom.css" rel="stylesheet" />
    
    <!-- Jquery Core Js -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
   <!--  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jput.min.js"></script> -->

   
    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

     
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.js"></script>
    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>

    <script src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>js/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>js/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url(); ?>js/filterDropDown.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/dataTables.rowsGroup.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script> 
 
    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.numeric.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
   
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script> 
 
    <script src="<?php echo base_url(); ?>assets/plugins/autosize/autosize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/ui/notifications.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/momentjs/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>   
    <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
  
 
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/forms/form-wizard.js"></script>
    <script type="text/javascript">
     //$("#wrapper").toggleClass("toggled");
    </script>
     
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Mohon Tunggu...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
     
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>"> <?php echo $judul; ?> </a>
            </div> 
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>
 

    <!-- content -->
  
    <div class="container-fluid">
           
           <!-- Basic Examples -->
           <div class="row clearfix">
               <div class="col-lg-12" style="margin-top:100px;">
                   <div class="card">
                       <div class="header">
                           <h2>
                              Form Register Peserta
                           </h2>
                           <br>
                           

                       </div>
                       <div class="body">
                               
                       <div class="modal-body">
                             <form method="post" id="user_form" enctype="multipart/form-data">   
                                <input type="hidden" name="id" id="id">  
                                   <div class="form-group">
                                       <div class="form-line">
                                        <label for=""> Nama</label>
                                           <input type="text" name="nama" id="nama" class="form-control"/>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <div class="form-line">
                                        <label for=""> Tempat Lahir</label>
                                           <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"/>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <div class="form-line">
                                        <label for=""> Tanggal Lahir</label>
                                           <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="datepicker form-control"/>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <div class="form-line">
                                        <label for=""> Alamat</label>
                                           <input type="text" name="alamat" id="alamat" class="form-control"/>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <div class="form-line">
                                        <label for=""> Telp</label>
                                           <input type="text" name="telp" id="telp" class="form-control"/>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <div class="form-line">
                                        <label for=""> Email</label>
                                           <input type="text" name="email" id="email" class="form-control"/>
                                       </div>
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
                                                    <label for="">Token</label>
                                                    <input type="text" name="token" id="token" class="form-control">
                                                   
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="CheckToken();" class="btn btn-primary"> Cek Token </button>
                                                </span>
                                    </div> 
 
                                   <button type="button" onclick="Simpan_Data();" id="savebtn" class="btn btn-success btn-block waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                   <!-- <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button> -->
                            </form>
                      </div>
                       </div>
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
                                   
                                            <th style="width:95%;">Room</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_instansix">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    
	<!-- detail data work_order -->
	<div class="modal fade" id="DetailModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Data Pelatihan</h4>
                        </div>
                        <div class="modal-body">
						
						<table class="table table-responsive">
                            <tr>
								<td style="font-weight:bold; width:20%;" > Judul Training</td>
								<td style="font-weight:bold; width:2%;"> : </td>
								<td style="font-weight:bold; width:78%;"> <p id="judultrainingdtl"> </p> </td>
							</tr>
                            <tr>
								<td style="font-weight:bold; width:20%;" > Durasi Pelatihan</td>
								<td style="font-weight:bold; width:2%;"> : </td>
								<td style="font-weight:bold; width:78%;"> <p id="durasidtl"> </p> </td>
							</tr>
                            <tr>
								<td style="font-weight:bold; width:20%;" > Trainer</td>
								<td style="font-weight:bold; width:2%;"> : </td>
								<td style="font-weight:bold; width:78%;"> <p id="trainerdtl"> </p> </td>
							</tr>
                            <tr>
								<td style="font-weight:bold; width:20%;" > Materi</td>
								<td style="font-weight:bold; width:2%;"> : </td>
								<td style="font-weight:bold; width:78%;"> <p id="materidtl"> </p> </td>
							</tr>
                            <tr>
								<td style="font-weight:bold; width:20%;" > Ruangan Kelas</td>
								<td style="font-weight:bold; width:2%;"> : </td>
								<td style="font-weight:bold; width:78%;"> <p id="roomdtl"> </p> </td>
							</tr>
                            <tr>
								<td style="font-weight:bold; width:20%;" > Lokasi Pelaksanaan</td>
								<td style="font-weight:bold; width:2%;"> : </td>
								<td style="font-weight:bold; width:78%;"> <p id="lokasidtl"> </p> </td>
							</tr>
                            <tr>
								<td style="font-weight:bold; width:20%;" > Tanggal Mulai </td>
								<td style="font-weight:bold; width:2%;"> : </td>
								<td style="font-weight:bold; width:78%;"> <p id="tglmulaidtl"> </p> </td>
							</tr>
                            <tr>
								<td style="font-weight:bold; width:20%;" > Tanggal Selesai </td>
								<td style="font-weight:bold; width:2%;"> : </td>
								<td style="font-weight:bold; width:78%;"> <p id="tglselesaidtl"> </p> </td>
							</tr>
                            <tr>
								<td style="font-weight:bold; width:20%;" > Keterangan </td>
								<td style="font-weight:bold; width:2%;"> : </td>
								<td style="font-weight:bold; width:78%;"> <p id="keterangandtl"> </p> </td>
							</tr>
                            
							 <div class="modal-footer">
							  <button type="button" class="btn btn-danger" data-dismiss="modal"> X Tutup </button>
							 </div>
						</table>
                           
					   </div>
                     
                    </div>
                </div>
    </div>
			
 
 
</body>

</html>

     <script type="text/javascript"> 
        $(document).ready(function(){
            $("#savebtn").prop("disabled",true);
        });
        function CheckToken(){
            var formData = new FormData($('#user_form')[0]);  
            
            var token = $("#token").val();
            $.ajax({
                url:"<?php echo base_url(); ?>registrasi_peserta/cek_token",
                type:"POST",
                data:formData,
                contentType:false,  
                processData:false,   
                success:function(result){    
                    var parsing = JSON.parse(result);
                    if(parsing.status == 1){
                        $("#DetailModal").modal({backdrop: 'static', keyboard: false,show:true});
                        $("#judultrainingdtl").html(parsing.data.judul_training);
                        $("#durasidtl").html(parsing.data.durasi+ ' Hari');
                        $("#lokasidtl").html(parsing.data.lokasi);  
                        $("#materidtl").html(parsing.data.materi);
                        $("#trainerdtl").html(parsing.data.trainer);
                        $("#roomdtl").html(parsing.data.ruangan);
                        $("#keterangandtl").html(parsing.data.keterangan);
                        $("#tglmulaidtl").html(parsing.data.tanggal_start);
                        $("#tglselesaidtl").html(parsing.data.tanggal_end);
                         
                        $("#savebtn").prop("disabled",false);
                    }else{
                        alert('Data tidak ditemukan');
                        $("#savebtn").prop("disabled",true);
                    }
                }
                });
        }
     	function PilihInstansi(){
            $("#PilihInstansiModal").modal({backdrop: 'static', keyboard: false,show:true});
        }
         
        $('#daftar_instansi').DataTable( {
            "ajax": "<?php echo base_url(); ?>instansi/fetch_instansi" 
        });

        var daftar_instansi = $('#daftar_instansi').DataTable();
     
        $('#daftar_instansi tbody').on('click', 'tr', function () {
            
            var content = daftar_instansi.row(this).data()
            console.log(content);
            $("#nama_instansi").val(content[0]);
            $("#id_instansi").val(content[6]);
            $("#PilihInstansiModal").modal('hide');
        });

	    function Simpan_Data(){
	 
            var formData = new FormData($('#user_form')[0]);  
            
            swal({
                title: "Apakah data yang anda masukkan sudah benar ?",
                text: "Data akan segera diinput ke database!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                closeOnConfirm: false,
                closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                        url:"<?php echo base_url(); ?>registrasi_peserta/simpan_data",
                        type:"POST",
                        data:formData,
                        contentType:false,  
                        processData:false,   
                        success:function(result){ 
                            
                            $("#defaultModal").modal('hide'); 
                            $('#user_form')[0].reset(); 
                    
                        }
                        }).done(function(data) {
                                swal("Data Disimpan!", "Data sudah berhasil masuk ke database", "success"); 
                                $(':input').val('');  
                        }); 
                    }else{
                        swal("Lanjut", "Penginputan Di Lanjutkan", "success");
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
		}); 
	});
   
    </script>