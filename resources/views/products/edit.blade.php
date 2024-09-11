@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-primary mb-4 text-center font-bold">Edit Product</h2>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form id="productForm" action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Method for updating the product -->
                        
                        <div class="form-group">
                            <label for="name" class="font-weight-bold">Product Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" placeholder="Enter product name" required>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label for="description" class="font-weight-bold">Description:</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter product description" rows="4" required>{{ $product->description }}</textarea>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label for="price" class="font-weight-bold">Price:</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Enter product price" step="0.01" required min="0">
                        </div>
                        
                        <div id="errorMessages" class="text-danger mb-3"></div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('productForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const productName = this.name.value.trim();
        const price = parseFloat(this.price.value);
        const description = this.description.value.trim();
        const errorMessages = [];

        if (!productName) {
            errorMessages.push("Product name is required.");
        }
        if (price <= 0) {
            errorMessages.push("Price must be a positive number.");
        }
        if (!description) {
            errorMessages.push("Description is required.");
        }

        const errorDiv = document.getElementById('errorMessages');
        errorDiv.innerHTML = '';
        if (errorMessages.length > 0) {
            errorMessages.forEach(msg => {
                const p = document.createElement('p');
                p.textContent = msg;
                errorDiv.appendChild(p);
            });
        } else {
            this.submit();
        }
    });
</script>
@endsection

@section('styles')
<style>
    body {
        background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        font-family: 'Arial', sans-serif;
    }

    .container {
        margin-top: 100px;
    }

    .card {
        border-radius: 10px;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 50px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    label {
        color: #333;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    #errorMessages p {
        margin: 0;
    }
</style>
@endsection
