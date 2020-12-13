<?php
$link=$_SERVER['PHP_SELF'];
session_start();
?>

<script type="text/javascript" src="js/cedhost.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!---header--->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="#"><span class="ced">Ced</span><span class="host"> Hosting</span></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li class=<?php echo ($link=="/training/Cedhosting/index.php")?"active":"" ?>><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li class=<?php echo ($link=="/training/Cedhosting/about.php")?"active":"" ?>><a href="about.php">About</a></li>
								 <li class=<?php echo ($link=="/training/Cedhosting/services.php")?"active":"" ?>><a href="services.php">Services</a></li>
								<!-- <li><a href="about.html">Services</a></li> -->
									 <li class="dropdown">	
									  <a href="#" class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									  <ul class="dropdown-menu" id="hostinglink">
								
									</ul>			
								    </li>
										
									</li>
									 <li class=<?php echo ($link=="/training/Cedhosting/pricing.php")?"active":"" ?>><a href="pricing.php">Pricing</a></li>
									 <li class=<?php echo ($link=="/training/Cedhosting/Blog.php")?"active":"" ?>><a href="Blog.php">Blog</a></li>
									 <li class=<?php echo ($link=="/training/Cedhosting/contact.php")?"active":"" ?>><a href="contact.php">Contact</a></li>
									 <li class=<?php echo ($link=="/training/Cedhosting/cart.php")?"active":"" ?>><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:21px"></i></a></li>
									 <?php if(empty(isset($_SESSION['User']))):?>
										<li class=<?php echo ($link=="/training/Cedhosting/login.php")?"active":"" ?>><a href="login.php">Login</a></li>
									 <?php endif?>
								
									 <?php if(isset($_SESSION['User'])):?>
									 <li class=<?php echo ($link=="/training/Cedhosting/logout.php")?"active":"" ?>><a href="logout.php">Logout</a></li>
									 <?php endif?>
								
								
							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script>
		$(document).ready(function(){		
			$.ajax({
				url :'Ajaxaction.php',
				type : 'post',
				dataType  :'json',
				data :{action:"hostinglist"},
				success : function(data) {
					html='';
					for(var i=0;i<data.length;i++){
						html+='<li><a href='+data[i]+'>'+data[i]['prod_name']+'</a></li>';
					}
					$("#hostinglink").html(html);
				}
			});
		})
		</script>
