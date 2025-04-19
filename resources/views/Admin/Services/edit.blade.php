@extends('layouts.admin.admin_app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h1>
                    Editing Service: <span class="badge bg-primary text-light fs-5">{{ $service->title }}</span>
                </h1>

                <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title', $service->title) }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control"
                            value="{{ old('slug', $service->slug) }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="tagline" class="form-label">Tagline</label>
                        <input type="text" name="tagline" id="tagline" class="form-control"
                            value="{{ old('tagline', $service->tagline) }}">
                    </div>

                    <div class="mb-4">
                        <label for="stats_section" class="form-label">Stats</label>
                        <textarea name="stats_section" id="stats_section" class="form-control" rows="4">
                                    {{ old('stats_section', $service->stats_section) }}
                                </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="features_section" class="form-label">Features</label>
                        <textarea name="features_section" id="features_section" class="form-control" rows="5">
                                    {{ old('features_section', $service->features_section) }}
                                </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="duration_section" class="form-label">Duration</label>
                        <textarea name="duration_section" id="duration_section" class="form-control" rows="5">
                                    {{ old('duration_section', $service->duration_section) }}
                                </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="details_section" class="form-label">Details</label>
                        <textarea name="details_section" id="details_section" class="form-control" rows="5">
                                    {{ old('details_section', $service->details_section) }}
                                </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="cta_title" class="form-label">CTA Title</label>
                        <input type="text" name="cta_title" id="cta_title" class="form-control"
                            value="{{ old('cta_title', $service->cta_title) }}">
                    </div>

                    <div class="mb-4">
                        <label for="cta_text" class="form-label">CTA Text</label>
                        <textarea name="cta_text" id="cta_text" class="form-control" rows="4">
                                    {{ old('cta_text', $service->cta_text) }}
                                </textarea>
                    </div>

                    <div class="mb-4">
                        <label for="cta_button_text" class="form-label">CTA Button Text</label>
                        <input type="text" name="cta_button_text" id="cta_button_text" class="form-control"
                            value="{{ old('cta_button_text', $service->cta_button_text) }}">
                    </div>

                    <div class="mb-4">
                        <label for="cta_button_link" class="form-label">CTA Button Link</label>
                        <input type="url" name="cta_button_link" id="cta_button_link" class="form-control"
                            value="{{ old('cta_button_link', $service->cta_button_link) }}">
                    </div>

                    <div class="mb-4">
                        <label for="header_image" class="form-label">Header Image (optional)</label>
                        @if($service->header_image)
                            <div class="mb-2">
                                <img src="{{ asset('uploads/service/' . $service->header_image) }}" alt="Current Image"
                                    style="max-width: 200px;">
                            </div>
                        @endif
                        <input type="file" name="header_image" id="header_image" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Update Service</button>
                </form>
            </section>
        </main>
    </div>

    <!-- CKEditor Setup -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        const fields = [
            'stats_section',
            'features_section',
            'duration_section',
            'details_section',
            'cta_text'
        ];

        CKEDITOR.editorConfig = function (config) {
            config.allowedContent = true; // fully disable ACF (Advanced Content Filter)
            config.extraAllowedContent = 'i(*)[*]'; // allow any <i> tag with any attributes
            config.autoParagraph = false; // optional: don't wrap in <p> if not needed
        };


        fields.forEach(field => {
            CKEDITOR.replace(field, {
                filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
                customConfig: "{{ asset('ckeditor/config.js') }}",
                filebrowserUploadMethod: 'form',
                allowedContent: true,
                extraAllowedContent: 'i(*)[*]',
                height: '300px',
                width: '100%',
                ignoreEmpty: false // important to preserve empty <i> tags
            });

        });

    </script>
@endsection