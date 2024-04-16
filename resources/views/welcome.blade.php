@extends('layouts.app')

@section('title', 'Welcome page')

@section('content')
    <div class="container mt-4">
        <h1>Welcome to Forward IT</h1>
        <div>
            <a href="{{ route('inventory.create') }}" class="btn btn-dark me-3"><strong>Add New Material</strong></a>
            <a href="{{ route('inventory.index') }}" class="btn btn-dark"><strong>List Of Materials</strong></a>
        </div>
    </div>
@endsection
