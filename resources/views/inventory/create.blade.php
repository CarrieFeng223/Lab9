@extends('layouts.app')

@section('content')
    <h1>Add New Inventory Item</h1>
    <form action="{{ route('inventory.store') }}" method="POST">
        @csrf
        <label>Product Name:</label>
        <input type="text" name="product_name" required><br>

        <label>Category:</label>
        <input type="text" name="category" required><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" required><br>

        <label>Price:</label>
        <input type="text" name="price" required><br>

        <button type="submit">Add Item</button>
    </form>
@endsection
