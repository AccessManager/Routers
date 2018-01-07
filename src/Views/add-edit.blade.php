@extends('Base::layout')
@section('header')
    Routers
@endsection

@section('box-header')
    New Router
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if(isset($router))
                {!! Form::model($router, ['route'=>'routers.edit.post','class'=>'form-horizontal']) !!}
                {!! Form::hidden('id', $router->id) !!}
                @else
                {!! Form::open(['route'=>'routers.add.post','class'=>'form-horizontal']) !!}
            @endif
            <fieldset>
                <div class="form-group">
                    <div class="col-md-10">
                        {!! Form::select('type', ['1'=>'Mikrotik',], NULL, ['class'=>'form-control','title'=>'Select Router Type']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        {!! Form::text('shortname', NULL, ['class'=>'form-control','placeholder'=>'Friendly Name']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        {!! Form::text('nasname', NULL, ['class'=>'form-control','placeholder'=>'IP Address']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        {!! Form::text('secret', NULL, ['class'=>'form-control','placeholder'=>'secret']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        {!! Form::textarea('description', NULL, ['class'=>'form-control','rows'=>4, 'placeholder'=>'friendly description']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="btn-group">
                            <button type="reset" class="btn btn-default btn-flat">Reset</button>
                            <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                        </div>
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection