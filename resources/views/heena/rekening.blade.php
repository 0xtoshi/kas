
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
                                <a class="dropdown-item" href="#"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
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
                                <a class=" btn btn-sm btn-danger" href="#" role="button"><i class="far fa-credit-card mr-2"></i>Rekening</a>
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
                                    <h4 class="card-title text-white"><i class="fa fa-plus mr-2"></i>Tambah Rekening</h4>
                                    <p class="text-white mb-0">Form Tambah Rekening Bank</p>
                                </div><!--end card-header-->
                                <div class="card-body bootstrap-select-1">
                                <form action="" id="tambah_rekening">
                                    <div class="row">
                                       
                                            <div class="col-md-4">
                                                <label class="mb-3">Tipe Rekening</label>
                                                <select name="tipe" id="tipe" class="custom-select">
                                                    <option value="Cash" selected="">Cash</option>
                                                    <option value="Bank">Bank</option>
                                                </select>
                                            </div><!-- end col -->   
                                            <div class="col-md-4">
                                                <label class="mb-3">Nama</label>
                                                <input type="text" name="nama" class="form-control" required>
                                            </div><!-- end col -->      
                                            <div class="col-md-4">
                                                <label class="mb-3">No Rekening</label>
                                                <input type="number" name="no_rek" class="form-control" required>
                                            </div><!-- end col -->  
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
                                            <h4 class="card-title text-white"><i class="fas fa-th-list"></i> List Rekening</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">#</th>                                                            
                                                    <th class="border-top-0">Tipe</th>
                                                    <th class="border-top-0">Nama</th>
                                                    <th class="border-top-0">No Rekening</th>
                                                    @if ($session['role'] == 'Administrator' or $session['role'] == 'Bendahara' or $session['role'] == 'Wakil Bendahara' )
                                                    <th class="border-top-0">Aksi</th>
                                                    @endif
                                                    
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                            
                                            @foreach ($data_rek as $key => $value)

                                                <tr id="{{ $value->id_rekening }}" value="{{ $value->nama }}">                                                     
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->tipe }}</td>
                                                <td>{{ $value->nama }}</td>
                                                <td>{{ $value->no_rek }}</td>
                                                    @if ($session['role'] == 'Administrator' or $session['role'] == 'Bendahara' or $session['role'] == 'Wakil Bendahara' )
                                                    <td>                                                       
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalPrimary" id="edit_bank" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                                        <a href="#" id="delete_bank" ><i class="las la-trash-alt text-danger font-18"></i></a>
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
                                                    <h6 class="modal-title m-0 text-white" id="exampleModalPrimary1">Update Rekening</h6>
                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-times text-white"></i></span>
                                                    </button>
                                                </div><!--end modal-header-->
                                                <div class="modal-body">
                                                <form action="" id="modal_edit">
                                                    <div class="row">
                                                
                                                        <div class="col-md-4">
                                                            <label class="mb-3">Tipe Rekening</label>
                                                            <select name="tipe" id="modal_tipe" class="custom-select">
                                                                <option value="Cash" selected="">Cash</option>
                                                                <option value="Bank">Bank</option>
                                                            </select>
                                                        </div><!-- end col -->   
                                                        <div class="col-md-4">
                                                            <label class="mb-3">Nama</label>
                                                            <input type="text" name="nama" id="modal_nama" class="form-control" required="">
                                                        </div><!-- end col -->      
                                                        <input type="hidden" name="id_rekening" id="id_rekening">
                                                        <div class="col-md-4">
                                                            <label class="mb-3">No Rekening</label>
                                                            <input type="number" name="no_rek" id="modal_no_rek" class="form-control" required="">
                                                        </div><!-- end col -->  
                                                        <div class="col-md-3">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div><!-- end col -->

                                                                                                        
                                                 </div></form>                                               
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

     

        <!-- App js -->
        <script src="/assets/js/app.js"></script>

        <script>
        
        $('document').ready(() => {

            $('form[id=tambah_rekening]').submit( (e) => {
            
            e.preventDefault();
            
            var rekening_data =  $('form[id=tambah_rekening]').serialize();
            $.ajax({
                url: '/rekening/tambah',
                type: 'POST',
                data: rekening_data,
                success : (data) => {
                    //console.log(data);
                    swal({
                        title: "Suksess 😽!",
                        text: "Sukses menambahkan Rekening!",
                        type: "success",
                        icon: "success",
                    }).then(function() {
                        window.location = "rekening";
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





            $('a[id=edit_bank]').click(function(){
                var anu = $(this).parents('tr').attr('id');
                var value = $(this).parents('tr').attr('value');
                $.ajax({
                    url : '/rekening/show/'+anu,
                    type : 'GET',
                    success : (data) => {
                               
                                
                                $('#id_rekening').val(data.id_rekening);
                                $('#modal_nama').val(data.nama);
                                $('#modal_no_rek').val(data.no_rek);
                                $('#modal_tipe').val(data.tipe);
                                
                                
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
                    url: '/rekening/update',
                    type: 'POST',
                    data: data,
                    success : (data) => {
                        //console.log(data);
                        swal({
                            title: "Suksess 😽!",
                            text: "Sukses update Rekening!",
                            type: "success",
                            icon: "success",
                        }).then(function() {
                            window.location = "/rekening";
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


            $('a[id=delete_bank]').click(function(){
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
                        url : '/rekening/delete',
                        type : 'POST',
                        data : { id_rekening : anu},
                        success : (data) => {
                        swal("Sukses Menghapus "+ value +" 😽 !", {
                            icon: "success",
                        }).then(function() {
                            window.location = "/rekening";
                        });
                        },
                        error : (err) => {
                        swal("Gagal Menghapus "+ value +" 😿 !", {
                            icon: "error",
                        });
                        }
                    })
                    
                    } else {
                    swal("Rekeing Bank Batal Dihapus 😽!");
                    }
                });
            });

        });

        </script>
        
    </body>

</html>
