@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Campuses</h1>
    <a href="{{ route('campuses.create') }}" class="btn btn-primary">Add New Campus</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campuses as $campus)
            <tr>
                <td>{{ $campus->name }}</td>
                <td>
                    <!-- Add edit/delete actions here -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection