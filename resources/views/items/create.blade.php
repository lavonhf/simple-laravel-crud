@extends('items.layout')

@section('content')
<div>
<h2 class="bg-neutral-700">create - page</h2>
    <table class='gap-24'>
        <tr>
            <th>name</th>
            <th>desc</th>
            <th>price</th>
            <th>total</th>

        </tr>
        @foreach ( $items as $i )
            
        <tr>
            <td>{{$i->name}}</td>
            <td>{{$i->desc}}</td>
            <td>{{$i->price}}</td>
            <td>{{$i->total}}</td>
        </tr>
        @endforeach
    </table>
    {{$items->links()}}
    <b>

        {{ \Carbon\Carbon::now()->toDateString() }} 
    </b>
</div>
@endsection