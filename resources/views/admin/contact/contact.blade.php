@extends('admin.app')
@section('content')
<div class="row">
    <div class="col s12">
        <form class="capitalize">
            <div class="panel">
                <div class="panel-header">
                    <h4 class="panel-title heading">Contact</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="title">contact form recieved Info</div>
                        <div class="input-field col s12 m6">
                            <input id="email" type="email" required>
                            <label for="email">email</label><small class="helper-text">hello this it just a helper information </small>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="subject" type="text" required class="validate">
                            <label for="subject">subject  </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="title">contact Information</div>
                        <div class="row">
                            <div class="subtitle">General Information</div>
                            <div class="input-field col s12 m6">
                                <input id="address" type="text" class="validate">
                                <label for="address">Address</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="emails" type="text" class="validate">
                                <label for="emails">emails</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="phones" type="text" class="validate">
                                <label for="phones">phones</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="brief" class="materialize-textarea validate"></textarea>
                                <label for="brief">Brief</label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="subtitle">contact social media</div>
                            <div class="input-field col s12 m6">
                                <input id="fb" type="url" class="validate">
                                <label for="fb">facebook</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="tw" type="url" class="validate">
                                <label for="tw">twitter</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="google" type="url" class="validate">
                                <label for="google">google +</label><small class="helper-text"></small>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="youtube" type="url" class="validate">
                                <label for="youtube">youtube</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="pint" type="url" class="validate">
                                <label for="pint">Pinterest</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="insta" type="url" class="validate">
                                <label for="insta">instagram</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="subtitle">Map coordinates</div>
                            <div class="input-field col s12 m6">
                                <input id="lat" type="text" class="validate">
                                <label for="lat">latitude</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="long" type="text" class="validate">
                                <label for="long">longitude</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn waves-effect waves-light right">save<i class="material-icons right">send</i></button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</div>

@stop
