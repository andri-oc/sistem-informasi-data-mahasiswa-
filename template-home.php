<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <title>Haku | Dashboard</title>
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="./images/mylogo/logo3.png">
   <link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
   <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/mystyle.css">
   <link href="./css/style.css" rel="stylesheet">
   <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

</head>

<body>

   <!--*******************
        Preloader start
    ********************-->
   <div id="preloader">
      <div class="sk-three-bounce">
         <div class="sk-child sk-bounce1"></div>
         <div class="sk-child sk-bounce2"></div>
         <div class="sk-child sk-bounce3"></div>
      </div>
   </div>

   <!-- Preloader end -->

   <!-- Main wrapper start -->

   <div id="main-wrapper">

      <!-- Nav header start -->
      <?php include "template-nav-header.php" ?>
      <!-- Nav header end -->

      <!-- Header start -->
      <?php include "template-header.php" ?>
      <!-- Header end ti-comment-alt -->

      <!-- Sidebar start -->
      <?php include "template-sidebar.php" ?>
      <!-- Sidebar end -->

      <!-- Content body start -->
      <div class="content-body">
         <!-- row -->
         <div class="container-fluid">
            <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
               <div class="mr-auto d-none d-lg-block">
                  <h3 class="text-black font-w600">Selamat datang !</h3>
                  <p class="mb-0 fs-18">Anda Login sebagai <span class="font-w600"> Mahasiswa</span> Silahkan mengelola
                     aplikasi pada menu samping kiri</p>
               </div>

               <div class="input-group search-area ml-auto d-inline-flex">
                  <input type="text" class="form-control" placeholder="Search here">
                  <div class="input-group-append">
                     <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                  </div>
               </div>
               <a href="javascript:void(0);" class="settings-icon  ml-3"><i
                     class="flaticon-381-settings-2 mr-0"></i></a>
            </div>
            <div class="row">
               <div class="col-xl-3 col-xxl-6 col-sm-6">
                  <div class="card gradient-bx text-white bg-danger rounded">
                     <div class="card-body">
                        <div class="media align-items-center">
                           <div class="media-body">
                              <p class="mb-1">Laki-laki</p>
                              <div class="d-flex flex-wrap">
                                 <h2 class="fs-40 font-w600 text-white mb-0 mr-3">783</h2>
                              </div>
                           </div>
                           <span class="border rounded-circle p-4">
                              <?xml version="1.0" encoding="utf-8"?>
                              <svg fill="#ffff" width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 448 512">
                                 <path
                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-xxl-6 col-sm-6">
                  <div class="card gradient-bx text-white bg-success rounded">
                     <div class="card-body">
                        <div class="media align-items-center">
                           <div class="media-body">
                              <p class="mb-1">Perempuan</p>
                              <div class="d-flex flex-wrap">
                                 <h2 class="fs-40 font-w600 text-white mb-0 mr-3">76</h2>
                              </div>
                           </div>
                           <span class="border rounded-circle p-4">
                              <?xml version="1.0" encoding="utf-8"?>
                              <svg fill="#ffff" width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 448 512">
                                 <path
                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-xxl-6 col-sm-6">
                  <div class="card gradient-bx text-white bg-info rounded">
                     <div class="card-body">
                        <div class="media align-items-center">
                           <div class="media-body">
                              <p class="mb-1">Kelas BJM</p>
                              <div class="d-flex flex-wrap">
                                 <h2 class="fs-40 font-w600 text-white mb-0 mr-3">76</h2>
                              </div>
                           </div>
                           <span class="border rounded-circle p-4">
                              <?xml version="1.0" encoding="utf-8"?>
                              <svg fill="#ffff" width="52" height="52" version="1.1" id="lni_lni-book"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                 xml:space="preserve">
                                 <g>
                                    <path
                                       d="M39.9,51.3H24.1c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8h15.8c1,0,1.8-0.8,1.8-1.8S40.9,51.3,39.9,51.3z" />
                                    <path d="M23.8,33.8h16.5c2.1,0,3.8-1.7,3.8-3.8v-6.2c0-2.1-1.7-3.8-3.8-3.8H23.8c-2.1,0-3.8,1.7-3.8,3.8V30
         C20,32.1,21.7,33.8,23.8,33.8z M23.5,23.8c0-0.1,0.1-0.3,0.3-0.3h16.5c0.1,0,0.3,0.1,0.3,0.3V30c0,0.1-0.1,0.3-0.3,0.3H23.8
         c-0.1,0-0.3-0.1-0.3-0.3V23.8z" />
                                    <path
                                       d="M16.4,4.8h36.7c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8H16.4c-3.8,0-6.9,2.9-7.2,6.7c0,0.1,0,0.2,0,0.3V57
         c0,3.2,2.8,5.8,6.2,5.8h34.1c2.6,0,4.7-2.1,4.7-4.7V16.5c0-2.6-2.1-4.7-4.7-4.7H16.2c0,0,0,0,0,0c0,0,0,0,0,0
         c-2.1,0-3.4-1.3-3.4-3.3C12.7,6.4,14.3,4.8,16.4,4.8z M16.1,15.3C16.1,15.3,16.1,15.3,16.1,15.3C16.1,15.3,16.2,15.3,16.1,15.3
         h33.3c0.7,0,1.2,0.5,1.2,1.2v41.6c0,0.7-0.5,1.2-1.2,1.2H15.3c-1.4,0-2.7-1-2.7-2.3V14.5C13.6,15,14.8,15.3,16.1,15.3z" />
                                 </g>
                              </svg>

                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-xxl-6 col-sm-6">
                  <div class="card gradient-bx text-white bg-secondary rounded">
                     <div class="card-body">
                        <div class="media align-items-center">
                           <div class="media-body">
                              <p class="mb-1">Kelas BJB</p>
                              <div class="d-flex flex-wrap">
                                 <h2 class="fs-40 font-w600 text-white mb-0 mr-3">56</h2>
                                 <div>
                                 </div>
                              </div>
                           </div>
                           <span class="border rounded-circle p-4">
                              <?xml version="1.0" encoding="utf-8"?>
                              <svg fill="#ffff" width="52" height="52" version="1.1" id="lni_lni-book"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                 xml:space="preserve">
                                 <g>
                                    <path
                                       d="M39.9,51.3H24.1c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8h15.8c1,0,1.8-0.8,1.8-1.8S40.9,51.3,39.9,51.3z" />
                                    <path d="M23.8,33.8h16.5c2.1,0,3.8-1.7,3.8-3.8v-6.2c0-2.1-1.7-3.8-3.8-3.8H23.8c-2.1,0-3.8,1.7-3.8,3.8V30
                                       C20,32.1,21.7,33.8,23.8,33.8z M23.5,23.8c0-0.1,0.1-0.3,0.3-0.3h16.5c0.1,0,0.3,0.1,0.3,0.3V30c0,0.1-0.1,0.3-0.3,0.3H23.8
                                       c-0.1,0-0.3-0.1-0.3-0.3V23.8z" />
                                    <path
                                       d="M16.4,4.8h36.7c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8H16.4c-3.8,0-6.9,2.9-7.2,6.7c0,0.1,0,0.2,0,0.3V57
                                       c0,3.2,2.8,5.8,6.2,5.8h34.1c2.6,0,4.7-2.1,4.7-4.7V16.5c0-2.6-2.1-4.7-4.7-4.7H16.2c0,0,0,0,0,0c0,0,0,0,0,0
                                       c-2.1,0-3.4-1.3-3.4-3.3C12.7,6.4,14.3,4.8,16.4,4.8z M16.1,15.3C16.1,15.3,16.1,15.3,16.1,15.3C16.1,15.3,16.2,15.3,16.1,15.3
                                       h33.3c0.7,0,1.2,0.5,1.2,1.2v41.6c0,0.7-0.5,1.2-1.2,1.2H15.3c-1.4,0-2.7-1-2.7-2.3V14.5C13.6,15,14.8,15.3,16.1,15.3z" />
                                 </g>
                              </svg>

                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-xxl-4 col-lg-4">
                  <div class="card">
                     <div class="card-header border-0 pb-0">
                        <h3 class="fs-20 mb-0 text-black">Genre</h3>
                        <div class="dropdown d-inline-block">
                           <div class="btn-link text-primary dropdown-toggle mb-0 fs-14 text-primary"
                              data-toggle="dropdown">
                              <span class="font-w500">2023</span>
                           </div>
                           <div class="dropdown-menu dropdown-menu-left">
                              <a class="dropdown-item" href="javascript:void(0);">2022</a>
                              <a class="dropdown-item" href="javascript:void(0);">2020s</a>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <div>
                           <span class="text-info fs-26 font-w600 mr-3">512</span>
                           <span class="text-secondary fs-18 font-w400">612</span>
                        </div>
                        <div id="line-chart"></div>
                     </div>
                  </div>
               </div>
               <!-- static -->
               <div class="col-xl-9 col-xxl-8 col-lg-8">
                  <div class="card">
                     <div class="card-header d-sm-flex d-block border-0 pb-0">
                        <h3 class="fs-20 mb-3 mb-sm-0 text-black">Data Mahasiswa</h3>
                        <div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mt-sm-0">
                           <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
                                    Monthly
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#weekly" role="tab">
                                    Weekly
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#today" role="tab">
                                    Today
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="card-body">
                        <div id="chartBar"></div>
                     </div>
                  </div>
               </div>

               <!-- table -->
               <div class="container-fluid ">
                  <div class="row">
                     <div class="col-lg-12 ">
                        <div class="card ">
                           <div class="container">
                              <div class="card-header">
                                 <h4 class="card-title">Data Mahasiswa Terbaru</h4>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                       <thead>
                                          <tr>
                                             <th class="width80"><strong>#</strong></th>
                                             <th><strong>PATIENT</strong></th>
                                             <th><strong>DR NAME</strong></th>
                                             <th><strong>DATE</strong></th>
                                             <th><strong>STATUS</strong></th>
                                             <th><strong>PRICE</strong></th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td><strong>01</strong></td>
                                             <td>Mr. Bobby</td>
                                             <td>Dr. Jackson</td>
                                             <td>01 August 2020</td>
                                             <td><span class="badge light badge-success">Successful</span></td>
                                             <td>$21.56</td>
                                             <td>
                                                <div class="dropdown">
                                                   <button type="button" class="btn btn-success light sharp"
                                                      data-toggle="dropdown">
                                                      <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                         <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                         </g>
                                                      </svg>
                                                   </button>
                                                   <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="#">Edit</a>
                                                      <a class="dropdown-item" href="#">Delete</a>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td><strong>02</strong></td>
                                             <td>Mr. Bobby</td>
                                             <td>Dr. Jackson</td>
                                             <td>01 August 2020</td>
                                             <td><span class="badge light badge-danger">Canceled</span></td>
                                             <td>$21.56</td>
                                             <td>
                                                <div class="dropdown">
                                                   <button type="button" class="btn btn-danger light sharp"
                                                      data-toggle="dropdown">
                                                      <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                         <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                         </g>
                                                      </svg>
                                                   </button>
                                                   <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="#">Edit</a>
                                                      <a class="dropdown-item" href="#">Delete</a>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td><strong>03</strong></td>
                                             <td>Mr. Bobby</td>
                                             <td>Dr. Jackson</td>
                                             <td>01 August 2020</td>
                                             <td><span class="badge light badge-warning">Pending</span></td>
                                             <td>$21.56</td>
                                             <td>
                                                <div class="dropdown">
                                                   <button type="button" class="btn btn-warning light sharp"
                                                      data-toggle="dropdown">
                                                      <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                         <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                         </g>
                                                      </svg>
                                                   </button>
                                                   <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="#">Edit</a>
                                                      <a class="dropdown-item" href="#">Delete</a>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /# card -->

               <!-- Content body end -->

               <!-- Footer start -->
               <?php include "template-footer.php" ?>
               <!-- Footer end -->


               <!-- Scripts -->
               <!-- Required vendors -->
               <script src="./vendor/global/global.min.js"></script>
               <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
               <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
               <script src="./js/custom.min.js"></script>
               <script src="./js/deznav-init.js"></script>
               <script src="./vendor/owl-carousel/owl.carousel.js"></script>
               <!-- Apex Chart -->
               <script src="./vendor/apexchart/apexchart.js"></script>
               <!-- Dashboard 1 -->
               <script src="./js/dashboard/dashboard-1.js"></script>
               <script>
                  function assignedDoctor() {
                     /*  testimonial one function by = owl.carousel.js */
                     jQuery('.assigned-doctor').owlCarousel({
                        loop: false,
                        margin: 30,
                        nav: true,
                        autoplaySpeed: 3000,
                        navSpeed: 3000,
                        paginationSpeed: 3000,
                        slideSpeed: 3000,
                        smartSpeed: 3000,
                        autoplay: false,
                        dots: false,
                        navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
                        responsive: {
                           0: {
                              items: 1
                           },
                           576: {
                              items: 2
                           },
                           767: {
                              items: 3
                           },
                           991: {
                              items: 2
                           },
                           1200: {
                              items: 3
                           },
                           1600: {
                              items: 5
                           }
                        }
                     })
                  }

                  jQuery(window).on('load', function () {
                     setTimeout(function () {
                        assignedDoctor();
                     }, 1000);
                  }); bk

               </script>

</body>

</html>