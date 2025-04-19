@extends('layouts.admin.admin_app')

@section('title', 'Job Openings')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Job Openings</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Post Name</th>
                                <th>Introduction</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Department</th>
                                <th>Education</th>
                                <th>Skills</th>
                                <th>Experience</th>
                                <th>Position Type</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($jobs as $job)
                                <tr>
                                    <td>{{ $job->post_name }}</td>
                                    <td>{{ Str::limit(strip_tags($job->Introduction), 50) }}</td>
                                    <td>{{ $job->Country }}</td>
                                    <td>{{ $job->city }}</td>
                                    <td>{{ $job->Department }}</td>
                                    <td>{{ $job->education }}</td>
                                    <td>{{ $job->skills }}</td>
                                    <td>{{ $job->experience }}</td>
                                    <td>{{ $job->position_type }}</td>
                                    <td>{{ Str::limit($job->role, 50) }}</td>
                                    <td>
                                        @if(strtolower($job->status) == 'open')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('job.edit', $job->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('job.destroy', $job->id) }}" method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12">No job openings found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div id="paginationWrapper" class="d-flex justify-content-center">
                    {{ $jobs->appends(request()->query())->links() }}
                </div>
            </section>
        </main>
    </div>
@endsection
