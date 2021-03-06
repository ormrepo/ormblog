@extends('layouts.master')

@section('meta-title', 'Logistics |  Transport  | Sign In ')

@section('content')
    <div class="form-page">
        <div class="login-fluid">

                <div class="header">
                    <h2 class="leader is--black">Sign In</h2>
                </div><!-- /.header -->
                <div class="row">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include ('partials.errors')
                        <div class="form-group form-group-lg">
                            <label for="input1" class="control-label">E-Mail Address</label>
                            <input autofocus id="email" type="email" name="email" class="form-auth" value="{{ old('email') }}">
                        </div><!-- /.form-group form-group-lg -->
                        <div class="form-group form-group-lg">
                            <ul>

                                <li><label for="input1 password"  class="col-sm-2 control-label">Password</label> <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Password?</a>
                                </li>
                            </ul>
                                <input id="password"
                                       name="password"
                                       class="form-control"
                                       type="password"
                                       value="password"
                                       placeholder="password"
                                       autocomplete="off" >
                        </div><!-- /.form-group form-group-lg -->

                        <p><label><input id="methods" type="checkbox"> Show password</label></p>

                        <div class="button-group">
                            <button type="submit" class="btn btn-secondary">Log In</button>
                        </div><!-- /.button-group -->

                    </form>
                </div><!-- /.row -->
            </div><!-- /.login-fluid -->

    </div><!-- /.form-page -->
@endsection
