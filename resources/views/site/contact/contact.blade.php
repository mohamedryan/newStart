@extends('site.app')
@section('content')
    <?php

        $fluid = array_filter($orderedComponent,function($element){
            if($element[0] == 'map' && $element[1] == '12')
                return true;
        });
        $orderedKeys = array_keys($orderedComponent);

        if($fluid){
            $orderedComponent = array_filter($orderedComponent,function($element){
                if($element[0] != 'map')
                    return true;
            });
        }

        // dd($contactInfo->brief);

    ?>
    @if($fluid && key($fluid) == 0)
        @include('site.contact.map')
    @endif
    <div class="container">
        <div class="panel">
            <div class="row">
                    @foreach($orderedComponent as $component)
                        @include('site.contact.'.$component[0])
                    @endforeach
            </div>
        </div>
    </div>
    @if($fluid && key($fluid) == end($orderedKeys))
        @include('site.contact.map')
    @endif
@stop