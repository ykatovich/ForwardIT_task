@extends('layouts.app')

@section('title', 'Create New Material')

@section('content')
    <div class="container">
        <h1>Create New Material</h1>
        <form method="POST" action="{{ route('inventory.store') }}">
            @csrf

            <div class="mb-3 mt-5">
                <label for="name" class="form-label"><strong>Name</strong></label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>

            <div class="mb-3">
                <label for="material" class="form-label">Material</label>
                <select class="form-control" id="material" name="material" required>
                    <option value="Steel">Steel</option>
                    <option value="Iron">Iron</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" required>
            </div>

            <button type="submit" class="btn btn-dark">Save</button>
        </form>
    </div>
@endsection
