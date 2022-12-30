<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <title>Haku | Form</title>
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="./images/mylogo/logo.png">
   <!-- Custom Stylesheet -->
   <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
   <link href="./css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="/vendor/select2/css/select2.min.css">

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
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                  <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
               </ol>
            </div>
            <!-- row -->
            <div class="row">
               <div class="col-xl-12 col-lg-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Form</h4>
                     </div>
                     <div class="card-body">
                        <div class="basic-form">
                           <form>
                              <div class="form-group">
                                 <label for="nama">Nama</label>
                                 <input type="text" name="nama" id="nama" class="form-control input-default "
                                    placeholder="Nama Lengkap">
                              </div>
                              <div class="form-group mb-0">
                                 <label>Jenis Kelamin</label>
                                 <label class="radio-inline mr-3"><input type="radio" name="jk" value="laki-laki"
                                       checked> Laki-Laki</label>
                                 <label class="radio-inline mr-3"><input type="radio" name="jk" value="perempuan">
                                    Perempuan</label>
                              </div>
                              <div class="form-group">
                                 <label for="tgl-lahir">Tanggal Lahir</label>
                                 <input type="date" name="tgl-lahir" id="tgl-lahir" class="form-control input-default ">
                              </div>
                              <div class="form-group">
                                 <label for="alamat">Alamat</label>
                                 <textarea class="form-control" rows="4" id="alamat" form="alamat"
                                    placeholder="Alamat lengkap dengan jalan, RT, RW, No, Kec, Kab/Kota"></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="provinsi">Provinsi</label>
                                 <select class="form-control" name="provinsi" id="single-select">
                                    <option value="">-- PILIH PROVINSI --</option>
                                    <option value="1">Kalimantan Selatan</option>
                                    <option value="2">Kalimantan Tengah</option>
                                    <option value="3">Kalimantan Timur</option>
                                    <option value="4">Kalimantan Barat</option>
                                    <option value="5">Kalimantan Utara</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="kelas">Kelas</label>
                                 <select class="form-control" name="kelas" id="kelas">
                                    <option value="">-- PILIH KELAS --</option>
                                    <option value="1">3A</option>
                                    <option value="2">3B</option>
                                    <option value="3">3C</option>
                                    <option value="4">3E</option>
                                    <option value="5">3F</option>
                                    <option value="6">3G</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input type="checkbox" class="form-check-input" name="hobi"
                                          value="memancing">Memancing
                                    </label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input type="checkbox" class="form-check-input" name="hobi"
                                          value="kemping">Kemping
                                    </label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input type="checkbox" class="form-check-input" name="hobi" value="musik">Bermain
                                       musik
                                    </label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input type="checkbox" class="form-check-input" name="hobi"
                                          value="ngoding">Ngoding
                                    </label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input type="checkbox" class="form-check-input" name="hobi"
                                          value="jalan-jalan">Jalan-jalan
                                    </label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input type="checkbox" class="form-check-input" name="hobi"
                                          value="lainnya">lainnya
                                    </label>
                                 </div>
                              </div>
                              <label for="foto">Upload Foto</label><br>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                 </div>
                                 <div class="custom-file">
                                    <input type="file" name="foto" id="foto" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                 </div>
                              </div>
                              <label class="text-warning">Format foto JPG, JPEG, PNG, dengan ukuran maksimal 2
                                 mb</label> <br>
                              <div class="mb-3">
                                 <button type="submit" class="btn btn-primary">Simpan</button>
                                 <button type="button" class="btn btn-secondary"
                                    onclick="self.history.back()">Cancel</button>
                              </div>
                           </form>
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
            <!-- select 2 -->
            <script src="/vendor/select2/js/select2.full.min.js"></script>
            <script src="./js/plugins-init/select2-init.js"></script>





</body>

</html>