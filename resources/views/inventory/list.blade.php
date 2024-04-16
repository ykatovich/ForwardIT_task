@extends('layouts.app')

@section('title', 'Inventory List')

@section('content')
    <div class="container mt-4">
        <h1>Inventory List</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Material</th>
                <th scope="col">Weight</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <th scope="row">{{ $inventory->id }}</th>
                    <td>{{ $inventory->name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->material }}</td>
                    <td>{{ $inventory->weight }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
