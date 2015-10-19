<div class="col-xs-12 col-md-{{$component[1]}}">
    <div class="panel-heading">
        <h2 class="panel-title text-uppercase">contact us</h2>
    </div>
    <div class="panel-body">
        <p class="contact-info text-sec small">{{ $contactInfo->brief }}</p>
        <ul class="list-unstyled text-sec info-list">
            @foreach (explode(',', $contactInfo->phones) as $phone)
                <li><span class="icon glyphicon glyphicon-earphone"></span><a href="tel:+496170961709" class="text-sec">{{ $phone }}</a></li>
            @endforeach

            @foreach (explode(',', $contactInfo->emails) as $Email)
                <li><span class="icon glyphicon glyphicon-envelope"></span><a href="mailto:johndoe@example.com" class="text-sec">{{ $Email }}</a></li>
            @endforeach
            <li><span class="icon glyphicon glyphicon-map-marker"></span><a href="mailto:johndoe@example.com" class="text-sec">{{ $contactInfo->address }}</a></li>
        </ul>
    </div>
    @if($socialMedia)
        <div class="panel-heading">
            <h5 class="panel-title text-uppercase">social media</h5>
        </div>
        <div class="panel-body">
            <ul class="list-inline social-media">
                @if($contactInfo->fb)
                    <li><a href="{{ $contactInfo->fb }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                @endif

                @if($contactInfo->tw)
                    <li><a href="{{ $contactInfo->tw }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                @endif            

                @if($contactInfo->skype)
                    <li><a href="{{ $contactInfo->skype }}" target="_blank"><i class="fa fa-skype"></i></a></li>
                @endif 

                @if($contactInfo->google)
                    <li><a href="{{ $contactInfo->google }}" target="_blank"><i class="fa fa-google"></i></a></li>
                @endif 

                @if($contactInfo->youtube)
                    <li><a href="{{ $contactInfo->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                @endif            

                @if($contactInfo->pint)
                    <li><a href="{{ $contactInfo->pint }}" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                @endif

                @if($contactInfo->instagram)
                    <li><a href="{{ $contactInfo->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                @endif

            </ul>
        </div>
    @endif
</div>