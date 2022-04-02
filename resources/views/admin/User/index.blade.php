@extends('admin.master')
@section('content')
    <button class=" col-sm-1 btn btn-block btn-dark"> <a href="{{ route('admin.user.index') }}">users</a>
    </button>

    </br></br>

    <table class="table table-primary table-bordered" ">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                 @foreach ($users as $user)
        <tr class=" table table-striped">
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>

            <td>{{ $user->email }}</td>
            <td>
                <label for=""> <a href="{{ route('admin.user.edit', ['user' => $user->id]) }}"
                        class="btn btn-xs btn-danger">
                        <i class="fas fa-trash">Edit</i>
                    </a>
                </label>
                <label for="">
                    <form action="{{ route('admin.user.destroy', ['user' => $user->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="small " type="submit">Delete</button>
                    </form>
                </label>

            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
