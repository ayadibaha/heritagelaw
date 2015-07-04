<!DOCTYPE html>
<html>
<head>
<title>Heritage Law Marketing</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="files/style.css">
<link rel="stylesheet" type="text/css" href="files/bootstrap-social.css">
<link rel="stylesheet" type="text/css" href="files/font-awesome.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#">
        <img alt="Brand" src="files/logo.png">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li role="separator" class="divider"></li>
        <li><a href="directories.php">Directories</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="leads.php">Leads</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="contact.php">Contact</a></li>
        <li class="phone"><span class="glyphicon glyphicon-earphone"></span><h4>(540) 383-5557</h4></li>
        <li><button class="btn signin"><img class="img-responsive" src="files/key.png"></img>SIGN IN</button></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="row">
	<div class="earth">
		<div class="container">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 header">
				<h3>Clients are looking for you</h3>
				<h5>Let's bridge language and cultural barriers in the legal field</h5>
				<button class="btn forleads">SignUp for leads</button>
				<button class="btn brnet">Browse Our Network</button>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<img class="img-responsive peo" src="files/peo.png"></img>
			</div>
		</div>
	</div>
</div>
<div class="row vanish">
	<div class="container">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 comleft">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 leftdiv">
					<h5>Our Legal Directories</h5>
					<p>Donec id ilit</p>
					<button class="btn btn-primary">View Directories</button>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 rightdiv">
					<h5>Lead generation services</h5>
					<p>Donec id ilit</p>
					<button class="btn btn-primary">Sign Up for leads</button>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 comright">
			<div class="container">
				<button class="btn btn-primary">Learn More</button>
			</div>
		</div>
	</div>
</div>
<div class="row signup">
	<div class="container">
		<h5>Sign Up for leads</h5>
		<div class="sign">
			<p>Fill out the following form to recieve information about leads looking for your skills in your area.You'll be able to see case description from each lead and decide whether
				to purchase that lead or not.</p>
			<form id="form" method="post" action="#">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<td class="form-group has-feedback has-feedback-left">
								<input class="form-control" placeholder="Attorney's Name"></input>
              					<i class="form-control-feedback glyphicon glyphicon-user"></i>
							</td>
							<td class="form-group has-feedback has-feedback-left">
								<input class="form-control" placeholder="Attorney's email address"></input>
              					<i class="form-control-feedback glyphicon glyphicon-envelope"></i>
							</td>
						</tr>
						<tr>
							<td class="form-group has-feedback has-feedback-left">
								<input class="form-control" placeholder="Law firm website"></input>
              					<i class="form-control-feedback glyphicon glyphicon-link"></i>
							</td>
							<td class="form-group has-feedback has-feedback-left">
								<input class="form-control" placeholder="Law firm phone number"></input>
              					<i style="top:0px" class="form-control-feedback glyphicon glyphicon-earphone"></i>
							</td>
						</tr>
						<tr id="selecting">
							<td class="form-group has-feedback has-feedback-left">
								<input class="form-control" placeholder="Law firm address"></input>
              					<i class="form-control-feedback glyphicon glyphicon-map-marker"></i>
							</td>
							<td>
								<select class="form-control" style="display:inline;float:left;">
									<option value="">Country</option>
                  				</select>
                  				<select class="form-control" style="position:inline;">
                  					<option value="">State</option>
                  				</select>
							</td>
						</tr>
						<tr>
							<td class="form-group has-feedback has-feedback-left">
								<input class="form-control" placeholder="City"></input>
              					<i class="form-control-feedback glyphicon glyphicon-home"></i>
							</td>
							<td class="form-group has-feedback has-feedback-left">
								<input class="form-control" placeholder="Zip Code"></input>
              					<i class="form-control-feedback glyphicon glyphicon-info-sign"></i>
							</td>
						</tr>
						<tr>
							<td>
								<select class="form-control" style="position:inline;">
									<option value="">Practice Area</option>
                  				</select>
							</td>
							<td>
								<select class="form-control" style="position:inline;">
									<option value="">Languages</option>
                  				</select>
							</td>
						</tr>
						<!--<tr>
							<td>
								
							</td>
						</tr>-->
					</table>
				</div>
			</form>
			<div>
				<button type="submit" form="form" class="signupbutton">Sign Up for leads</button>
				<p><span class="spam">We'll never spam you</span></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<h3 class="testimonialheader">Testimonials</h3>
</div>
<div class="row">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="container">
				<div class="row"><img class="img-responsive testipic" src="files/1.jpg"></img></div>
				<div class="row"><p class="lname"><strong>Lawyer Name</strong><br>Attorney at LawFirm</p></div>
				<div class="row"><img class="img-responsive logo" src="files/jef.jpg"></img></div>
				<div class="row"><p class="testdes text-justify">"Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibe."</p></div>
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="container">
				<div class="row"><img class="img-responsive testipic" src="files/2.jpg"></img></div>
				<div class="row"><p class="lname"><strong>Lawyer Name</strong><br>Attorney at LawFirm</p></p></div>
				<div class="row"><img class="img-responsive logo" src="files/firm.jpg"></img></div>
				<div class="row"><p class="testdes text-justify">"Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibe."</p></div>
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="container">
				<div class="row"><img class="img-responsive testipic" src="files/3.png"></img></div>
				<div class="row"><p class="lname"><strong>Lawyer Name</strong><br>Attorney at LawFirm</p></p></div>
				<div class="row"><img class="img-responsive logo"  src="files/law.png"></img></div>
				<div class="row"><p class="testdes text-justify">"Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibe."</p></div>
			</div>
		</div>
	</div>
</div>
<div class="row goodmarketing">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><p>Some good marketing copy to urge them</p></div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><button class="btn btn-success">SIGN UP For Leads</button></div>
	</div>
</div>
<div class="row quicklinks">
	<div class="container">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<div class="row">
				<div class="container">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 add"><h5 class="hlm"><span class="glyphicon glyphicon-map-marker round"></span>Heritage Law Marketing</h5><p>2300 Richmond Avenue #215<br>Houston, Texas 77098<br>(540) 383-5557<br>support@heritagelawmarketing.com</p></div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<h5><span class="glyphicon glyphicon-link round"></span>Quick Links</h5>
								<ul>
									<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Home</a></li>
									<li><a href="about.php"><span class="glyphicon glyphicon-chevron-right"></span> About</a></li>
									<li><a href=""><span class="glyphicon glyphicon-chevron-right"></span> Portfolio</a></li>
									<li><a href=""><span class="glyphicon glyphicon-chevron-right"></span> Services</a></li>
									<li><a href=""><span class="glyphicon glyphicon-chevron-right"></span> Sign Up</a></li>
									<li><a href="contact.php"><span class="glyphicon glyphicon-chevron-right"></span> Contact</a></li>
								</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="row"><img class="img-responsive sig" src="files/sig.png"></img></div>
			<div class="row icons">
				<a class="round" href="#"><i class="fa fa-facebook"></i></a>
				<a class="round" href="#"><i class="fa fa-twitter"></i></a>
				<a class="round" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="round" href="#"><i class="fa fa-google"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="row foot">
	<div class="container">
		<p>2015 Heritage Law Marketing, LLC. All Right Reserved</p>
		<div class="pull-right">
			<img class="img-responsive" style="margin-left:-60%;" src="files/bbb.png"></img>
			<img class="img-responsive" style="width:109px" src="files/comodo.png"></img>
		</div>
	</div>
</div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>