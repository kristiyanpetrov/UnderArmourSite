@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Products
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <th>Image</th>

                            <th>Name</th>

                            <th>Price</th>

                            {{--<th>Description</th>--}}

                            <th>Edit</th>

                            <th>Delete</th>
                            </thead>

                            <tbody>
                            @if($products->count()>0)
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <img src="{{ $product->image }}" alt="{{ $product->name }}" width="150px"
                                                 height="120px">
                                        </td>
                                        <td>
                                            {{ $product->name }}
                                        </td>
                                        <td>
                                            {{ $product->price }}
                                        </td>
                                        {{--<td>--}}
                                            {{--{{ $product->description }}--}}
                                        {{--</td>--}}
                                        <td>
                                            <a href="{{ route('products.edit', ['id' => $product->id]) }}"
                                               class="btn btn-xs btn-info">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-xs btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            @else
                                <tr>
                                    <th colspan="6" class="text-center">No have a created product yet</th>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
