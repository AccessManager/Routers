@extends("Base::layout")
@section("header")
    New Network Subnet
@endsection
@section("content")
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            {!! Form::open(['route'=>'subnet.add.post', 'class'=>'form-horizontal']) !!}
            <fieldset>
                <div class="form-group">
                    <div class="col-md-10">
                        {!! Form::text('subnet', NULL, ['class'=>'form-control','placeholder'=>'enter valid CIDR, ie. 192.168.1.0/24']) !!}
                    </div>
                </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-2">
                <div class="btn-group">
                    <button type="reset" class="btn btn-default btn-flat">Reset</button>
                    <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                </div>
            </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection