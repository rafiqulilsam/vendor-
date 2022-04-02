@extends('admin.master')
@section('content')
    <div class="container bg-dark text-light">
        <button class=" col-md-11 btn btn-block btn-dark"> <a href="{{ route('admin.product.index') }}">Product Show</a>
        </button>
        <div class="row col-md-12 bg-dark text-light">
            <label for="" class="col-md-12">
                <h2 class="btn-block text-center"> Product Create</h2>

                <form class="col-md-12 text-light" method="POST" action="{{ route('admin.product.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input name="title" type="texy" class="form-control" id="inputEmail3"
                                value="{{ old('title') }}" class="input @error('title') is-invalid @enderror">

                            @error('name')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input name="Description" class="form-control" type="text" id="inputEmail3"
                                value="{{ old('Description') }}" class="input @error('Description') is-invalid @enderror">

                            @error('Description')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Rate</label>
                        <div class="col-sm-10">
                            <input name="rate" type="number" class="form-control" id="inputEmail3"
                                value="{{ old('rate') }}" class="input @error('rate') is-invalid @enderror">

                            @error('rate')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">quantity</label>
                        <div class="col-sm-10">
                            <input name="quantity" type="number" class="form-control" id="inputEmail3"
                                value="{{ old('quantity') }}" class="input @error('quantity') is-invalid @enderror">

                            @error('quantity')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">selling price</label>
                        <div class="col-sm-10">
                            <input name="selling_price" type="number" class="form-control" id="inputEmail3"
                                value="{{ old('selling_price') }}"
                                class="input @error('selling_price') is-invalid @enderror">

                            @error('selling_price')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Warehouse</label>
                        <div class="col-sm-10">
                            <select name="warehouse_id" class="col-sm-12" value="{{ old('warehouse_id') }}"
                                class="input @error('warehouse_id') is-invalid @enderror">
                                <option value="">Select Warehouse</option>
                                @foreach ($warehouses as $t)
                                    <option value="{{ $t->id }}">{{ $t->title}}</option>
                                @endforeach
                            </select>
                            @error('warehouse_id')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select name="category_id" class="col-sm-12" value="{{ old('category_id') }}"
                                class="input @error('category_id') is-invalid @enderror">
                                <option value="">Select Category</option>
                                @foreach ($categories as $t)
                                    <option value="{{ $t->id }}">{{ $t->title }}</option>
                                @endforeach
                            </select>
                            @error('rule')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Unit</label>
                        <div class="col-sm-10">

                            <select name="unit_id" class="col-sm-12" value="{{ old('unit_id') }}"
                                class="input @error('unit_id') is-invalid @enderror">
                                <option value="">Select Unit</option>
                                @foreach ($units as $t)
                                    <option value="{{ $t->id }}">{{ $t->title }}</option>
                                @endforeach
                            </select>
                            @error('unit_id')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-10">
                            <button type="submit" class="col-sm-12" class="btn bg-primary ">create product</button>
                        </div>
                    </div>



                </form>
            </label>

        </div>
    </div>
@endsection
