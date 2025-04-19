@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Edit About Page Content</h2>
                <form action="{{ route('admin.about.update') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="about_editor" class="form-label">About Us</label>
                        <textarea name="about_detail" id="about_editor" class="form-control"
                            rows="6">{{ $about->detail ?? '' }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="mission_editor" class="form-label">Mission</label>
                        <textarea name="mission_detail" id="mission_editor" class="form-control"
                            rows="4">{{ $mission->detail ?? '' }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="vision_editor" class="form-label">Vision</label>
                        <textarea name="vision_detail" id="vision_editor" class="form-control"
                            rows="4">{{ $vision->detail ?? '' }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <a href="{{ route('admin.about.view') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </section>
        </main>
    </div>

    <!-- Optional: Add CKEditor (WYSIWYG editor) -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#about_editor')).catch(console.error);
        ClassicEditor.create(document.querySelector('#mission_editor')).catch(console.error);
        ClassicEditor.create(document.querySelector('#vision_editor')).catch(console.error);
    </script>
@endsection