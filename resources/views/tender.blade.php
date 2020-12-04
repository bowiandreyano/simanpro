<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Simanpro IDXSTI</title>
        <meta name="description" content="Simanpro IDXSTI" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="apple-touch-icon" href="{{asset('images/logo-shortcut.png')}}" alt="Logo" />
        <link rel="shortcut icon" href="{{asset('images/logo-shortcut.png')}}" alt="Logo" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css" />
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
        <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

        <style>
            #weatherWidget .currentDesc {
                color: #ffffff !important;
            }
            .traffic-chart {
                min-height: 335px;
            }
            #flotPie1 {
                height: 150px;
            }
            #flotPie1 td {
                padding: 3px;
            }
            #flotPie1 table {
                top: 20px !important;
                right: -10px !important;
            }
            .chart-container {
                display: table;
                min-width: 270px;
                text-align: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            #flotLine5 {
                height: 105px;
            }

            #flotBarChart {
                height: 150px;
            }
            #cellPaiChart {
                height: 160px;
            }
        </style>
    </head>

    <body>
        <!-- Left Panel -->
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ url('/home') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="{{ url('/tender') }}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Tender</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-puzzle-piece"></i><a href="{{ url('/tender') }}">Detail Tender</a></li>
                                <li></li>
                                <li><i class="fa fa-fire"></i><a href="{{ url('/manage_tender') }}">Manage Tender</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="{{ url('/proyek') }}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Proyek</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="{{ url('/proyek') }}">Manage Proyek</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="{{ url('/vendor') }}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Vendor</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-th"></i><a href="{{ url('/vendor') }}">Manage Vendor</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""> <i class="menu-icon ti-email"></i>Invoice </a>
                        </li>
                        <li class="menu-title">Laporan</li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                                <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                                <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
        <!-- /#left-panel -->
        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./"><img src="images/logoidx.png" alt="Logo" /></a>
                        <a class="navbar-brand hidden" href="./"><img src="images/logo-shortcut.png" alt="Logo" /></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search" />
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>

                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger">3</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">You have 3 Notification</p>
                                    <a class="dropdown-item media" href="#">
                                        <i class="fa fa-check"></i>
                                        <p>Server #1 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <i class="fa fa-info"></i>
                                        <p>Server #2 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <i class="fa fa-warning"></i>
                                        <p>Server #3 overloaded.</p>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown for-message">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                    <span class="count bg-primary">4</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="message">
                                    <p class="red">You have 4 Mails</p>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg" /></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Jonathan Smith</span>
                                            <span class="time float-right">Just now</span>
                                            <p>Hello, this is an example msg</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg" /></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Jack Sanders</span>
                                            <span class="time float-right">5 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg" /></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Cheryl Wheeler</span>
                                            <span class="time float-right">10 minutes ago</span>
                                            <p>Hello, this is an example msg</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg" /></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Rachel Santos</span>
                                            <span class="time float-right">15 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="user-area dropdown float-right">
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a
                                            class="dropdown-item"
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                        >
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                            <!-- <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div> -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- /#header -->
            <div class="content">
                {{-- <div class="animated fadeIn"> --}}
                    <div class="row new-form">
                        {{-- <form action="{{ url('tender/') }}" method="post" enctype="multipart/form-data"> --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Detail Tender</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Tahun</label>
                                            <input id="cc-payment" name="tahun" type="date" class="form-control" aria-required="true" aria-invalid="false" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Status</label>
                                                <!-- <input id="cc-name" name="status" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span> -->
                                            <select class="form-control" name="status">
                                                <option value="status1">On Progress</option>
                                                <option value="status2">Penunjukan</option>
                                                <option value="status3">Gagal</option>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Catatan Status</label>
                                            <input id="cc-number" name="catatan_status" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Nama Proyek</label>
                                            <input id="cc-number" name="nama_proyek" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Nama Klien</label>
                                            <input id="cc-number" name="nama_klien" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Nama Unit</label>
                                            <input id="cc-number" name="nama_unit" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Nama UP Klien</label>
                                            <input id="cc-number" name="nama_up_klien" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Deskripsi Proyek</label>
                                            <input id="cc-number" name="deskripsi_proyek" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Catatan</label>
                                            <input id="cc-number" name="catatan" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <!-- <input type="hidden" name="uploadd_rfp" value="test">    "Upload file" -->
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Upload RFP/Email Request</label>
                                            <input type="file" id="file-input" name="uploadd_rfp" class="form-control">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Proposal Penawaran Keuangan</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Tanggal Surat Proposal Keuangan</label>
                                            <input id="cc-payment" name="tanggal_proposal_keuangan" type="date" class="form-control" aria-required="true" aria-invalid="false" value="">
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Nomor Surat Keuangan</label>
                                            <input id="cc-name" name="no_surat_keuangan" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="perhitungan">
                                            <label for="cc-number" class="control-label mb-1">Harga Barang</label>
                                            <input id="harga_barang_prok" name="harga_barang_keuangan" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="perhitungan">
                                            <label for="cc-number" class="control-label mb-1">Harga Jasa</label>
                                            <input id="harga_jasa_prok" name="harga_jasa_keuangan" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="perhitungan">
                                            <label for="cc-number" class="control-label mb-1">Total Prok</label>
                                            <input type="text" name="total_prok" id="total_prok" class="form-control" placeholder="Total Prok" readonly="">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $("#harga_jasa_prok, #harga_barang_prok").keyup(function() {
                                                    var harga  = $("#harga_jasa_prok").val();
                                                    var jumlah = $("#harga_barang_prok").val();

                                                    var total = parseInt(harga) + parseInt(jumlah);
                                                    $("#total_prok").val(total);
                                                });
                                            });
                                        </script>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Upload Proposal Keuangan</label>
                                            <input type="file" id="file-input" name="upload_prok" class="form-control">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Proposal Penawaran BAFO</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Tanggal Surat Proposal BAFO</label>
                                            <input id="cc-payment" name="tanggal_bafo" type="date" class="form-control" aria-required="true" aria-invalid="false" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-name" class="control-label mb-1">Nomor Surat Proposal Bafo</label>
                                            <input
                                                id="cc-name"
                                                name="no_bafo"
                                                type="text"
                                                class="form-control cc-name valid"
                                                data-val="true"
                                                data-val-required="Please enter the name on card"
                                                autocomplete="cc-name"
                                                aria-required="true"
                                                aria-invalid="false"
                                                aria-describedby="cc-name"
                                            />
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Harga Barang</label>
                                            <input
                                                id="harga_bafo"
                                                name="harga_barang_bafo"
                                                type="text"
                                                class="form-control cc-number identified visa money"
                                                value=""
                                                data-val="true"
                                                data-val-required="Please enter the card number"
                                                data-val-cc-number="Please enter a valid card number"
                                            />
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Harga Jasa</label>
                                            <input
                                                id="jasa_bafo"
                                                name="harga_jasa_bafo"
                                                type="text"
                                                class="form-control cc-number identified visa money"
                                                value=""
                                                data-val="true"
                                                data-val-required="Please enter the card number"
                                                data-val-cc-number="Please enter a valid card number"
                                            />
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Total Bafo</label>
                                            <input type="text" name="total_bafo" id="total_bafo" class="form-control money" placeholder="Total BAFO" readonly="" />
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $(".money").mask("000.000.000.000.000", { reverse: true });
                                                $("#harga_bafo, #jasa_bafo").keyup(function () {
                                                    var harga = $("#harga_bafo").val();
                                                    var jumlah = $("#jasa_bafo").val();
                                        
                                                    var total = parseInt(harga) + parseInt(jumlah);
                                                    $("#total_bafo").val(total + ".000");
                                                });
                                            });
                                        </script>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Upload Proposal BAFO</label>
                                            <input type="file" id="file-input" name="upload_bafo" class="form-control" />
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-sm btn-primary text-white" id="addForm">
                                    Tambah Vendor
                                </a>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Vendor</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Nama Vendor</label>
                                            <input id="cc-payment" name="nama_vendor" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">No Quotation</label>
                                            <input id="cc-name" name="no_qou" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Tgl Quotation</label>
                                            <input id="cc-number" name="tgl_quo" type="date" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Validate</label>
                                            <input id="cc-number" name="validate" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Upload Quotation</label>
                                            <input type="file" id="file-input" name="upload_quo" class="form-control-file">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Harga Barang</label>
                                            <input id="harga_barang" name="harga_barang" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Harga Jasa</label>
                                            <input id="harga_jasa" name="harga_jasa" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Total Harga</label>
                                            <input type="text" name="total_harga" id="total_harga" class="form-control" placeholder="Total" readonly="">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div id="newForm"></div> --}}
                        {{-- </form>  --}}
                    </div>
                    <div class="clearfix"></div>
                {{-- </div> --}}
            </div>
            <!-- Footer -->
            <footer class="site-footer">
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; IDXSTI © 2020. All Rights Reserved.
                        </div>
                        <div class="col-sm-6 text-right">Designed by <a href="https://idxsti.co.id/">IDXSTI</a></div>
                    </div>
                </div>
            </footer>
            <!-- /.site-footer -->
        </div>
        <!-- /#right-panel -->

        <script type="text/javascript">
            // add row
            var count = 0;
            $("#addForm").click(function () {
                var html = '';
                // count++;
                html += '<div class="col-md-4"><div class="card"><div class="card-header"> <strong class="card-title">Vendor</strong></div><div class="card-body"><div class="form-group"> <label for="cc-payment" class="control-label mb-1">Nama Vendor</label> <input id="cc-payment" name="nama_vendor" type="text" class="form-control" aria-required="true" aria-invalid="false" value=""></div><div class="form-group has-success"> <label for="cc-name" class="control-label mb-1">No Quotation</label> <input id="cc-name" name="no_qou" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span></div><div class="form-group"> <label for="cc-number" class="control-label mb-1">Tgl Quotation</label> <input id="cc-number" name="tgl_quo" type="date" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"> <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span></div><div class="form-group"> <label for="cc-number" class="control-label mb-1">Validate</label> <input id="cc-number" name="validate" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"> <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span></div><div class="form-group"> <label for="cc-number" class="control-label mb-1">Upload Quotation</label> <input type="file" id="file-input" name="upload_quo" class="form-control-file"> <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span></div><div class="form-group"> <label for="cc-number" class="control-label mb-1">Harga Barang</label> <input id="harga_barang" name="harga_barang" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"> <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span></div><div class="form-group"> <label for="cc-number" class="control-label mb-1">Harga Jasa</label> <input id="harga_jasa" name="harga_jasa" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"> <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span></div><div class="form-group"> <label for="cc-number" class="control-label mb-1">Total Harga</label> <input type="text" name="total_harga" id="total_harga" class="form-control" placeholder="Total" readonly=""> <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span></div></div></div></div>';
                $('.new-form').append(html);
            });
        </script>


        {{-- <script type="text/javascript">
            $(document).ready(function() {
                $("#harga_barang, #harga_jasa").keyup(function() {
                    var harga  = $("#harga_barang").val();
                    var jumlah = $("#harga_jasa").val();

                    var total = parseInt(harga) + parseInt(jumlah);
                    $("#total_harga").val(total);
                });
            });
        </script> --}}

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="assets/js/main.js"></script>

        <!--  Chart js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

        <!--Chartist Chart-->
        <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
        <script src="assets/js/init/weather-init.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
        <script src="assets/js/init/fullcalendar-init.js"></script>

        <!--Local Stuff-->
        <script>
            
        </script>
    </body>
</html>
