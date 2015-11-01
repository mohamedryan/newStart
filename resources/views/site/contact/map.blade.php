<div class="@if($fluid)container-fluid reset @else col-xs-12 col-md-{{$component[1]}} @endif">
    <div id="map" data-lng="{{ $contactInfo->longitude }}" data-lat="{{ $contactInfo->latitude }}"></div>
</div>