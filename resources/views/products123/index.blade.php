@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 py-5">
                <a href=""
                   class="btn btn-success"
                   data-bs-toggle="modal"
                   data-bs-target="#AddModal">
                    Add
                    Product
                </a>
                <div class="table-data">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">
                                #
                            </th>
                            <th scope="col">
                                Name
                            </th>
                            <th scope="col">
                                Price
                            </th>
                            <th scope="col">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                            <tr>
                                <th scope="row">
                                    {{ $key+1 }}
                                </th>
                                <td>
                                    {{ $product->name }}
                                </td>
                                <td>
                                    {{ $product->price }}
                                    KZT
                                </td>
                                <td>
                                    <button class="btn btn-success">
                                        Edit
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $products->links()  !!}
            </div>
        </div>
    </div>
@stop
@include('products123.create')
@push('page-scripts')
    @include('products123.js')
@endpush

