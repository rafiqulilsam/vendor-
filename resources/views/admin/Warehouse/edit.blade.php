@extends('admin.master')
@section('content')
    <div class="container">
        <button class=" col-sm-1 btn btn-block btn-dark"> <a href="{{ route('admin.warehouse.index') }}">show warehouse</a>
        </button>
        </br>
        <div class="row col-md-12 bg-success">
            <label for="" class="col-md-12  btn-success">
                <h2 class="btn-block text-center"> Edit warehouse</h2>
                <form class="bg-dark col-sm-11" method="POST"
                    action="{{ route('admin.warehouse.update', ['warehouse' => $warehouse->id]) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">title</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" id="inputEmail3"
                                value="{{ old('title') ?? $warehouse->title }}"
                                class="input @error('title') is-invalid @enderror">

                            @error('title')
                                <small>
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-block btn-primary ">update warehouse</button>
                        </div>
                    </div>
                </form>

            </label>
      </div>
    </div>
@endsection
