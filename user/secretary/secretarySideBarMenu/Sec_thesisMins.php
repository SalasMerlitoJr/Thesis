<?php include 'secretary_SESSION.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->
  <!--<meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">-->

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../secretary_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="../secretary_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../secretary_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../secretary_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../secretary_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../secretary_css/style.css">

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../secretary_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
    </div>
    
    <!--<div class="cd-search js-cd-search">-->
    <div class="js-cd-search">
      <form>
        <!--<center><h3 class="thesis-title" style="color:white; margin-top: 1em">BSIT-USTP Thesis Management System</h3></center>-->
        <center><h3 class="thesis-title">USTP-BSIT Thesis Management System</h3></center>
      </form>
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><!--<a href="#0">Tour</a></li>-->
      <li class="cd-nav__item"><!--<a href="#0">Support</a></li>-->
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <img src="../secretary_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="accountManagement_secretary.php">My Account</a></li></center>
          <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
          <center><li class="cd-nav__sub-item"><a href="../../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label"><span>Main</span></li>-->
        <li class="main-label">secretary Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>

        

        <li class="cd-side__item--selected ">          
        </li>
    
        
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">

      	<li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="Sec_defSched.php">Defense Schedule</a>
        </li>
      	<li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">

          <a href="Sec_thesisMins.php">Thesis Minutes</a>

        </li>
       
      </ul>

    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Thesis Minutes Page</h2></center>
            
          </div>
        </div>
      </div>
    </div>
  <!------->
  </main> <!-- .cd-main-content -->
  <script src="../secretary_assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="../secretary_assets/js/menu-aim.js"></script>
  <script src="../secretary_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../secretary_js/jquery.min.js"></script>
  <script src="../secretary_js/bootstrap-select.min.js"></script>
  <script src="../secretary_js/bootstrap.min.js"></script>
  <script src="../secretary_js/jquery.dataTables.min.js"></script>
  <script src="../secretary_js/dataTables.bootstrap.min.js"></script>
  <script src="../secretary_js/Chart.min.js"></script>
  <script src="../secretary_js/fileinput.js"></script>
  <script src="../secretary_js/chartData.js"></script>
  <script src="../secretary_js/main.js"></script>

</body>
</html>