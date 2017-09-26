@include('layout.header')
<br>
  <div class="container" style="background-color: #E5E7E9">
  	<center>
  	<br>
  <br>
  <br>
  	<br>
    @include('contents.partial.message')
            <h3 class="h2_home wow fadeIn" style="font-size: 40px" data-wow-delay="0.4s">Log In To Your Account</h3>
    <hr>
  	<br>
  	<div class="form form-control">
         {!! Form::open(['url'=>'/logincheck','method'=>'post'])!!}

          USERNAME :{!! Form::text('name')!!}
          @foreach($errors->get('name') as $error)
             <i class="text text-danger" ><b>{{$error}}</b></i>
          @endforeach
          </div>
          <br>
          <br>
          	<div class="form form-control">
                    PASSWORD :{!! Form::password('password')!!}
                     @foreach($errors->get('password') as $error)
              <i class="text text-danger" ><b>{{$error}}</b></i>
          @endforeach
                    </div>
                    <br>
          <br>
           {!! Form::submit('Log In',['class'=>'btn btn-primary'])!!}
           <br>
           <br>
           <h4>Have not account yet?  <u><a href="/first/signup">Sign Up</a></u></h4>
         {!! Form::close()!!}

</center>

  </div>
  <br>
  <br>
  <br>
   <br>
  <br>
  <br>
  @include('layout.footer')
   




