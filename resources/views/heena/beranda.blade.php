
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
        <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
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

    
                    <li class="list-group-item">
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
                                <a class=" btn btn-sm btn-danger" href="#" role="button"><i class="fas fa-home mr-2"></i>Beranda</a>
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
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title"><i class="fas fa-database"></i> Data</h4>                      
                                        </div><!--end col-->

                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body"> 
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-xl"> 
                                        <div class="card">
                                            <div class="card-body bg-primary-50 white-text">
                                                <div class="row align-items-center">
                                                <i class="fas fa-user-alt text-white fa-3x "></i>
                                                    <div class="col text-center">                                                            
                                                        <span class="h4 text-white">{{ $meta['total_pengguna'] }}</span>      
                                                        <h6 class="text-uppercase mt-2 m-0 text-white">Anggota</h6>                
                                                    </div><!--end col-->
                                                </div> <!-- end row -->
                                            </div><!--end card-body-->
                                        </div> <!--end card-body-->                     
                                    </div><!--end col-->
                                    <div class="col-12 col-lg-6 col-xl"> 
                                        <div class="card">
                                            <div class="card-body bg-success-50">
                                                <div class="row align-items-center">
                                                    <i class="fas fa-arrow-circle-down text-white fa-3x"></i>
                                                    <div class="col text-center">
                                                                                                                                
                                                        <span class="h4 text-white">@currency($meta['total_kasMasuk'])</span>      
                                                        <h6 class="text-uppercase text-white mt-2 m-0">Total Kas Masuk</h6>                
                                                    </div><!--end col-->
                                                </div> <!-- end row -->
                                            </div><!--end card-body-->
                                        </div> <!--end card-body-->                     
                                    </div><!--end col-->
                                    <div class="col-12 col-lg-6 col-xl"> 
                                        <div class="card">
                                            <div class="card-body bg-danger-50">
                                                <div class="row align-items-center">
                                                <i class="fas fas fa-arrow-circle-up text-white fa-3x"></i>
                                                    <div class="col text-center">                                                                        
                                                        <span class="h4 text-white">@currency($meta['total_kasKeluar'])</span>      
                                                        <h6 class="text-uppercase text-white mt-2 m-0">Total Kas Keluar</h6>                
                                                    </div><!--end col-->
                                                </div> <!-- end row -->
                                            </div><!--end card-body-->
                                        </div> <!--end card-body-->                     
                                    </div><!--end col-->
                                    <div class="col-12 col-lg-6 col-xl"> 
                                        <div class="card">
                                            <div class="card-body bg-pink-50">
                                                <div class="row align-items-center">
                                                    <i class="fas fas fas fa-wallet text-white fa-3x"></i>
                                                    <div class="col text-center">                                                                        
                                                    <span class="h4 text-white">@currency($meta['saldo_tersisa'])</span> 
                                                        <h6 class="text-uppercase text-white mt-2 m-0">Saldo Tersisa</h6>                
                                                    </div><!--end col-->
                                                </div> <!-- end row -->
                                            </div><!--end card-body-->
                                        </div> <!--end card-->                     
                                    </div><!--end col-->                                
                            </div><!--end row-->        


                            <div class="row">
                                    <div class="col-12 col-lg-6 col-xl"> 
                                        <div class="card">
                                            <div class="card-body bg-success">
                                                <div class="row align-items-center">
                                                <i class="fas fa-arrow-circle-down text-white fa-3x"></i>
                                                    <div class="col text-center">
                                                                                                                                
                                                        <span class="h4 text-white">@currency($meta['kasMasuk_BulanIni'])</span>      
                                                        <h6 class="text-uppercase text-white mt-2 m-0">Kas Masuk Bulan Ini</h6>                
                                                    </div><!--end col-->
                                                </div> <!-- end row -->
                                            </div><!--end card-body-->
                                        </div> <!--end card-body-->                     
                                    </div><!--end col-->
                                    <div class="col-12 col-lg-6 col-xl"> 
                                        <div class="card">
                                            <div class="card-body bg-danger">
                                                <div class="row align-items-center">
                                                <i class="fas fa-arrow-circle-up text-white fa-3x"></i>
                                                    <div class="col text-center">                                                                        
                                                        <span class="h4 text-white">@currency($meta['kasKeluar_BulanIni'])</span>      
                                                        <h6 class="text-uppercase text-white mt-2 m-0">Kas Keluar Bulan Ini</h6>                
                                                    </div><!--end col-->
                                                </div> <!-- end row -->
                                            </div><!--end card-body-->
                                        </div> <!--end card-body-->                     
                                    </div><!--end col-->
                                  
                            </div><!--end row-->                                                                                                                   
                                </div><!--end card-body--> 
                            </div><!--end card-->  
                            
                        </div><!-- end col--> 

                        <div class="col-lg-3">
                            
                            <div class="card"> 
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title"><i class="fas fa-chart-pie"></i> Rasio Presentasi Kas</h4>                   
                                        </div><!--end col-->  
                                                                           
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="text-center">
                                        <div id="ana_device" class="apex-charts"></div>
                                        
                                    </div>                                                                                            
                                </div><!--end card-body-->                                
                            </div><!--end card-->   
                        </div><!-- end col-->                                                          
                    </div><!--end row-->
                    
                    <div class="row">
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
                                                    
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                            @foreach ($meta['data_pengguna'] as $key => $value)
                                                <tr>                                                       
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value->nama }}</td>
                                                    <td>{{ $value->username }}</td>
                                                    <td>{{ $value->role }}</td>
                                                    <td>{{ $value->created_at }}</td>
                                                </tr><!--end tr-->     
                                            @endforeach      
                                                                     
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->   
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title"><i class="fas fa-money-check-alt"></i> Laporan Kas Terakhir</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">#</th>
                                                    <th class="border-top-0">Tanggal</th>
                                                    <th class="border-top-0">Tipe</th>
                                                    <th class="border-top-0">Nominal</th>
                                                    <th class="border-top-0">Keterangan</th>
                                                    
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                            @foreach ($meta['kas_terakhir'] as $key => $value)
                                                <tr>                                                       
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value->tanggal }}</td>
                                                    
                                                    @if( $value->tipe == 'kas_masuk' )
                                                    <td><span class="badge badge-success"><i data-feather="arrow-down-circle" class="align-self-center menu-icon"></i> Kas Masuk</span></td>
                                                    @elseif ( $value->tipe == 'kas_keluar' )
                                                    <td><span class="badge badge-danger"><i data-feather="arrow-up-circle" class="align-self-center menu-icon"></i> Kas Keluar</span></td>
                                                    @endif
                                                    <td>@currency($value->nominal)</td>
                                                    <td>{{ $value->keterangan }}</td>
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

        


        <!-- jQuery  -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/metismenu.min.js"></script>
        <script src="/assets/js/waves.js"></script>
        <script src="/assets/js/feather.min.js"></script>
        <script src="/assets/js/simplebar.min.js"></script>
        <script src="/assets/js/moment.js"></script>
        <script src="../plugins/daterangepicker/daterangepicker.js"></script>

        <script src="../plugins/apex-charts/apexcharts.min.js"></script>
        <script src="/assets/pages/jquery.sales_dashboard.init.js"></script>

        <!-- App js -->
        <script src="/assets/js/app.js"></script>


        <script>

        var chart;
        options = {
            chart: {
                height: 270,
                type: "donut"
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: "85%"
                    }
                }
            },
            dataLabels: {
                enabled: !1
            },
            stroke: {
                show: !0,
                width: 2,
                colors: ["transparent"]
            },
            series: [{{ $meta['presentasi_kasMasuk'] }}, {{ $meta['presentasi_kasKeluar'] }}],
            legend: {
                show: !0,
                position: "bottom",
                horizontalAlign: "center",
                verticalAlign: "middle",
                floating: !1,
                fontSize: "13px",
                offsetX: 0,
                offsetY: 0
            },
            labels: ["Kas Masuk", "Kas Keluar"],
            colors: ["#27ae60", "#c0392b"],
            responsive: [{
                breakpoint: 600,
                options: {
                    plotOptions: {
                        donut: {
                            customScale: .2
                        }
                    },
                    chart: {
                        height: 240
                    },
                    legend: {
                        show: !1
                    }
                }
            }],
            tooltip: {
                y: {
                    formatter: function (e) {
                        return e + " %"
                    }
                }
            }
        };
        (chart = new ApexCharts(document.querySelector("#ana_device"), options)).render();

        </script>

        
    </body>

</html>
