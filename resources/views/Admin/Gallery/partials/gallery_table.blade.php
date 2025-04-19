<table class="table table-bordered">
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($images as $image)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if(file_exists(public_path('uploads/gallery/' . $image->filename)))
                        <img src="{{ asset('uploads/gallery/' . $image->filename) }}" width="50" height="50" class="rounded">
                    @else
                        <span class="text-danger">Image not found</span>
                    @endif
                </td>
                <td>{{ $image->title }}</td>
                <td>{{ $image->category }}</td>
                <td>
                    <a href="{{ route('gallery.edit', $image->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('gallery.destroy', $image->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div id="paginationWrapper" class="d-flex justify-content-center">
    {{ $images->appends(request()->query())->links() }}
</div>

