@extends('layouts.app')

@section('title', 'Create New Material')

@section('content')
    <div class="container">
        <h1>Create New Material</h1>
        <form method="POST" action="{{ route('inventory.store') }}">
            @csrf

            <div class="mb-3 mt-5">
                <label for="name" class="form-label"><strong>Nosaukums</strong></label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Skaits</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>

            <div class="mb-3">
                <label for="material" class="form-label">Materiāls</label>
                <select class="form-control" id="material" name="material" required>
                    <option value="Terauds">Tērauds</option>
                    <option value="Dzelzs">Dzelzs</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" required>
            </div>

            <button type="submit" class="btn btn-primary">Pievienot</button>
        </form>
    </div>
@endsection
