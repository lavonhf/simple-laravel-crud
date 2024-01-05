@extends('items.layout')

@section('content')
<div>
    <form action="{{ route('items.update', $items->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="id" class="col-md-4 col-form-label text-md-end text-start">id</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id"
                value="{{ $items->id }}">
            @if ($errors->has('code'))
            <span class="text-danger">{{ $errors->first('id') }}</span>
            @endif
        </div>

        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ $items->name }}">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <label for="desc" class="col-md-4 col-form-label text-md-end text-start">desc</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc"
                value="{{ $items->desc }}">
            @if ($errors->has('desc'))
            <span class="text-danger">{{ $errors->first('desc') }}</span>
            @endif
        </div>

        <label for="price" class="col-md-4 col-form-label text-md-end text-start">Price</label>
        <div class="col-md-6">
            <input type="text" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price"
                name="price" value="{{ $items->price }}">
            @if ($errors->has('price'))
            <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>

        <label for="total" class="col-md-4 col-form-label text-md-end text-start">total</label>
        <div class="col-md-6">
            <textarea class="form-control @error('total') is-invalid @enderror" id="total"
                name="total">{{ $items->total }}</textarea>
            @if ($errors->has('total'))
            <span class="text-danger">{{ $errors->first('total') }}</span>
            @endif
        </div>

        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">

    </form>

</div>
@endsection