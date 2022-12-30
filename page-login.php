<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <title>Login Mahasiswa</title>
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="./images/mylogo/logo3.png">
   <link href="your-project-dir/icon-font/lineicons.css" rel="stylesheet">
   <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
   <link href="/css/style.css" rel="stylesheet">
</head>

<body class="h-100 bg-gray-dark">
   <div class="authincation h-100">
      <div class="container h-100">
         <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
               <div class="authincation-content">
                  <div class="row no-gutters">
                     <div class="col-xl-12">
                        <div class="auth-form">
                           <div class="text-center">
                           <img class=" w-25 h-25 mb-3" src="/images/mylogo/logo3.png" alt="">
                        </div>
                           <h4 class="text-center mb-4">Sistem informasi Data Mahasiswa</h4>
                           <form action="template-home.php">
                              <div class="form-group">
                                 <label class="mb-1"><strong>Npm</strong></label>
                                 <input type="text" class="form-control" placeholder="Nomor Pokok Mahasiswa" required   >
                              </div>
                              <div class="form-group">
                                 <label class="mb-1"><strong>Password</strong></label>
                                 <input type="password" class="form-control" placeholder="Passowrd" required>
                              </div>
                              <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox ml-1">
                                       <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                       <label class="custom-control-label" for="basic_checkbox_1">Remember my
                                          preference</label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <a href="page-forgot-password.html">Forgot Password?</a>
                                 </div>
                              </div>
                              <div class="text-center">
                                 <button type="submit" class="btn btn-primary btn-block">Login</button>
                              </div>
                              <div class="text-center new-account">
                                 <button type="submit" class="btn btn-skype mt-2 btn-block">Register</button>
                              </div>
                           </form>
                           <div class="social-media text-primary mt-4">
                              <a href="https://github.com/andri-io" target="_blank"><i class="lni lni-github"></i></a>
                              <a href="#" target="_blank"><i class="lni lni-facebook"></i></a>
                              <a href="#" target="_blank"><i class="lni lni-linkedin"></i></a>
                             
                          </div>
                           <div class="text-center mt-4">
                              <p>Copyright © Andri | 2023</p>                          
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <!--**********************************
        Scripts
    ***********************************-->
   <!-- Required vendors -->
   <script src="./vendor/global/global.min.js"></script>
   <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
   <script src="./js/custom.min.js"></script>
   <script src="./js/deznav-init.js"></script>

</body>

</html>