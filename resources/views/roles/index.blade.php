<x-layouts.app>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Roles</h2>
            <button type="button" class="btn btn-outline-success">
            <a href="{{ route('roles.create') }}" class="btn btn-success">Create New Role</a>
            </button>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered mt-3">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
</x-layouts.app>
