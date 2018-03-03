@extends('master')
@section('content')
 <main class="container authSpacer" style="max-width:100%;color:#337ab7;">
        

        <div id="loginHolder" class="col col-sm-12">
        <h3 style="text-align:center;padding-top: 2em;">Already have an account?</h3>
            @if (session()->has('errorMessage'))
                <div class="alert alert-warning text-center">{{ session('errorMessage') }}</div>
            @endif
            <form method="POST" action="/auth/login">
            {!! csrf_field() !!}
                <div class="form-group col col-sm-6">
                    <label>Email</label>
                    <input class="form-control" autofocus type="email" name="email" value="{{ old('email') }}">
                    {!! $errors->first('email', '<span class="help-block">:message</span>')!!}
                </div>  
                <div class="form-group col col-sm-6">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                    {!! $errors->first('password', '<span class="help-block">:message</span>')!!}
                </div>
                {{-- <div class="form-group col-sm-6">
                </div> --}}
                <div class="form-group col-sm-12" style="display:flex;justify-content: center;">
                    <div class="text-center">
                    <a href="/password/email">
                        Forgot Your Password?
                    </a><br><br>
                    <button style="margin-bottom:.5em;" class="btn btn-success cleargreenBtn" type="submit">SIGN IN</button>
                    </div>
                </div>
            </form>
        </div>

    
        <div  id="registerHolder" class="col col-sm-12">
        <h3 style="text-align:center;padding-top: 2em;">Dont have an account?</h3>
            <div class="col col-xs-12 col-sm-6">
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div class="form-group">
                    {!! $errors->first('name', '<span style="color:yellow;" class="help-block">:message</span>')!!}
                    <label for="Input1">Your Name</label>
                    <input class="form-control" autofocus type="text" name="name" id="Input1" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    {!! $errors->first('username', '<span class="help-block">:message</span>')!!}
                    <label for="Input3">Username</label>
                    <input class="form-control" type="text" name="username" id="Input3" value="{{old('username')}}">
                </div>
                <div class="form-group">
                    {!! $errors->first('email', '<span class="help-block">:message</span>')!!}
                    <label for="Input2">Email</label>
                    <input class="form-control" type="email" name="email" id="Input2" value="{{old('email')}}">
                </div>
                <div class="form-group" hidden>
                    <label for="Input5">Profile Image</label>
                    <input class="form-control" id="img" type="text" name="image" id="Input5" value="{{old('image')}}"><br>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-6">
                <div class="form-group">
                    {!! $errors->first('phone_number', '<span class="help-block">:message</span>')!!}
                    <label for="Input4">Phone Number</label>
                    <input class="form-control" type="text" name="phone_number" id="Input4" value="{{old('phone_number')}}">
                </div>
                <div class="form-group">
                    {!! $errors->first('password', '<span class="help-block">:message</span>')!!}
                    <label for="Input6">Password</label>
                    <input class="form-control" type="password" name="password" id="Input6" value="{{old('password')}}">
                </div>

                <div class="form-group">
                    {!! $errors->first('password', '<span class="help-block">:message</span>')!!}
                    <label for="formGroupExampleInput7">Confirm Password</label>
                    <input class="form-control" type="password" name="password_confirmation" id="formGroupExampleInput7" value="">
                </div>
            </div>
            <div class="form-group col col-sm-12" style="margin-bottom:3em;display:flex;justify-content: center;">
                <button type="submit" class="btn btn-success cleargreenBtn">REGISTER ACCOUNT</button>
            </div>
            </form>
        </div>
    </main>

@stop