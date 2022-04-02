@extends('admin.master')
@section('content')
    <div class="container">
        <button class=" col-md-11 btn btn-block btn-dark"> <a href="{{ route('admin.user.index') }}">users</a>
        </button>
            <div class="row col-md-12 bg-success">
            <label for="" class="col-md-12  btn-success" >
                 <h2 class="btn-block text-center"> Create User</h2>

                    <form class="col-md-12 " method="POST" action="{{ route('admin.user.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" class="form-control" id="inputEmail3" value="{{ old('name') }}"
                                    class="input @error('name') is-invalid @enderror">

                                @error('name')
                                    <small>
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" class="form-control" id="inputPassword3 value=" {{ old('email') }}"
                                    class="input @error('email') is-invalid @enderror">
                                @error('email')
                                    <small>
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">User Role</label>
                            <div class="col-sm-10">
                                <select name="type" class="form-control" id="inputPassword3 value=" {{ old('type') }}"
                                    class="input @error('type') is-invalid @enderror">
                                    @foreach ($types as $t)
                                        <option value="{{ $t }}">{{ $t }}</option>
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
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="password" class="form-control" id="inputPassword3 value="
                                    {{ old('password') }}" class="input @error('email') is-invalid @enderror">
                                @error('password')
                                    <small>
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>

                            <div class="col-sm-10">
                                <button type="submit" class="col-sm-12  btn btn-block btn-primary ">create user</button>
                            </div>
                        </div>
                    </form>
                </label>

            </div>
        </div>

@endsection
