@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="text-center">
                        <h6 class="text-muted">
                            Daftar Ke SMK ASSALAM
                        </h6>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input id="name"
                                   type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name"
                                   value="{{ old('name') }}"
                                   placeholder="Youre name.."
                                   required autofocus>

                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="email"
                                   type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="example@test.com"
                                   required>

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
                        <div class="form-group">
                            <input id="password-confirm"
                                   type="password"
                                   class="form-control"
                                   name="password_confirmation"
                                   placeholder="confrim password.."
                                   required>

                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-info btn sm shadow text-light">
                                Kirim permintaan saya
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
