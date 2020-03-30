<?php echo validation_errors(); ?>

<div class="album py-5 bg-light">
	<?php
	$attributes = array('class' => 'form-signin');
	echo form_open('bizdir/add', $attributes);

	$message = $this->session->flashdata('message');
	$status = $this->session->flashdata('status');
	if ($message) {
		?>
		<div class="alert alert-<?php echo $status ?> alert-dismissible fade show" role="alert">
			<?php echo $message ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<?php
		if (isset($_SESSION['message'])) unset($_SESSION['message']);
	} ?>
	<div class="text-center mb-4">
		<h1 class="h3 mb-4 font-weight-normal display-4">Add Business</h1>
	</div>
	<div class="form-label-group">
		<input type="text" id="inputName" class="form-control" placeholder="Business Name" name="name" required
			   autofocus>
		<label for="inputName">Business Name</label>
	</div>
	<div class="form-label-group">
		<input type="text" id="inputAddress" class="form-control" placeholder="Address" name="address" required>
		<label for="inputAddress">Address</label>
	</div>
	<div class="form-label-group">
		<input type="text" id="inputPhone" class="form-control" placeholder="Phone Number" name="phone">
		<label for="inputPhone">Phone Number</label>
	</div>
	<div class="form-label-group">
		<input type="text" id="inputWebsite" class="form-control" placeholder="Website" name="website">
		<label for="inputWebsite">Website</label>
	</div>
	<div class="form-label-group">
		<input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email">
		<label for="inputEmail">Email Address</label>
	</div>
	<div class="form-label-group">
		<input type="text" id="inputImage" class="form-control" placeholder="Image URL" name="image">
		<label for="inputImage">Image URL</label>
	</div>
	<div class="form-label-group">
		<select class="form-control" name="category" required>
			<option selected disabled>Choose a category</option>
			<option>Restaurants</option>
			<option>Hotels</option>
			<option>Banks</option>
			<option>Shopping</option>
			<option>Cafe</option>
		</select>
	</div>
	<button class="btn btn-lg btn-danger btn-block" type="submit">Add</button>
	</form>
</div>
