@extends('Base::layout')
@section('header')
    Routers
@endsection

@section('content')
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <td>sr no</td>
                <td>type</td>
                <td>ip address</td>
                <td>description</td>
                <td>actions</td>
            </tr>
        </thead>
        <tbody>
        <?php $i = $routers->firstItem(); ?>
            @forelse($routers as $router)
                <tr>
                    <td>
                        {{$i}}
                    </td>
                    <td>
                        {{\AccessManager\Constants\SupportedRouters::typeToString($router->type)}}
                    </td>
                    <td>
                        {{$router->nasname}}
                    </td>
                    <td>
                        {{$router->description}}
                    </td>
                    <td>
                        {!! Form::open(['route'=>'routers.delete']) !!}
                        {!! Form::hidden('id', $router->id) !!}
                        <div class="btn-group-sm btn-group">
                            <a href="{{route('routers.edit', [$router->id])}}" class="btn btn-default btn-flat">modify</a>
                            <button type="submit" class="btn btn-flat btn-danger" onclick="return confirm('Are You Sure?')">
                                Delete
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        no records found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection