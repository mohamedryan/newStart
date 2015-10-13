@extends('admin.app')
@section('content')
<div class="row">
	<div class="col s12">
		<form class="panel validate capitalize">
			<div class="panel-header">
				<h4 class="panel-title heading">Contact</h4>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="title">contact form recieved Info</div>
					<div class="input-field col s12 m6">
						<label for="email">email</label>
						<input id="email" type="email" required>
						<small class="helper-text">
							<span class="info">
								hello this it just a helper information
							</span>
						</small>
					</div>
					<div class="input-field col s12 m6">
						<label for="subject">subject  </label>
						<input id="subject" type="text" required>
					</div>
				</div>
				<div class="row">
					<div class="title">contact Information</div>
					<div class="row">
						<div class="subtitle">General Information</div>
						<div class="input-field col s12 m6">
							<label for="address">Address</label>
							<input id="address" type="text">
						</div>
						<div class="input-field col s12 m6">
							<label for="emails">emails</label>
							<input id="emails" type="text">
						</div>
						<div class="input-field col s12 m6">
							<label for="phones">phones</label>
							<input id="phones" type="text">
						</div>
						<div class="input-field col s12">
							<label for="brief">Brief</label>
							<textarea id="brief" class="materialize-textarea validate"></textarea>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="subtitle">contact social media</div>
						<div class="input-field col s12 m6">
							<label for="fb">facebook</label>
							<input id="fb" type="url">
						</div>
						<div class="input-field col s12 m6">
							<label for="tw">twitter</label>
							<input id="tw" type="url">
						</div>
						<div class="input-field col s12 m6">
							<label for="google">google +</label><small class="helper-text"></small>
							<input id="google" type="url">
						</div>
						<div class="input-field col s12 m6">
							<label for="youtube">youtube</label>
							<input id="youtube" type="url">
						</div>
						<div class="input-field col s12 m6">
							<label for="pint">Pinterest</label>
							<input id="pint" type="url">
						</div>
						<div class="input-field col s12 m6">
							<label for="insta">instagram</label>
							<input id="insta" type="url">
						</div>
					</div>
					<div class="row">
						<div class="subtitle">Map coordinates</div>
						<div class="input-field col s12 m6">
							<label for="lat">latitude</label>
							<input id="lat" type="text">
						</div>
						<div class="input-field col s12 m6">
							<label for="long">longitude</label>
							<input id="long" type="text">
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" class="btn waves-effect waves-light right">save<i class="material-icons right">send</i></button>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
</div>

@stop
