@extends('admin.master')
@section('content')
    <button class=" col-sm-1 btn btn-block btn-dark"> <a href="{{ route('admin.category.index') }}"> category show</a>
    </button>

    </br></br>

    <table class="table table-primary table-bordered" ">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Parent
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($categories as $category)
        <tr class=" table table-striped">
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>

            <td>{{ $category->parent ? $category->parent->title : '' }}</td>
            <td>

                <label for="">
                    <a class="btn small" href="{{ route('admin.category.edit', ['category' => $category->id]) }}">
                        Edit
                    </a>
                </label>
                <label for="">
                    <form action="{{ route('admin.category.destroy', ['category' => $category->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="small" type="submit">Delete</button>
                    </form>
                </label>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>
@endsection
