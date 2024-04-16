@extends('layouts.app')

@section('title', 'Inventory List')

@section('content')
    <div class="container mt-4">
        <h1>Inventory List</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Material</th>
                <th scope="col">Weight</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->material }}</td>
                    <td>{{ $inventory->weight }}</td>
                    <td>
                        <form action="{{ route('inventory.delete', $inventory) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{ route('inventory.create') }}" class="btn btn-dark"><strong>Add New Material</strong></a>
        </div>
    </div>
@endsection
