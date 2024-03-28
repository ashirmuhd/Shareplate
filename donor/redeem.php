<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['pgasoid']==0)) {
  header('location:logout.php');
  } else{

?>


<!DOCTYPE html>
<head>
<title>Food Waste Management System||Search Food Listed Details </title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include_once('includes/header.php');?>
<!--header end-->
<!--sidebar start-->
<?php include_once('includes/sidebar.php');?>
<!--sidebar end-->
<!--main content start-->



<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
 <div class="panel panel-default">
    
    <div>
       <form class="cmxform form-horizontal" method="post" action="" name="search">
                                   
                                    <div class="form-group ">
                                        
                                    </div>
                                    
                                   
                                    
                                    </div>

                                </form>










<div class="product">
<h2>The Points You Have : 10</h2>
<br>
<br>
<br>
  <h2>Product Name</h2>
  <p>Price: $10</p>
  <p>Points Required: 100</p>
  <form action="redeem.php" method="post">
    <input type="hidden" name="product_id" value="1">
    <button type="submit">Redeem</button>
  </form>
</div>
<?php
function redeemPoints($userId, $productId) {
    // Connect to database (not shown)
    $product = getProductDetails($productId);
    $userPoints = getUserPoints($userId);
  
    if ($userPoints >= $product['points_required']) {
      updateUserPoints($userId, $product['points_required'] * -1);
      recordTransaction($userId, $productId);
      return true;
    } else {
      return false;
    }
  }
  
?>

</section>
 <!-- footer -->
     <?php include_once('includes/footer.php');?>  
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
<?php }  ?>