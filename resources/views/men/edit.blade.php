@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Product
        </div>

        <div class="panel-body">
            <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}


                <div class="form-group">
                    <label for="image">Photo</label>
                    <input type="file" name="image" class="form-control" value="{{ $product->image }}">
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" id="name" class="form-control" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" id="price" class="form-control" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="5" rows="5" class="form-control">{{ $product->description }}</textarea>
                </div>


                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Save Product
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection