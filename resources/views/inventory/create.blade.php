@extends('layouts.app')

@section('title', 'Create New Material')

@section('content')
    <div class="container">
        <h1>Create New Material</h1>
        <form method="POST" action="{{ route('inventory.store') }}">
            @csrf

            <div class="mb-3 mt-5">
                <label for="name" class="form-label"><strong>Name</strong></label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label"><strong>Quantity</strong></label>
                <input type="number" class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
                @if ($errors->has('quantity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="material" class="form-label"><strong>Material</strong></label>
                <select class="form-control {{ $errors->has('material') ? 'is-invalid' : '' }}" id="material" name="material" required>
                    <option value="Steel" {{ old('material') == 'Steel' ? 'selected' : '' }}>Steel</option>
                    <option value="Iron" {{ old('material') == 'Iron' ? 'selected' : '' }}>Iron</option>
                </select>
                @if ($errors->has('material'))
                    <div class="invalid-feedback">
                        {{ $errors->first('material') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label"><strong>Weight</strong></label>
                <input type="text" class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" id="weight" name="weight" value="{{ old('weight') }}" required>
                @if ($errors->has('weight'))
                    <div class="invalid-feedback">
                        {{ $errors->first('weight') }}
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-dark"><strong>Save</strong></button>
        </form>
    </div>
@endsection
