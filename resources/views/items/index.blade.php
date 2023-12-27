@extends('items.layout')

@section('content')
<div>
    <h2 class="bg-neutral-700">items - page</h2>
    <table class='gap-24'>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>desc</th>
            <th>price</th>
            <th>total</th>

        </tr>
        @foreach ( $items->sortBy('id')->values() as $i )

        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->name}}</td>
            <td>{{$i->desc}}</td>
            <td>{{$i->price}}</td>
            <td>{{$i->total}}</td>
            <td><a href="{{ route('items.edit',$i->id)}}">edit</a>||</td>
            <td><a href="{{ route('items.show',$i->id)}}">show</a></td>
        </tr>
        @endforeach
    </table>
    {{$items->links()}}
    <b>{{ \Carbon\Carbon::now()->toDateString() }}</b>
</div>
@endsection