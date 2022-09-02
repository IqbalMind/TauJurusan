<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TauJurusan</title>
    <meta name="description" content="Aplikasi informasi seputar jurusan dalam bidang ilmu bagi siswa dalam mengetahui jurusan yang akan di tuju">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/Testimonials.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/untitled.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/metadata/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/metadata/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/metadata/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url()?>assets/metadata/site.webmanifest">
    <link rel="mask-icon" href="<?php echo base_url()?>assets/metadata/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="TauJurusan">
    <meta name="application-name" content="TauJurusan">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="<?php echo base_url()?>assets/metadata/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="<?php echo base_url()?>">TauJurusan</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <?php if(empty($this->session->userdata('is_login'))){ ?>
                <a class="btn btn-primary ml-auto" role="button" href="<?php echo base_url('signin')?>">Sign In</a>
                <?php }else{?>
                <div class="ml-auto">
                    <div class="btn-group">
                        <button class="btn btn-primary">
                        Halo, <?php echo $this->session->userdata('nama'); ?>
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <?php if($this->session->userdata('level') == 0){ ?>
                            <a class="dropdown-item" href="<?php echo base_url('dashboard')?>">Action</a>
                            <?php }else{ ?>
                            <a class="dropdown-item" href="#">Action</a>
                            <?php } ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('welcome/logout')?>">logout</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </nav>