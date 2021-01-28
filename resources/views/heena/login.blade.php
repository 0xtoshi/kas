
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{ $meta['title'] }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="SIMBA SISTEM INFORMASI KAS KARANGTARUNA" name="description" />
        <meta content="Heena" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <link href="/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="/plugins/animate/animate.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="/assets/images/logo-sm-dark.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">{{ $meta['title'] }}</h4>   
                                        <p class="text-muted  mb-0">{{ $meta['diskripsi'] }}</p>  
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active font-weight-semibold" data-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a>
                                        </li>
                                        
                                    </ul>
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">                                        
                                            <form class="form-horizontal auth-form" id="simba_login" action="">
                
                                                <div class="form-group mb-2">
                                                    <label for="username">Username</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
                                                    </div>                                    
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-2">
                                                    <label for="userpassword">Password</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Masukan Password">
                                                    </div>                               
                                                </div><!--end form-group--> 

                                                <div class="form-group mb-2">
                                                    <label for="tipe">Pilih Tipe Anda</label>                                            
                                                    <div class="input-group">                                  
                                                    <select name="role" id="tipe" class="custom-select">
                                                        <option value="Administrator" selected="">Administrator</option>
                                                        <option value="Ketua">Ketua</option>
                                                        <option value="Bendahara">Bendahara</option>
                                                        <option value="Wakil Bendahara">Wakil Bendahara</option>
                                                        <option value="Anggota">Anggota</option>
                                                    </select>
                                                    </div>                               
                                                </div><!--end form-group--> 

                                                
                    
                                               
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                           
                                        </div>
                                        
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">{{ $meta['app_name'] }} &copy; {{ date('Y') }}</span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/waves.js"></script>
        <script src="/assets/js/feather.min.js"></script>
        <script src="/assets/js/simplebar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

        <script>
        $(document).ready(() => {
          $('form[id=simba_login]').submit((e) => {
            e.preventDefault();
            var simba_data = $('form[id=simba_login]').serialize();
            console.log(simba_data);
            $.ajax({
              url: '/pengguna/login',
              type: 'POST',
              data: simba_data,
              success : (data) => {
                //console.log(data);
                swal({
                    title: "Suksess 😽!",
                    text: "Login sukes anda akan diarahkan!",
                    type: "success",
                    icon: "success",
                }).then(function() {
                    window.location = "/beranda";
                });
              },
              error : (data) => {
                swal({
                    title: "Error 😿!",
                    text: "Pastikan Username dan Password Benar!",
                    type: "error",
                    icon: "error",
                });
              }
            })
          })
        })
      </script>

        
    </body>

</html>