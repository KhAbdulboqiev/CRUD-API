@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User Details</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                <p class="card-text"><strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i') }}</p>
                <p class="card-text"><strong>Updated At:</strong> {{ $user->updated_at->format('Y-m-d H:i') }}</p>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users</a>
            </div>
        </div>
    </div>
@endsection
