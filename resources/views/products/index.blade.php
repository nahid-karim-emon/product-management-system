@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h2 class="mb-4 text-primary font-weight-bold">ALL PRODUCTS</h2>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}৳</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#productsTable').DataTable();
    });
</script>
@endsection

@section('styles')
<style>
    body {
        background: linear-gradient(to right, #f7f8fc, #e2e6ea);
        font-family: 'Arial', sans-serif;
    }

    .container {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    h2 {
        color: #007bff;
    }

    .btn-primary {
        background: linear-gradient(to right, #007bff, #0056b3);
        border: none;
        transition: background 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(to right, #0056b3, #004494);
    }

    .btn-warning {
        background: linear-gradient(to right, #ffc107, #e0a800);
        border: none;
        color: #ffffff;
        transition: background 0.3s ease;
    }

    .btn-warning:hover {
        background: linear-gradient(to right, #e0a800, #c69500);
    }

    .btn-danger {
        background: linear-gradient(to right, #dc3545, #bd2130);
        border: none;
        color: #ffffff;
        transition: background 0.3s ease;
    }

    .btn-danger:hover {
        background: linear-gradient(to right, #bd2130, #a71d2a);
    }

    .table {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    .table thead.thead-dark {
        background-color: #343a40;
        color: #ffffff;
    }

    .table-responsive {
        padding-top: 20px;
    }

    .alert {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
