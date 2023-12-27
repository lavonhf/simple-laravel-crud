@extends('items.layout')

@section('content')
<div>
<h2 class="bg-neutral-700">show</h2>

            <div>{{$item->id}}</div>
            <div>{{$item->name}}</div>
            <div>{{$item->desc}}</div>
            <div>{{$item->price}}</div>
            <div>{{$item->total}}</div>
      
    <b>

        {{ \Carbon\Carbon::now()->toDateString() }} 
    </b>
</div>
@endsection