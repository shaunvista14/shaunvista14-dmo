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

<h1 class="page-header">Organisation</h1>
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </p>

<h1 class="page-header">Our Leaders</h1>

<!-- Photo Grid-->
<div class='col-sm-4'>
<div class='box box-solid'>
<div class='box-body prod-body'>
<img src='images/ceo.jpeg' width='100%' height='230px' class='thumbnail' alt="CEO">
<h5 align="center"><a href="#">CEO</a></h5>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-4">
<div class='box box-solid'>
<div class='box-body prod-body'>
<img src='images/cto.jpeg' width='100%' height='230px' class='thumbnail' alt="CFO">
<h5 align="center"><a href="#">CFO</a></h5>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-4">
<div class='box box-solid'>
<div class='box-body prod-body'>
<img src='images/cfo.jpeg' width='100%' height='230px' class='thumbnail' alt="CTO">
<h5 align="center"><a href="#">CTO</a></h5>
</div>
</div>
</div>
</div>

<h1 class="page-header">Our Team</h1> 
<!--<p>is for our customers to find value for their money while shopping on our platform with an end goal to enrich their user-experience.</p>-->
<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>



<!--<p><a href="#"><strong><h3>Our Vision</h3></a></strong>
<h1 class="page-header">Our Team </h1>
<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</p>
<!--to ensure our customers are completely satisfied with their onlineshopping experience and delivery service.</p>-->
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