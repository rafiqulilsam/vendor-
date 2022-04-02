@extends('admin.master')
@section('content')
    <button class=" col-sm-1 btn btn-block btn-dark">  <a class="btn" href="{{ route('admin.warehouse.create') }}">Create warehouse </a>
    </button>

    </br></br>

    <table class="table table-primary table-bordered" >
        <thead>
            <tr>
                <th>
                    ID
                </th>

                <th>
                    Title
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($warehouses as $warehouse)
            <tr class=" table table-striped">
                    <td>{{ $warehouse->id }}</td>
                    <td>{{ $warehouse->title }}</td>
                    <td>
                        <label for="">
                            <a class="btn small"
                            href="{{ route('admin.warehouse.edit',['warehouse'=>$warehouse->id]) }}">
                            Edit
                        </a>
                        </label>
                        <label for="">
                            <form
                                action="{{ route('admin.warehouse.destroy',['warehouse'=>$warehouse->id]) }}"
                                method="post">
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
