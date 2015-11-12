@extends('layouts.base')

@section('content')
	<div class="bg-hq contacts-1">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h3>We love talking property. <br> Drop us a line if you'd like to chat</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<form>
						<label class="h6">Name / Last Name</label>
						<input type="text" class="form-control">
						<label class="h6">E-mail</label>
						<input type="text" class="form-control">
						<label class="h6">Message</label>
						<textarea rows="7" class="form-control"></textarea>
						<button type="submit" class="btn btn-primary">
							<span class="fui-mail"></span>
						</button>
					</form>
				</div>
				<div class="col-sm-4 col-sm-offset-1">
					<div class="additional">
						<h6>Need Help?</h6>
						<p>Don’t hestiate to ask us something. Email us directly <a href="mailto:hello@lettinghq.com">hello@lettinghq.com</a> or call us at <b>+44 (0)1472 111111</b>. You can checkout our <a href="#">FAQ</a> and <a href="#">Help</a> page to get more information about our products.</p>
					</div>
					<div class="additional">

					</div>
					<div class="phone">
						<big>01472 111111</big>
						AVAILABLE AT 8am - 6PM, MON-FRI
					</div>
				</div>
			</div>
		</div>
	</div>
@stop