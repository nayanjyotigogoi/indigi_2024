@extends('layouts.admin.admin_app')

@section('title', 'Add New Job')

@section('content')
<div class="container">
    <main id="main" class="main">
        <section class="section">
            <h2>Add New Job Opening</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('job.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="post_name" class="form-label">Job Title</label>
                    <input type="text" name="post_name" id="post_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="introduction" class="form-label">Introduction</label>
                    <textarea name="introduction" id="introduction" class="form-control" rows="3" required></textarea>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" id="department" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="education" class="form-label">Education</label>
                    <input type="text" name="education" id="education" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="skills" class="form-label">Skills (comma-separated)</label>
                    <input type="text" name="skills" id="skills" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="experience" class="form-label">Experience</label>
                    <input type="text" name="experience" id="experience" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="position_type" class="form-label">Position Type</label>
                    <select name="position_type" id="position_type" class="form-select" required>
                        <option value="Full-time">Full-time</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Internship">Internship</option>
                        <option value="Contract">Contract</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Job Role</label>
                    <input type="text" name="role" id="role" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="Open" selected>Open</option>
                        <option value="Closed">Closed</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save Job</button>
            </form>
        </section>
    </main>
</div>
@endsection
