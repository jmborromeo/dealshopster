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
		      				<a href="#" class="d-block p-a-lg">
			      				<i class="font-icon font-icon-comments color-primary"></i>
			      				<span>First Reminder</span>
			      			</a>
		      			</li>
		      			<li>
		      				<a href="#" class="d-block p-a-lg">
			      				<i class="font-icon font-icon-comments color-primary"></i>
			      				<span>Second Reminder</span>
			      			</a>
		      			</li>
		      			<li>
		      				<a href="#" class="d-block p-a-lg">
			      				<i class="font-icon font-icon-comments color-primary"></i>
			      				<span>Third Reminder</span>
			      			</a>
		      			</li>
		      		</ul>
		      	</div>
	      	</section>
			<div class="right-content">
				<section class="card-block">
					<div class="p-a-md p-b-0">
						<div class="text-center">
							<h5>Edit Cart Abandonment Messages</h5>
						</div>
					</div>
				</section>
				<div class="cell-container">
					<div class="cell-block">
						<section class="card">
							<header class="card-header card-header-lg">
								Customize Message
							</header>
							<div class="card-block">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">First Message:</label>
									<textarea rows="4" class="form-control" placeholder="Leave something behind?"></textarea>
									<small class="text-muted">We recommend offering a discount here</small>
									<small class="text-muted">(e.g."Use SAVE15 for 15% off")</small>
								</fieldset>
							</div>
							<div class="card-block p-t-2 b-t">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Checkout Button</label>
									<textarea rows="4" class="form-control" placeholder="Checkout Now"></textarea>
									<small class="text-muted">Remind the customer of the discount here</small>
									<small class="text-muted">(e.g."Checkout(15% Off).</small>
								</fieldset>
							</div>
							<div class="card-block p-t-2 b-t">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Discount Code:</label>
									<input type="text" class="form-control" placeholder="SHOP15">
									<small class="text-muted">Specifying the discount code here allows our links to automatically enable the discount code on checkout. You can create one here.</small>
								</fieldset>
							</div>
						</section>
					</div>
					<div class="cell-block">
						<section class="card">
							<header class="card-header card-header-lg">
								Preview
							</header>
							<div class="card-block text-center">
								<div class="mobile-preview">
									<div class="search-preview">
										<div class="t-cell">
											<div class="t-cell align-middle">
												<img class="logo" src="img/cart-mobile-logo.png" alt="Deal Shopster" height="20" width="17" />
											</div>
											<div class="t-cell align-middle">
												<fieldset class="form-group">
													<input type="text" class="form-control search" placeholder="Leave something behind?">
												</fieldset>
											</div>
										</div>
									</div>
									<div class="image-preview">
										<img src="img/img-preview.jpg" alt="" />
									</div>
									<div class="content-preview">
										<p>Specifying the discount code here allows our links to automatically enable the discount code on checkout. You can create one here.</p>
										<fieldset class="form-group">
											<textarea rows="2" class="form-control" placeholder="Remind the customer of the discount here (e.g."Checkout(15% Off)."></textarea>
										</fieldset>
										<fieldset>
											<button type="button" class="btn btn-inline btn-primary">Save</button>
										</fieldset>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div><!--.page-content-->

<?php include('footer.php');?>