@extends('admin.master')
@section('content')
    <div class="container">
        <button class=" col-md-11 btn btn-block btn-dark"> <a href="{{ route('admin.warehouse.index') }}">show warehouse</a>
        </button>
            <div class="row col-md-12 bg-success">
            <label for="" class="col-md-12  btn-success" >
                 <h2 class="btn-block text-center"> Create warehouse</h2>

                    <form class="col-md-12 " method="POST" action="{{ route('admin.warehouse.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">title</label>
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
                            <label class="col-sm-2 col-form-label"></label>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-block btn-primary ">create user</button>
                            </div>
                        </div>
                    </form>
                </label>

            </div>
        </div>

@endsection

