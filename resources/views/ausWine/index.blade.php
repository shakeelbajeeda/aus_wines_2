@extends('layouts.auswine')
@section('content')
    <div class="container">
        <div class="mt-3">
            <a href="{{route('ausWine.create')}}" class="btn btn-primary btn_style">Add a new wine</a>
        </div>
        <div class="mt-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Wine Name</th>
                        <th scope="col">Wine Type</th>
                        <th scope="col">Wine Quantity</th>
                        <th scope="col">Wine Price</th>
                        <th scope="col">Region</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($ausWines as $ausWine)
                    <tr>
                        <td>{{$ausWine->wine_name}}</td>
                        <td>{{$ausWine->wine_type}}</td>
                        <td>{{$ausWine->wine_qty}}</td>
                        <td>{{$ausWine->wine_price}}</td>
                        <td>{{$ausWine->region}}</td>
                        <td><a href="{{route('ausWine.edit', [$ausWine->id])}}" class="btn btn-warning">Edit</a><a href="{{route('ausWine_destroy',[$ausWine->id])}}" class="btn btn-danger" style="margin-left: 6px">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
