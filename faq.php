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

<h1 class="page-header">Frequently Asked Questions</h1>

<!--<div class="navigation tabs">--> 

<button class="accordion">What is IO Shopping? </button>
<div class="panel">
<p class="lead">Io Shopping Pty (Ltd) is new startup, South African based eCommerce platform that is focused on selling a variety of products spanning from a range of the top latest consumer electronics, gadgets, IoT devices and selected household brands.</p>
</div>

<button class="accordion">How can I pay?</button>
<div class="panel">
  <p class="lead">Io Shopping Pty (Ltd) supports the following payment gateways which are widely used and very secure. Find out more about Cyber Security by reading through the Privacy Policy <a href="pp.php">here</a>. Here's a list of the supported payment gateways; </p>
  <p><li><a href="https://www.payfast.co.za">Payfast</a></li></p> 
  <p><li><a href="https://www.paypal.com">Paypal</a></li></p>
  <p><li><a href="https://www.payoneer.com">Payoneer</a></li></p>
  

</div>

<button class="accordion">Can I track my parcel</button>
<div class="panel">
  <p class="lead">Yes, IO Shopping uses state of the art Third Party tracking software sothat our users can securley track their parcels when purchased. Track and Trace parcels domesticly and internationally in realtime via the app which can be downloaded <a href="https://www.fastway.co.za/">here</a>, find out more about the tracking service <a href="https://www.fastway.co.za/our-services/track-your-parcel/">here</a>.</p> 
</div>

<button class="accordion">Additional Queries</button>
<div class="panel">
  <p class="lead">For further information, kindly visit our our Contacts section <a href="contacts.php">here</a> and we'd be more than delighted to assist with any other queries.</p>
</div>


<h1><a href="index.php"><i class="fa fa-home"></a></i></h1>
		     
</div>
</div>
<?php $pdo->close(); ?>
<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<?php include 'includes/analytics.php'; ?>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>