@extends('admin.master')
@section('content')
    <button class=" col-sm-1 btn btn-block btn-dark"> <a href="{{ route('admin.unit.create') }}">unit create</a>
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
                    SortTitle
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($units as $unit)
            <tr class=" table table-striped">
                    <td>{{ $unit->id }}</td>
                    <td>{{ $unit->title }}</td>
                    <td>{{ $unit->sort_title }}</td>
                    <td>
                        <div>
                            <a class="btn small"
                                href="{{ route('admin.unit.edit',['unit'=>$unit->id]) }}">
                                Edit
                            </a>
                            <form
                                action="{{ route('admin.unit.destroy',['unit'=>$unit->id]) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button class="small" type="submit">Delete</button>
                            </form>
                        </div>

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>


@endsection

