@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('comics.update' , $comic['id'] )}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{$comic['title']}}" type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input value="{{$comic['description']}}" type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">img-url</label>
            <input value="{{$comic['thumb']}}" type="text" class="form-control" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input value="{{$comic['price']}}" type="number" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input value="{{$comic['series']}}" type="text" class="form-control" name="series" id="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale-date</label>
            <input value="{{$comic['sale_date']}}" type="date" class="form-control" name="sale_date" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input value="{{$comic['type']}}" type="text" class="form-control" name="type" id="type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection