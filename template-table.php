<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <title>Haku | Table</title>
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="./images/mylogo/logo.png">
   <!-- Datatable -->
   <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
   <link rel="stylesheet" href="./js/file-export/buttons.dataTables.min.css">
   <!-- Custom Stylesheet -->
   <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
   <link href="./css/style.css" rel="stylesheet">

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
   <!--*******************
        Preloader end
    ********************-->


   <!--**********************************
        Main wrapper start
    ***********************************-->
   <div id="main-wrapper">

      <!-- Nav header start -->
      <?php include "template-nav-header.php" ?>
      <!-- Nav header end -->

      <!-- Header start -->
      <?php include "template-header.php" ?>
      <!-- Header end ti-comment-alt -->

      <!-- Sidebar start -->
      <?php include "template-sidebar.php" ?>
      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">
         <div class="container-fluid">
            <div class="page-titles">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                  <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
               </ol>
            </div>
            <!-- row -->


            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Data mahasiswa</h4>
                        <a href="template-home.php" class="btn btn-rounded btn-primary"><span
                              class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                           </span>Add</a>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive ">
                           <table id="example" class="display min-w850 ">
                              <thead class="table-primary ">
                                 <tr>
                                    <th>Nomor</th>
                                    <th>Action</th>
                                    <th>Nama</th>
                                    <th>Npm</th>
                                    <th>Kelas</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>
                                       <div class="d-flex">
                                          <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                          <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                       </div>
                                    </td>
                                    <td>Andrie</td>
                                    <td>679981</td>
                                    <td>3G</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>
                                       <div class="d-flex">
                                          <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                          <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                       </div>
                                    </td>
                                    <td>Arif</td>
                                    <td>679982</td>
                                    <td>3G</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>
                                       <div class="d-flex">
                                          <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                          <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                       </div>
                                    </td>
                                    <td>Bayhaqy</td>
                                    <td>679983</td>
                                    <td>3G</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>
                                       <div class="d-flex">
                                          <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                          <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                       </div>
                                    </td>
                                    <td>Eos</td>
                                    <td>679984</td>
                                    <td>3G</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th>Nomor</th>
                                    <th>Action</th>
                                    <th>Nama</th>
                                    <th>Npm</th>
                                    <th>Kelas</th>
                                    <th>Status</th>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <!--**********************************
            Content body end
        ***********************************-->


               <!--**********************************
            Footer start
        ***********************************-->
               <?php include "template-footer.php" ?>
               <!--**********************************
            Footer end
        ***********************************-->

               <!--**********************************
           Support ticket button start
        ***********************************-->

               <!--**********************************
           Support ticket button end
        ***********************************-->


            </div>
            <!--**********************************
        Main wrapper end
    ***********************************-->

            <!--**********************************
        Scripts
    ***********************************-->
            <!-- Required vendors -->
            <script src="./vendor/global/global.min.js"></script>
            <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
            <script src="./js/custom.min.js"></script>
            <script src="./js/deznav-init.js"></script>

            <!-- Datatable -->
            <!--File export -->
            <script src="js/file-export/jquery.dataTables.min.js"></script>
            <script src="js/file-export/dataTables.buttons.min.js"></script>
            <script src="js/file-export/zip.min.js"></script>
            <script src="js/file-export/pdfmake.min.js"></script>
            <script src="js/file-export/vfs_fonts.js"></script>
            <script src="js/file-export/buttons.html5.min.js"></script>
            <script src="js/file-export/buttons.print.min.js"></script>
            <script>
               $(document).ready(function () {
                  $('#example').DataTable({
                     dom: 'Bfrtip',
                     buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                     ],
                     order: [[2, 'asc']]
                  });
               });
            </script>
</body>

</html>