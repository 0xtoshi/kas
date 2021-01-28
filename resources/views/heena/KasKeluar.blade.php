
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{ $meta['title'] }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="{{ $meta['diskripsi'] }}" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- App css -->
        <link href="/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="/plugins/dropify/css/dropify.min.css" rel="stylesheet">
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="#" class="logo">
                    <span>
                        <img src="/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">

    
                    <li class="list-group-item ">
                        <a href="/beranda"><i data-feather="home" class="align-self-center menu-icon"></i><span>Beranda</span></a>
                    </li>
                    <li class="list-group-item">
                        <a href="/rekening"><i data-feather="credit-card" class="align-self-center menu-icon"></i><span>Rekening</span></a>
                    </li>
                    <li class="list-group-item">
                        <a href="/kas/masuk"><i data-feather="arrow-down-circle" class="align-self-center menu-icon"></i><span>Kas Masuk</span></a>
                    </li>
                    <li class="list-group-item">
                        <a href="/kas/keluar"><i data-feather="arrow-up-circle" class="align-self-center menu-icon"></i><span>Kas Keluar</span></a>
                    </li>
                    <li class="list-group-item">
                        <a href="/rekap"><i data-feather="printer" class="align-self-center menu-icon"></i><span>Rekap</span></a>
                    </li>
                    

                            
                </ul>
    
               
            </div>
        </div>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-right mb-0">  
                                          


                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ml-1 nav-user-name hidden-sm">{{ $session['nama'] }}</span>
                                <img src="/assets/images/user.png" alt="profile-user" class="rounded-circle thumb-xs" />                                 
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="/user/profile"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                               
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="/pengguna/logout"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-danger" href="#" role="button"><i class="fas fa-dollar-sign mr-2"></i>Kas Keluar</a>
                            </div>                                
                        </li>                           
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-danger" >
                                            <span class="day-name" id="Day_Name">Hari Ini:</span>&nbsp;
                                            <span class="" id="Select_date">{{ Date('d') }} {{ Date('F') }} {{ Date('Y') }}</span>
                                           
                                        </a>
                                        
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    
                    @if ($session['role'] == 'Administrator' or $session['role'] == 'Bendahara' or $session['role'] == 'Wakil Bendahara' )

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-warning-50">
                                    <h4 class="card-title text-white"><i class="fa fa-plus mr-2"></i>Tambah Kas Keluar</h4>
                                    <p class="text-white mb-0">Form Tambah Kas Keluar</p>
                                </div><!--end card-header-->
                                <br/>
                                
                                <div class="card-body bootstrap-select-1">
                                <div id="notif_upload">
                                    <div class="alert alert-outline-primary" role="alert"> Silahkan tambahkan bukti nota jika tersedia! </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-md-10">
                                    
                                        <div class="custom-file">
                                        <form method="POST" enctype="multipart/form-data" id="upload_nota">
                                            <input type="file" name="file" class="custom-file-input" id="file">
                                            <label class="custom-file-label" for="customFile">Pilih File!</label>
                                        
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <button class="btn btn-primary" id='btnUpload'>Upload!</button>
                                    </div>

                                    </form>

                                </div><!--end col-->
                                <br/><br/>
                                    <form id="tambah_kas" action="#">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="mb-3">Nominal</label>
                                                <input type="text" name="nominal" class="form-control" required>
                                            </div><!-- end col -->      
                                            <div class="col-md-4">
                                                <label class="mb-3">Tanggal</label>
                                                <input type="text" name="tanggal" class="form-control" placeholder="Pilih Tanggal" id="mdate" required>
                                            </div><!-- end col --> 
                                            <div class="col-md-4">
                                                <label class="mb-3">Diambil Dari</label>
                                            
                                                <select name="id_rekening" class="custom-select">
                                                @foreach ($data_rek as $key => $value)
                                                    <option value="{{ $value->id_rekening }}">{{$value->nama}}</option>
                                                @endforeach
                                                </select>
                                                
                                            </div><!-- end col --> 
                                            <input type="hidden" name="id_nota" id="id_nota">
                                            <input type="hidden" name="tipe" value="kas_keluar">
                                            <input type="hidden" name="id_pengguna" value="{{ $session['id_pengguna'] }}">
                                            <div class="col-md-12">
                                                <label class="mb-3">Keterangan</label>
                                                <textarea name="keterangan" class="form-control" required></textarea>
                                            </div>

                                            
                                            <div class="col-md-3">
                                                <br/>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div><!-- end col --> 
                                    </form>                                                               
                                    </div><!-- end row --> 
                                </div><!-- end card-body --> 
                            </div> <!-- end card -->                               
                        </div> <!-- end col -->
                    </div>

                    @endif
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-warning-50">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title text-white"><i class="fas fa-th-list"></i> List Kas Keluar</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">#</th>                                                            
                                                    <th class="border-top-0">Tanggal</th>
                                                    <th class="border-top-0">Nominal</th>
                                                    <th class="border-top-0">Masuk Ke</th>
                                                    <th class="border-top-0">Diskripsi</th>
                                                    <th class="border-top-0">Bukti Nota</th>
                                                    @if ($session['role'] == 'Administrator' or $session['role'] == 'Bendahara' or $session['role'] == 'Wakil Bendahara' )
                                                    <th class="border-top-0">Aksi</th>
                                                    @endif
                                                    
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>

                                            @foreach ($data_kas as $key => $value)
                                                <tr id="{{ $value->id_kas }}" value="{{ $value->nominal }}" name="{{ $value->lokasi_gambar }}">                                                       
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ date("d M Y", strtotime($value->tanggal))  }}</td>
                                                    <td>@currency($value->nominal)</td>
                                                    <td>{{ $value->nama }}</td>
                                                    <td>{{ $value->keterangan }}</td>
                                                    @if ($value->id_nota !== 1)
                                                    <td><a  data-toggle="modal" id="show_img" data-target="#exampleModalLarge"><i class="fas fa-image fa-2x"></i></a></td>
                                                    @else
                                                    <td><a><i class="fas fa-ban fa-2x"></i></a></td>
                                                    @endif
                                                    @if ($session['role'] == 'Administrator' or $session['role'] == 'Bendahara' or $session['role'] == 'Wakil Bendahara' )
                                                    <td>                                                       
                                                        <a href="#"  data-toggle="modal" data-target="#exampleModalPrimary" id="edit_kas" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                                        <a href="#" id="delete_kas"><i class="las la-trash-alt text-danger font-18"></i></a>
                                                    </td>
                                                    @endif
                                                </tr><!--end tr-->     
                                            @endforeach      
                                                
                                                
                                                                     
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->   
                                                                      
                    </div><!--end row-->
                    
                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    Copyright &copy; {{ date('Y') }} {{ $meta['app_name'] }} 
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

                                    <div class="modal fade" id="exampleModalPrimary" tabindex="-1" role="dialog" aria-labelledby="exampleModalPrimary1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h6 class="modal-title m-0 text-white" id="exampleModalPrimary1">Update Kas Keluar</h6>
                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-times text-white"></i></span>
                                                    </button>
                                                </div><!--end modal-header-->
                                                <div class="modal-body">
                                                <form id="modal_edit" action="#">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="mb-3">Nominal</label>
                                                            <input type="text" name="nominal" id="modal_nominal" class="form-control" required="">
                                                        </div><!-- end col -->      
                                                        <div class="col-md-4">
                                                            <label class="mb-3">Tanggal</label>
                                                            <input type="text" name="tanggal" class="form-control" placeholder="Pilih Tanggal" id="modal_tanggal" required="" data-dtp="dtp_RQD02">
                                                        </div><!-- end col --> 
                                                        <div class="col-md-4">
                                                            <label class="mb-3">Masuk Ke</label>
                                                        
                                                            <select name="id_rekening" id="modal_id_rekening" class="custom-select">
                                                                @foreach ($data_rek as $key => $value)
                                                                    <option value="{{ $value->id_rekening }}">{{$value->nama}}</option>
                                                                @endforeach
                                                            </select>
                                                            
                                                        </div><!-- end col --> 
                                                        <div class="col-md-12">
                                                            <label class="mb-3">Keterangan</label>
                                                            <textarea name="keterangan" id="modal_keterangan" class="form-control" required=""></textarea>
                                                        </div>

                                                        <input type="hidden" name="id_kas" id="modal_id_kas">
                                                        
                                                        <div class="col-md-3">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div><!-- end col --> 
                                                                                                            
                                                    </div>
                                                </form>                                             
                                                </div><!--end modal-body-->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                    
                                                </div><!--end modal-footer-->
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->  


                                    <div class="modal fade bd-example-modal-lg" id="exampleModalLarge" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title m-0" id="myLargeModalLabel">Large Modal</h6>
                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-times"></i></span>
                                                    </button>
                                                </div><!--end modal-header-->
                                                <div class="modal-body">
                                                <img id="notanes" src="/assets/images/widgets/flame-5.png" alt="" class="img-fluid">
                                                    
                                                </div><!--end modal-body-->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                </div><!--end modal-footer-->
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->

        


        <!-- jQuery  -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/metismenu.min.js"></script>
        <script src="/assets/js/waves.js"></script>
        <script src="/assets/js/feather.min.js"></script>
        <script src="/assets/js/simplebar.min.js"></script>
        <script src="/assets/js/moment.js"></script>
        <script src="/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="/plugins/dropify/js/dropify.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
        
        <script src="/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        
        <script>

        $('document').ready( () => {

            $('#mdate').bootstrapMaterialDatePicker({
                weekStart: 0,
                time: !1
            });

            $('#modal_tanggal').bootstrapMaterialDatePicker({
                weekStart: 0,
                time: !1
            });

            $('a[id=show_img]').click(function(){

            var anu = $(this).parents('tr').attr('id');
            var value = $(this).parents('tr').attr('value');
            var image = $(this).parents('tr').attr('name');

            $('#notanes').attr('src', image);

            console.log(image);

            });

            
            $("#btnUpload").click(function (event) {
                event.preventDefault();
                var form = $('#upload_nota')[0];
                var data = new FormData(form);

                        $("#btnUpload").prop("disabled", true);

                            $.ajax({
                                type: "POST",
                                enctype: 'multipart/form-data',
                                url: "/nota/upload",
                                data: data,
                                processData: false,
                                contentType: false,
                                cache: false,
                                timeout: 600000,
                                success: function (data) {

                                    $("#notif_upload").html(`<div class="alert alert-success border-0" role="alert">
                                        <strong>Yuhuu!</strong> Sukses Upload Bukti Nota!.
                                    </div>`);
                                    $('#id_nota').val(data);
                                    $("#btnSubmit").prop("disabled", false);

                                },
                                error: function (e) {

                                    $("#notif_upload").html(`<div class="alert alert-danger border-0" role="alert">
                                        <strong>Yuhuu!</strong> Gagal Upload Bukti Nota!.
                                    </div>`);
                                    $("#btnSubmit").prop("disabled", false);

                                }
                            });

            });


            $('form[id=tambah_kas]').submit( (e) => {
          
                e.preventDefault();
                
                var kas_data =  $('form[id=tambah_kas]').serialize();
                console.log(kas_data)
                $.ajax({
                    url: '/kas/tambah',
                    type: 'POST',
                    data: kas_data,
                    success : (data) => {
                        //console.log(data);
                        swal({
                            title: "Suksess 😽!",
                            text: "Sukses menambahkan Kas Keluar!",
                            type: "success",
                            icon: "success",
                        }).then(function() {
                            window.location = "/kas/keluar";
                        });
                    },
                    error : (data) => {
                        swal({
                            title: "Error 😿!",
                            text: "Pastikan form telah diisi dengan benar!",
                            type: "error",
                            icon: "error",
                        });
                    }
                    })
                
                });



                $('a[id=delete_kas]').click(function(){
                var anu = $(this).parents('tr').attr('id');
                var value = $(this).parents('tr').attr('value');
                swal({
                    title: "Hapus ("+value+") 😿?",
                    text: "Apakah anda yakin ingin menghapus?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                    $.ajax({
                        url : '/kas/delete',
                        type : 'POST',
                        data : { id_kas : anu},
                        success : (data) => {
                        swal("Sukses Menghapus "+ value +" 😽 !", {
                            icon: "success",
                        }).then(function() {
                            window.location = "/kas/keluar";
                        });
                        },
                        error : (err) => {
                        swal("Gagal Menghapus "+ value +" 😿 !", {
                            icon: "error",
                        });
                        }
                    })
                    
                    } else {
                    swal("Kas Batal Dihapus 😽!");
                    }
                });
            });


            $('a[id=edit_kas]').click(function(){
                var anu = $(this).parents('tr').attr('id');
                var value = $(this).parents('tr').attr('value');
                $.ajax({
                    url : '/kas/show/'+anu,
                    type : 'GET',
                    success : (data) => {
                               
                                
                                $('#modal_nominal').val(data.nominal);
                                $('#modal_tipe').val(data.tipe);
                                $('#modal_keterangan').val(data.keterangan);
                                $('#modal_tanggal').val(data.tanggal);
                                $('#modal_id_kas').val(data.id_kas);
                               
                                
                                
                    },
                    error : (error) => {
                    console.log(error);
                    }
                })
                
            });



            $('form[id=modal_edit]').submit( (e) => {
                e.preventDefault();
                var data =  $('form[id=modal_edit]').serialize();
                $.ajax({
                    url: '/kas/update',
                    type: 'POST',
                    data: data,
                    success : (data) => {
                        //console.log(data);
                        swal({
                            title: "Suksess 😽!",
                            text: "Sukses update Kas Keluar!",
                            type: "success",
                            icon: "success",
                        }).then(function() {
                            window.location = "/kas/keluar";
                        });
                    },
                    error : (data) => {
                        swal({
                            title: "Error 😿!",
                            text: "Pastikan form telah diisi dengan benar!",
                            type: "error",
                            icon: "error",
                        });
                    }
                    })
            })
            

        } );

        </script>

     

        <!-- App js -->
        <script src="/assets/js/app.js"></script>
        
    </body>

</html>
