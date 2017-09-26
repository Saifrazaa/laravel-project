@include('layout.header')
<center>            <h5 class="h3_home wow fadeIn" style="font-size: 40px" data-wow-delay="0.4s"><b>Fill All The Information Below</b></h5>
</center>
<hr>

 {!!Form::open(['url'=>'/update/'.$value->id,'method'=>'post','class'=>'form-horizontal','role'=>'form'])!!}
                        {{ csrf_field() }}


                        {{method_field('PUT')}}
                                
<center>
<div class=" box-icon rotate "> 
<i class="fa fa-picture-o fa-4x "> </i> 
 </div>
            <h5 class="h3_home wow fadeIn" style="font-size: 40px" data-wow-delay="0.4s">Upload A Profile Picture</h5>
</center>
<br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$value->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$value->email}}" required>

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
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="country" value="{{$value->country}}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group{{ $errors->has('DateOfBirth') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="dateofbirth" value="{{$value->dateofbirth}}" required autofocus>

                                @if ($errors->has('DateOfBirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DateOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="phone" value="{{$value->phone}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
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
                {!! Form::close()!!}


@include('layout.footer')