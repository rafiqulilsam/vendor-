@extends('admin.master')
@section('content')



<div class="container">
    <button class=" col-sm-12 btn btn-success"> <a href="{{ route('admin.product.create') }}">Create Product</a>
    </button>

    <table class="table table-primary table-bordered" ">
        <thead>
            <tr>
                <th>purchase
                    ID
                </th>
                <th>
                    Title
                </th>
                <th>
                    price
                </th>
                <th>
                    unit
                </th>
                <th>
                    category
                </th>
                <th>
                    Stock
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class=" table table-striped">

                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>

                    <td>{{ $product->rate }}</td>
                    <td>{{ $product->unit->title }}</td>
                    <td>{{ $product->category->title }}</td>
                    <td>
                        {{ $product->stockQunatity }}
                    </td>
                    <td>
                        <div>
                            <a class="btn small"
                                href="{{ route('admin.product.edit',['product'=>$product->id]) }}">
                                Edit
                            </a>
                            <form
                                action="{{ route('admin.product.destroy',['product'=>$product->id]) }}"
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

</div>
@endsection
{{--
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

                 <a class="btn small"
                        href="{{ route('admin.user.edit',['user'=>$user->id]) }}">

                    </a>
                    <form
                        action="{{ route('admin.user.destroy',['user'=>$user->id]) }}"
                        method="post">
                        @csrf
                        @method('delete')
                        <button class="small " type="submit">Delete</button>
                    </form>
                <td>


                <a href="{{ route('admin.user.edit', ['user' => $user->id]) }}" class="btn btn-xs btn-danger">
                    <i class="fas fa-trash">Edit</i>
                </a>


                <form action="{{ route('admin.user.destroy', ['user' => $user->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="small " type="submit">Delete</button>
                </form>

            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
 --}}
