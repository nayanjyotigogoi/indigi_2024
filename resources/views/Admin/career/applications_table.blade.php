<div class="table-responsive">
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Application ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Education</th>
                <th>Role Applied For</th>
                <th>Experience</th>
                <th>Current CTC</th>
                <th>Expected CTC</th>
                <th>Resume</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->application_id }}</td>
                    <td>{{ $application->name }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->phone }}</td>
                    <td>{{ $application->education }}</td>
                    <td>{{ $application->role }}</td>
                    <td>{{ $application->experience }}</td>
                    <td>{{ $application->current_ctc }}</td>
                    <td>{{ $application->expected_ctc }}</td>
                    <td>
                        @if($application->file)
                            <a href="{{ asset('uploads/Application/' . $application->file) }}" target="_blank">View Resume</a>
                        @else
                            No Resume
                        @endif
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="paginationWrapper" class="d-flex justify-content-center">
    {{ $applications->appends(request()->query())->links() }}
</div>