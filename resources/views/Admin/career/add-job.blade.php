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
                        <textarea name="introduction" id="introduction" class="form-control ckeditor" rows="3"></textarea>
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
                        <input type="text" name="department" id="department" class="form-control" required>
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
                        <select name="position_type" id="position_type" class="form-select">
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                            <option value="Internship">Internship</option>
                            <option value="Contract">Contract</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Job Role</label>
                        <textarea name="role" id="role" class="form-control ckeditor" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="number_of_opening" class="form-label">Number of Vacancies</label>
                        <input type="number" name="number_of_opening" id="number_of_opening" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="working_hour" class="form-label">Working Hours</label>
                        <input type="text" name="working_hour" id="working_hour" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="workplace_type" class="form-label">Workplace Type</label>
                        <select name="workplace_type" id="workplace_type" class="form-select">
                            <option value="On-site">On-site</option>
                            <option value="Remote">Remote</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="notice_period" class="form-label">Notice Period</label>
                        <input type="text" name="notice_period" id="notice_period" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="preferred_skill" class="form-label">Preferred Skills</label>
                        <textarea name="preferred_skill" id="preferred_skill" class="form-control ckeditor"
                            rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="candidate_profile" class="form-label">Candidate Profile</label>
                        <textarea name="candidate_profile" id="candidate_profile" class="form-control ckeditor"
                            rows="3"></textarea>
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
