@extends("Base::layout")
@section('header')
    Network Subnet
@endsection
@section('content')
    <table class="table table-stripped table-hover">
        <thead>
        <tr>
            <th>
                sr no.
            </th>
            <th>
                subnet
            </th>
            <th>
                actions
            </th>
        </tr>
        </thead>
        <tbody>
        <?php $i = $subnets->firstItem(); ?>
        @forelse( $subnets as $subnet )
            <tr>
                <td>
                    {{$i}}
                </td>
                <td>
                    {{$subnet->cidr}}
                </td>
                <td>
                    {!! Form::open(['route'=>'subnet.delete', 'onsubmit'=>"return confirm('are you sure?')"]) !!}
                    {!! Form::hidden('id', $subnet->id) !!}
                    <button type="submit" class="btn-xs btn btn-flat btn-danger">remove</button>
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