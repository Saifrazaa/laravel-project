@extends('layouts.app')


@section('login','YOUR ACCOUNT')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;font-size: 30px">Registration Form</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="register">
                        {{ csrf_field() }}
                                
<center>
<!--<div class=" box-icon rotate "> 

<i style="cursor: pointer" value="" onclick="" class="fa fa-picture-o fa-4x "> </i> 

 </div>
 <input type="file" name="picture" value="Choose A File" class="btn btn-success" >
            <h5 class="h3_home wow fadeIn" style="font-size: 40px" data-wow-delay="0.4s">Upload A Profile Picture</h5>
</center>


--> <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                            <label for="picture" class="col-md-4 control-label">Upload A Picture</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" class="form-control" name="picture" value="{{ old('picture') }}" required autofocus>

                                @if ($errors->has('picture'))
                                    <span class="help-block">
                                        <strong>{{ $errors->second('picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->second('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                         <br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="dateofbirth" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="dateofbirth" value="{{ old('dateofbirth') }}" required autofocus>

                                @if ($errors->has('dateofbirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateofbirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="phone" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
