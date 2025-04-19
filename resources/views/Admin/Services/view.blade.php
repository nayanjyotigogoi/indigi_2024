@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Services Content</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                            <tr>
                                <td>{{ $service->title }}</td>
                                <td>
                                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No services found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </section>
        </main>
    </div>
@endsection
