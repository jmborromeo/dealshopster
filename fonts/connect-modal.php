<!-- Apply Now Modal -->
<div id="applyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h2 class="modal-title text-center">Apply Now</h2>
		</div>
		<form class="form" method="POST">
			<div class="modal-body">
				<div class="form-group">
					<p><label>Name</label></p>
					<input class="form-control fullname" name="name" type="text">
				</div>
				<div class="form-group">
					<p><label>Email</label></p>
					<input class="form-control email" name="email" type="text">
				</div>
				<div class="form-group">
					<p><label>Mobile (0401XXXXX)</label></p>
					<input class="form-control contact" name="contact" type="text">
				</div>
				<p class="thin text-center">We will send you a verification code in email and sms which allow you to complete application form on our secured online portal</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-large btn-primary send">Send Code</button>
				<img class="loader" src="<?php echo get_template_directory_uri().'/images/gif-load.gif';?>">
			</div>
		</form>
    </div>

  </div>
</div>
<script src="<?php echo get_template_directory_uri() .'/includes/modal/js/verification.js';?>"></script>