<!-- Connect Facebook Modal -->
<div id="connect-fb" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h2 class="modal-title text-center">Lets Connect your Facebook Page</h2>
		</div>
		<div class="modal-body">
		<!-- MultiStep Form -->
			<form action="#">
			  	<!-- Step 1 -->
				<div class="tab p-a-lg">
					<h4 class="color-black">Hi There!</h4>
					<p>Click below to Facebook connect with <strong>Return to Cart</strong>. This enables <strong>Return to Cart</strong> to manage your Facebook Messenger messages. This is necessary to send personalized messages like Abandon Cart messages.</p>
				</div>
				<!-- Step 2 -->
				<div class="tab p-a-lg">
					<h4 class="color-black">Next Step</h4>
					<p>What page do you want to send messages from?</p>
					<select class="select2 select2-arrow manual select2-no-search-arrow">
						<option>My Developers Page 12345</option>
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
					</select>
				</div>
				<!-- Step 3 -->
				<div class="tab p-a-lg">
					<h4 class="color-black">Step 3</h4>
					<p>Content here</p>
				</div>
				<!-- Step 4 -->
				<div class="tab p-a-lg">
					<h4 class="color-black">Step 4</h4>
					<p>Content here</p>
				</div>
				<div style="display: none;">
				    <span class="step"></span>
				    <span class="step"></span>
				    <span class="step"></span>
				    <span class="step"></span>
				  </div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" id="nextBtn"  onclick="nextPrev(1)">Continue</button>
		</div>
    </div>

  </div>
</div>


<!-- Large Container -->
<div id="reminder" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header">
			<div class="widget-toggle">
				<div class="checkbox-toggle d-inline align-middle">
					<input type="checkbox" id="check-toggle-1" checked="">
					<label for="check-toggle-1">&nbsp;</label>
				</div>
			</div>
			<ul class="inline-block">
				<li class="active"><a href="#">First Reminder</a></li>
				<li><a href="#">Second Reminder</a></li>
				<li><a href="#">Third Reminder</a></li>
			</ul>
		</div>
		<div class="modal-body">
			<div class="cell-container">
				<div class="cell-block white">
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
				<div class="cell-block" style="width:30px; background: transparent;"></div>
				<div class="cell-block">
					<section class="card">
						<header class="card-header card-header-lg">
							Preview
						</header>
						<div class="card-block text-center">
							<img src="img/checkout-preview.jpg" alt="Checkout Preview" />
						</div>
					</section>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-white">Skip</button>
			<button type="button" class="btn btn-primary">Continue</button>
		</div>
    </div>

  </div>
</div>

