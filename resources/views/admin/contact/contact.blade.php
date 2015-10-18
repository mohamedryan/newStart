@extends('admin.app')
@section('content')
<div class="row">
	<div class="col s12">
		{!! Form::open(array(
			'url' => [url('/dashboard/contact')],
			'method' => 'PUT',
			'class' => 'read-only validate panel light',
			'id'    => 'contact-info-form'
		)) !!}
				<div class="panel-header">
					<h2 class="left">contact</h2>
					<a class="form-edit btn-flat dotted waves-effect waves-blue right">edit</a>
					<button type="submit" class="btn waves-effect right">save</button>
					<a data-target="ignore-changes" class="form-ignore dotted btn-flat waves-effect waves-red right">cancel</a>
					<div class="clearfix"></div>
				</div>
				<div class="panel-body">
					<div class="row">
						<h3>contact form recieved Info</h3>
						<div class="input-field col s12 m6">
							<label for="email">email</label>
							<input id="email" type="email" value="{{ $info->email }}" required>
							<small class="helper-text">hello this it just a helper information </small>
						</div>
						<div class="input-field col s12 m6">
							<label for="subject">subject  </label>
							<input id="subject" type="text" value="{{ $info->subject }}" required class="validate">
						</div>
					</div>
					<div class="row">
						<h3>contact Information</h3>
							<div class="panel-section">
								<div class="row">
									<h4>General Information</h4>
									<div class="input-field col s12 m6">
										<label for="address">Address</label>
										<input id="address" type="text" value="{{ $info->address }}" class="validate">
									</div>
									<div class="input-field col s12 m6">
										<label for="emails">emails</label>
										<input id="emails" type="text" value="{{ $info->emails }}" class="validate">
									</div>
									<div class="input-field col s12 m6">
										<label for="phones">phones</label>
										<input id="phones" type="text" value="{{ $info->phones }}" class="validate">
									</div>
									<div class="input-field col s12">
										<label for="brief">Brief</label>
										<textarea id="brief" class="materialize-textarea validate">{{ $info->brief }}</textarea>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="row">
									<h4>contact social media</h4>
									<div class="input-field col s12 m6">
										<label for="fb">facebook</label>
										<input id="fb" type="url" value="{{ $info->fb }}" class="validate">
									</div>
									<div class="input-field col s12 m6">
										<label for="tw">twitter</label>
										<input id="tw" type="url" value="{{ $info->tw }}" class="validate">
									</div>
									<div class="input-field col s12 m6">
										<label for="google">google +</label><small class="helper-text"></small>
										<input id="google" type="url" value="{{ $info->google }}" class="validate">
									</div>
									<div class="input-field col s12 m6">
										<label for="youtube">youtube</label>
										<input id="youtube" type="url" value="{{ $info->youtube }}" class="validate">
									</div>
									<div class="input-field col s12 m6">
										<label for="pint">Pinterest</label>
										<input id="pint" type="url" value="{{ $info->pint }}" class="validate">
									</div>
									<div class="input-field col s12 m6">
										<label for="instagram">instagram</label>
										<input id="instagram" type="url" value="{{ $info->instagram }}" class="validate">
									</div>
								</div>
								<div class="row">
									<h4>Map coordinates</h4>
									<div class="input-field col s12 m6">
										<label for="map">coordinates</label>
										<input id="map" type="text" value="{{ $info->map }}" class="validate">
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="clearfix"></div>
				</div>
				<div id="ignore-changes" class="modal">
					<div class="modal-content">
						<h2>are u sure</h2>
						<p>all changes will be lost</p>
					</div>
					<div class="modal-footer">
						<a class="modal-action modal-close waves-effect waves-red btn-flat conferm-form-ignore">yes i am sure</a>
						<a class="modal-action modal-close waves-effect waves-green btn-flat">continue editing</a></div>
				</div>
		{!! Form::close() !!}
	</div>
</div>

@stop
@section('scripts')
	<script>

		 (function () {
			$(document).on('submit', '#contact-info-form', function(event) {
				alert('message');
				event.preventDefault();
				var form = $(this);
				console.log(form);
				/* Act on the event */
				var request = $.ajax({
					url: form.attr('action'),
					type: 'PUT',
					dataType: 'json',
					data: form.serialize(),
				});
				// .done(function(data) {
				//  console.log(data);
				// })
				// .fail(function() {
				//  console.log("error");
				// })
				// .always(function() {
				//  console.log("complete");
				// });

				console.log(request);

			});
		})();
	</script>
@stop