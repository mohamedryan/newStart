@extends('admin.app')
@section('content')
<div class="row">
    <div class="col s12">
        <form class="capitalize">
        {!! Form::open(array(
            'url' => [url('/dashboard/contact')],
            'method' => 'PUT',
            'class' => 'capitalize',
            'id'    => 'contact-info-form'
        )) !!}
            <div class="panel">
                <div class="panel-header">
                    <h4 class="panel-title heading">Contact</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="title">contact form recieved Info</div>
                        <div class="input-field col s12 m6">
                            <input id="email" type="email" value="{{ $info->email }}" required>
                            <label for="email">email</label><small class="helper-text">hello this it just a helper information </small>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="subject" type="text" value="{{ $info->subject }}" required class="validate">
                            <label for="subject">subject  </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="title">contact Information</div>
                        <div class="row">
                            <div class="subtitle">General Information</div>
                            <div class="input-field col s12 m6">
                                <input id="address" type="text" value="{{ $info->address }}" class="validate">
                                <label for="address">Address</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="emails" type="text" value="{{ $info->emails }}" class="validate">
                                <label for="emails">emails</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="phones" type="text" value="{{ $info->phones }}" class="validate">
                                <label for="phones">phones</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="brief" class="materialize-textarea validate">{{ $info->brief }}</textarea>
                                <label for="brief">Brief</label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="subtitle">contact social media</div>
                            <div class="input-field col s12 m6">
                                <input id="fb" type="url" value="{{ $info->fb }}" class="validate">
                                <label for="fb">facebook</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="tw" type="url" value="{{ $info->tw }}" class="validate">
                                <label for="tw">twitter</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="google" type="url" value="{{ $info->google }}" class="validate">
                                <label for="google">google +</label><small class="helper-text"></small>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="youtube" type="url" value="{{ $info->youtube }}" class="validate">
                                <label for="youtube">youtube</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="pint" type="url" value="{{ $info->pint }}" class="validate">
                                <label for="pint">Pinterest</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="instagram" type="url" value="{{ $info->instagram }}" class="validate">
                                <label for="instagram">instagram</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="subtitle">Map coordinates</div>
                            <div class="input-field col s12 m6">
                                <input id="map" type="text" value="{{ $info->map }}" class="validate">
                                <label for="map">coordinates</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn waves-effect waves-light right">save<i class="material-icons right">send</i></button>
                    <div class="clearfix"></div>
                </div>
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