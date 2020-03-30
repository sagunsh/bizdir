<main role="main">
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="display-4 font-weight-normal">Business Directory</h1>
			<p class="lead font-weight-normal">One stop destination to find everything</p>
		</div>
	</section>

	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
				<?php foreach ($directories as $directory): ?>
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<img src="<?php echo $directory['image']; ?>" class="bd-placeholder-img card-img-top"
								 height="180" alt="<?php echo $directory['business_name']; ?>"/>
							<div class="card-body text-center">
								<p class="pb-2 font-weight-bold"
								   style="font-size: 16px;"><?php echo $directory['business_name']; ?></p>
								<span><?php echo $directory['address']; ?></span>
								<div class="social-links align-items-center pt-3">
									<a class="contact-link" target="_blank"
									   <?php if ($directory['email']) { ?>href="<?php echo $directory['website']; ?>"<?php } ?>>
										<i class="fas fa-link fa-lg"></i></a>
									<a class="contact-link"
									   <?php if ($directory['email']) { ?>href="mailto:<?php echo $directory['email']; ?>"<?php } ?>>
										<i class="fas fa-envelope fa-lg"></i></a>
									<a class="contact-link"
									   <?php if ($directory['phone']) { ?>href="tel:<?php echo $directory['phone']; ?>"<?php } ?>>
										<i class="fas fa-phone fa-lg"></i></a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</main>
