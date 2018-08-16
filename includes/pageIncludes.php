<?php

function printHeader(){
   
   print('<nav class="navbar navbar-default navbar-fixed-top">
        		<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header page-scroll">
	   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
		<a href="#page-top"><img src="/LeClerc/img/leclerc.png" width="90px" height="76px" alt="Le Clerc" /></a>
		<a class="navbar-brand page-scroll" ></a><br/>
							
                
            	</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
								<li class="hidden">
									<a href="#page-top"></a>
								</li>
								<li>
									<a class="page-scroll" href="#services">Services</a>
								</li>
								<li>
									<a class="page-scroll" href="#portfolio">Portfolio</a>
								</li>
								<li>
									<a class="page-scroll" href="#about">About</a>
								</li>
								<li>
									<a class="page-scroll" href="#team">Team</a>
								</li>
								<li>
									<a class="page-scroll" href="#contact">Contact</a>
								</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
			<header>
				<div class="container">
					<div class="intro-text">
						<div class="intro-lead-in"> </div>
						<div class="intro-heading">Electrical and Building Systems Management</div>
						<a href="#services" class="page-scroll btn btn-xl">More Info</a>
					</div>
				</div>
			</header>') ;


  };

	function printFooter(){
				
		print('<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<span class="copyright">Copyright &copy; Leclerctt 2018</span>
						</div>
						<div class="col-md-4">
							<ul class="list-inline social-buttons">
								<li><a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
						</div>
						 <div class="col-md-4">
							<ul class="list-inline quicklinks">
								<li><a href="#">Privacy Policy</a>
								</li>
								<li><a href="#">Terms of Use</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			
	};');
	
  };
?>