
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
                                <h5><i class="fas fa-calendar"></i> Rekap Tahunan</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="GET">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                    <label for="tahun">Tahun</label>
                                    <select name="tahun" id="tahun" class="custom-select">
                                        <option value="2019" selected="">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                    
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" data-original-title="" title="">Rekap</button>
                                </form>
                            </div>
                        </div>
                        </div>

                            <div class="col-lg-6 col-xl">
                            <div class="card">
                            <div class="card-header">
                                <h5><i class="fas fa-calendar-alt"></i> Rekap Bulanan </h5>
                            </div>
                            <div class="card-body">
                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                    <label for="tahun">Bulan</label>
                                    <select name="bulan" id="tahun" class="custom-select">
                                        <option value="01" selected="">01 (Januari)</option>
                                        <option value="02">02 (Februari)</option>
                                        <option value="03">03 (Maret)</option>
                                        <option value="04">04 (April)</option>
                                        <option value="05">05 (Mei)</option>
                                        <option value="06">06 (Juni)</option>
                                        <option value="07">07 (Juli)</option>
                                        <option value="08">08 (Agustus)</option>
                                        <option value="09">09 (September)</option>
                                        <option value="10">10 (Oktober)</option>
                                        <option value="11">11 (November)</option>
                                        <option value="12">12 (Desember)</option>
                                    </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                    <label for="tahun">Tahun</label>
                                    <select name="tahun" id="tahun" class="custom-select">
                                        <option value="2019" selected="">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" data-original-title="" title="">Rekap</button>
                                </form>
                            </div>
                            </div>
                    </div>


                   
                    
                    
                </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-warning-50">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title text-white"><i class="fas fa-th-list"></i> Rekap Kas </h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                
                                        <table id="export" class="table mb-0 table-bordered table-hover”">
                                        
                                            <thead>
                                                <tr class="bg-black text-white">
                                                                                                               
                                                    <th class="border-top-0 text-white">Tanggal</th>
                                                    <th class="border-top-0 text-white">Diskripsi</th>
                                                    <th class="border-top-0 text-white">Kredit</th>
                                                    <th class="border-top-0 text-white">Debit</th>
                                                    
                                                    
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                            
                                            @foreach ($kas as $value)
                                                <tr>                                                       
                                                    
                                                    <td>{{ date("d M Y", strtotime($value->tanggal))  }}</td>
                                                    <td>{{ $value->keterangan }}</td>
                                                    
                                                    @if( $value->tipe == 'kas_masuk' )
                                                    <td>@currency($value->nominal)</td>
                                                    @else
                                                    <td></td>
                                                    @endif

                                                    @if( $value->tipe == 'kas_keluar' )
                                                    <td>@currency($value->nominal)</td>
                                                    @else
                                                    <td></td>
                                                    @endif
                                                </tr><!--end tr-->     
                                                  
                                            @endforeach
                                                
                                                                     
                                            </tbody>
                                            
                                            <tfoot>
                                                        <tr class="bg-primary text-white">
                                                            <th colspan="2" class="border-0 text-white">Total </th>                                                        
                                                            <td class="border-0"><b>@currency($total_kredit)</b></td>
                                                            <td class="border-0"><b>@currency($total_debit)</b></td>
                                                        </tr>

                                                        <tr class="bg-success text-white">                                   
                                                            <td class="border-0 font-14"><b>Saldo Tersisa</b></td>
                                                            <td class="border-0 font-14"><b>@currency($total_kredit - $total_debit)</b></td>
                                                            <th colspan="2" class="border-0"></th>   
                                                        </tr>
                                            </tfoot>
                                        </table>
                                    
                                    
                                        @if(Request::input('bulan') and Request::input('tahun'))
                                        <a href="/rekap/pdf?tahun={{Request::input('tahun')}}&bulan={{Request::input('bulan')}}" id="btnExport" class="btn btn-primary">Export PDF</a>
                                        @elseif (Request::input('tahun'))
                                        <a href="/rekap/pdf?tahun={{Request::input('tahun')}}" id="btnExport" class="btn btn-primary">Export PDF</a>
                                        @else
                                        <a href="/rekap/pdf" id="btnExport" class="btn btn-primary">Export PDF</a>
                                        @endif

                                </div>
                                    
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
       

     

        <!-- App js -->
        <script src="/assets/js/app.js"></script>
        
    </body>

</html>
