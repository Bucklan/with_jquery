@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 py-5">
            <div class="col-3">
                @include('products.create')
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>543543 kzt </td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr> <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>543543 kzt </td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr> <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>543543 kzt </td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@include('products.js')