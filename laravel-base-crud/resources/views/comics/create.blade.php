@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">img-url</label>
            <input type="text" class="form-control" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale-date</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection