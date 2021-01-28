
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
                                <span class="ml-1 nav-user-name hidden-sm">Heena</span>
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
                                <a class=" btn btn-sm btn-danger" href="#" role="button"><i class="fas fa-database mr-2"></i>Rekap Kas</a>
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
                    
                                

                    <div class="row">
                        <div class="col-lg-6 col-xl">
                            <div class="card">
                            <div class="card-header">
                                <h5><i data-feather="lock"></i> Ganti Password</h5><span>Form Ganti Password</span>
                            </div>
                            <div class="card-body">
                                <form id="ubah_password">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                    <label for="bank">Password Baru</label>
                                    <input class="form-control" type="password" id="password1" name="password1" placeholder="" required >
                                    
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="no_rek">Verifikasi Password Baru</label>
                                    <input class="form-control" type="password" id="password2" name="password2" placeholder="" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" data-original-title="" title="">Ganti Password</button>
                                </form>
                            </div>
                        </div>
                        </div>

                            <div class="col-lg-6 col-xl">
                            <div class="card">
                            <div class="card-header">
                                <h5><i data-feather="user"></i> Ganti Profile </h5><span> Form Nama</span>
                            </div>
                            <div class="card-body">
                                <form id="ubah_profile">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                    <label for="bank">Username</label>
                                    <input class="form-control" type="text" id="username" value="{{ $session['username'] }}" placeholder="" disabled>
                                    
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="no_rek">Nama</label>
                                    <input class="form-control" type="text" id="nama" name="nama" value="{{ $session['nama'] }}" placeholder="" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" data-original-title="" title="">Ubah Profil</button>
                                </form>
                            </div>
                            </div>
                    </div>


                   
                    
                    
                </div><!-- container -->
                
                @if( $session['role'] == 'Administrator' )

                <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title"><i class="fas fa-user-plus"></i> Tambah Anggota</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <form id="tambah_user">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                        <label for="Nama">Nama</label>
                                        <input class="form-control" type="text" id="nama" name="nama" placeholder="" required>
                                        
                                        </div>
                                        <div class="col-md-6 mb-3">
                                        <label for="username">Username</label>
                                        <input class="form-control" type="text" id="username" name="username" placeholder="" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" id="password" name="password" placeholder="" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                        <label for="role">Nama</label>
                                            <select name="role" id="role" class="custom-select">
                                                <option value="Administrator" selected="">Administrator</option>
                                                <option value="Ketua">Ketua</option>
                                                <option value="Bendahara">Bendahara</option>
                                                <option value="Wakil Bendahara">Wakil Bendahara</option>
                                                <option value="Anggota">Anggota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit" data-original-title="" title="">Tambah User</button>
                                    </form>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->   

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title"><i class="fas fa-user-alt"></i> List Anggota</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">#</th>                                                            
                                                    <th class="border-top-0">Nama</th>
                                                    <th class="border-top-0">Username</th>
                                                    <th class="border-top-0">Jabatan</th>
                                                    <th class="border-top-0">Tanggal Pembuatan</th>
                                                    <th class="border-top-0">Aksi</th>
                                                    
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                            @foreach ($meta['data_pengguna'] as $key => $value)
                                            <tr id="{{ $value->id_pengguna }}" value="{{ $value->username }}">                                                       
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value->nama }}</td>
                                                    <td>{{ $value->username }}</td>
                                                    <td>{{ $value->role }}</td>
                                                    <td>{{ $value->created_at }}</td>
                                                    <td>                                                       
                                                        <a href="#"  data-toggle="modal" data-target="#exampleModalPrimary" id="edit_pengguna" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                                        <a href="#" id="delete_user"><i class="las la-trash-alt text-danger font-18"></i></a>
                                                    </td>
                                                    
                                                </tr><!--end tr-->     
                                            @endforeach      
                                                                     
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->   
                                                                
                </div><!--end row-->

                @endif
                

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
                                                    <h6 class="modal-title m-0 text-white" id="exampleModalPrimary1">Update Pengguna</h6>
                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-times text-white"></i></span>
                                                    </button>
                                                </div><!--end modal-header-->
                                                <div class="modal-body">
                                    <form id="modal_edit">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                        <label for="modal_nama">Nama</label>
                                        <input class="form-control" type="text" id="modal_nama" name="nama" placeholder="" required>
                                        
                                        </div>
                                        <div class="col-md-6 mb-3">
                                        <label for="modal_username">Username</label>
                                        <input class="form-control" type="text" id="modal_username" name="username" placeholder="" required>
                                        </div>
                                        <input type="hidden" name="id_pengguna" id="id_pengguna">
                                        <div class="col-md-6 mb-3">
                                        <label for="modal_password">Password</label>
                                        <input class="form-control" type="password" id="modal_password" name="password" placeholder="Kosongi saja">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                        <label for="modal_role">Nama</label>
                                            <select name="role" id="modal_role" class="custom-select">
                                                <option value="Administrator" selected="">Administrator</option>
                                                <option value="Ketua">Ketua</option>
                                                <option value="Bendahara">Bendahara</option>
                                                <option value="Wakil Bendahara">Wakil Bendahara</option>
                                                <option value="Anggota">Anggota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit" data-original-title="" title="">Update</button>
                                    </form>                          
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
        <script src="/assets/pages/jquery.form-upload.init.js"></script>
        <script src="/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
        <script>

        $('document').ready( () => {

            $('#mdate').bootstrapMaterialDatePicker({
                weekStart: 0,
                time: !1
            });


            $('form[id=tambah_user]').submit( (e) => {
            
            e.preventDefault();
            
            var user =  $('form[id=tambah_user]').serialize();
            $.ajax({
                url: '/pengguna/buat_akun',
                type: 'POST',
                data: user,
                success : (data) => {
                    //console.log(data);
                    swal({
                        title: "Suksess 😽!",
                        text: "Sukses menambahkan User!",
                        type: "success",
                        icon: "success",
                    }).then(function() {
                        window.location = "/user/profile";
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

            $('form[id=ubah_profile]').submit( (e) => {
            
            e.preventDefault();
            
            var user =  $('form[id=ubah_profile]').serialize();
            $.ajax({
                url: '/pengguna/ubahprofile',
                type: 'POST',
                data: user,
                success : (data) => {
                    //console.log(data);
                    swal({
                        title: "Suksess 😽!",
                        text: "Sukses Ubah Profile!",
                        type: "success",
                        icon: "success",
                    }).then(function() {
                        window.location = "/user/profile";
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


            $('form[id=ubah_password]').submit( (e) => {
          
            e.preventDefault();
            
            var password1 = $('#password1').val();
            var password2 = $('#password2').val();
            if(password1 !== password2) {
                
                
                swal({
                        title: "Error 😿!",
                        text: "Password Yang anda masukan tidak benar!",
                        type: "error",
                        icon: "error",
                    });
            }
            $.ajax({
                url: '/pengguna/ubahpassword',
                type: 'POST',
                data: {password : password1 },
                success : (data) => {
                    //console.log(data);
                    swal({
                        title: "Suksess 😽!",
                        text: "Sukses mengubah password!",
                        type: "success",
                        icon: "success",
                    }).then(function() {
                        window.location = "/user/profile";
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


        $('a[id=delete_user]').click(function(){
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
                        url : '/pengguna/hapus',
                        type : 'POST',
                        data : { id_pengguna : anu},
                        success : (data) => {
                        swal("Sukses Menghapus "+ value +" 😽 !", {
                            icon: "success",
                        }).then(function() {
                            window.location = "/user/profile";
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

            $('a[id=edit_pengguna]').click(function(){
                var anu = $(this).parents('tr').attr('id');
                var value = $(this).parents('tr').attr('value');
                $.ajax({
                    url : '/pengguna/show/'+anu,
                    type : 'GET',
                    success : (data) => {
                               
                                
                                $('#id_pengguna').val(data.id_pengguna);
                                $('#modal_nama').val(data.nama);
                                $('#modal_username').val(data.username);
                                $('#modal_role').val(data.role);
                                
                                
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
                    url: '/pengguna/updateAll',
                    type: 'POST',
                    data: data,
                    success : (data) => {
                        //console.log(data);
                        swal({
                            title: "Suksess 😽!",
                            text: "Sukses update Pengguna!",
                            type: "success",
                            icon: "success",
                        }).then(function() {
                            window.location = "/user/profile";
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
