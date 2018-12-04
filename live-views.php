<?php include('header-2.php');?>

	<?php include('nav.php');?>

	<div class="page-content"> 
		<div class="container-fluid">
			<div class="text-center p-b-1">
				<h5>Live View</h5>
			</div>
			<section class="live box-typical box-typical-dashboard panel panel-view panel-default scrollable">
                <header class="box-typical-header panel-heading ">
                    <div class="title-header p-a-md p-b-0">
	                    <h6 class="subtext">
	                    	Listening for live activity
	                	</h6>
	                    <span class="time">04:00</span>
	                </div>
	                <div class="indicator">
	                	<button class="btn-live m-l-md">
                    		<i class="fa fa-circle"></i>
                    		Your Live
                    	</button>
	                </div>
	                <div class="live-stream">
	                	<button class="btn-live m-l-md">
                    		<i class="fa fa-circle"></i>
                    		Go Live
                    	</button>
	                </div>
                </header>
               	<div class="card-block">
					<div class="text-center p-a-lg">
						<img src="img/live-img.jpg" alt="" width="663" height="469" />
					</div>
				</div>	
			</section>

			<section class="live-views box-typical box-typical-padding">
				<div class="row">
					<div class="col-md-6 info">
						<div class="img-holder">
							<img src="img/img-placeholder.jpg" alt="" width="62" height="62" />
						</div>
						<div class="meta-info">
							<h5>Fetching Event</h5>
							<p>Lorem Ipsum dolor sit</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="viewers">
							<div class="user-photo">
								<img src="img/photo-64-2.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett" width="38" height="38">
								<i class="fa fa-thumbs-up"></i>
							</div>
							<div class="user-photo comment">
								<img src="img/photo-64-2.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett" width="38" height="38">
								<i class="fa fa-comment"></i>
							</div>
							<div class="total-views">
								<div class="d-inline">
									<i class="font-icon font-icon-eye"></i> 
									Watch
								</div>
								<div class="total">36</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div><!--.page-content-->

<?php include('footer.php');?>