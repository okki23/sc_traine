f 
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
                                Instansi
                            </h2>
                            <br>
                            <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="material-icons">add_circle</i>  Tambah Data </a>
 
                        </div>

                        <div class="body">
                                
                            <div class="table-responsive">
							   <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
									<thead>
										<tr>
											<th style="width:5%;">Nama Perusahaan</th>
                                            <th style="width:10%;">Jenis Perusahaan</th>  
											<th style="width:10%;">Alamat</th>
                                            <th style="width:10%;">Telp</th> 
                                            <th style="width:10%;">Sales</th>  
											<th style="width:10%;">Opsi</th> 
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
                                        <div class="form-line">
                                            <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="jenis_perusahaan" id="jenis_perusahaan" class="form-control" placeholder="Jenis Perusahaan" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="telp" id="telp" class="form-control" placeholder="Telp" />
                                        </div>
                                    </div>
                                    
                                    <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="nama_sales" id="nama_sales" class="form-control" required readonly="readonly" >
                                                    <input type="hidden" name="id_sales_marketing" id="id_sales_marketing" required>
                                                    
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="PilihSales();" class="btn btn-primary"> Pilih Sales... </button>
                                                </span>
                                    </div> 
								 

								    <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                    <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
							 </form>
					   </div>
                     
                    </div>
                </div>
    </div>


    <!-- modal cari jabatan -->
    <div class="modal fade" id="PilihSalesModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Sales </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_sales" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Nama Sales</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_salesx">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>
	 
			
 
   <script type="text/javascript">
	function PilihSales(){
        $("#PilihSalesModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

 
      
    $('#daftar_sales').DataTable( {
        "ajax": "<?php echo base_url(); ?>sales/fetch_sales" 
    });

     var daftar_sales = $('#daftar_sales').DataTable();
     
        $('#daftar_sales tbody').on('click', 'tr', function () {
            
            var content = daftar_sales.row(this).data()
            console.log(content);
            $("#nama_sales").val(content[0]);
            $("#id_sales_marketing").val(content[5]);
            $("#PilihSalesModal").modal('hide');
        } );
 
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>instansi/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){  
				 $("#defaultModal").modal('show'); 
				 $("#id").val(result.id);
                 $("#id_sales_marketing").val(result.id_sales_marketing);
                 $("#nama_sales").val(result.namasales);
                 $("#nama_perusahaan").val(result.nama_perusahaan);
                 $("#jenis_perusahaan").val(result.jenis_perusahaan);
                 $("#alamat").val(result.alamat);
                 $("#telp").val(result.telp); 
                   
			 }
		 });
	 }
 
	 function Bersihkan_Form(){
        $(':input').val(''); 
        $("#image1").attr('src','<?php echo base_url('upload/image_prev.jpg'); ?>');
     }

	 function Hapus_Data(id){
		if(confirm('Anda yakin ingin menghapus data ini?'))
        {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('instansi/hapus_data')?>/"+id,
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
	function Simpan_Data(){
	 
		 var formData = new FormData($('#user_form')[0]);  
           
            $.ajax({
             url:"<?php echo base_url(); ?>instansi/simpan_data",
             type:"POST",
             data:formData,
             contentType:false,  
             processData:false,   
             success:function(result){ 
                
                 $("#defaultModal").modal('hide');
                 $('#example').DataTable().ajax.reload(); 
                 $('#user_form')[0].reset();
                 $("#image1").attr("src","<?php echo base_url(); ?>/upload/image_prev.jpg");
                 $.notify("Data berhasil disimpan!", {
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                 } 
                 } );
             }
            }); 

         

	}
     
 
       $(document).ready(function() {
		   
		$("#addmodal").on("click",function(){
			$("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
            $("#method").val('Add');
            $("#defaultModalLabel").html("Form Tambah Data");
		});
		 
		$('#example').DataTable( {
			"ajax": "<?php echo base_url(); ?>instansi/fetch_instansi", 
		});
	  


		 
	  });
  
		
		 
    </script>