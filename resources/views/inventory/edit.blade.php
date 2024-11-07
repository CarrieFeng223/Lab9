@extends('layouts.app')

@section('content')
    <h1>Edit Inventory Item</h1>
    <form action="{{ route('inventory.update', $inventory->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Product Name:</label>
        <input type="text" name="product_name" value="{{ $inventory->product_name }}" required><br>
        
        <label>Category:</label>
        <input type="text" name="category" value="{{ $inventory->category }}" required><br>
        
        <label>Quantity:</label>
        <input type="number" name="quantity" value="{{ $inventory->quantity }}" required><br>
        
        <label>Price:</label>
        <input type="text" name="price" value="{{ $inventory->price }}" required><br>
        
        <button type="submit">Update Item</button>
    </form>
@endsection
