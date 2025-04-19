@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h1>
                    Editing: <span class="badge bg-primary text-light fs-5">{{ $solution->title }}</span>
                </h1>

                <form action="{{ route('solutions.update', $solution->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title', $solution->title) }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control"
                            value="{{ old('slug', $solution->slug) }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="tagline" class="form-label">Tagline</label>
                        <input type="text" name="tagline" id="tagline" class="form-control"
                            value="{{ old('tagline', $solution->tagline) }}">
                    </div>

                    <div class="mb-4">
                        <label for="overview" class="form-label">Overview</label>
                        <textarea name="overview" id="overview" class="form-control" rows="5">
                                {{ old('overview', $solution->overview) }}
                            </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="testimonials" class="form-label">Testimonials (JSON)</label>
                        <textarea name="testimonials" id="testimonials" class="form-control"
                            rows="4">{{ old('testimonials', $solution->testimonials) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="highlights" class="form-label">Highlights</label>
                        <textarea name="highlights" id="highlights" class="form-control" rows="5">
                                {{ old('highlights', $solution->highlights) }}
                            </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="who_can_opt" class="form-label">Who Can Opt</label>
                        <textarea name="who_can_opt" id="who_can_opt" class="form-control" rows="5">
                                {{ old('who_can_opt', $solution->who_can_opt) }}
                            </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="ideal_for" class="form-label">Ideal For (HTML allowed)</label>
                        <textarea name="ideal_for" id="ideal_for" class="form-control" rows="5">
                                {{ old('ideal_for', $solution->ideal_for) }}
                            </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="key_benefits" class="form-label">Key Benefits</label>
                        <textarea name="key_benefits" id="key_benefits" class="form-control" rows="5">
                                {{ old('key_benefits', $solution->key_benefits) }}
                            </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="business_impact" class="form-label">Business Impact (HTML allowed)</label>
                        <textarea name="business_impact" id="business_impact" class="form-control" rows="5">
                                {{ old('business_impact', $solution->business_impact) }}
                            </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="how_it_works" class="form-label">How It Works</label>
                        <textarea name="how_it_works" id="how_it_works" class="form-control" rows="5">
                                {{ old('how_it_works', $solution->how_it_works) }}
                            </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="implementation" class="form-label">Implementation</label>
                        <textarea name="implementation" id="implementation" class="form-control" rows="5">
                                {{ old('implementation', $solution->implementation) }}
                            </textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-4">
                        <label for="image" class="form-label">Image (optional)</label>
                        @if($solution->image)
                            <div class="mb-2">
                                <img src="{{ asset('uploads/' . $solution->image) }}" alt="Current Image"
                                    style="max-width: 200px;">
                            </div>
                        @endif
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Solution</button>
                </form>
            </section>
        </main>
    </div>

    <!-- CKEditor Setup -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        const fields = [
            'overview',
            'highlights',
            'who_can_opt',
            'ideal_for',
            'key_benefits',
            'business_impact',
            'how_it_works',
            'implementation'
        ];

        fields.forEach(field => {
            CKEDITOR.replace(field, {
                filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
                customConfig: "{{ asset('ckeditor/config.js') }}",
                filebrowserUploadMethod: 'form',
                allowedContent: true, // allows any content
                extraAllowedContent: 'i(*)[*]', // allow <i> tag with any class/attributes
                height: '300px',
                width: '100%'
            });
        });

    </script>

@endsection