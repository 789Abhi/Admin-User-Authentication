<!-- @extends('layouts.app') -->
@section('content')


<div class="container my-5" >
    <div class="row">
        <div class="col-md-8 offset-md-2">
           <div class="card form-holder">
            <div class="card-body">
                <h1>REGISTARTION PAGE</h1>
             @if (Session::has('error'))
             <p class="text-danger">
                {{Session::get('error')}}
             </p>
             @endif
             @if(Session::has('success'))
             <p class="text-sucess">
                {{Session::get('success')}}
             </p>
             @endif
    <form action="{{route('register')}}" method="post">
       @csrf
       @method('post')
       <div class="form-group">
       <label for="">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name">
        @if($errors->has('name'))
        <p class="text-danger">
            {{$errors->first('name')}}
         </p>
         @endif
       </div>
       <div class="form-group">
       <label for="">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Email">
        @if($errors->has('email'))
        <p class="text-danger">
            {{$errors->first('email')}}
         </p>
         @endif
       </div>
       <div class="form-group">
       <label for="">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password">
        @if($errors->has('password'))
        <p class="text-danger">
            {{$errors->first('password')}}
         </p>
         @endif
       </div>
       <div class="form-group">
       <label for="">Confirm password</label>
        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password">
        @if($errors->has('password'))
        <p class="text-danger">
            {{$errors->first('password')}}
         </p>
         @endif
    </div>
     <div class="row">
        <div class="col-8 text-left">
           <a href="#" class="btn btn-link">Forgot password</a>
        </div>
        <div class=" text-center">
          <input type="submit" class="btn btn-primary" value="Login"/>
        </div>
     </div>
    </form>      
            </div>
           </div>
        </div>
    </div>
</div>