@extends('layouts.app')

@section('content')
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic['id']}}</th>
                        <td>{{$comic['title']}}</td>
                        <td>{{$comic['type']}}</td>
                        <td>{{$comic['price']}} €</td>
                        <td>
                            <a href="{{route('comics.show', $comic['id'])}}" class="btn btn-info">Details</a>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
          </table>
    </div>
@endsection