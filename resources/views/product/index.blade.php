@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Product</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Harga Sale</th>
                                <th>Brand</th>
                                <th>Rating</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $product['category'] }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>Rp.{{ number_format($product['price'], 0) }}</td>
                                    <td>@if ($product['sale_price'] != 0)
                                        Rp.{{  number_format($product['sale_price'], 0) }}
                                    @else
                                        Rp.{{  number_format($product['price'], 0) }}
                                    @endif</td>
                                    <td>{{ $product['brands'] }}</td>
                                    <td>{{ $product['rating'] }}</td>
                                    <td>
                                        <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
                                                <button type='button' class='btn btn-warning'><a href="">Update</a></button>
                                                <button type='button' class='btn btn-danger'><a href="">Delete</a></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection