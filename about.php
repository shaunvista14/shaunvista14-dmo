<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

<?php include 'includes/navbar.php'; ?>
	 
<div class="content-wrapper">
<div class="container">


<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-sm-9">

<h1 class="page-header">Get to know us</h1>
<p>Like all new startup companies, we passionate and ecstatic about making change that impacts Technology and Society in a positive and constructive way, carving innovation and evolution into the hearts of every person we meet along this digital journey. <strong>Without Innovation and Evolution there is no progress, without progress there is no tomorrowland</strong> - Shaun Van Der Merwe </p>

<!-- Photo Grid-->
<div class='col-sm-4'>
<div class='box box-solid'>
<div class='box-body prod-body'>
<img src='images/team1.jpg' width='100%' height='230px' class='thumbnail'>
<h5 align="center"><a href="#">Plan</a></h5>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-4">
<div class='box box-solid'>
<div class='box-body prod-body'>
<img src='images/team2.jpg' width='100%' height='230px' class='thumbnail'>
<h5 align="center"><a href="#">Build</a></h5>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-4">
<div class='box box-solid'>
<div class='box-body prod-body'>
<img src='images/team3.jpg' width='100%' height='230px' class='thumbnail'>
<h5 align="center"><a href="tracking.php">Execute</a></h5>

</div>
</div>
</div>
</div>

<p>&nbsp; &nbsp; Join the winning team <a href="careers.php">now!</a></p>
<br></br>


<h1><a href="index.php"><i class="fa fa-home"></a></i></h1>
</div>


</div>
</div>
<?php $pdo->close(); ?>
<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

</body>
</html>