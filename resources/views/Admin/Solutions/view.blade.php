@extends('layouts.admin.admin_app')
@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Solutions Content</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Solution</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($solutions as $solution)
                            <tr>
                                <td>{{ $solution->title }}</td>
                                <td>
                                    <a href="{{ route('solutions.edit', $solution->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No solutions found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </section>
        </main>
    </div>
@endsection
