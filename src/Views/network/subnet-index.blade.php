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
                    {{$subnet->subnet}}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">
                    no records found.
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection