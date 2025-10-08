@extends('layouts.admin.admin_app')

@section('title', 'Edit Job')

@section('content')
<div class="container">
    <main id="main" class="main">
        <section class="section">
            <h2>Edit Job Opening</h2>

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

            <form action="{{ route('job.update', $job->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="post_name" class="form-label">Job Title</label>
                    <input type="text" name="post_name" id="post_name" class="form-control" value="{{ $job->post_name }}" required>
                </div>

                <div class="mb-3">
                    <label for="introduction" class="form-label">Introduction</label>
                    <textarea name="introduction" id="introduction" class="form-control ckeditor" rows="3">{{ $job->Introduction }}</textarea>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" name="country" id="country" class="form-control" value="{{ $job->Country }}" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" value="{{ $job->city }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" id="department" class="form-control" value="{{ $job->Department }}" required>
                </div>

                <div class="mb-3">
                    <label for="education" class="form-label">Education</label>
                    <input type="text" name="education" id="education" class="form-control" value="{{ $job->education }}">
                </div>

                <div class="mb-3">
                    <label for="skills" class="form-label">Skills (comma-separated)</label>
                    <input type="text" name="skills" id="skills" class="form-control" value="{{ $job->skills }}">
                </div>

                <div class="mb-3">
                    <label for="experience" class="form-label">Experience</label>
                    <input type="text" name="experience" id="experience" class="form-control" value="{{ $job->experience }}">
                </div>

                <div class="mb-3">
                    <label for="position_type" class="form-label">Position Type</label>
                    <select name="position_type" id="position_type" class="form-select">
                        @foreach(['Full-time', 'Part-time', 'Internship', 'Contract'] as $type)
                            <option value="{{ $type }}" {{ $job->position_type == $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Job Role</label>
                    <textarea name="role" id="role" class="form-control ckeditor" rows="3">{{ $job->role }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="number_of_opening" class="form-label">Number of Vacancies</label>
                    <input type="number" name="number_of_opening" id="number_of_opening" class="form-control" value="{{ $job->number_of_opening }}">
                </div>

                <div class="mb-3">
                    <label for="working_hour" class="form-label">Working Hours</label>
                    <input type="text" name="working_hour" id="working_hour" class="form-control" value="{{ $job->working_hour }}">
                </div>

                <div class="mb-3">
                    <label for="workplace_type" class="form-label">Workplace Type</label>
                    <select name="workplace_type" id="workplace_type" class="form-select">
                        @foreach(['On-site', 'Remote', 'Hybrid'] as $type)
                            <option value="{{ $type }}" {{ $job->workplace_type == $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="notice_period" class="form-label">Notice Period</label>
                    <input type="text" name="notice_period" id="notice_period" class="form-control" value="{{ $job->notice_period }}">
                </div>

                <div class="mb-3">
                    <label for="preferred_skill" class="form-label">Preferred Skills</label>
                    <textarea name="preferred_skill" id="preferred_skill" class="form-control ckeditor" rows="3">{{ $job->preferred_skill }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="candidate_profile" class="form-label">Candidate Profile</label>
                    <textarea name="candidate_profile" id="candidate_profile" class="form-control ckeditor" rows="3">{{ $job->candidate_profile }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="Open" {{ $job->status == 'Open' ? 'selected' : '' }}>Open</option>
                        <option value="Closed" {{ $job->status == 'Closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Job</button>
            </form>
        </section>
    </main>
</div>
@endsection
<!-- CKEditor Setup -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
       
        CKEDITOR.editorConfig = function (config) {
            config.allowedContent = true; // fully disable ACF (Advanced Content Filter)
            config.extraAllowedContent = 'i(*)[*]'; // allow any <i> tag with any attributes
            config.autoParagraph = false; // optional: don't wrap in <p> if not needed
        };

            CKEDITOR.replace(field, {
                filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
                customConfig: "{{ asset('ckeditor/config.js') }}",
                filebrowserUploadMethod: 'form',
                allowedContent: true,
                extraAllowedContent: 'i(*)[*]',
                height: '200px',
                width: '100%',
                ignoreEmpty: false // important to preserve empty <i> tags
            });

    </script>
