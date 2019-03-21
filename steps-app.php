<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Deal Shopster</title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/lib/jqueryui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/separate/pages/widgets.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/separate/vendor/jquery-steps.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/stepper.css">
</head>
<body>

<header class="site-header full">
    <div class="container">
    	<a href="#">
    		<img src="img/return-logo.gif" width="229" height="50" />
    	</a>
    </div>
</header>

<div class="stepper">
	<div class="container">
		<!-- Circles which indicates the steps of the form: -->
		<div class="step-indicator">
			<ul>
				<li>
					<p class="step-label">Installation</p> 
					<span class="step finish"></span>
				</li>
				<li>
					<p class="step-label">Set up your shop</p> 
					<span class="step"></span>
				</li>
				<li>
					<p class="step-label">Email Setup</p> 
					<span class="step"></span>
				</li>
				<li>
					<p class="step-label">Finish</p> 
					<span class="step"></span>
				</li>
			</ul>
		</div>
	</div>

	<div class="full-content">
	<div class="container">
		<form id="regForm" action="">

		<div class="tab">
			<div class="row">
				<div class="col-md-6">
					<img src="img/step1-img.jpg" alt="" width="571" height="655" />
				</div>
				<div class="col-md-6">
					<div class="sub-container">
						<div class="sub-header">
							<h5>Install Return to Cart Application</h5>
						</div>
						<div class="sub-content">
							<h4 class="color-black">Hi there, welcome!</h4>
							<p>Click below to Facebook connect with Return to Cart. This enables Return to Cart to manage your Facebook Messenger messages. This is necessary to send personalized messages like Abandon Cart messages.</p>	
							<p><i class="fa fa-warning"></i> Installation process...</p>
							<p>
								<ol>
									<li>Excepteur sint occaecat cupida <span class="label label-primary">Here</span> tat non proident.</li>
									<li>sunt in culpa qui officia deserunt moliit anim id est laborum.</li>
									<li>Ut enim and nimim vemiam, quis nostrud excertation uliamco laboris nisi ut aliquip ex ea commondo consequat.</li>
								</ol>
							</p>

							<div class="step-btn">
							    <button type="button" class="btn" id="nextBtn" onclick="nextPrev(1)">Continue</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tab">
			<div class="row">
				<div class="col-md-6">
					<img src="img/step2-img.jpg" alt="" width="571" height="655" />
				</div>
				<div class="col-md-6">
					<div class="sub-container">
						<div class="sub-header">
							<h5>Let Us Know Your Details</h5>
						</div>
						<div class="sub-content">
							<h4 class="color-black">Your shop details</h4>
							<fieldset class="form-group">
								<label class="form-label color-black" for="exampleInputEmail1">FULL NAME</label>
								<p><input class="form-control" placeholder="Your Name"></p>

								<label class="form-label color-black" for="exampleInputEmail1">Password</label>
								<p><input class="form-control" type="password" placeholder="Input Password"></p>
	
								<label class="form-label color-black" for="exampleInputEmail1">SHOP URL</label>
								<p><input class="form-control" type="password" placeholder="www."></p>
							</fieldset>

							<div class="step-btn">
								<button type="button" class="btn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
							    <button type="button" class="btn" id="nextBtn" onclick="nextPrev(1)">Continue</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tab">
			<div class="row">
				<div class="col-md-6">
					<img src="img/step3-img.jpg" alt="" width="571" height="655" />
				</div>
				<div class="col-md-6">
					<div class="sub-container">
						<div class="sub-header">
							<h5>Let Us Know Your Details</h5>
						</div>
						<div class="sub-content">
							<h4 class="color-black">Your email details</h4>
							<fieldset class="form-group">
								<label class="form-label color-black" for="exampleInputEmail1">SHOP NAME</label>
								<p><input class="form-control" placeholder="Your Shop Name"></p>

								<label class="form-label color-black" for="exampleInputEmail1">CUSTOMER SERVICE EMAIL</label>
								<p><input class="form-control" type="password" placeholder="Input Password"></p>
							</fieldset>

							<div class="step-btn">
								<button type="button" class="btn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
							    <button type="button" class="btn" id="nextBtn" onclick="nextPrev(1)">Continue</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tab">
			<div class="row">
				<div class="col-md-6">
					<img src="img/step4-img.jpg" alt="" width="571" height="655" />
				</div>
				<div class="col-md-6">
					<div class="sub-container">
						<div class="sub-header">
							<h5>Almost Done!</h5>
						</div>
						<div class="sub-content">
							<h4 class="color-black">What page do you want to send messages from?</h4>
							<fieldset class="form-group">
								<label class="form-label color-black" for="exampleInputEmail1">YOUR SHOPS FACEBOOK PAGE</label>
								<p><input class="form-control" placeholder="My Developer Page (12341513)"></p>
							</fieldset>

							<div class="step-btn">
								<button type="button" class="btn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
							    <button type="button" class="btn" id="nextBtn" onclick="nextPrev(1)">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/stepper.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>
</body>
</html>