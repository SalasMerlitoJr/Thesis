
<?php 

include '../../../../includes/connect.php';
include 'admin_SESSION.php';

$msg = 0;

// Import data code using csv
if (isset($_POST['import'])) {
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");
        $i = 0;
        while (($column = fgetcsv($file)) !== FALSE) {
            if ($i > 0) {
                if (!empty($column[0])) {
                    //$insertdate = date("Y-m-d", strtotime(str_replace('/', '-', $column[3])));
                    $sql = "INSERT into tbl_users (name,login,password,gender,phone,role) 
                    values ('" . $column[0] . "','" . $column[1] . "','" . md5($column[2]) . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "')";
                    $result = mysqli_query($conn, $sql);
                    if (isset($result)) {
                        $msg++;
                    }
                }
            }
            $i++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" type="text/css" href="responsive.css">-->
  
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->
  <!--<meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">-->

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../../admin_assets/css/style.css">

  <title>Faculty Management</title>

  <link rel="stylesheet" href="../../admin_css/font-awesome.min.css">
  <link rel="stylesheet" href="../../admin_css/bootstrap.min.css">
  <link rel="stylesheet" href="../../admin_css/bootstrap-social.css">
  <link rel="stylesheet" href="../../admin_css/bootstrap-select.css">
  <link rel="stylesheet" href="../../admin_css/style_dup.css">

  <link rel="stylesheet" href="../../admin_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../admin_css/awesome-bootstrap-checkbox.css">

  <!--<link href="csv_Import_style.css" rel="stylesheet" type="text/css"/>-->
  <link href="manageStudents_csv.css" rel="stylesheet" type="text/css"/>

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../../admin_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../../admin_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="../manageAcc.php">My Account</a></li></center>
          <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
          <center><li class="cd-nav__sub-item"><a href="../../../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label"><span>Main</span></li>-->
        <li class="main-label">admin Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>
        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="../../index.php">Dashboard</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 1</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 1</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 1</a></li></center>
          </ul>-->
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">          
          <ul class="cd-side__sub-list"></ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a>User Management</a>
          
          <ul class="cd-side__sub-list">
            <center><li  class="cd-side__sub-item"><a href="manageStudents_csv.php">Student Management</a></li></center>
            <center><li style="background-color:#4169E1" class="cd-side__sub-item"><a href="../manageFaculty.php">Faculty Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="../manageSecretary.php">Secretary Management</a></li></center>
          </ul>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label">  <span>Separate</span></li>-->
        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 3</a>-->
          <a href="../advisoryAssignment.php">Advisory Assignment</a>
          
          <ul class="cd-side__sub-list">
            <!--<center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>-->
          </ul>
        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 4</a>-->
          <a href="../panelAssignment.php">Panel Assignment</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 4</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 4</a></li></center>
          </ul>-->
        </li>
    
        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="../defenseSchedule.php">Defense Schedule</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
          </ul>-->
        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="../manuscript.php">Thesis Manuscripts</a>
        </li>
      </ul>

    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Faculty Management Page</h2></center>

            <!------------->
            
    <!--<div class="csv_section" style="margin-left: 0.4em">
        <div class="import_section" style="margin-left: 6em">
            <form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data">
                <div class="input-row" style="margin-top: 1px;">
                    <label class="col-md-4 control-label">Choose CSV File</label> 
                      <input type="file" name="file" id="file" accept=".csv">

                    <button type="submit" id="submit" name="import" class="btn-submit">IMPORT CSV</button>
                </div>
                <div id="response"></div>
            </form>
        </div>
    </div>-->

<!--<div class="head">
  <div class="row">
    <div class="col-6">
        <form class="form-horizontal" style="margin-left: 10em" method="post" name="uploadCSV" enctype="multipart/form-data">
        <input type="file" name="file" id="file" accept=".csv">
      </div>
      <div class="col-6">
      <button type="submit" id="submit" name="import" class="btn-submit">IMPORT CSV</button>
    </div>
    </form>
  </div>
  </div>
</div>-->

  <form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data">
      <label class="col-md-4 control-label">Choose CSV File</label> 
        <input type="file" name="file" id="file" accept=".csv">
      <button type="submit" id="submit" name="import" class="btn-submit">IMPORT CSV</button>
    </form>


    <?php
    if ($msg > 0) {  ?>
        <div class="msg">CSV data us imported successfully.</div>
    <?php
    }
    ?>
    <div class="row" style="margin-top: 3em">
          <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-heading">Faculty List</div>
              <div class="panel-body">
              <!--<?php  /*if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php } */?> -->
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Gender</th>
                      <th>Phone Number</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>

<!--<?php $sql /* = "SELECT * from  users ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{     */  ?>  -->
<?php
  include '../../../../includes/connect.php';
  $sql = "SELECT * from tbl_users where role = 2;";
  $records = mysqli_query($conn, $sql);
  while  ($row = mysqli_fetch_object($records)) {

?>

                    <tr>
                      <td><?php echo htmlentities($row->id);?></td>
                      <!--td><img src="../images/<?php // echo htmlentities($result->image);?>" style="width:50px; border-radius:50%;"/></td>-->
                      <td><?php echo htmlentities($row->name);?></td>
                      <td><?php echo htmlentities($row->login);?></td>
                      <td><?php echo htmlentities($row->password);?></td>
                      <td><?php echo htmlentities($row->gender);?></td>
                      <td><?php echo htmlentities($row->phone);?></td>
                      <!--<td><?php // echo htmlentities($result->designation);?></td>-->
                      <!--<td><?php /* if($result->status == 1)
                                                    {?>
                                                    <a href="userlist.php?confirm=<?php  echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Disable the Account')">Enable <i class="fa fa-check-circle"></i></a> 
                                                    <?php } else {?>
                                                    <a href="userlist.php?unconfirm=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Enable the Account')">Disable <i class="fa fa-times-circle"></i></a>
                                                    <?php } */ ?> 

                      </td>-->
                      
<td>
<!--<a href="edit-user.php?edit=<?php // echo $result->id;?>" onclick="return confirm('Do you want to Edit');">&nbsp; <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;-->
<a href="gg.php" onclick="return confirm('Do you want to Edit');"> edit - <!--<i class="fa fa-pencil"></i>--></a>
<!--<a href="userlist.php?del=<?php /*echo $result->id;?>&name=<?php echo htmlentities($result->email); */?>" onclick="return confirm('Do you want to Delete');"><i class="fa fa-trash" style="color:red"></i></a>&nbsp;&nbsp;-->
<a href="gg.php" onclick="return confirm('Do you want to Delete');"> delete<!--<i class="fa fa-trash"></i>--></a>
</td>
                    </tr>
                    <?php } ?>
                                       
                    <!--<?php $cnt //  =$cnt+1; }} ?> -->
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

  <!------->
  </main> <!-- .cd-main-content -->

  <script src="manageStudents_csv.js" type="text/javascript"></script>

  <script src="../../admin_assets/js/util.js"></script>
  <script src="../../admin_assets/js/menu-aim.js"></script>
  <script src="../../admin_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../../admin_js/jquery.min.js"></script>
  <script src="../../admin_js/bootstrap-select.min.js"></script>
  <script src="../../admin_js/bootstrap.min.js"></script>
  <script src="../../admin_js/jquery.dataTables.min.js"></script>
  <script src="../../admin_js/dataTables.bootstrap.min.js"></script>
  <script src="../../admin_js/Chart.min.js"></script>
  <script src="../../admin_js/fileinput.js"></script>
  <script src="../../admin_js/chartData.js"></script>
  <script src="../../admin_js/main.js"></script>

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 3000);
          });
    </script>

</body>
</html>