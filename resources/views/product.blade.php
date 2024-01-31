
@extends('layout.layout')

@section('content')
    <h1>Product Page</h1>
    <div class="card mt-2">
        <div class="card-body">
            <table class="table table-bordered table stripped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Seller</th>
                    <tr>
                </thead>
                @if (count($products) > 0)
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->brand->name}}</td>
                                <td>
                                @dd($product->categories)
                                    @foreach($product->categories as $category)
                                        <button class="btn btn-primary my-2">
                                            {{$category->name}}
                                        </button>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($product->sellers as $seller)
                                        <button class="btn btn-primary my-2">
                                            {{$seller->name}}
                                        </button>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>

        </div>
    </div>
@endsection

