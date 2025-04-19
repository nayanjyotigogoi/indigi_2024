@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Create New Service</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('services.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="title">Service Name</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug (URL friendly)</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </section>
        </main>
    </div>
@endsection
