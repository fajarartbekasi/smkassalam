@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Login ke SMK ASSALAM</h6>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input id="email"
                                   type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="email..."
                                   required autofocus>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password"
                                   type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password"
                                   placeholder="*****"
                                   required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="mt-3 mb-3">
                            <div class="d-flex align-item-center">

                                <button type="submit" class="btn btn-info btn-sm text-light">
                                    <span class="mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20"
                                             width="20"
                                             height="20">
                                            <path fill="#fff"
                                                  fill-rule="evenodd"
                                                  d="M4.16 4.16l1.42 1.42A6.99 6.99 0 0 0 10 18a7 7 0 0 0 4.42-12.42l1.42-1.42a9 9 0 1 1-11.69 0zM9 0h2v8H9V0z" />
                                        </svg>
                                    </span>
                                    Login
                                </button>
                                <div class="form-check ml-3 mr-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
