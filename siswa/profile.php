<!DOCTYPE html>

<?php 
session_start();

$id	= $_GET['id']; 

 include_once("proses/koneksi.php");

					if($conn->connect_error){
						die('Connection Error :'.$conn->connect_error);
					}
					$sql = mysqli_query($conn,"SELECT * FROM tb_siswa as s join tb_kelas as k  on s.id_kelas = k.id_kelas join tb_jurusan as j on s.id_jurusan = j.id_jurusan where nipd='$id'");

                	$data = mysqli_fetch_array($sql);


?>


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
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/mediaelementplayer.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/red.css"/>
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
                 <b>SIMON</b>
                </a>
              <ul class="nav navbar-nav navbar-right user-nav" style="margin-right:5%;">
                <li class="user-name"><span><?php echo $_SESSION['nama_sekolah']; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="../admin_sekolah/asset/foto/siswa/<?php echo $_SESSION['foto']; ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href="lockscreen.php"><span class="fa fa-lock"></span></a></li>
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
              <li class="active ripple">
                <a href="profile.php?id=<?php echo $_SESSION['nipd']; ?>"><span class="fa-home fa"></span> Profil Siswa</a>
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

              

              
              
              <li><a href="tentang.php">Tentang Aplikasi</a></li>
              </ul>
            </div>
        </div>
          <!-- end: Left Menu -->


          <!-- start: Content -->
          <div id="content" class="profile-v1">
             <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                <div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
                    <div class="profile-v1-pp">
                      <img style="height:100px; width:90px;"  src="asset/foto/siswa/<?php echo $data['foto']; ?>"/>
                    <font color="#fff" ><h4><?php echo $data['nama_siswa']; ?></h4></font>
                      
                    </div>
                    <div class="col-md-12 profile-v1-cover" >
                      <img  src="asset/img/bg1.jpg" class="img-responsive" >
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                      <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
                          <h1>S</h1>
                          <p>Smart</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
                           <h1>S</h1>
                           <p>Strategi</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                          <h1>S</h1>
                          <p>Success</p>
                        </div>
                    </div>
                </div>
             </div>




 <div class="col-md-12">
                  <div class="col-md-12">
                    <div class="col-md-12 tabs-area">
                      <div class="liner"></div>
                      <ul class="nav nav-tabs nav-tabs-v5" id="tabs-demo6">
                        <li class="active">
                         <a href="#tabs-demo6-area1" data-toggle="tab" title="Profil">
                          <span class="round-tabs one">
                            <i class="icons icon-emotsmile"></i>
                          </span> 
                        </a>
                      </li>
                </ul>
                <div class="tab-content tab-content-v5">
                  <div class="tab-pane fade in active" id="tabs-demo6-area1">

                    <h3 class="head text-center">Profil Siswa<sup>™</sup> <span style="color:#f48250;">♥</span></h3>
                    
                    <div class="col-md-12">

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            	<center><img src="asset/img/avatar.jpg" style="width:20%;"  class="form-text"/></center>	
                            </div> 

                    <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr class="panel bg-success box-shadow-none" >
                        <th><center><font color="white">Data</font></center></th>
                        <th><center><font color="white">Keterangan</font></center></th>
                       

                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                    
                   
					 
               echo"  <tr>
                        <td><span class='fa fa-asterisk' style ='margin-right:10%;'></span>ID</td>
                        <td>".$data['nipd']."</td> 	
                      </tr>
                     
                      <tr>
                        <td><span class='fa fa-odnoklassniki-square' style ='margin-right:10%;'></span>NISN</td>
                        <td>".$data['nisn']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-odnoklassniki' style ='margin-right:10%;'></span>NIS</td>
                        <td>".$data['npsn']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-smile-o' style ='margin-right:10%;'></span>Nama</td>
                        <td>".$data['nama_siswa']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-intersex' style ='margin-right:10%;'></span>Jenis Kelamin</td>
                        <td>".$data['jk']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-bed' style ='margin-right:10%;'></span>Tempat Lahir</td>
                        <td>".$data['tmp_lahir']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-calendar-check-o' style ='margin-right:10%;'></span>Tanggal Lhir</td>
                        <td>".$data['tgl_lahir']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-tty' style ='margin-right:10%;'></span>Telfon</td>
                        <td>".$data['telefon']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-moon-o' style ='margin-right:10%;'></span>Agama</td>
                        <td>".$data['agama']."<td>
                        
                      <tr>
                        <td><span class='fa-home fa' style ='margin-right:10%;'></span>Alamat</td>
                        <td>".$data['alamat']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-flag' style ='margin-right:10%;'></span>Kewarganegaraan</td>
                        <td>".$data['negara']."</td> 	
                      </tr>
                     
                      <tr>
                        <td><span class='fa fa-male' style ='margin-right:10%;'></span>Nama Ayah</td>
                        <td>".$data['nama_ayah']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-suitcase' style ='margin-right:10%;'></span>Pekerjaan Ayah</td>
                        <td>".$data['pekerjaan_ayah']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-female' style ='margin-right:10%;'></span>Nama Ibu</td>
                        <td>".$data['nama_ibu']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-suitcase' style ='margin-right:10%;'></span>Pekerjaan Ibu</td>
                        <td>".$data['pekerjaan_ibu']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-users' style ='margin-right:10%;'></span>Nama Wali</td>
                        <td>".$data['nama_wali']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-suitcase' style ='margin-right:10%;'></span>Pekerjaan Wali</td>
                        <td>".$data['pekerjaan_wali']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-child' style ='margin-right:10%;'></span>Anak ke</td>
                        <td>".$data['anak_ke']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-university' style ='margin-right:10%;'></span>Kelas</td>
                        <td>".$data['nama_kelas']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-book' style ='margin-right:10%;'></span>Jurusan</td>
                        <td>".$data['nama_jurusan']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-building' style ='margin-right:10%;'></span>Asal Sekolah</td>
                        <td>".$data['asal_sekolah']."</td> 	
                      </tr>

					";?>
                    </tbody>
                  </table>

                  

                  </div>

                    </div>

                  </div>
                  

          </div>
          <!-- end: content -->


  
          <!-- start: right menu -->
            <div id="right-menu">
              <ul class="nav nav-tabs">
                <li class="active">
                 <a data-toggle="tab" href="#right-menu-user">
                  <span class="fa fa-comment-o fa-2x"></span>
                 </a>
                </li>
                <li>
                 <a data-toggle="tab" href="#right-menu-notif">
                  <span class="fa fa-bell-o fa-2x"></span>
                 </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#right-menu-config">
                   <span class="fa fa-cog fa-2x"></span>
                  </a>
                 </li>
              </ul>

              <div class="tab-content">
                <div id="right-menu-user" class="tab-pane fade in active">
                  <div class="search col-md-12">
                    <input type="text" placeholder="search.."/>
                  </div>
                  <div class="user col-md-12">
                   <ul class="nav nav-list">
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="away">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-desktop"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>

                  </ul>
                </div>
                <!-- Chatbox -->
                <div class="col-md-12 chatbox">
                  <div class="col-md-12">
                    <a href="#" class="close-chat">X</a><h4>Akihiko Avaron</h4>
                  </div>
                  <div class="chat-area">
                    <div class="chat-area-content">
                      <div class="msg_container_base">
                        <div class="row msg_container send">
                          <div class="col-md-9 col-xs-9 bubble">
                            <div class="messages msg_sent">
                              <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                              </div>
                            </div>
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                          </div>

                          <div class="row msg_container receive">
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                            <div class="col-md-9 col-xs-9 bubble">
                              <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                  tiny master db, and huge document store</p>
                                  <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                              </div>
                            </div>

                            <div class="row msg_container send">
                              <div class="col-md-9 col-xs-9 bubble">
                                <div class="messages msg_sent">
                                  <p>that mongodb thing looks good, huh?
                                    tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                  </div>
                                </div>
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                              </div>

                              <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                                <div class="col-md-9 col-xs-9 bubble">
                                  <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh?
                                      tiny master db, and huge document store</p>
                                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                  </div>
                                </div>

                                <div class="row msg_container send">
                                  <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_sent">
                                      <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                      </div>
                                    </div>
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                  </div>

                                  <div class="row msg_container receive">
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                    <div class="col-md-9 col-xs-9 bubble">
                                      <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh?
                                          tiny master db, and huge document store</p>
                                          <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-input">
                                <textarea placeholder="type your message here.."></textarea>
                              </div>
                              <div class="user-list">
                                <ul>
                                  <li class="online">
                                    <a href=""  data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <div class="user-avatar"><img src="asset/img/avatar.jpg" alt="user name"></div>
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div id="right-menu-notif" class="tab-pane fade">

                            <ul class="mini-timeline">
                              <li class="mini-timeline-highlight">
                               <div class="mini-timeline-panel">
                                <h5 class="time">07:00</h5>
                                <p>Coding!!</p>
                              </div>
                            </li>

                            <li class="mini-timeline-highlight">
                             <div class="mini-timeline-panel">
                              <h5 class="time">09:00</h5>
                              <p>Playing The Games</p>
                            </div>
                          </li>
                          <li class="mini-timeline-highlight">
                           <div class="mini-timeline-panel">
                            <h5 class="time">12:00</h5>
                            <p>Meeting with <a href="#">Clients</a></p>
                          </div>
                        </li>
                        <li class="mini-timeline-highlight mini-timeline-warning">
                         <div class="mini-timeline-panel">
                          <h5 class="time">15:00</h5>
                          <p>Breakdown the Personal PC</p>
                        </div>
                      </li>
                      <li class="mini-timeline-highlight mini-timeline-info">
                       <div class="mini-timeline-panel">
                        <h5 class="time">15:00</h5>
                        <p>Checking Server!</p>
                      </div>
                    </li>
                    <li class="mini-timeline-highlight mini-timeline-success">
                      <div class="mini-timeline-panel">
                        <h5 class="time">16:01</h5>
                        <p>Hacking The public wifi</p>
                      </div>
                    </li>
                    <li class="mini-timeline-highlight mini-timeline-danger">
                      <div class="mini-timeline-panel">
                        <h5 class="time">21:00</h5>
                        <p>Sleep!</p>
                      </div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>

                </div>
                <div id="right-menu-config" class="tab-pane fade">
                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Notification</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-info">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                        <label class="onoffswitch-label" for="myonoffswitch1"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Custom Designer</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                        <label class="onoffswitch-label" for="myonoffswitch2"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Autologin</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                        <label class="onoffswitch-label" for="myonoffswitch3"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto Hacking</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
                        <label class="onoffswitch-label" for="myonoffswitch4"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto locking</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
                        <label class="onoffswitch-label" for="myonoffswitch5"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>FireWall</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
                        <label class="onoffswitch-label" for="myonoffswitch6"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>CSRF Max</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch7" checked>
                        <label class="onoffswitch-label" for="myonoffswitch7"></label>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Man In The Middle</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch8" checked>
                        <label class="onoffswitch-label" for="myonoffswitch8"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto Repair</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch9" checked>
                        <label class="onoffswitch-label" for="myonoffswitch9"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input type="button" value="More.." class="btnmore">
                  </div>

                </div>
              </div>
            </div>  
          <!-- end: right menu -->
          
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                <li class="active ripple">
                <a href="index.php"><span class="fa-home fa"></span> Dashboard</a>
              </li>
              <li class="active ripple">
                <a href="profile.php?id=<?php echo $_SESSION['nipd']; ?>"><span class="fa-home fa"></span> Profil Siswa</a>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-users"></span> Data Karyawan  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_karyawan.php">Data Induk Karyawan</a></li>
                  <li><a href="data_guru.php">Data Guru</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-pencil"></span> Data Akademik  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_jadwal.php">Data Jadwal</a></li>
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
<script src="asset/js/plugins/icheck.min.js"></script>
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/mediaelement-and-player.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $('input').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
   $('video,audio').mediaelementplayer({
            alwaysShowControls: true,
            videoVolume: 'vertical',
            features: ['playpause','progress','volume','fullscreen']
          });
 });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example2').DataTable();
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example3').DataTable();
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example4').DataTable();
  });
</script>

<script type="text/javascript">
$(document).ready(function(){
	$(document).on('click','#getUser', function(e){
		e.preventDefault();
		var uid = $(this).data('id');
		$('#dynamic-content').hide();

		$.ajax({
			type:'POST',
			url:'submit2.php',
			data:{id:uid},
			dataType:'json'
		}).done(function(data){
			console.log(data);
			$('#dynamic-content').show(); // show dynamic div
			$('#txt_fname').html(data.fname);
			$('#txt_lname').html(data.lname);
			$('#txt_email').html(data.email);
			$('#txt_position').html(data.phone);
		}).fail(function(){

			$('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
		});
	});
});
</script>




<!-- end: Javascript -->
</body>
</html>