@extends('layouts.app')

@section('content')
    <h1>Inventory List</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->product_name }}</td>
                    <td>{{ $inventory->category }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->price }}</td>
                    <td>
                        <a href="{{ route('inventory.edit', $inventory->id) }}">Edit</a>
                        <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('inventory.create') }}">Add New Item</a>
@endsection