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
		      			<li>
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
		      			<li class="current">
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
					<div class="card-block p-y-2">
						<div class="widget-toggle">
							<div class="checkbox-toggle d-inline align-middle">
								<input type="checkbox" id="check-toggle-1" checked />
								<label for="check-toggle-1">&nbsp;</label>
							</div>
						</div>
						<div class="m-r-3">
							<h5 class="font-black color-black">Checkbox Widget Below Add to Cart Button</h5>
						</div>
						<p>Facebook Wiget which renders below the Add to Cart button. This is used to opt your customers into receiving messages from your page in Facebook messenger</p>
					</div>
				</section>


				<div class="row">
					<div class="col-md-6">
						<section class="card">
							<div class="card-block p-y-2">
								<h5 class="font-black color-black">Alignments</h5>
								<p>This sets the alignment of the Checkbox Widget so that it looks consistent with you Add to Cart Button. You can choose to left or center align it. For example, if your Add to Cart button is left aligned, choose left again.</p>
								<button type="button" class="btn btn-inline btn-primary">Left</button>
								<button type="button" class="btn btn-inline btn-white">Center</button>
							</div>
						</section>
					</div>
					<div class="col-md-6">
						<section class="card">
							<div class="card-block p-y-2">
								<h5 class="font-black color-black">Widget Skin</h5>
								<p>This lets you use the Light / Dark version of the widget. For most of the sites, we recommend Light.</p>
								<button type="button" class="btn btn-inline btn-primary">Light</button>
								<button type="button" class="btn btn-inline btn-white">Dark</button>
							</div>
						</section>
					</div>
				</div>

				<section class="card m-y-lg">
					<div class="card-block p-y-2">
						<div class="widget-toggle">
							<div class="checkbox-toggle d-inline align-middle">
								<input type="checkbox" id="check-toggle-2" />
								<label for="check-toggle-2">&nbsp;</label>
							</div>
						</div>
						<div class="m-r-3">
							<h5 class="font-black color-black">Opt In Messaging</h5>
						</div>
						<p>This text is displayed next to your Checkbox widget so customers know that when the checkbox is checked, they are opting into receiving messages from your brand. This is important to ensure a good customer experience.</p>
						<div class="row">
							<div class="col-md-8">
								<textarea rows="4" class="form-control" placeholder="Get updates on your cart in Messsenger"></textarea>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>
	</div><!--.page-content-->

<?php include('footer.php');?>