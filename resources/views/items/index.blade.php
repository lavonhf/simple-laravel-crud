@extends('items.layout')

@section('content')
<div>
    11111
    <table class='gap-24'>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>desc</th>
            <th>price</th>
            <th>total</th>

        </tr>
        @foreach ( $items as $i )
        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->name}}</td>
            <td>{{$i->desc}}</td>
            <td>{{$i->price}}</td>
            <td>{{$i->total}}</td>
            <td><a href="{{ route('items.edit',$i->id)}}">edit</a>||</td>
            <td><a href="{{ route('items.show',$i->id)}}">show</a>||</td>
            <td>
                <form action="{{ route('items.destroy',$i->id)}}">

                    <button type="submit">delet</button>||
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $items->withQueryString()->links('pagination::bootstrap-5') !!}
    <b>{{ \Carbon\Carbon::now()->toDateString() }}</b>
</div>
@endsection