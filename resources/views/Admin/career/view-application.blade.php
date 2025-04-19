@extends('layouts.admin.admin_app')

@section('title', 'Career Applications')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Career Applications</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <!-- Search Form -->
                <form id="search-form" method="GET">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" id="search" name="search" class="form-control" placeholder="Search by name or email" value="{{ request()->get('search') }}">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>

                <!-- Table -->
                <div id="applications-table" class="table-responsive">
                    @include('admin.career.applications_table', ['applications' => $applications])
                </div>

            </section>
        </main>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Handle form submission for search
        $('#search-form').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            let searchQuery = $('#search').val();
            let url = '{{ route('career.applications') }}' + (searchQuery ? '?search=' + searchQuery : '');

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#applications-table').html(response.table);
                    $('.pagination').html(response.pagination); // Update pagination links
                }
            });
        });

        // Handle pagination click
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            let url = $(this).attr('href');
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#applications-table').html(response.table);
                    $('.pagination').html(response.pagination); // Update pagination links
                }
            });
        });
    });
</script>
@endpush
