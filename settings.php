<?php include('header-2.php');?>

	<?php include('nav.php');?>

	<div class="page-content side-content"> 
		
		<section class="left-content box-typical">
	      		<div class="p-a-lg p-b-2 b-b">
	      			<h6 class="font-sm text-uppercase color-grey">Setting Option</h6>
		      		<button type="button" class="btn btn-inline btn-white">Preview</button>
		      		<button type="button" class="btn btn-inline btn-primary">Save</button>
		      	</div>
		      	<div class="p-a-lg b-b">
		      		<h6 class="font-sm text-uppercase color-grey m-b-0">Sequences</h6>
		      	</div>
		      	<div>
		      		<ul class="list">
		      			<li class="current">
		      				<a href="settings.php" class="d-block p-a-lg">
			      				<i class="font-icon font-icon-post color-primary"></i>
			      				<span>Facebook</span>
			      			</a>
		      			</li>
		      			<li>
		      				<a href="custom-page.php" class="d-block p-a-lg">
			      				<i class="font-icon font-icon-post color-primary"></i>
			      				<span>Site</span>
			      			</a>
		      			</li>
		      			<li>
		      				<a href="checkbox-widget.php" class="d-block p-a-lg">
			      				<i class="font-icon font-icon-post color-primary"></i>
			      				<span>Checkbox Widget</span>
			      			</a>
		      			</li>
		      		</ul>
		      	</div>
	      	</section>
			<div class="right-content">
				<section class="card m-y-lg">
					<header class="card-header card-header-lg">
						<div class="t-cell align-middle">
							<div class="img-logo">
								<img src="img/e-cart.jpg" alt="Cart" width="68" height="73" />
							</div>
						</div>
						<div class="t-cell align-middle">
							<h4 class="font-black m-a-0">Authorized Websites</h4>
							<span>Lorem Ipsum</span>
							<div class="form-group">
								<div class="btn-group">
									<button type="button" class="btn btn-default-outline btn-auto dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-pencil"></i>
									</button>
									<button type="button" class="btn btn-default-outline">Edit Page</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Edit</a>
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Delete</a>
									</div>
								</div>
							</div>
						</div>
					</header>
					<div class="card-block p-y-2">
						<h6 class="font-sm text-uppercase color-grey">Basic Details</h6>
						<ul class="inline">
							<li><i class="fa fa-comment-o color-grey p-r"></i> me@dealshopster.com</li>
							<li><i class="fa fa-mobile-phone color-grey p-r"></i> +44 (0) 7887 665 221</li>
							<li><i class="fa fa-map-marker color-grey p-r"></i> United States</li>
						</ul>
					</div>
				</section>

				<section class="box-typical box-typical-padding">
		      		<h6 class="font-sm text-uppercase color-grey">Info</h6>
		      		<p class="color-dark">Last Optin 3 hours ago. Last Add to Cart 4 hours ago. Last Purchase 8 hours ago. Last Optin 3 hours ago. Last Add to Cart 4 hours ago. Last Purchase 8 hours ago. Last Optin 3 hours ago. Last Add to Cart 4 hours ago. Last Purchase 8 hours ago</p>
		      		<p>Example: If your customer visit https://www.dealshopster.com, enter www.dealshopster.com</p>
		      		<p>Example: If your customer visit shop.dealshopster.com or dealshopster.com click 'Add Domain' to add these as well</p>
		      	</section>

		      	<section class="box-typical box-typical-padding">
		      		<h6 class="font-sm text-uppercase color-grey">Tags</h6>
		      		<div class="row">
						<div class="col-lg-12">
							<textarea id="tags-editor-textarea">shop.dealshopster.com, checkout.dealshopster.com, test.com</textarea>
						</div>
					</div>
		      	</section>
			</div>
		</div>
	</div><!--.page-content-->

<?php include('footer.php');?>