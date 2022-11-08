 
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
                               Manajemen User
                            </h2>
                            <br>
                            <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="material-icons">add_circle</i>  Tambah Data </a>
 
                        </div>
                        <div class="body">
                                
                            <div class="table-responsive">
                               <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
  
                                    <thead>
                                        <tr>
                                           
                                            <th style="width:5%;">Username</th>  
                                            <!-- <th style="width:5%;">Nama Pegawai</th>   -->
                                            <th style="width:5%;">Level</th>  
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
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" />
                                        </div>
                                    </div>
                                    <!-- <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" readonly="readonly" >
                                                    <input type="hidden" name="id_pegawai" id="id_pegawai" readonly="readonly">
                                                    
                                                </div>
                                                <span class="input-group-addon">
                                                    <button type="button" onclick="CariKaryawan();" class="btn btn-primary"> Pilih Pegawai ... </button>
                                                </span>
                                    </div>            -->
                                    <div class="form-group">
                                        <div class="form-line">
                                            <span class="label label-danger">* Kosongkan Apabila Tidak Mengganti Password </span>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" /> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    
                                        <label> User Type  </label>
                                        <br>
 
                                        <input type="hidden" name="level" id="level">

                                        <button type="button" id="adminbtn" class="btn btn-default waves-effect "> Admin </button>

                                        <button type="button" id="salesbtn" class="btn btn-default waves-effect "> Sales </button>

                                        <button type="button" id="operatorbtn" class="btn btn-default waves-effect "> Operator </button>

                                        <button type="button" id="csbtn" class="btn btn-default waves-effect "> CS </button>

                                        <button type="button" id="salesleadbtn" class="btn btn-default waves-effect "> Sales Lead </button>

                                        <button type="button" id="eduleadbtn" class="btn btn-default waves-effect "> Educational Lead </button>
 
                                    
                                    </div>
                                 
                                 
                                   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
                             </form>
                       </div>
                     
                    </div>
                </div>
    </div>

    

    <!-- modal cari karyawan -->
    <div class="modal fade" id="CariKaryawanModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" >Cari Jabatan</h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_karyawan" >
  
                                    <thead>
                                        <tr>  
                                            <th style="width:98%;">NIP </th> 
                                            <th style="width:98%;">Nama </th> 
                                        </tr> 
                                    </thead> 
                                    <tbody id="daftar_karyawan">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

 
 
   <script type="text/javascript">
    
     $("#adminbtn").on("click",function(){
        $("#level").val('1');
        $(this).attr('class','btn btn-primary');
        $("#salesbtn").attr('class','btn btn-default'); 
        $("#operatorbtn").attr('class','btn btn-default'); 
        $("#csbtn").attr('class','btn btn-default'); 
        $("#salesleadbtn").attr('class','btn btn-default'); 
        $("#eduleadbtn").attr('class','btn btn-default'); 
        
    });

    $("#salesbtn").on("click",function(){
        $("#level").val('2');
        $(this).attr('class','btn btn-primary');
        $("#adminbtn").attr('class','btn btn-default'); 
        $("#operatorbtn").attr('class','btn btn-default'); 
        $("#csbtn").attr('class','btn btn-default'); 
        $("#salesleadbtn").attr('class','btn btn-default'); 
        $("#eduleadbtn").attr('class','btn btn-default'); 
        
    });

    $("#operatorbtn").on("click",function(){
        $("#level").val('3');
        $(this).attr('class','btn btn-primary');
        $("#adminbtn").attr('class','btn btn-default'); 
        $("#salesbtn").attr('class','btn btn-default');  
        $("#csbtn").attr('class','btn btn-default'); 
        $("#salesleadbtn").attr('class','btn btn-default'); 
        $("#eduleadbtn").attr('class','btn btn-default'); 
        
    });

    $("#csbtn").on("click",function(){
        $("#level").val('4');
        $(this).attr('class','btn btn-primary');
        $("#adminbtn").attr('class','btn btn-default'); 
        $("#salesbtn").attr('class','btn btn-default');  
        $("#operatorbtn").attr('class','btn btn-default'); 
        $("#salesleadbtn").attr('class','btn btn-default'); 
        $("#eduleadbtn").attr('class','btn btn-default'); 
        
    });

    $("#salesleadbtn").on("click",function(){
        $("#level").val('5');
        $(this).attr('class','btn btn-primary');
        $("#adminbtn").attr('class','btn btn-default'); 
        $("#salesbtn").attr('class','btn btn-default');  
        $("#operatorbtn").attr('class','btn btn-default'); 
        $("#csbtn").attr('class','btn btn-default'); 
        $("#eduleadbtn").attr('class','btn btn-default'); 
    });

    $("#eduleadbtn").on("click",function(){
        $("#level").val('6');
        $(this).attr('class','btn btn-primary');
        $("#adminbtn").attr('class','btn btn-default'); 
        $("#salesbtn").attr('class','btn btn-default');  
        $("#operatorbtn").attr('class','btn btn-default'); 
        $("#csbtn").attr('class','btn btn-default'); 
        $("#salesleadbtn").attr('class','btn btn-default'); 
    });

    // function CariKaryawan(){
    //     $("#CariKaryawanModal").modal({backdrop: 'static', keyboard: false,show:true});
    // } 
    // $('#daftar_karyawan').DataTable( {
    //         "ajax": "<?php echo base_url(); ?>pegawai/fetch_pegawai"           
    // });

    // var daftar_karyawan = $('#daftar_karyawan').DataTable();
     
    //  $('#daftar_karyawan tbody').on('click', 'tr', function () {
         
    //      var content = daftar_karyawan.row(this).data()
    //      console.log(content);
    //      $("#nama_pegawai").val(content[1]);
    //      $("#id_pegawai").val(content[4]);
    //      $("#CariKaryawanModal").modal('hide');
    //  } );
       
     function Ubah_Data(id){
        $("#defaultModalLabel").html("Form Ubah Data");
        $("#defaultModal").modal('show');
 
        $.ajax({
             url:"<?php echo base_url(); ?>user/get_data_edit/"+id,
             type:"GET",
             dataType:"JSON", 
             success:function(result){  
                 $("#defaultModal").modal('show'); 
                 $("#id").val(result.id);
                 $("#username").val(result.username); 
                 $("#id_pegawai").val(result.id_pegawai);
                //  $("#nama_pegawai").val(result.nama); 
                 $("#level").val(result.level); 

                if(result.level == '1'){
                    $("#adminbtn").attr('class','btn btn-primary');
                    $("#salesbtn").attr('class','btn btn-default'); 
                    $("#operatorbtn").attr('class','btn btn-default'); 
                    $("#csbtn").attr('class','btn btn-default'); 
                    $("#salesleadbtn").attr('class','btn btn-default'); 
                    $("#eduleadbtn").attr('class','btn btn-default'); 
                }else if(result.level == '2'){
                    $("#salesbtn").attr('class','btn btn-primary');
                    $("#adminbtn").attr('class','btn btn-default'); 
                    $("#operatorbtn").attr('class','btn btn-default'); 
                    $("#csbtn").attr('class','btn btn-default');  
                    $("#salesleadbtn").attr('class','btn btn-default'); 
                    $("#eduleadbtn").attr('class','btn btn-default'); 
                }else if(result.level == '3'){
                    $("#operatorbtn").attr('class','btn btn-primary');
                    $("#adminbtn").attr('class','btn btn-default'); 
                    $("#salesbtn").attr('class','btn btn-default');  
                    $("#csbtn").attr('class','btn btn-default'); 
                    $("#salesleadbtn").attr('class','btn btn-default'); 
                    $("#eduleadbtn").attr('class','btn btn-default'); 
                }else if(result.level == '4'){
                    $("#csbtn").attr('class','btn btn-primary');
                    $("#adminbtn").attr('class','btn btn-default'); 
                    $("#salesbtn").attr('class','btn btn-default');  
                    $("#operatorbtn").attr('class','btn btn-default');
                    $("#salesleadbtn").attr('class','btn btn-default'); 
                    $("#eduleadbtn").attr('class','btn btn-default');   
                }else if(result.level == '5'){
                    $("#salesleadbtn").attr('class','btn btn-primary');
                    $("#csbtn").attr('class','btn btn-default');
                    $("#adminbtn").attr('class','btn btn-default'); 
                    $("#salesbtn").attr('class','btn btn-default');  
                    $("#operatorbtn").attr('class','btn btn-default');
                    $("#eduleadbtn").attr('class','btn btn-default');  
                }else if(result.level == '6'){
                    $("#eduleadbtn").attr('class','btn btn-primary');
                    $("#csbtn").attr('class','btn btn-primary');
                    $("#adminbtn").attr('class','btn btn-default'); 
                    $("#salesbtn").attr('class','btn btn-default');  
                    $("#operatorbtn").attr('class','btn btn-default');
                    $("#salesleadbtn").attr('class','btn btn-default'); 
                } 
             }
         });
     }
 
     function Bersihkan_Form(){
        $(':input').val(''); 
        $("#csbtn").attr('class','btn btn-default');
        $("#adminbtn").attr('class','btn btn-default');
        $("#salesbtn").attr('class','btn btn-default');
        $("#operatorbtn").attr('class','btn btn-default');
     }

     function CariAdminPPPU(){
        $("#ModalCariAdminPPPU").modal({backdrop: 'static', keyboard: false,show:true});
     }

     

     function Hapus_Data(id){
        if(confirm('Anda yakin ingin menghapus data ini?'))
        {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('user/hapus_data')?>/"+id,
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
        //setting semua data dalam form dijadikan 1 variabel 
         var formData = new FormData($('#user_form')[0]); 
 
         //validasi form sebelum submit ke controller
         var username = $("#username").val(); 
          
         if(username == ''){
            alert("Username Belum anda masukkan!");
            $("#username").parents('.form-line').addClass('focused error');
            $("#username").focus();
          
         }else{

            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>user/simpan_data_user",
             type:"POST",
             data:formData,  
             contentType:false,  
             processData:false,    
             success:function(result){ 
                
                 $("#defaultModal").modal('hide');
                 $('#example').DataTable().ajax.reload(); 
                 $('#user_form')[0].reset();
                 
                 Bersihkan_Form();
                 $.notify("Data berhasil disimpan!", {
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                 } 
                 },{
                    type: 'success'
                });
             }
            }); 

         }

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
        
         
        $('#example').DataTable( {
            "ajax": "<?php echo base_url(); ?>user/fetch_user" 
        });

       
     
         
      });
  
        
         
    </script>