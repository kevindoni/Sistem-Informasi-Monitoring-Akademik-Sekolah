

<?php 

$id	= $_GET['id']; 

 include_once("proses/koneksi.php");

					if($conn->connect_error){
						die('Connection Error :'.$conn->connect_error);
					}
					$sql = mysqli_query($conn,"SELECT * FROM tb_sekolah where npsn='$id'");

                  $data = mysqli_fetch_array($sql);
                  
          $nama_sekolah   = $data['nama_sekolah'];
          $nss            = $data['nss'];
          $npsn           = $data['npsn'];
          $jalan          = $data['jalan'];
          $desa           = $data['desa'];
          $kecamatan      = $data['kecamatan'];
          $kota           = $data['kota'];
          $provinsi       = $data['provinsi'];
          $telefon        = $data['telefon'];
          $kode_pos       = $data['kode_pos'];
          $tahun_berdiri  = $data['tahun_berdiri'];
          $foto           = $data['foto'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Monitoring</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/nouislider.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/bootstrap-material-datetimepicker.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard">
      <!-- start: Header -->
      <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>SISTEM INFORMASI MONITORING AKADEMIK SISWA</b>
                </a>
              <ul class="nav navbar-nav navbar-right user-nav" style="margin-right:5%;">
                <li class="user-name"><span>Akihiko Avaron</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href="../"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
          <div id="left-menu">
          <div class="sub-left-menu scroll">
            <ul class="nav nav-list">
                <li><div class="left-bg"></div></li>
                <li class="time">
                  <h1 class="animated fadeInLeft">21:00</h1>
                  <p class="animated fadeInRight">Sat,October 1st 2029</p>
                </li>
                <li class="active ripple">
                <a href="index.php"><span class="fa-home fa"></span> Dashboard</a>
              </li>
              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-graduation-cap"></span> Data Siswa  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_siswa.php">Data Induk Siswa</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-users"></span> Data Karyawan  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_karyawan.php">Data Induk Karyawan</a></li>
                  <li><a href="data_guru.php">Data Guru</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-pencil"></span> Data Akademik  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_pelajaran.php">Data Mata Pelajaran</a></li>
                  <li><a href="data_jadwal.php">Data Jadwal</a></li>
                  <li><a href="data_kelas.php">Data Jurusan Kelas</a></li>
                  <li><a href="data_absensi.php">Data Absensi Siswa</a></li>
                  <li><a href="data_nilai_siswa.php">Data Nilai Siswa</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-money"></span> Data Administrasi  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_tagihan.php">Data Tagihan</a></li>
                  <li><a href="data_administrasi.php">Data Pembayaran Siswa</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-group (alias)"></span> Data Konseling  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_pelanggaran.php">Data Pelanggaran</a></li>
                  <li><a href="data_konseling.php">Data Table Konseling</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Pesan  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_pesan_masuk.php">Pesan Masuk</a></li>
                  <li><a href="data_pesan.php">Data Pesan</a></li>
                </ul>
              </li>

              
              
              <li><a href="tentang.php">Tentang Aplikasi</a></li>
              </ul>
            </div>
        </div>
          <!-- end: Left Menu -->


          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Form Siswa</h3>
                        <p class="animated fadeInDown">
                          Form <span class="fa-angle-right fa"></span> Form Siswa
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
               
                <div class="col-md-12 padding-0">
                <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Form Data Siswa</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      
                      <div class="col-md-12">
                      
                      <form class="cmxform" method="POST" action="proses/edit_sekolah_index.php?id=<?php echo $data['foto'] ?>" enctype="multipart/form-data">
                          
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            	<center><img id="gambar" src="asset/foto/sekolah/<?php echo $data['foto'] ?>" style="width:20%;";  class="form-text"/></center>	

                            <div class="input-group fileupload-v1">
                              <input type="file" name="image" id="idgambar" class="fileupload-v1-file hidden"/>
                              <input type="text" class="form-control fileupload-v1-path" placeholder="File" disabled>
                              <span class="input-group-btn">
                                <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Pilih File</button>
                              </span>
                            </div>
                            </div>

                          <div class="col-md-6">
                         
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" name="nss" value="<?php echo $data['nss']; ?>" required>
                              <span class="bar"></span>
                              <label><span class="fa-graduation-cap fa"></span>NSS</label>
                            </div>
						  

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">

                              <input type="text" class="form-text"  name="npsn" value="<?php echo $data['npsn'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-institution fa"></span>NPSN</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" name="nama_sekolah" value="<?php echo $data['nama_sekolah'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-user fa"></span>Nama Sekolah</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="jalan" value="<?php echo $data['jalan'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Jalan</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="desa" value="<?php echo $data['desa'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Desa</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="kecamatan" value="<?php echo $data['kecamatan'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Kecamatan</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="kota" value="<?php echo $data['kota'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Kota/Kecamatan</label>
                            </div>

                          </div>

                          <div class="col-md-6">

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="provinsi" value="<?php echo $data['provinsi'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Provinsi</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="telefon" value="<?php echo $data['telefon'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Telefon</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="kode_pos" value="<?php echo $data['kode_pos'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Kode Pos</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="email" class="form-text"  name="email" value="<?php echo $data['email'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Email</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="tahun_berdiri" value="<?php echo $data['tahun_berdiri']; ?>" required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Tahun Berdiri</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text"  name="password" value="<?php echo $data['password'] ?>"; required>
                              <span class="bar"></span>
                              <label><span class="fa-bed fa"></span>Password</label>
                            </div>


                          </div>                   
                          <div class="col-md-12">
                              
                              <center><input class="submit btn btn-primary" type="submit" value="Simpan"></center>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
              
              </div>
              </div>
            </div>
          <!-- end: content -->
          
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                <li class="active ripple">
                <a href="index.php"><span class="fa-home fa"></span> Dashboard</a>
              </li>
              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-graduation-cap"></span> Data Siswa  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_siswa.php">Data Induk Siswa</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-users"></span> Data Karyawan  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_karyawan.php">Data Induk Karyawan</a></li>
                  <li><a href="data_guru.php">Data Guru</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-pencil"></span> Data Akademik  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_pelajaran.php">Data Mata Pelajaran</a></li>
                  <li><a href="data_jadwal.php">Data Jadwal</a></li>
                  <li><a href="data_kelas.php">Data Jurusan Kelas</a></li>
                  <li><a href="data_absensi.php">Data Absensi Siswa</a></li>
                  <li><a href="data_nilai_siswa.php">Data Nilai Siswa</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-money"></span> Data Administrasi  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_tagihan.php">Data Tagihan</a></li>
                  <li><a href="data_administrasi.php">Data Pembayaran Siswa</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-group (alias)"></span> Data Konseling  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_pelanggaran.php">Data Pelanggaran</a></li>
                  <li><a href="data_konseling.php">Data Table Konseling</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Pesan  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_pesan_masuk.php">Pesan Masuk</a></li>
                  <li><a href="data_pesan.php">Data Pesan</a></li>
                </ul>
              </li>

              
              
              <li><a href="tentang.php">Tentang Aplikasi</a></li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $("#signupForm").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        validate_firstname: "required",
        validate_lastname: "required",
        validate_username: {
          required: true,
          minlength: 2
        },
        validate_password: {
          required: true,
          minlength: 5
        },
        validate_confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#validate_password"
        },
        validate_email: {
          required: true,
          email: true
        },
        validate_agree: "required"
      },
      messages: {
        validate_firstname: "Please enter your firstname",
        validate_lastname: "Please enter your lastname",
        validate_username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        validate_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        validate_confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        validate_email: "Please enter a valid email address",
        validate_agree: "Please accept our policy"
      }
    });

    // propose username by combining first- and lastname
    $("#username").focus(function() {
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      if (firstname && lastname && !this.value) {
        this.value = firstname + "." + lastname;
      }
    });


    $('.mask-date').mask('00/00/0000');
    $('.mask-time').mask('00:00:00');
    $('.mask-date_time').mask('00/00/0000 00:00:00');
    $('.mask-cep').mask('00000-000');
    $('.mask-phone').mask('0000-0000');
    $('.mask-phone_with_ddd').mask('(00) 0000-0000');
    $('.mask-phone_us').mask('(000) 000-0000');
    $('.mask-mixed').mask('AAA 000-S0S');
    $('.mask-cpf').mask('000.000.000-00', {reverse: true});
    $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
    $('.mask-money2').mask("#.##0,00", {reverse: true});
    $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.mask-ip_address').mask('099.099.099.099');
    $('.mask-percent').mask('##0,00%', {reverse: true});
    $('.mask-clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.mask-placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.mask-fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/, 
          fallback: '/'
        }, 
        placeholder: "__/__/____"
      }
    });
    $('.mask-selectonfocus').mask("00/00/0000", {selectOnFocus: true});

    var options =  {onKeyPress: function(cep, e, field, options){
      var masks = ['00000-000', '0-00-00-00'];
      mask = (cep.length>7) ? masks[1] : masks[0];
      $('.mask-crazy_cep').mask(mask, options);
    }};

    $('.mask-crazy_cep').mask('00000-000', options);


    var options2 =  { 
      onComplete: function(cep) {
        alert('CEP Completed!:' + cep);
      },
      onKeyPress: function(cep, event, currentField, options){
        console.log('An key was pressed!:', cep, ' event: ', event, 
          'currentField: ', currentField, ' options: ', options);
      },
      onChange: function(cep){
        console.log('cep changed! ', cep);
      },
      onInvalid: function(val, e, f, invalid, options){
        var error = invalid[0];
        console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
      }
    };

    $('.mask-cep_with_callback').mask('00000-000', options2);

    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

    $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);



    var slider = document.getElementById('noui-slider');
    noUiSlider.create(slider, {
      start: [20, 80],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    var slider = document.getElementById('noui-range');
    noUiSlider.create(slider, {
                        start: [ 20, 80 ], // Handle start position
                        step: 10, // Slider moves in increments of '10'
                        margin: 20, // Handles must be more than '20' apart
                        connect: true, // Display a colored bar between the handles
                        direction: 'rtl', // Put '0' at the bottom of the slider
                        orientation: 'vertical', // Orient the slider vertically
                        behaviour: 'tap-drag', // Move handle on tap, bar is draggable
                        range: { // Slider can select '0' to '100'
                        'min': 0,
                        'max': 100
                      },
                        pips: { // Show a scale with the slider
                          mode: 'steps',
                          density: 2
                        }
                      });



    $(".select2-A").select2({
      placeholder: "Select a state",
      allowClear: true
    });

    $(".select2-B").select2({
      tags: true
    });

    $("#range1").ionRangeSlider({
      type: "double",
      grid: true,
      min: -1000,
      max: 1000,
      from: -500,
      to: 500
    });

    $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
    $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
    $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
    $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
    $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
    $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });


    $(".dial").knob({
      height:80
    });

    $('.dial1').trigger(
     'configure',
     {
       "min":10,
       "width":80,
       "max":80,
       "fgColor":"#FF6656",
       "skin":"tron"
     }
     );

    $('.dial2').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#FF6656",
       "skin":"tron",
       "cursor":true
     }
     );

    $('.dial3').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#27C24C",
     }
     );
  });

function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload =function (e) {
                        $('#gambar').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            
                $('#idgambar').change(function(){
                readURL(this);
            });


</script>
<!-- end: Javascript -->
</body>
</html>
