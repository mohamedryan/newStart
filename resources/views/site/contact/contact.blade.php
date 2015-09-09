@extends('site.app')
@section('content')
    @include('site.contact.map')
    <div class="container">
        <div class="panel">
            <div class="row">
                @include('site.contact.info')
                @include('site.contact.form')
            </div>
        </div>
    </div>
@stop