<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Order - <?php echo $result->no_wo; ?></title>
    <style type="text/css">
       
        @font-face {
            font-family: "source_sans_proregular";           
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        }        
        body{
            font-family: "source_sans_proregular", Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;            
        }
        #wobox{
            width: 200px;
            height: 50px;
            border: 2px solid blue;
            margin-top: -10px;
        }
        #spacer{
            height: 20px;
        }
        footer {
                position: fixed; 
                bottom: 10px; 
               
                height: 70px; 
                font-size: 12px;
                /** Extra personal styles **/ 
                color: black;
                text-align: left;
                line-height: 35px;
            }
    </style>
</head>
<body>
    <?php 
    // echo get_user_account($result->id_approve_education); 
        $logosc = base_url('assets/images/scblue.png');
    ?>
    <img src="<?php echo $logosc; ?>" alt="" style="width: 25%; margin-top:-10px; margin-left:-10px;">
 
       <table border="0" cellpadding="3" cellspacing="0" width="100%">
            <tr>
                <td style="width: 50%;" >  
                    <div id="wobox">
                            <h2 style="text-align:left; color:blue; margin-top:10px; margin-left:10px;">WORK ORDER</h2>
                    </div>
                </td>
                <td >
                    <table border="1" cellpadding="3" cellspacing="0" width="100%" >
                        <tr>
                            <td> Nomor </td>
                            <td style="text-align:center;"> : </td>
                            <td> <?php echo $result->no_wo; ?> </td>
                        </tr>
                        <tr>
                            <td> Sales </td>
                            <td style="text-align:center;"> : </td>
                            <td> <?php echo get_user_account($result->id_sales); ?>  </td>
                        </tr>
                        <tr>
                            <td> Tanggal </td>
                            <td style="text-align:center;"> : </td>
                            <td> <?php echo $result->created_at; ?> </td>
                        </tr>
                    </table>
                </td>
                
            </tr> 
        </table>
        &nbsp;
        <div id="spacer"></div>
        <table border="1" cellpadding="3" cellspacing="0" width="100%" style="table-layout:fixed;">
            <tr>
                <td style="width: 30%;"> Judul Pelatihan</td>
                <td style="width: 2%; text-align:center;"> : </td>
                <td style="width: 65%;"> <?php echo $result->judul_training; ?>  </td>
            </tr>
            <tr>
                <td style="width: 30%;"> Durasi </td>
                <td style="width: 2%; text-align:center;"> : </td>
                <td style="width: 65%;"> <?php echo $result->durasi; ?> Hari </td>
            </tr>
            <tr>
                <td style="width: 30%;"> Kategori </td>
                <td style="width: 2%; text-align:center;"> : </td>
                <td style="width: 65%;"> <?php echo $result->kategori_training; ?>  </td>
            </tr>
            <tr>
                <td style="width: 30%;"> Instansi </td>
                <td style="width: 2%; text-align:center;"> : </td>
                <td style="width: 65%;"> <?php echo $result->nama_perusahaan; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;"> Jumlah Peserta </td>
                <td style="width: 2%; text-align:center;"> : </td>
                <td style="width: 65%;">  <?php echo $result->jml_peserta; ?>  </td>
            </tr>
            <tr>
                <td style="width: 30%;"> Lokasi Pelaksanaan </td>
                <td style="width: 2%; text-align:center;"> : </td>
                <td style="width: 65%;">  <?php echo $result->lokasi_pelaksanaan; ?>  </td>
            </tr>
            <tr>
                <td style="width: 30%;"> Tanggal Pelaksanaan </td>
                <td style="width: 2%; text-align:center;"> : </td>
                <td style="width: 65%;">  <?php echo $result->tgl_pelaksanaan; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;"> Tanggal Sertifikat </td>
                <td style="width: 2%; text-align:center;"> : </td>
                <td style="width: 65%; "> <?php echo $result->tgl_sertifikat; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;"> Trainer </td>
                <td style="width: 2%; text-align:center;"> : </td>
                <td style="width: 65%;"> <?php echo $result->namatrainer; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;" valign="top"> Keterangan </td>
                <td style="width: 2%; text-align:center;" valign="top"> : </td>
                <td style="width: 65%; height:15%;" valign="top"> <?php echo $result->keterangan; ?> </td>
            </tr>
        </table>
        &nbsp;
       
        <table border="1" cellpadding="3" cellspacing="0" width="100%" style="table-layout:fixed;">
            <tr>
                <td colspan="3" style="text-align:center; font-weight:bold;"> Approval</td>
            </tr>

            <?php 
                $qrsales = base_url('qrcode/'.$result->qr_sales);
                $qrsaleslead = base_url('qrcode/'.$result->qr_sales_approve);
                $qredulead = base_url('qrcode/'.$result->qr_edu_approve);
            ?>
           
            <tr style="text-align:center; font-weight:bold;">
                <td> Sales 

                    <br>
                    <br>
                    <br>
                    <br> 
                    <img src="<?php echo $qrsales; ?>" alt="" style="width:50%;">
                    <br>
                    <?php echo get_user_account($result->id_sales); ?> 
                </td>
                <td> Sales Lead
                    
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php 
                        if($result->is_approve_sales_lead != '' || $result->is_approve_sales_lead != NULL){
                    ?>

                    <img src="<?php echo $qrsaleslead; ?>" alt="" style="width:50%;">

                    <?php 
                        }
                    ?> 
                    <br> 
                    <?php echo $result->salesleadname; ?>
                </td>
                <td> Education Lead
                    
                
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php 
                        if($result->is_approve_education != '' || $result->is_approve_education != NULL){
                    ?>

                    <img src="<?php echo $qredulead; ?>" alt="" style="width:50%;">

                    <?php 
                        }
                    ?> 
                    <br>
                    <?php echo $result->eduleadname; ?>
                </td>
            </tr>
        
            
        </table>

        <footer>
            <p style="font-size: 14px; font-weight:bold;"> Published By <i>SCIENCOM</i></p>
            
            Security code : <?php echo base64_encode($result->no_wo); ?>
        </footer>
</body>
</html>