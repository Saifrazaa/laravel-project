@include('layout.header')
@section('title','Sign Up')
@section('dashboard','YOUR ACCOUNT')
<br>
<br>

<div class="container" style="background-color: #E5E7E9">
<center>
            <h3 class="h2_home wow fadeIn" style="font-size: 40px" data-wow-delay="0.4s">Sign Up Here !!!!!</h3>
<hr>
<br>

{!! Form::open(["url"=>"/register",'method'=>'post'])!!}

<center>
<div class=" box-icon rotate "> 
<i style="cursor: pointer" class="fa fa-picture-o fa-4x "> </i> 
 </div>
            <h5 class="h3_home wow fadeIn" style="font-size: 40px"  data-wow-delay="0.4s">Upload A Profile Picture</h5>
</center>
<br><br>
<div class="form form-control">
         {!! Form::open(['url'=>'/logincheck','method'=>'post'])!!}

          USERNAME :{!! Form::text('UserName')!!}
          @foreach($errors->get('UserName') as $error)
             <i class="text text-danger" ><b>{{$error}}</b></i>
          @endforeach
          </div>
          <br>
          <br>
          	<div class="form form-control">
                    PASSWORD :{!! Form::password('UserPassword')!!}
                     @foreach($errors->get('UserPassword') as $error)
              <i class="text text-danger" ><b>{{$error}}</b></i>
          @endforeach
                    </div>
                    <br>
          <br>
          <div class="form form-control">
         {!! Form::open(['url'=>'/logincheck','method'=>'post'])!!}

          EMAIL :{!! Form::text('email')!!}
          @foreach($errors->get('email') as $error)
             <i class="text text-danger" ><b>{{$error}}</b></i>
          @endforeach
          </div>
           <br>
           <br>
           <div class="form form-control">
         {!! Form::open(['url'=>'/logincheck','method'=>'post'])!!}

          COUNTRY :{!! Form::text('country')!!}
          @foreach($errors->get('country') as $error)
             <i class="text text-danger" ><b>{{$error}}</b></i>
          @endforeach
          </div>

<br>
</br>
<div class="form form-control">
         {!! Form::open(['url'=>'/logincheck','method'=>'post'])!!}

          DATE OF BIRTH :{!! Form::text('DateOfBirth')!!}
          @foreach($errors->get('DateOfBirth') as $error)
             <i class="text text-danger" ><b>{{$error}}</b></i>
          @endforeach
          </div>
          <br><br>
{!! Form::submit('Sign Up',['class'=>'btn btn-success'])!!}
{!! Form::close()!!}




</center>
<br>
</br>
</div>
<br>

@include('layout.footer')
