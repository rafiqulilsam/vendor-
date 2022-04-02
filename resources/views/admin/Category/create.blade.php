@extends('admin.master')
@section('content')
    <div class="container">
        <button class=" col-md-11 btn btn-block btn-dark"> <a href="{{ route('admin.category.index') }}">users</a>
        </button>
        <div class="row col-md-12 bg-success">
            <label for="" class="col-md-12  btn-success">
                <h2 class="btn-block text-center"> Create category</h2>

                <form class="col-md-12 " method="POST" action="{{ route('admin.category.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" id="inputEmail3" value="{{ old('title') }}"
                                class="input @error('title') is-invalid @enderror">

                            @error('title')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Parent</label>
                        <div class="col-sm-10">
                            <select class="col-sm-12  name="parent_id" value="{{ old('parent_id') }}"
                                class="input @error('parent_id') is-invalid @enderror">
                                <option value="">Select Parent</option>
                                @foreach ($parents as $t)
                                    <option value="{{ $t->id }}">{{ $t->title }}</option>
                                @endforeach
                            </select>
                            @error('parent_id')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-block btn-primary class="col-sm-10  ">create category</button>
                        </div>
                    </div>
                </form>
            </label>

        </div>
    </div>
@endsection
