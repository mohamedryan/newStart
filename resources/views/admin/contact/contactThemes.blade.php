@extends('admin.app')
@section('content')
    <div class="row">
        <div class="col s12">
            <div class="panel selecting layouts">
                <div class="panel-header">
                    <h4 class="panel-title heading">layouts</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($themes as $theme)
                            <div class="col s12 m4">
                                <div class="card item @if($theme->selected == 1)selected @endif">
                                    <div class="card-image"><img id="{{ $theme->id }}" data-url="/dashboard/themes/contact" data-request ='post' src="/images/normal/{{ $theme->img }}"><span class="card-title"><span>{{ $theme->name }}</span></span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click','.selecting .item', function() {
                var $this = $(this);
                var cardImage = $this.find('img');
                var url = cardImage.attr('data-url');
                var layout_id = cardImage.attr('id');
                var requestType = cardImage.attr('data-request');
                var fullURL = location.origin + url;


                $.ajax({
                    url: fullURL,
                    type: requestType,
                    dataType: 'json',
                    data: {layout_id: layout_id},
                })
                .done(function(data) {
                    if(data.requestState){
                        $('.selecting .item').removeClass('selected');
                        $this.addClass('selected');
                    }
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
            });
        });
    </script>
@stop
