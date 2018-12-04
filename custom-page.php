<?php include('header-2.php');?>

	<?php include('nav.php');?>

	<div class="page-content side-content col-3-page"> 
		
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
		      			<li>
		      				<a href="settings.php" class="d-block p-a-lg">
			      				<i class="font-icon font-icon-post color-primary"></i>
			      				<span>Facebook</span>
			      			</a>
		      			</li>
		      			<li class="current">
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
	      	</section> <!-- End of Left Content -->

			<div class="right-content">
				<section class="box-typical box-typical-padding">
		      		<h5 class="font-black color-black">Custom Checkout Setup</h5>
					<p>If you use a non-standard Return to Cart checkout, you need to paste this snippet on your "Than You" page. If possible only include, this code the first time the customer visists the page.</p>
		      	</section>
			</div> <!-- End of Content -->

			<section class="right-sidebar box-typical box-dark">
					<section class="tabs-section script">
						<div class="tabs-section-nav tabs-section-nav-inline">
							<ul class="nav script-header" role="tablist">
								<li class="nav-item">
									<a class="nav-link active color-white" href="#tabs-4-tab-1" role="tab" data-toggle="tab">
										Shell
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabs-4-tab-2" role="tab" data-toggle="tab">
										Javascript
									</a>
								</li>
							</ul>
						</div><!--.tabs-section-nav-->
		      			<div class="tab-content script-content">
							<div role="tabpanel" class="tab-pane fade in active" id="tabs-4-tab-1">
								<code>
									{
										id: '1297589193-12312',
										date: '2016-10-20'
									}
								</code>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tabs-4-tab-2">
								Content here...
							</div>
						</div><!--.tab-content-->
		      	</section>
			</section> <!-- End of Right Sidebar -->

		</div>
	</div><!--.page-content-->

<?php include('footer.php');?>