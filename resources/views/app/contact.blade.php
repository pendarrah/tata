@extends('app.layouts.master')


@section('content')
    <div role="main" class="main">
				<section class="page-header tatabogh-margin-bottom">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">صفحه اصلی</a></li>
									<li class="active">تماس با ما</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>ارتباط با تطابق</h1>
							</div>
						</div>
					</div>
				</section>
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393.3739168092725!2d51.35044648189652!3d35.72117333558432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQzJzE2LjMiTiA1McKwMjEnMDIuMyJF!5e0!3m2!1sen!2s!4v1600509885616!5m2!1sen!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="container">
					
					<div class="row">
						<div class="col-lg-6">

							<div class="alert alert-success d-none mt-4" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger d-none mt-4" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
							</div>

							<h2 class="mb-3 mt-2"><strong>Contact</strong> Us</h2>

							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label>Your name *</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label>Your email address *</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Message *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6">

							<h4 class="heading-primary mt-4">Get in <strong>Touch</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

							<hr>

							<h4 class="heading-primary">The <strong>Office</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-4">
								<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
								<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>

							<hr>

							<h4 class="heading-primary">Business <strong>Hours</strong></h4>
							<ul class="list list-icons list-dark mt-4">
								<li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
								<li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
								<li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
							</ul>

						</div>

					</div>

				</div>
        
    </div>
@stop