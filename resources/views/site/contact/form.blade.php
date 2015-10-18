<div class="col-xs-12 col-md-{{$component[1]}}">
    {!! Form::open(['method' => 'POST','url'=>['contactSendMessage'],'class'=>'form-theme sendMessage']) !!}
        <div class="panel-heading">
            <h2 class="panel-title text-uppercase">get in touch</h2>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <input id="name" type="text" name="name" placeholder="Name*" class="form-control">
            </div>
            <div class="form-group">
                <input id="email" type="email" name="email" placeholder="Email*" class="form-control">
            </div>
            <div class="form-group">
                <textarea id="message" type="email" name="message" placeholder="message*" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-default pull-right">send</button>
        </div>


    {!! Form::close() !!}
</div>