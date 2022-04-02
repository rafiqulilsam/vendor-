@extends('admin.master')
@section('content')
    <div class="container">
        <button class=" col-sm-1 btn btn-block btn-dark"> <a href="{{ route('admin.category.index') }}">show category</a>
        </button>
        </br>
        <div class="row col-md-12">
            <label for="" class="col-md-12  ">
                <h2 class="btn-block text-center"> Edit category</h2>

                <form class="col-md-12 " method="POST" action="{{ route('admin.category.update',['category'=>$category->id]) }}">
                    @csrf

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input name="title"   value="{{ old('title') ?? $category->title }}"
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
                            <select name="parent_id" value="
                                {{ old('parent_id') ?? $category->parent_id }}"
                                class="input @error('parent_id') is-invalid @enderror">
                                <option value="">Select Parent</option>
                                @foreach ($parents as $t)
                                    <option value="{{ $t->id }}">{{ $t->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-block btn-primary class=" col-sm-10 ">update category</button>
                            </div>
                        </div>
                    </form>

            </label>
        </div>
      </div>
  @endsection
