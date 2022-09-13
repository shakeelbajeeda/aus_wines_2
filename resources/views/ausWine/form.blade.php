@extends('layouts.auswine')
@section('content')
{{--   section start here--}}
    <div class="container">
        <div class="h1 text-center my-5">{{@$ausWine ? 'Update Wine Detail' : 'Add New Wine'}}</div>
        <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong>
                <?php
                $message = $_SESSION['message'];
                unset($_SESSION['message']);
                echo $message;
                ?>
        </div>
        <?php } ?>
        <form action="{{ @$ausWine ?route('ausWine.update',[@$ausWine->id]) : route('ausWine.store')}}" method="POST">
            @csrf
            @if(@$ausWine)
                @method('put')
            @endif
            <div class="form-group pt-2">
                <label for="wine_name">Wine Name</label>
                <input type="text" class="form-control @error('wine_name') is-invalid @enderror" value="{{@$ausWine? @$ausWine->wine_name : old('wine_name')}}" id="wine_name" name="wine_name" >
                @error('wine_name')
                <span class="invalid-feedback text-danger " role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group pt-2">
                <label for="wine_type">Type of wine</label>
                <select class="form-control @error('wine_type') is-invalid @enderror" name="wine_type" id="wine_type">
                    <option value="{{@$ausWine? @$ausWine->wine_type : old('wine_type')}}" selected hidden>{{@$ausWine? @$ausWine->wine_type : 'Select Wine Type'}}</option>
                    <option value="Red Wine">Red Wine</option>
                    <option value="White Wine">White Wine</option>
                    <option value="Sparkling">Sparkling</option>
                    <option value="Rose Wine">Rose Wine</option>
                </select>
                @error('wine_type')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group pt-2">
                <label for="wine_qty">Quantity</label>
                <input type="number" class="form-control @error('wine_qty') is-invalid @enderror" id="wine_qty" name="wine_qty" value="{{@$ausWine? @$ausWine->wine_qty : old('wine_qty')}}" >
                @error('wine_qty')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group pt-2">
                <label for="wine_price">Price</label>
                <input type="number" class="form-control @error('wine_price') is-invalid @enderror" id="wine_price" name="wine_price" value="{{@$ausWine? @$ausWine->wine_price : old('wine_price')}}">
                @error('wine_price')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group pt-2">
                <label for="region">Region</label>
                <select class="form-control @error('region') is-invalid @enderror" name="region" id="region" >
                    <option value="{{@$ausWine? @$ausWine->region : old('region')}}" selected hidden>{{@$ausWine? @$ausWine->region : 'Select Wine'}}</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="NSW">NSW</option>
                    <option value="VIC">VIC</option>
                </select>
                @error('region')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="align-item pt-2">
                <a href="{{route('ausWine.index')}}" class="btn btn-secondary btn_style">Cancel</a>
                <button type="submit" class="btn btn-primary">{{@$ausWine ? 'Update' : 'Add'}}</button>

            </div>
        </form>

    </div>
{{--    section end here--}}
@endsection
